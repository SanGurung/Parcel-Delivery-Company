<?php
//to safeguard the template php files, define value is used.
define('qrper_hmLVxYhsRycXiwQ', TRUE);
define('MxuVh_jqrKVBYunYoeTg', TRUE);
include_once("core/main.configuration.php");

//Tell breadcrumb menu that it is About us page
$breadCrumb=1;

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
<body>
<?php
  require_once("template/current/topmenu.template.php");
  require_once("template/current/banner.template.php");
  require_once("template/current/menu.template.php");
 ?>

<!-- 2-up Content Blocks -->
<div class="row">
	<div class="large-6 columns" >
					<div class="row">
						<div class="large-12 columns">
								<h2>About us</h2><hr />
								<h4>J.W Courier in Wrexham</h4>
								<hr />
								<p>
								J.W Courier is a fast growing courier service company. 
								It is an independent company operating in North Wales and North West England. 
								In addition to normal delivery of standard parcels we specialise
								on courier of legal document, urgent medical supplies, sensitive material,
								contract work etc. 
								</p>
								Please contact us for any further information or service not available in the system.
								
						</div>
					</div>
					
	</div>
	<div class="large-6 columns">
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
