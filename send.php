<?php
session_start();
$applicationkey="londonsdayout";
//This code is a work of Santosh K. Gurung.
//Yo code santosh k gurung le lekhe ko ho.
//key is b006e57ddce6b8057736c7642d90cad6
$key =$_POST['key'];
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$email =$_POST['email'];
$address =$_POST['address'];
$comments =$_POST['comments'];
//serverside validation
if($fname=="" || $lname=="" || $email=="" || $address =="" || $comments=="")
{
$_SESSION['error']="fieldblank";
	if($key!="b006e57ddce6b8057736c7642d90cad6" )
	{
		
	}
	else
	{
		header ("Location:".$_SERVER['HTTP_REFERER']);
	}
}
/////
if($key=="b006e57ddce6b8057736c7642d90cad6" )
{
	$corekey="userverification";
	include("../core/dbmainsettings.php");
	include("../core/connect_database.php");
	include("../core/userfunctions.php");
	if(savecontactus($fname,$lname,$email,$address,$comments,"contactusinfo",$conn)=="True")
	{
		$_SESSION['comments']="Saved";
	}
	header ("Location:".$_SERVER['HTTP_REFERER']);
}
else
{
	die("Access Denied");
}
?> 