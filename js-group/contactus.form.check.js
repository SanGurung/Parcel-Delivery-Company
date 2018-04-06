<!--
function validateit()
{
var err;
var msg="";
var incode="false";
var returntype=true;
err="false";
var email=document.contactus.email.value;
var emailD=validateEmail(email);

//now check that if the values are blank or not//
	if(document.contactus.fname.value=="")
		{
		  document.contactus.fname.style.backgroundColor="#DEE9F3";
		  err="true";
		}
	if(document.contactus.lname.value=="")
		{
			document.contactus.lname.style.backgroundColor="#DEE9F3";
			err="true";
		}
	if(document.contactus.comments.value=="")
		{
			document.contactus.comments.style.backgroundColor="#DEE9F3";
			err="true";
		}
	if(document.contactus.email.value=="")
		{
			document.contactus.email.style.backgroundColor="#DEE9F3";
			err="true";
		}
//now validating email//
		if(emailD==false)
		{
			document.contactus.email.style.backgroundColor="#DEE9F3";
			err="true";
			msg="Please provide valid Email address.\n";
		}

	if(document.contactus.address.value=="")
		{
			document.contactus.address.style.backgroundColor="#DEE9F3";
			incode="true";
		}

//now checking all things and letting it to be send if there is no error.
			if(err=="true")
			{
	    		msg=msg+"Please correctly fill the highlighted box.";
	    		alert(msg);
				returntype=false;
			 }
			 if(err=="false" && incode=="true")
			 {
			    msg="Are you sure you dont want to give your address details." + "\nIt will be easier for us to help you more easier if you give us details.";
			    returntype=confirm(msg);
			 }
			  return returntype;
}

//-->