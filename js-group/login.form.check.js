<!--
function validateit()
{
var returntype;
var err,msg;
err="false";
msg="Please correctly fill the highlighted fields.";
var email=document.login.email_address.value;
var emailD=validateEmail(email);

	if(emailD==false)
	  {
		  document.login.email_address.style.backgroundColor="#DEE9F3";
		  err="true";
		  msg=msg+"\nPlease provide valid Email Address.";
	  }
	 if(document.login.password.value=="")
	  {
		  document.login.password.style.backgroundColor="#DEE9F3";
		  err="true";
		  msg=msg+"\nPlease enter Password.";
	  }
 



if(err=="true")
{
alert(msg);
returntype=false;
}
else
{
returntype=true;
}

return returntype;
}
//-->
