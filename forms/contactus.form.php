<?php
//start the session
session_start();

if(!defined('qrper_hmLVxYhsRycXiwQ'))
{ header ("HTTP/1.0 404 Not Found");
  die();
}


if(isset($_SESSION['contactusx']) && $_SESSION['contactusx']=="x2VjQlM23")
{
	// Message has been sent.Show thank you message
?>

	<div class="row">
		<div class="large-12 columns">
			<h3> Thank you,  
			<?php  
			
			if(isset($_SESSION['contactusxuser']))
			{
				echo $_SESSION['contactusxuser'];
			}  
			
			//As message has been shown, Unset the session
			unset($_SESSION['contactusxuser']);
			unset($_SESSION['contactusx']);
			?>
			</h3>
			<p>
			Your message has been sent. 
			Please allow us few days to answer your query. 
			If it is very urgent matter please contact us on our phone no.07890 123456
			<br/>
			<hr />
			If you would like to send letter:<br/> <br/> 
					J.W Courier,123 Mold Road,
					Wrexham,
					LL113AT,
					Tel: 07890 123456
			</p>
			<hr />
		</div>
	</div>
<?php
}
else
{
?>
  <form class="custom" style="background-color:#F9F9F9;" name="contactus" action="process/contactus.php" onsubmit="return validateit()" method="POST" >										
														    <Table border="0" height="100%" width="100%">
															<!-- MSTableType="layout" -->
															<tr>
															  <td colspan="2" height="38"><font face="Times new Roman" size="6"><b>
																<font color="#335577">Contact</font> <font color="#8C97A2">us</font></b></font></td>
															</tr>
															<tr>
															  <td colspan="2" height="18"><hr color="#8C97A2" size="1"></td>
															</tr>
															<tr>
															  <td colspan="2" valign="top">
																<p align="justify"><font color="#4F4F4F">&nbsp;&nbsp;&nbsp; 
																<font face="Tahoma" size="2">Dear user if you have an non 
																urgent message then please do send us your queries, feedback, 
																suggestions, any thing by filling the <label for="firstname">contact us online</label> form 
																below. Please ensure that you fill all the 
													requirements correctly so that we can contact you. We ensure you that any kind of 
																your details will not be shared with any third party.</font></font></p>
																<hr color="#8C97A2" size="1">
																<font face="Tahoma" style="font-size: 9pt">
																<b>Contact us</b><font color="#4F4F4F"> by telephone</font></font><font color="#4F4F4F">&nbsp;
																<span lang="en-gb">
																: 020000000</span></font></td>
															</tr>
															<tr>
															  <td colspan="2" height="18"><hr color="#8C97A2" size="1"></td>
															</tr>
															<tr>
															        <td colspan="2" height="21"><font face="Tahoma"><b> <span style="font-size: 9pt">Contact 
													                  us</span></b><span style="font-size: 9pt"><font color="#4F4F4F"> 
													                  online 
													                  <input name="key" type="hidden" id="key" value="b006e57ddce6b8057736c7642d90cad6">
													                  <font face="Tahoma"><span style="font-size: 9pt"><font color="#4F4F4F">
													<?php 
													if($_SESSION['error']=="fieldblank")
													{ 
													$_SESSION['error']="";
													?>
																	  <font color="#FF0000">&nbsp;&nbsp;|| * Please fill the form properly.</font>
													<?php } ?>
																	  </font></span></font></font></span></font></td>
															</tr>
															<tr>
															  <td>
															  <font face="Tahoma" color="#4F4F4F" style="font-size: 9pt">First Name*</font></td><td height="24"><input type="text" name="fname"  onfocus="this.style.backgroundColor='#ffffff'" <?php echo "value='" . $_SESSION["customername"] . "'"; ?>></td>
															  
															</tr>
															<tr>
															  <td><font face="Tahoma" style="font-size: 9pt" color="#4F4F4F">Last Name*</font></td><td height="24"><input type="text" name="lname"   onfocus="this.style.backgroundColor='#ffffff'" value="<?php echo $_SESSION["familyname"];?>"></td>
															</tr>
															<tr>
															  <td><font face="Tahoma" style="font-size: 9pt" color="#4F4F4F">Email*</font></td><td height="24"><input type="text" name="email"    onfocus="this.style.backgroundColor='#ffffff'" value="<?php echo $_SESSION["email"];?>"></td>
															</tr>
															<tr>
															  <td>
																<font color="#4F4F4F" face="Tahoma" style="font-size: 9pt">Address:</font></td>
																<td height="24"><input type="text" name="address"    onfocus="this.style.backgroundColor='#ffffff'" ></td>
															</tr>
															<tr>
															  <td colspan="2" height="21"><span style="font-size: 9pt">Comments/ 
																Feedback/ Message</span></td>
															</tr>
															<tr>
															  <td colspan="2" height="147">
																<p align="left">
																<textarea name="comments" cols="50" rows="15"   style="font-family: Tahoma; font-size: 9pt; color: #4F4F4F"  onfocus="this.style.backgroundColor='#ffffff'" ></textarea>
													
																</td>
															</tr>
															<tr>
															  <td colspan="2" height="18"><hr color="#8C97A2" size="1"></td>
															</tr>
															<tr>
													 		  <td colspan="2" height="29" style="text-align: right;">
													 		  		<input type="submit" value="Send" class="button round"> <input class="button round" type="reset" value="Clear">
													 		  </td>
															</tr>
															<tr>
															  <td colspan="2" height="18">
															  &nbsp;</td>
															</tr>
												    </Table>	
										</form>
<?php
}

?>										