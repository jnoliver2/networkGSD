<div id="panel_add_rfp" class="tab-pane">
										<form method="post" role="form" id="form" action="{$BaseHref}pages/rfp_add">
										
											<div class="row">
												<div class="col-md-12">
													<h3>RFP Information</h3>
													<p>* Field Required </p>
													<hr>
												</div>

												
												<div class="col-md-12">
													<div class="form-group">
														<label class="control-label">
															RFP Title*
														</label>
														<input type="text"  placeholder="" class="form-control" id="rfp_title" name="rfp_title">
												</div>
												</div>

												<div class="col-md-12">

												<div class="form-group">
														<label class="control-label">
															Company Overview*
														</label>
													
												<textarea maxlength="1000" id="form-field-23" class="form-control limited" name="company_overview" rows="10">$Company.Overview</textarea>
												</div>
												</div>
												<br />
												<div class="col-md-12">	
												<div class="form-group">
														<label class="control-label">
															RFP Description
														</label>
														
												<textarea maxlength="1000" id="rfp_description" name="rfp_description" class="form-control limited" rows="15" >$Rfp.Description</textarea>
												</div>
                        </div><!-- End 12 -->    
                                                                                          
                                           <div class="col-md-6">
                                           <div class="form-group">
												<label class="control-label">
															Project Start*
												</label>
												<div class="input-group">
													<span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
													<input type="text" data-date-format="yyyy-mm-dd" data-date-viewmode="years" name="project_start" class="form-control date-picker">
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
													<input type="text" data-date-format="yyyy-mm-dd" data-date-viewmode="years" name="project_end" class="form-control date-picker">
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
												<input type="text" data-date-format="yyyy-mm-dd" data-date-viewmode="years" name="submission_deadline" class="form-control date-picker">
												</div>
												</div>
												</div>
                                                
												
												
										<div class="col-md-12">
									<label class="control-label">Diversity Certifications</label>
										<div class="form-group">	
										  <% loop DI_List %>
										<label class="checkbox-inline">
										<input type="checkbox" value="{$ID}" name="Diversity[]" class="grey">$Name</label>
										<% end_loop %>

										</div>
                    </div>
                    
                    <div class="col-md-12">
										  
                    <div class="form-group">
										<label class="control-label">Associations*</label>
										<select multiple="multiple" id="form-field-select-1" name="Association[]" class="form-control search-select">
										  <% loop AS_List %>
										   
										    <option value="{$ID}">$Name</option>
										  <% end_loop %>

										  </select>
										</div>                                        
                   </div>
										<div class="col-md-12">
										  
                    <div class="form-group">
										<label class="control-label">Practice Areas*</label>
										<select multiple="multiple" id="form-field-select-1" name="PracticeArea[]" class="form-control search-select">
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
												<select multiple="multiple" id="form-field-select-4" name="BarState[]" class="form-control search-select">
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
														<select multiple="multiple" id="form-field-select-1" name="Cert[]" class="form-control search-select">
														  <% loop Cert_List %>
        										    <option value="{$ID}">$Name</option>
            									<% end_loop %>

													</select>
												</div>	

												</div><!-- End 12 -->

												<div class="col-md-6">

													<div class="form-group">
													<label for="form-field-select-2">
														Number of Attorneys (Firm Size)
													</label>
													<select id="form-field-select-2" name="number_of_attorneys" class="form-control search-select">
														<option value="">&nbsp;</option>
														<option value="Any Number">Any Number</option>
														<option value="1 - 25">1 - 25</option>
														<option value="25 - 60">25 - 60</option>
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
															<option value="Any Year">Any Year</option>
														<option value="0 - 5">0 - 5</option>
												    <option value="6 - 10">6 - 10</option>
														<option value="11 - 15">11 - 15</option>
														<option value="16 - 20">16 - 20</option>
														<option value="21+">21+</option>

														</select>	
											</div>
											</div><!-- End md-6 -->
												
											
												
												<div class="col-md-12">
												
												
	

											
												<div class="form-group">
													<label for="form-field-select-7">
														Languages
													</label>
													<select multiple="multiple" name="Language[]" id="form-field-select-1" class="form-control search-select">
															
															<% loop LA_List %>
        										    <option value="{$ID}">$Name</option>
            									<% end_loop %>

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
														<option value="N/A">N/A</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
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
														<option value="Asian / Chinese / Japanese">Asian / Chinese / Japanese </option>
														<option value ="Other">Other</option>
												</select>
														
													</div>
		
												</div><!-- End Account Type -->
												
												
									</div><!-- End RFP Submission Information -->

									
											<div class="row">
												<div class="col-md-12">
													<div>
														Required Fields*
														<hr>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-8">
													<p>
														By clicking SUBMIT, you are agreeing to the <a href="{$BaseHref}terms">Private Policy and Terms &amp; Conditions.</a>
													</p>
												</div>
												<div class="col-md-4">
													<button class="btn btn-green btn-block" type="submit">
														SUBMIT RFP <i class="fa fa-arrow-circle-right"></i>
													</button>
												</div>
											</div>
										</form>
									</div>