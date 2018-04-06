<?php
//to safeguard the template php files, define value is used.
define('qrper_hmLVxYhsRycXiwQ', TRUE);
define('MxuVh_jqrKVBYunYoeTg', TRUE);
include_once("core/main.configuration.php");


//Tell breadcrumb menu that it is Contact us page
$breadCrumb=6;


?>
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>J.W. Couriers : Your Local Specialist.</title>

<?php
  require_once("template/current/css.template.php");
 ?>
</head>
<script type="text/javascript" src="js-group/email.verification.js"></script>
<script type="text/javascript" src="js-group/contactus.form.check.js"></script>

<body>
<?php
  require_once("template/current/topmenu.template.php");
  require_once("template/current/banner.template.php");
  require_once("template/current/menu.template.php");
 ?>

<!-- 2-up Content Blocks -->
<div class="row">


	<div class="large-8 columns">
						<?php require_once("forms/contactus.form.php"); ?>				      	
	</div>
	<div class="large-4 columns" >
					<div class="row">
						<div class="large-12 columns">
						    	<?php require_once("template/current/tracking.template.php"); ?>
						</div>
					</div>
					<div class="row">
						<div class="large-12 columns">
								<?php require_once("template/current/localcourierbox.template.php"); ?>
						</div> 
					</div> 
	</div>
	
</div>   



<!-- Footer Starts here -->
<?php require_once("template/current/footer.template.php"); ?>
</body>
</html>
