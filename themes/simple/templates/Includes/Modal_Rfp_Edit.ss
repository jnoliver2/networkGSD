<div id="rfp_edit{$ID}" class="modal fade" tabindex="-1" data-width="760" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">					
		<div class="modal-dialog">
    <div class="modal-content">
      <form action="{$BaseHref}pages/rfp_edit" method="post">
        <input type="hidden" name="rfp_id" value="{$ID}">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Edit RFP</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">
									RFP Title*
								</label>
								<input type="text"  placeholder="" class="form-control" id="rfp_title" name="rfp_title" value="$Title">
						</div>
						</div>

						<div class="col-md-12">

							
						<div class="form-group">
								<label class="control-label">
									Company Overview*
								</label>
								
						<textarea maxlength="1000" id="form-field-23" class="form-control limited" rows="10">$Company.Overview</textarea>
						</div>	
                               </div><!-- End 12 -->    
                                                                              
                               <div class="col-md-6">
                               <div class="form-group">
						<label class="control-label">
									Project Start*
						</label>
						<div class="input-group">
							<span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
							<input type="text" value="{$Project_Start.format(Y-m-d)}" data-date-format="yyyy-mm-dd" data-date-viewmode="years" name="project_start" class="form-control date-picker">
						</div>
                               </div>
						</div>
                               
                               <div class="col-md-6">
                               <div class="form-group">
						<label class="control-label">
									Project End*
						</label>
						<div class="input-group">
							<span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
							<input type="text" value="{$Project_End.format(Y-m-d)}" data-date-format="yyyy-mm-dd" data-date-viewmode="years" name="project_end" class="form-control date-picker">
						</div>
                               </div>
                               </div>
						
                               <div class="col-md-12">     
						<div class="form-group">
						<label class="control-label">
									RFP Submission Deadline*
						</label>
						<div class="input-group">
						<span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
						<input type="text" value="{$Submission_Deadline.format(Y-m-d)}" data-date-format="yyyy-mm-dd" data-date-viewmode="years" name="submission_deadline" class="form-control date-picker">
						</div>
						</div>
						</div>
                                    
						
				<div class="col-md-12">
			<label class="control-label">Diversity Certifications</label>
				<div class="form-group">		
				<label class="checkbox-inline">
				<input type="checkbox" value="MBA" name="diversity[]"  class="grey">MBE</label>
				<label class="checkbox-inline">
				<input type="checkbox" value="WMBE" name="diversity[]" class="grey">WMBE</label>
				<label class="checkbox-inline">
				<input type="checkbox" value="LGBT" name="diversity[]"class="grey">LGBT</label>
				<label class="checkbox-inline">
				<input type="checkbox" value="Disabled Veteran"   name="diversity[]" class="grey">Disabled Veteran</label>
				</div>
                        </div>
				<div class="col-md-12">
                        <div class="form-group">
				<label class="control-label">Practice Areas*</label>
				<select multiple="multiple" id="form-field-select-1" name="practiceAreas[]" class="form-control search-select">
				  <% loop PA_List %>
		
				    <option value="{$ID}">$Name</option>
				  <% end_loop %>
				  </select>
				</div>                                        
                        </div>
						<div class="col-md-12">
						<div class="form-group">
						<label for="form-field-select-4">
							Bar Admittance States*
						</label>
						<select multiple="multiple" id="form-field-select-4" name="bar_admittance_states[]" class="form-control search-select">
								<% loop States %>
							    <option value="{$ID}">$Full</option>
							  <% end_loop %>
						</select>
					</div>		

					    
					</div>			
						
						
						<div class="col-md-12">
						
								<div class="form-group">
								<label class="control-label">
									Board Certifications
								</label>
								<select multiple="multiple" id="form-field-select-1" name="boardCertifications[]" class="form-control search-select">
							<? getCertificationList(array()); ?> 
							</select>
						</div>	
								
								
								
						</div><!-- End 12 -->

						
						<div class="col-md-6">

							<div class="form-group">
							<label for="form-field-select-2">
								Number of Attorneys (Firm Size)
							</label>
							<select id="form-field-select-2" name="number_of_attorneys"  class="form-control search-select">
								<option value="">&nbsp;</option>
								<option value="Any">Any Number</option>
								<option value="1-25">1 - 25</option>
								<option value="25-60">25 - 60 </option>
								<option value="60+">60+</option>
								
							</select>
							</div>
									
						</div>
						
						    <div class="col-md-6">
						<div class="form-group">
								<label class="control-label">
									Years of Practice
								</label>
								<select id="form-field-select-3" name="years_of_practice" class="form-control search-select">
									<option value="">&nbsp;</option>
									<option>Any Year</option>
									<option>0 - 5</option>
									<option>6 - 10</option>
									<option>11 - 15</option>
									<option>16 - 20</option>
									<option>21+ </option>
								</select>	
					</div>
					</div><!-- End md-6 -->
						
					
						
						<div class="col-md-12">
						
						
						<div class="form-group">
								<label class="control-label">
									RFP Description
								</label>
								
						<textarea maxlength="1000" id="rfp_description"  name="rfp_description" class="form-control limited" rows="10" >$Description</textarea>
						</div>	

					
						<div class="form-group">
							<label for="form-field-select-7">
								Languages
							</label>
							<select multiple="multiple" name="languages[]" id="form-field-select-1" class="form-control search-select">
									<? $languages = array(); ?>
									<option value="Arabic" >Arabic</option>
									<option value="Cantonese">Chinese (Cantonese)</option>
									<option value="English">English</option>
									<option value="French" >French</option>
									<option value="Farsi" >Farsi (Persian)</option>
									<option value="German" >German</option>
									<option value="Japanese">Japanese</option>
									<option value="Mandarin" >Chinese (Mandarin)</option>
									<option value="Portuguese" >Portuguese</option>
									<option value="Russian">Russian</option>
									<option value="Spanish">Spanish</option>
							</select>
							</div>
							
						</div><!-- End md-12 -->
						
						
						
						<div class="col-md-6">
						<div class="form-group">
								<label class="control-label">
									Gender
								</label>
						<select id="form-field-select-3" name="gender" class="form-control search-select">
								<option value="">&nbsp;</option>
								<option >N/A</option>
								<option >Male</option>
								<option >Female </option>
						</select>
								
							</div>
						</div><!-- End Account Type -->
						
						
						<div class="col-md-6">
						<div class="form-group">
								<label class="control-label">
									Ethnicity
								</label>
						<select id="form-field-select-3" name="ethnicity" class="form-control search-select">
								<option value="">&nbsp;</option>
								<option value="N/A">N/A</option>
								<option value="White">White</option>
								<option value="African-American">African-American</option>
								<option value="American Indian">American Indian </option>
								<option value="American Indian">American Indian </option>
								<option value="Asian / Chinese / Japanese ">Asian / Chinese / Japanese </option>
								<option value ="Other">Other</option>
						</select>
								
							</div>
						</div><!-- End Account Type -->
						
						
			</div><!-- End RFP Submission Information -->
			<div class="modal-footer">
				<input name="rfp_id" type=hidden id="rfp_id" value="">
				<input name="to_id" type=hidden id="to_id" value="">
			
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Cancel
				</button>
				<button type="submit" class="btn btn-blue">
					Submit Changes
				</button>
			</div>
		</div></div> 
		</form>
</div></div> 