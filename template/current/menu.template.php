<?php
if(!defined('qrper_hmLVxYhsRycXiwQ'))
{ header ("HTTP/1.0 404 Not Found");
  die();
}

function isCurrentPage($pageID,$bCrumb)
{
	$resmsg="";
	if($pageID==$bCrumb)
	{
		$resmsg="id='pagein'";
	}
	
	return $resmsg;
}


?>
<!-- Header ends and Nav start -->
<div class="row">
    <div class="large-12 columns">
    		<div id="navigation">
	    		<ul>
					<li <?php echo isCurrentPage(0,$breadCrumb); ?> ><a href="<?php echo SERVER_PATH_BASE; ?>/index.php" title="Home">Home</a></li>
					<li <?php echo isCurrentPage(4,$breadCrumb); ?> ><a href="<?php echo SERVER_PATH_BASE; ?>/account.php">Account</a></li>
					<li <?php echo isCurrentPage(3,$breadCrumb); ?> ><a href="<?php echo SERVER_PATH_BASE; ?>/quickquote.php" >Quick quote</a></li>
					<li <?php echo isCurrentPage(1,$breadCrumb); ?> ><a title="Places" href="<?php echo SERVER_PATH_BASE; ?>/aboutus.php">About us</a></li>
					<li <?php echo isCurrentPage(2,$breadCrumb); ?> ><a title="Register" href="<?php echo SERVER_PATH_BASE; ?>/login.php">Login</a></li>
					<li <?php echo isCurrentPage(5,$breadCrumb); ?> ><a title="Book online" href="<?php echo SERVER_PATH_BASE; ?>/register.php">Register</a></li>
					<li <?php echo isCurrentPage(6,$breadCrumb); ?> ><a href="<?php echo SERVER_PATH_BASE; ?>/contactus.php" title="Contact">Contact us</a></li>
					<li <?php echo isCurrentPage(7,$breadCrumb); ?> ><a href="<?php echo SERVER_PATH_BASE; ?>/faq.php" title="FAQt">FAQ</a></li>
				</ul>
			</div>
	</div>
</div>
<br/>
<!-- Breadcrumb start -->
	  <div class="row">
	  	<div class="large-12 columns">
			<ul class="breadcrumbs">
			  <li ><a href="<?php echo SERVER_PATH_BASE; ?>/index.php">Home</a></li>
			  <?php
			  		//if breadcrumb is set to show then only the breambcrumb menu will be shown
			  		if(isset($breadCrumb))
			  		{
				  			if($breadCrumb==0)
				  			{
				  				echo "<li class='current'><a href='". SERVER_PATH_BASE."/index.php'>Home Page</a></li>";
				  			}
				  			else if($breadCrumb==1)
				  			{
				  				echo "<li class='current'><a href='". SERVER_PATH_BASE."/aboutus.php'>About us</a></li>";
				  			}
				  			else if($breadCrumb==2)
				  			{
				  				echo "<li class='current'><a href='". SERVER_PATH_BASE."/login.php'>Login</a></li>";
				  			}
							else if($breadCrumb==3)
							{
				  				echo "<li class='current'><a href='". SERVER_PATH_BASE."/quickquote.php'>Quick Quote</a></li>";
				  			}
							else if($breadCrumb==4)
							{
				  				echo "<li class='current'><a href='". SERVER_PATH_BASE."/account.php'>Account</a></li>";
				  			}
							else if($breadCrumb==5)
							{
				  				echo "<li class='current'><a href='". SERVER_PATH_BASE."/register.php'>Register</a></li>";
				  			}
							else if($breadCrumb==6)
							{
				  				echo "<li class='current'><a href='". SERVER_PATH_BASE."/contactus.php'>Contact us</a></li>";
				  			}
							else if($breadCrumb==7)
							{
				  				echo "<li class='current'><a href='". SERVER_PATH_BASE."/faq.php'>Frequently Asked Questions</a></li>";
				  			}
				  			else if($breadCrumb==8)
				  			{
				  				echo "<li class='current'><a href='". SERVER_PATH_BASE."/tracking.php'>Tracking</a></li>";
				  			}
							else 
							{
				  				//do nothing
				  			}
		  		}
			  ?>
			</ul>
		</div>
	  </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
