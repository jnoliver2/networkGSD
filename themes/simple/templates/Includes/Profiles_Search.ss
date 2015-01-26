<!-- start: SEARCH RESULT -->
            <form method="post"> 
							
							<div class="col-md-12 input-group well well-lg filter"> 
							
							
							<div class="col-md-12">
							<input type="text" class="filter form-control" name="searchname" value="$Post_Vars.searchname" placeholder="Search Name or Business Name">
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-3">
										<div class="form-group">
										<label for="form-field-select-3">Practice Areas</label>
										<select id="form-field-select-3" name="PracticeArea" class="filter form-control filter search-select">
											<option value="">&nbsp;</option>
											<% loop PracticeArea_List %>
											  <option value="$ID">$Name</option>
											<% end_loop%>
										</select>

										</select>
									</div>
									</div><!-- End md-3 -->
							
									
							
									<div class="col-xs-12 col-sm-12 col-md-3">
										<div class="form-group">
										<label for="form-field-select-3">
											Bar Admittance States 
										</label>
										<select name="Barstate" id="form-field-select-3" class="form-control search-select">
											<option value="">&nbsp;</option>
											<% loop States %>
											    <option value="$ID">$Full</option>
											<% end_loop %>
											
										</select>
									</div>
									</div><!-- End md-3 -->
							
									<div class="col-xs-12 col-sm-12 col-md-3">
									<div class="form-group">
									<label for="form-field-select-3">
									Diversity
									</label>
									<select id="form-field-select-3" name="company['Diversity']" class="form-control search-select">
									<option value="">&nbsp;</option>
									<option value="AL">MBE</option>
									<option value="AK">WMBE</option>
									<option value="AZ">LGBT</option>
									</select>
									</div>
									</div>
									
									<div class="col-xs-12 col-sm-12 col-md-3">
										<div class="form-group">
										<label for="form-field-select-3">Ethnicity</label>
										<select name="Ethnicity" id="form-field-select-3" class="form-control search-select">
											<option value="">&nbsp;</option>
															
														<option value="white">White</option>
														<option value="African-American">African-American</option>
														<option value="American-Indian ">American Indian </option>
														<option value="Hispanic-Latino">Hispanic/Latino </option>
														<option value ="Asian">Asian / Chinese / Japanese </option>
														<option value ="other">Other</option>

										</select>
									</div>
									</div><!-- End md-3 -->
									
									<div class="advanced" >
									    <div class="col-xs-12 col-sm-12 col-md-4">
										<div class="form-group">
										<label for="form-field-select-3">
											State
										</label>
										<select id="form-field-select-3" name="State" class="form-control search-select">
											<option value="">&nbsp;</option>
											<% loop States %>
											    <option value="$ID">$Full</option>
											<% end_loop %>
										</select>
									</div>
									</div><!-- End md-4 -->
							
									
										<div class="col-xs-12 col-sm-12 col-md-4">
												<div class="form-group">
														<label class="control-label">
															Gender
														</label>
												<select id="form-field-select-3" name="Gender" class="form-control search-select">
														<option value="">&nbsp;</option>
														<option value="">Male</option>
														<option value="">Female </option>
														<option value="">Transgender </option>
												</select>
														
													</div>
												</div><!-- End Gender -->
												
								
					
													<div class="col-xs-12 col-sm-12 col-md-6">
												<div class="form-group">
														<label class="control-label">
															Board Certifications
														</label>
														<select multiple="multiple" id="form-field-select-1" class="form-control search-select">
													<option value="">&nbsp;</option>
													<option value="">#####</option>
													<option value="">#####</option>
													</select>
													</div>
												</div><!-- End md-6 -->
												
												
												
												<div class="col-xs-12 col-sm-12 col-md-6">
												<div class="form-group">
														<label class="control-label">
															Number of Attorneys
														</label>
														<select id="form-field-select-3" class="form-control search-select">
															<option value="">&nbsp;</option>
															<option value="AL">1 - 25</option>
															<option value="AK">26 - 60</option>
															<option value="AZ">61+</option>
															
														</select>	
													</div>
												</div><!-- End md-4 -->
									
									
									
									
									
									
									
									
									<div class="col-xs-12 col-sm-12 col-md-12">
												<label class="control-label">Clients</label>
												<div class="form-group">		
													<select multiple="multiple" id="form-field-select-1" class="form-control search-select">
													<option value="">&nbsp;</option>
													<option value="">#####</option>
													<option value="">#####</option>
													</select>
												</div>
													
									</div>			
									<div class="col-xs-12 col-sm-12 col-md-12">
													<label class="control-label"> Clients (Government)</label> 
													<div class="form-group">		
													<select multiple="multiple" id="form-field-select-1" class="form-control search-select">
													<option value="">&nbsp;</option>
													<option value="">#####</option>
													<option value="">#####</option>
													</select>
													</div>
									</div>
													
													
									<div class="col-xs-12 col-sm-12 col-md-12">
				
													<div class="form-group">
														<label class="control-label">
															Professional Associations
														</label>
												
														
														<select multiple="multiple" id="form-field-select-1" class="form-control search-select" placeholder="Type in Professional Association Name">
															<option value="hbdba">Hazel B Daniels Bar Association</option>
															
															<option value="waaal">Wisconsin Association of African-American Lawyers</option>
													</select>
												</div>				
													
													
									</div> <!-- End 12 -->
									
									
									<div class="col-xs-12 col-sm-12 col-md-6">
												<div class="form-group">
														<label class="control-label">
															Government Level of Clearance
														</label>
														<select multiple="multiple" id="form-field-select-1" class="form-control search-select">
														<option value="">None</option>
															<option value="">Confidental</option>
															<option value="">Secret</option>
															<option value="">TS/SCI</option>
														</select>
												</div>
												</div>
									
									<div class="col-xs-12 col-sm-12 col-md-6">
												<div class="form-group">
														<label class="control-label">
															Languages
														</label>
														<select multiple="multiple" id="form-field-select-1" class="form-control search-select">
															<option value="arabic">Arabic</option>
															<option value="cantonese">Chinese (Cantonese)</option>
															<option value="english">English</option>
															<option value="french">French</option>
															<option value="farsi">Farsi (Persian)</option>
															<option value="german">German</option>
															<option value="japanese">Japanese</option>
															<option value="mandarin">Chinese (Mandarin)</option>
															<option value="portuguese">Portuguese</option>
															<option value="russian">Russian</option>
															<option value="spanish">Spanish</option>
														</select>
												</div>
												</div>
									
									<div class="col-xs-12 col-sm-12 col-md-12">	
												
															<h4>Significant Engagements</h4>
												
									</div><!-- md12 -->
									
									
									<div class="col-xs-12 col-sm-12 col-md-6">
											<div class="form-group">
											<label for="form-field-select-3">Significant Engagement</label>
													<select multiple="multiple" id="form-field-select-1" class="form-control search-select">
													<option>&nbsp;</option>
													<option>###</option>
													<option>###</option>
													</select>
											</div>
									</div>
									
									<div class="col-xs-12 col-sm-12 col-md-6">
											<div class="form-group">
											<label for="form-field-select-3">Company/Attorney</label>
													<select multiple="multiple" id="form-field-select-1" class="form-control search-select">
													<option value="">&nbsp;</option>
													<option value="">###</option>
													<option value="">###</option>
													</select>
											</div>
									</div>
									
									
									
									
									
									<div class="col-xs-12 col-sm-12 col-md-12">	
												
															<h4>Awards & Honors</h4>
												
									</div><!-- md12 -->
									
									
									<div class="col-md-12">
											<div class="form-group">
											<label for="form-field-select-3">Award/Honor</label>
													<select multiple="multiple" id="form-field-select-1" class="form-control search-select">
													<option value="">&nbsp;</option>
													<option value="">###</option>
													<option value="">###</option>
													</select>
											</div>
									</div>
							 
									  
									</div><!-- Advanced -->
									
									<div class="col-md-8"></div>
									<div class="col-xs-12 col-sm-12 col-md-4">
											<button type=submit class="btn btn-blue"><i class="fa fa-search"></i> SEARCH</button> 
											<button class="btn btn-green" type="button" id="advanced-btn"><i class="fa fa-search-plus" ></i> ADVANCED SEARCH</button> 
									</div>
							</div>
							
							</form>