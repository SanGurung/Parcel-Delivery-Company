<?php
if(!defined('qrper_hmLVxYhsRycXiwQ'))
{ header ("HTTP/1.0 404 Not Found");
  die();
}
// This html code is for tracking form
?>
					 <form name="tracking" action="tracking.php" method="POST" data-abide>
					 
							<fieldset style="background:#c8a472;background-image:url('<?php echo SERVER_PATH_BASE; ?>/img/tracking-box-graphics.jpg');background-repeat:no-repeat;background-size: 100%;"  >
			   					 <div class="row">
			   					 		<div class="large-12 columns">
			   					 			<label for="tracking_code"><h5>&nbsp;&nbsp;&nbsp;Track your Parcel</h5></label>
			   					 		</div>
			   					 </div>
			   					 <div class="collapse">
					   					 <div class="large-9 columns"  >
							        		<input type="text" type="alpha_numeric" required name="tracking_code" value="">
							        		<small class="error">Enter Tracking code.</small>
								    	</div>  
								    	<div class="large-3 columns"  >
							        		<input type="submit" value="Go" class="button round small">
								    	</div>   
							     </div>     
							</fieldset>
					</form>