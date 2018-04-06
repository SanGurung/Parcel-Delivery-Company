<!--

function validateit()
{
var returntype;
var err,msg="";
err="false";
msg="Please correctly fill the highlighted fields.";
var email=document.Register.email.value;
var emailD=validateEmail(email);

	if(document.Register.firstname.value=="")
	  {
		  document.Register.firstname.style.backgroundColor="#DEE9F3";
		  err="true";
	  }
	if(document.Register.familyname.value=="")
	  {
	     document.Register.familyname.style.backgroundColor="#DEE9F3";
	     err="true";
	  }
	 if(document.Register.day.value=="Day")
	  {
	     document.Register.day.style.backgroundColor="#DEE9F3";
	     err="true";
	  } 
	 if(document.Register.month.value=="Month")
	  {
	  	document.Register.month.style.backgroundColor="#DEE9F3";
	  	err="true";	  
	  }
	 if(document.Register.year.value=="Year")
	  {
	    document.Register.year.style.backgroundColor="#DEE9F3";
		err="true";
	  }
	 if(document.Register.houseno.value=="")
	  {
	    document.Register.houseno.style.backgroundColor="#DEE9F3";
	    err="true";
	  }
	 if(document.Register.streetname.value=="")
	  {
	    document.Register.streetname.style.backgroundColor="#DEE9F3";
	    err="true";
	  }
	 if(document.Register.add1.value=="")
	 {
	   document.Register.add1.style.backgroundColor="#DEE9F3";
	   err="true";	 
	 }
	 if(document.Register.postcode.value=="")
	 {
	    document.Register.postcode.style.backgroundColor="#DEE9F3";
	    err="true";
	 }
	 if(document.Register.mobileno.value=="")
	 {
	   document.Register.mobileno.style.backgroundColor="#DEE9F3";
	   err="true";
	 }
	 if(document.Register.telephoneno.value=="")
	 {
	   document.Register.telephoneno.style.backgroundColor="#DEE9F3";
       err="true";
	 }
	 if(document.Register.email.value=="")
	 {
	   document.Register.email.style.backgroundColor="#DEE9F3";
	   err="true";
	 }
	 //now validating email//
	if(emailD==false)
     {
       document.Register.email.style.backgroundColor="#DEE9F3";
	   err="true";
	   msg=msg+"\nPlease provide valid Email address.\n";
     }
     

	 if(document.Register.password.value=="")
	 {
	   document.Register.password.style.backgroundColor="#DEE9F3";
	   err="true";	 
	 }
	 if(document.Register.rpassword.value=="")
	 {
	   document.Register.rpassword.style.backgroundColor="#DEE9F3";
	   err="true";	 
	 } 
	 if(document.Register.password.value != document.Register.rpassword.value)
	 {
	   if(err=="true")
	    {
	     msg=msg + "\nPlease retype both password.(Same)";
	    }
	    else
	    {
	    msg="Please retype both password.(Same)";
	    }
	  err="true";	
	 }
     if(document.Register.tos.checked==false)
     {
        if(err=="true")
	     {
            msg=msg + "\nYou need to agree terms & conditions.";

         }
         else
         {
            msg="\nDo you agree terms & conditions.";
         }
       err="true";	
     }

if(err=="true")
{
alert(msg);
returntype=false;
}
else
{
returntype=true;
document.Register.action="register/send.php?user=" + document.Register.uname.value + "&account=new";
}
return returntype;
}

//-->
