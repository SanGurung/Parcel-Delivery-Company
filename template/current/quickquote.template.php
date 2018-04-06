<?php
if(!defined('qrper_hmLVxYhsRycXiwQ'))
{ header ("HTTP/1.0 404 Not Found");
  die();
}
// This html code is for tracking form
?>

				<form class="custom" data-abide>
					<fieldset class="round"  style="background:#f5f5f5;">
					<legend>Quick Quote</legend>
								<div class="row">
										<div class="large-6 columns" >
											<label for="parcel_no" >Number of Parcel</label>
											<input type="text" pattern="integer" required name="parcel_no" width="10" value="">
										</div>
										
										<!-- Parcel Type input for Quote form -->
										<div class="large-6 columns">
											<label for="parcel_Type">Parcel Type:</label>
											<select class="medium" name="parcel_Type">
											  <option value="1">Legal Documents</option>
											  <option value="2">Urgent Medical Supplies</option>
											  <option value="3">Sensitive Material</option>
											  <option value="4">Valuable Cargo</option>
											  <option value="5">Hazardous Loads</option>
											  <option value="6">Other</option>
											</select>
										</div>
								</div>

								<!-- Parcel collection input for Quote form -->
								<div class="row">
									<div class="large-2 columns">
										<label for="collection" class=" inline">Collection</label>
									</div>
									<div class="large-5 columns">
											<select class="medium" name="collection">
												<option value="UK">United Kingdom</option>
											</select>
									</div>
									<div class="large-2 columns" >
										<label for="collection_postcode" class="inline">Postcode</label>
									</div>
									<div class="large-3 columns"  >
										<input type="text" name="collection_postcode" pattern="alpha_numeric" required  value="">
									</div>        
								</div>
								
								<div class="row">
									<div class="large-2 columns">
										<label for="destination" class=" inline">Destination</label>
									</div>
									<div class="large-5 columns">
											<select class="medium" name="destination">
												<option value="UK">United Kingdom</option>
											</select>
									</div>
									<div class="large-2 columns" >
										<label for="destination_postcode" class="inline">Postcode</label>
									</div>
									<div class="large-3 columns"  >
										<input type="text" name="destination_postcode" pattern="alpha_numeric"  value="" required >
									</div>        
								</div>
								<div class="row">
									<div class="large-7 columns">
										<div class="row collapse">
											<div class="large-5 columns">
												<label for="parcel_weight" class="inline">Weight</label>
											</div>
											<div class="large-4 columns">
												<input type="text" name="parcel_weight" value=""  pattern="integer" required>
											</div>
											<div class="large-3 columns">
												 <span class="postfix radius">Kg</span>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-7 columns">
										<div class="row">
											<div class="large-2 columns">
												<label for="parcel_size_unit" class="inline">Unit</label>
											</div>
											<div class="large-4 columns">
												<select id="parcel_size_unit">
													<option selected="selected" value="1">Cm</option>
													<option value="2">Inch</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="large-2 columns">
										<label for="parcel_length" class="inline">Length</label>
									</div>
									<div class="large-2 columns">
										<input type="text" name="parcel_length" value="" pattern="integer" required>
									</div>
									<div class="large-2 columns">
										<label for="parcel_width" class="inline">Width</label>
									</div>
									<div class="large-2 columns">
										<input type="text" name="parcel_width" value=""  pattern="integer" required>
									</div>
									<div class="large-2 columns">
										<label for="parcel_height" class="inline">Height</label>
									</div>
									<div class="large-2 columns">
										<input type="text" name="parcel_height" value=""  pattern="integer" required>
									</div>
								</div><hr />
								<div class="row">
									<div class="large-11">	
										<input type="submit" value="Get a Quote" class="button radius right">
									</div>
							</div>
					</fieldset>
				
				</form>