<?php
//to safeguard the template php files, define value is used.
define('qrper_hmLVxYhsRycXiwQ', TRUE);
define('MxuVh_jqrKVBYunYoeTg', TRUE);
include_once("core/main.configuration.php");

//Tell breadcrumb menu that it is About us page
$breadCrumb=2;

?>
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>About us: J.W. Couriers : Your Local Specialist.</title>

<?php
  require_once("template/current/css.template.php");
 ?>
</head>
<!--  Javascript files for verification  -->
<script type="text/javascript" src="js-group/email.verification.js"></script>
<script type="text/javascript" src="js-group/login.form.check.js"></script>
<script type="text/javascript" src="js-group/parcel.form.check.js"></script>

<body>
<?php
  require_once("template/current/topmenu.template.php");
  require_once("template/current/banner.template.php");
  require_once("template/current/menu.template.php");
 ?>

<!-- 2-up Content Blocks -->
<div class="row">
	<div class="large-5 columns" >
			<div class="row">
						<div class="large-12 columns">
							<?php require_once("template/current/tracking.template.php"); ?>
						</div>
			</div>
			<div class="row">
						<div class="large-12 columns">
								<div class="row">
									<div class="large-12 columns">
										<a href="quickquote.php">
											<img class="right" src="<?php echo SERVER_PATH_BASE; ?>/img/quick_quote-corrected.jpg">
										</a>
									</div>
								</div>
						</div> 
			</div> 		
					
	</div>
	<div class="large-1 columns">
		&nbsp;
	</div>
	<div class="large-6 columns">
			<div class="row">
						<div class="large-12 columns">
								<h2>Login</h2><hr />
								<p>
									<div class="row">
										<div class="large-12 columns">
											<form name="login" method="post" action="db/login.php" onsubmit="return validateit()" >
												<div class="row">
													<div class="large-6 columns">
															<label for="user_name">Email Address:</label>
															<input type="text" onfocus="this.style.backgroundColor='#ffffff'" name="email_address" placeholder="Email" value="">
													</div>
													<div class="large-6 columns">
															&nbsp;
													</div>
												</div>
												<div class="row">
													<div class="large-6 columns">
															<label for="password_name">Password:</label>
															<input type="text" onfocus="this.style.backgroundColor='#ffffff'" name="password" placeholder="Password" value="">
													</div>
													<div class="large-6 columns">
															&nbsp;
													</div>
												</div>
												<div class="row">
													<div class="large-6 columns">
														<a href="register.php">Register</a> |
														<a href="forgotpassword.php">Forgot password?</a> 
														<hr />
													 </div>
												</div>
												<div class="row">
													<div class="large-12 columns">
														<a href="register.php" class="button">Register</a>
														<input type="submit" value="Login" class="button radius">
													</div>
												</div>
											</form>
										</div>
									</div>
								</p>
																
						</div>
					</div>
	</div>
</div>   

<!-- Footer Starts here -->
<?php require_once("template/current/footer.template.php"); ?>
</body>
</html>
