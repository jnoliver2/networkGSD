
										<form method="post" role="form" id="form" action="{$BaseHref}pages/rfp_add">
										  <input type="hidden" name="rfp_id"  value="{$Rfp.ID}">
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
														<input type="text"  placeholder="" class="form-control" id="rfp_title" name="rfp_title" value="$Rfp.Title">
												</div>
												</div>

                      <div class="col-md-12">
												
												
												<div class="form-group">
														<label class="control-label">
															Company Overview
														</label>
														
												<textarea maxlength="1000" id="company_overview" name="company_overview" class="form-control limited" rows="10" >$Rfp.Company_Overview</textarea>
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
													<input type="text" data-date-format="yyyy-mm-dd" data-date-viewmode="years" value="{$Rfp.Project_Start.format(Y-m-d)}"
													name="project_start" class="form-control date-picker">
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
													<input type="text" data-date-format="yyyy-mm-dd" data-date-viewmode="years" value="{$Rfp.Project_End.format(Y-m-d)}" name="project_end" class="form-control date-picker">
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
												<input type="text" value="{$Rfp.Submission_Deadline.format(Y-m-d)}" data-date-format="yyyy-mm-dd" data-date-viewmode="years" name="submission_deadline" class="form-control date-picker">
												</div>
												</div>
												</div>
                                                
												
										<div class="col-md-12">
									<label class="control-label">Diversity Certifications</label>
										<div class="form-group">	
										  <% loop Rfp.Diversity %>
										<label class="checkbox-inline">
										<input type="checkbox" checked value="{$Diversity_List.ID}" name="Diversity[]" class="grey">$Diversity_List.Name</label>
										<% end_loop %>

										   <% loop Rfp.Diversity_selects %>
										<label class="checkbox-inline">
										<input type="checkbox" value="{$ID}"  name="Diversity[]"  class="grey">$Name</label>
										 <% end_loop %>
										
										</div>
                                    </div>
										<div class="col-md-12">
										  
                    <div class="form-group">
										<label class="control-label">Associations*</label>
										<select multiple="multiple"  name="Association[]" class="form-control search-select">
										  <% loop AS_List %>
										   
										    <option value="{$ID}">$Name</option>
										  <% end_loop %>
										  <% loop Rfp.Association %>
										    <option value="{$Association_List.ID}" selected=selected >$Association_List.Name</option>
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
										  <% loop Rfp.practiceAreas %>
										    <option value="{$PracticeArea_List.ID}" selected=selected >$PracticeArea_List.Name</option>
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
      										  <% loop Rfp.barstates %>
        										    <option value="{$State.ID}" selected=selected >$State.Full</option>
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
            									<% loop Rfp.Cert %>
              									<option value="{$Cert_List.ID}" selected=selected >$Cert_List.Name</option>
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
														<option value="Any Number" 
														     <% if $Rfp.Number_Of_Attorneys == "Any Number" %>
														        selected=selected
														    <% end_if %>
														
														>Any Number</option>
														<option value="1 - 25" 
														     <% if $Rfp.Number_Of_Attorneys == "1 - 25" %>
														        selected=selected
														    <% end_if %>
														
														>1 - 25</option>
														<option value="25 - 60" 
														     <% if $Rfp.Number_Of_Attorneys == "25 - 60" %>
														        selected=selected
														    <% end_if %>
														
														>25 - 60</option>
														<option value="60+" 
														     <% if $Rfp.Number_Of_Attorneys == "60+" %>
														        selected=selected
														    <% end_if %>
														
														>60+</option>

														
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
															<option value="Any Year" 
														     <% if $Rfp.Years_Of_Practice == "Any Year" %>
														        selected=selected
														    <% end_if %>
														
														>Any Year</option>
														<option value="0 - 5" 
														     <% if $Rfp.Years_Of_Practice == "0 - 5" %>
														        selected=selected
														    <% end_if %>
														
														>0 - 5</option>
												    <option value="6 - 10" 
														     <% if $Rfp.Years_Of_Practice == "6 - 10" %>
														        selected=selected
														    <% end_if %>
														
														>6 - 10</option>
														<option value="11 - 15" 
														     <% if $Rfp.Years_Of_Practice  == "11 - 15" %>
														        selected=selected
														    <% end_if %>
														
														>11 - 15</option>
														<option value="16 - 20" 
														     <% if $Rfp.Years_Of_Practice == "16 - 20" %>
														        selected=selected
														    <% end_if %>
														
														>16 - 20</option>
														<option value="21+" 
														     <% if $Rfp.Years_Of_Practice == "21+" %>
														        selected=selected
														    <% end_if %>
														
														>21+</option>

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
            									<% loop Rfp.Language %>
              									<option value="{$Language_List.ID}" selected=selected >$Language_List.Name</option>
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
														<option value="N/A" 
														     <% if $Rfp.Gender == "N/A" %>
														        selected=selected
														    <% end_if %>
														
														>N/A</option>
														<option value="Male" 
														     <% if $Rfp.Gender == "Male" %>
														        selected=selected
														    <% end_if %>
														
														>Male</option>
														<option value="Female" 
														     <% if $Rfp.Gender == "Female" %>
														        selected=selected
														    <% end_if %>
														
														>Female</option>
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
														<option value="N/A"
														    <% if $Rfp.Ethnicity == "N/A" %>
														        selected=selected
														    <% end_if %>
														>N/A</option>
														<option value="White"
														  <% if $Rfp.Ethnicity == "White" %>
														        selected=selected
														    <% end_if %>
														
														>White</option>
														<option value="African-American"
														  <% if $Rfp.Ethnicity == "African-American" %>
														        selected=selected
														    <% end_if %>
														
														>African-American</option>
														<option value="American Indian"
														  <% if $Rfp.Ethnicity == "American Indian" %>
														        selected=selected
														    <% end_if %>
														
														>American Indian </option>
														<option value="Asian / Chinese / Japanese"
														  <% if $Rfp.Ethnicity == "Asian / Chinese / Japanese" %>
														        selected=selected
														    <% end_if %>
														
														>Asian / Chinese / Japanese </option>
														<option value ="Other"
														    <% if $Rfp.Ethnicity == "Other" %>
														        selected=selected
														    <% end_if %>
														>Other</option>
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
														By clicking SUBMIT RFP, you are agreeing to the <a href="{$BaseHref}terms">Private Policy and Terms &amp; Conditions.</a>
													</p>
												</div>
												
												<div class="col-md-4">
													<button class="btn btn-green btn-block" type="submit">
														SUBMIT RFP CHANGES <i class="fa fa-arrow-circle-right"></i>
													</button>
												</div>
											</div>
											<br />
										</form>
	