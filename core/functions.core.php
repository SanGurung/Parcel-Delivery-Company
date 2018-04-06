<?php
//it prevents it from being called unless it is called by the application file.
if(!defined('qrper_hmLVxYhsRycXiwQ'))
{ header ("HTTP/1.0 404 Not Found");
 die();
}

Class coreDB
{
	//Function to save contact us details
    function savecontactus($fstname,$lstname,$emailid,$address,$comments,$connx)
	{
		$affectedRow=0;
		
		////using this technique to prevent sql injection
		$stamt = $connx->prepare("INSERT INTO contactusinfo (Firstname ,Lastname ,Email ,Address ,Message ) VALUES (?,?,?,?,?)");
		$stamt->bind_param('sssss', $fstname,$lstname,$emailid,$address,$comments);
		$stamt->execute();
		
		//How many row affected *how many data inserted into db
		$affectedRow=$stamt->affected_rows;

		/* close statement and connection */
		$stamt->close();
		return $affectedRow;
	}
	
	
	
	//******************************************************************************//
	//Function to check if a user (Email) exist (can be used while registration	
	function userExist($email,$connx)
	{
		$exists=false;
		$count=0;
		//Count is used as its easier to implement. It will give 1 is the email exist 0 if it doesnt
		$stamt = $connx->prepare("SELECT COUNT(*) FROM customerInfo where email='?'");
		$stamt->bind_param('s', $email);
		$count=$stamt->execute();
		
		//can use count==1 as email is unique in email.
		if($count>=1)
		{ 
			//User exists set exist true
			$exists=true; 
		}
		/* close statement and connection */
		$stamt->close();
		return $exists;
	}

	
	
	//******************************************************************************//
	//Function to save registration details
    function register($title, $firstname,$familyname,$dob,$gender,$houseno,$streetname,$country,$postcode,$mobileno,$telephoneno,$email,$password ,$connx)
	{
		$affectedRow=0;
		
		//Password is # hashed using md5 function
		$encrypted_password=md5($password);
		$stamt = $connx->prepare("INSERT INTO contactusinfo (title ,firstname ,familyname ,dob ,gender ,houseno ,streetname ,country ,postcode ,mobileno ,telephone ,email ,password) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
		$stamt->bind_param('sssssisssssss', $title, $firstname,$familyname,$dob,$gender,$houseno,$streetname,$country,$postcode,$mobileno,$telephoneno,$email,$password );
		$stamt->execute();
		
		//How many row affected *how many data inserted into db
		$affectedRow=$stamt->affected_rows;

		/* close statement and connection */
		$stamt->close();

		return $affectedRow;
	}
}

$coreFunc=new coreDB;
?>
