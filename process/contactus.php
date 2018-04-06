<?php
session_start();

//to safeguard the template php files, define value is used.
define('qrper_hmLVxYhsRycXiwQ', TRUE);
define('MxuVh_jqrKVBYunYoeTg', TRUE);


include("../core/main.configuration.php");
include("../core/functions.core.php");

//Collecting the Data from the contactus Form //No need  to stripslashes (Protection from sql injection below)
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$email =$_POST['email'];
$address =$_POST['address'];
$comments =$_POST['comments'];

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

$m=$coreFunc->savecontactus($fname,$lname,$email,$address,$comments,$connx);

	if($m>=1)
	{
		//* need work on below code for extra security
		$_SESSION['contactusx']="x2VjQlM23";
		$_SESSION['contactusxuser']=$fname." ".$lname;
	}

$connx->close();
//redirecting to the referer
header ("Location:".$_SERVER['HTTP_REFERER']); 
?>
  
