<?php
session_start();

//to safeguard the template php files, define value is used.
define('qrper_hmLVxYhsRycXiwQ', TRUE);
define('MxuVh_jqrKVBYunYoeTg', TRUE);


include("../core/main.configuration.php");
include("../core/functions.core.php");

//Collecting the Data from the contactus Form //No need  to stripslashes (Protection from sql injection below)
$key =$_POST['key'];
$title =$_POST['title'];
$firstname =$_POST['firstname'];
$familyname=$_POST['familyname'];
$dob=$_POST['day'] . " " . $_POST['month'] . " " . $_POST['year'];
$gender=$_POST['sex'];
$houseno=$_POST['houseno'];
$streetname=$_POST['streetname'];
$country=$_POST['add1'];
$postcode=$_POST['postcode'];
$mobileno=$_POST['mobileno'];
$telephoneno=$_POST['telephoneno'];
$email =$_POST['email'];
//$uname =$_POST['uname'];
$password1 =$_POST['password'];
$password2 =$_POST['rpassword'];
$err="false";

$xHost="";

//get settings from config file
$xHost=$getxConfig->getHost();
$xUser=$getxConfig->getUser();
$xPassword=$getxConfig->getPassword();
$xdb=$getxConfig->getDb();


// Database connection
$connx = new mysqli($xHost, $xUser,$xPassword, $xdb);


/* check connection */
if (mysqli_connect_errno()) {
   	header ("Location:".$_SERVER['HTTP_REFERER']);
    exit();
}

//check if user exist
$user_exist=$coreFunc->userExist($email,$connx);
if($user_exist)
{
	$_SESSION['userexist']="x2VjQlM23";
}
else
{
		$m=$coreFunc->register($title, $firstname,$familyname,$dob,$gender,$houseno,$streetname,$country,$postcode,$mobileno,$telephoneno,$email,$password1 ,$connx);
	
		if($m>=1)
		{
			//* need work on below code for extra security
			$_SESSION['registrationx']="x2VjQlM23";
			$_SESSION['registrationxm']=$firstname." ".$familyname;
		}
}
$connx->close();
//redirecting to the referer
header ("Location:".$_SERVER['HTTP_REFERER']); 
?>
  
