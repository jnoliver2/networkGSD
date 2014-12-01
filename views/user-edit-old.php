<form method="post" aci
					
				<div class="row">
												<div class="col-md-12">
													<h3>Account Info</h3>
													<hr>
												</div>
												<div class="col-md-12">
												
												<div class="form-group">
														<label>
															Profile Image Upload
														</label>
														<div class="fileupload fileupload-new" data-provides="fileupload">
															<div class="fileupload-new thumbnail" style="width: 250px; height: 250px;"><img src="/assets/GLimages/profile-placeholder.jpg" alt="">
															</div>
															<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 250px; max-height: 250px; line-height: 20px;"></div>
															<div class="user-edit-image-buttons">
																<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture"></i> Change</span>
																	<input type="file">
																</span>
																<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
																	<i class="fa fa-times"></i> Remove
																</a>
															</div>
														</div>
													</div>
													
										
												
													<div class="form-group">
														<label class="control-label">
															First Name
														</label>
														<input type="text" value="<?=$user->first_name?>" class="form-control" id="first_name" name="first_name">
													</div>
													<div class="form-group">
														<label class="control-label">
															Last Name
														</label>
														<input type="text" value="<?=$user->last_name?>" class="form-control" id="last_name" name="last_name">
													</div>
													<div class="form-group">
														<label class="control-label">
															Email Address
														</label>
														<input type="email" value="<?=$user->email?>"class="form-control" id="email" name="email">
													</div>
													<div class="form-group">
														<label class="control-label">
															Phone
														</label>
														<input type="email" value="<?=$user->phone?>" class="form-control" id="phone" name="phone">
													</div>
													<div class="form-group">
														<label class="control-label">
															Fax
														</label>
														<input type="fax" value="<?=$user->fax?>" class="form-control" id="fax" name="fax">
													</div>
													<div class="form-group">
														<label class="control-label">
															Password
														</label>
														<input type="password" placeholder="password" class="form-control" name="password" id="password">
													</div>
													<div class="form-group">
														<label class="control-label">
															Confirm Password
														</label>
														<input type="password"  placeholder="password" class="form-control" id="password_again" name="password_again">
													</div>
													
													<div class="form-group">
														<label class="control-label">
															Gender
														</label>
														<div>
															<label class="radio-inline">
																<input type="radio" class="grey" value="female"   <? if ($user->gender=="female") { echo "checked"; }  ?>  name="gender" id="gender_female">
																Female
															</label>
															<label class="radio-inline">
																<input type="radio" class="grey" value="male" <? if ($user->gender=="male") { echo "checked"; }  ?> name="gender"  id="gender_male" checked="checked">
																Male
															</label>
														</div>
													</div>
													
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<h3>Business Information</h3>
													<hr>
												</div>
												
												<div class="col-md-4">
												<div class="form-group">
														<label for="form-field-select-3">
														Partnership Information/Title
														</label>
														<select id="form-field-select-3" class="form-control search-select">
															<option value="">&nbsp;</option>
															<option value="AL">Associate</option>
															<option value="AK">Of Counsel</option>
															<option value="AZ">Partner</option>
															
														</select>	
												</div>
												</div>

																				<div class="col-md-12">
											
											
										<div class="form-group">
										<label for="form-field-select-4">
											Bar Admittance States
										</label>
										<select multiple="multiple" id="form-field-select-2" class="form-control">
											<option value="AL">Alabama</option>
											<option value="AK">Alaska</option>
											<option value="AZ">Arizona</option>
											<option value="AR">Arkansas</option>
											<option value="CA">California</option>
											<option value="CO">Colorado</option>
											<option value="CT">Connecticut</option>
											<option value="DE">Delaware</option>
											<option value="FL">Florida</option>
											<option value="GA">Georgia</option>
											<option value="HI">Hawaii</option>
											<option value="ID">Idaho</option>
											<option value="IL">Illinois</option>
											<option value="IN">Indiana</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
											<option value="LA">Louisiana</option>
											<option value="ME">Maine</option>
											<option value="MD">Maryland</option>
											<option value="MA">Massachusetts</option>
											<option value="MI">Michigan</option>
											<option value="MN">Minnesota</option>
											<option value="MS">Mississippi</option>
											<option value="MO">Missouri</option>
											<option value="MT">Montana</option>
											<option value="NE">Nebraska</option>
											<option value="NV">Nevada</option>
											<option value="NH">New Hampshire</option>
											<option value="NJ">New Jersey</option>
											<option value="NM">New Mexico</option>
											<option value="NY">New York</option>
											<option value="NC">North Carolina</option>
											<option value="ND">North Dakota</option>
											<option value="OH">Ohio</option>
											<option value="OK">Oklahoma</option>
											<option value="OR">Oregon</option>
											<option value="PA">Pennsylvania</option>
											<option value="RI">Rhode Island</option>
											<option value="SC">South Carolina</option>
											<option value="SD">South Dakota</option>
											<option value="TN">Tennessee</option>
											<option value="TX">Texas</option>
											<option value="UT">Utah</option>
											<option value="VT">Vermont</option>
											<option value="VA">Virginia</option>
											<option value="WA">Washington</option>
											<option value="WV">West Virginia</option>
											<option value="WI">Wisconsin</option>
											<option value="WY">Wyoming</option>
										</select>
									</div>		
	
									    
									</div>			
												
											    <div class="col-md-6">
												<div class="form-group">
														<label class="control-label">
															Years of Practice
														</label>
														<select id="form-field-select-3" class="form-control search-select">
															<option value="">&nbsp;</option>
															<option value="">0 - 5</option>
															<option value="">6 - 10</option>
															<option value="">11 - 15</option>
															<option value="">16 - 20</option>
															<option value="">21+ </option>
														</select>	
											</div>
											</div><!-- End md-6 -->
											
											<div class="col-md-6">
												<div class="form-group">
														<label class="control-label">
															Law School
														</label>
														<input type="text"  placeholder="" class="form-control" id="=" name="">
											</div>
											</div><!-- End md-6 -->
		
									</div><!-- End Business Information -->
									
									<div class="row">
												<div class="col-md-12">
													<h3>Additional Information</h3>
													<hr>
												</div>	
									
												<div class="col-md-12">
												
												
												<div class="form-group">
														<label class="control-label">
															Bio
														</label>
												<textarea maxlength="1000" id="form-field-23" class="form-control limited"></textarea>
												</div>
												<div class="form-group">
														<label class="control-label">
															Company Overview (Business and Corporations Only)
														</label>
												<textarea maxlength="1000" id="form-field-23" class="form-control limited"></textarea>
												</div>
												
												</div><!-- End 12 -->
												
												
													<div class="col-md-12">	
												
														<label class="control-label">Clients (Private)</label> <span class="label btn-dark-grey"> + Add Clients (Private) </span>

												</div>
												<div class="form-group">		
												<div class="col-md-6">		
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												</div>
												
												<div class="col-md-6">		
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												</div>
											
												</div>
												
												<div class="col-md-12">	
												
												<label class="control-label">
															Clients (Government)
												</label> <span class="label btn-dark-grey"> + Add Clients (Government) </span>
												</div>
												<div class="form-group">		
												<div class="col-md-6">		
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												</div>
												
												<div class="col-md-6">		
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												</div>
											
												</div>
												
												<div class="col-md-12">	
												<div class="form-group">
														<label class="control-label">
															Significant Engagements
														</label> <span class="label btn-dark-grey"> + Add Significant Engagements </span>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control">
												</div>
												
												<div class="form-group">
														<label class="control-label">
															Diversity Statement
														</label>
												<textarea maxlength="1000" id="form-field-23" class="form-control limited"></textarea>
											
												</div>
												<div class="form-group">
														<label class="control-label">
															Diversity Statement Link (Web Site)
														</label>
												<input type="text" placeholder="http://www...." id="form-field-1" class="form-control">
											
												</div>
												
												<div class="form-group">
														<label class="control-label">
															Minority Certifications
														</label>
														<select multiple="multiple" id="form-field-select-2" class="form-control">
															<option value="AL">MBE</option>
															<option value="AK">WMBE</option>
															<option value="AZ">LGBT</option>
															<option value="AR">.....</option>
															<option value="CA">......</option>
														</select>
												</div>
												
												</div><!-- md12 -->
												
												
												<div class="col-md-12">	
												
														<label class="control-label">
															Special Certifications
														</label>
												</div>
												<div class="form-group">		
												<div class="col-md-6">		
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												</div>
												
												<div class="col-md-6">		
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												</div>
											
												</div>
												
												<div class="col-md-12">	
												<div class="form-group">
														<label class="control-label">
															Professional Associations
														</label>
												
														
												<select multiple="multiple" id="form-field-select-2" class="form-control">
															<option value="hbdba">Hazel B Daniels Bar Association</option>
															<option value="besla">Black Entertainment and Sports Lawyers Association</option>
															<option value="blac">Black Lawyers Association of Cincinnati</option>
															<option value="bwla">Black Women Lawyers Association</option>
															<option value="bwlala">Black Women Lawyers Association of Los Angeles</option>
															<option value="cabl">California Association of Black Lawyers</option>
															<option value="chba">Charles Houston Bar Association</option>
															<option value="ccba">Cook County Bar Association</option>
															<option value="dasba">D. Agustus Straker Bar Association</option>
															<option value="gcba">Gate City Bar Association</option>
															<option value="gwcbba">George W. Crawford Black Bar Association</option>
															<option value="gwac">Great Washington Area Chapter Women Lawyers Division</option>
															<option value="hbla">Houston Black Lawyers Association</option>
															<option value="hnba">Hispanic National Bar Association</option>
															<option value="jmlba">John Mercer Langston Bar Association</option>
															<option value="mbabba">Macon B. Allen Black Bar Association</option>
															<option value="mbla">Massachusetts Black Lawyers Association</option>
															<option value="mbba">Metropolitan Black Bar Association</option>
															<option value="mabl">Minnesota Association of Black Lawyers</option>
															<option value="mbawny">Minority Bar Association of Western New York</option>
															<option value="mcba">Monumental City Bar Association</option>
															<option value="nacn">National Attorney of Color Network</option>
															<option value="napba">National Asian Pacific American Bar Association</option>
															<option value="nba">National Bar Association</option>
															<option value="nblsa">National Black Law Students Association</option>
															<option value="ncbl">National Conference of Black Lawyers</option>
															<option value="ncwba">National Conference of Woman&#39;s Bar Association</option>
															<option value="nlgla">National Lesbian and Gay Law Association</option>
															<option value="nawl">National Association of Women Lawyers</option>
															<option value="nnaba">National Native American Bar Association</option>
															<option value="nmbla">New Mexico Black Lawyers Association</option>
															<option value="nasalsa">North American South Asian Law Student Association</option>
															<option value="nasaba">North American South Asian Bar Association</option>
															<option value="rbba">Rochester Black Bar Asssociation</option>
															<option value="scba">Sam Cary Bar Association</option>
															<option value="tbl">Texas Black Lawyers</option>
															<option value="uscblsa">University of South Carolina Black Law Student Association</option>
															<option value="vhfcnba">Virgil Hawkins Florida Chapter National Bar Association</option>
															<option value="wwmba">Wiley W Manuel Bar Association</option>
															<option value="waaal">Wisconsin Association of African-American Lawyers</option>
												</select>
											
												</div>
												</div>
												<div class="col-md-6">	
												<div class="form-group">
													<label class="control-label">Martindale Hubble Certified</label>
													<input type="text" placeholder="http://www." id="form-field-1" class="form-control">
												</div>
												</div>
												
												<div class="col-md-6">	
												<div class="form-group">
													<label class="control-label">Government Clearance Level</label>
													<select id="form-field-select-3" class="form-control search-select">
															<option value="">None</option>
															<option value="">Confidental</option>
															<option value="">Secret</option>
															<option value="">TS/SCI</option>
														</select>	

												</div>
												</div>
												<div class="col-md-12">	
												
												
														<label class="control-label">
															Awards & Honors
														</label>
												</div>
												<div class="form-group">		
												<div class="col-md-6">		
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												</div>
												
												<div class="col-md-6">		
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												</div>
											
												</div>
												
												<div class="col-md-12">	
												
														<label class="control-label">
															Speaking Engagements
														</label>
												</div>
												<div class="form-group">		
												<div class="col-md-6">		
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												</div>
												
												<div class="col-md-6">		
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												</div>
											
												</div>
												
												<div class="col-md-12">	
												
														<label class="control-label">
															Publications & Press
														</label>
												</div>
												<div class="form-group">		
												<div class="col-md-6">		
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												</div>
												
												<div class="col-md-6">		
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												<input type="text" placeholder=" " id="form-field-1" class="form-control"><br/>
												</div>
											
												</div>
												
												<div class="col-md-12">
												<div class="form-group">
														<label class="control-label">
															Languages
														</label>
														<select multiple="multiple" id="form-field-select-2" class="form-control">
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
												
												
												
												<div class="col-md-12">
											
												
												<div class="form-group">
														<label class="control-label">
															Web Site
														</label>
														<input type="text"  placeholder="" class="form-control" id="=" name="">
													</div>
												
												<div class="form-group">
													<label class="control-label">Ability to Work On Site</label><br/>
												
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadios" class="grey">
													Yes
												</label>
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadios" class="grey">
													No
												</label>
												
												</div>
												
												</div>
												
								</div><!-- End Additional Information -->	
									
									
									
									
									
									
									
									
									
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
														By clicking UPDATE, you are agreeing to the Private Policy and Terms &amp; Conditions.
													</p>
												</div>
												<div class="col-md-4">
													<button class="btn btn-green btn-block" type="submit">
														Update <i class="fa fa-arrow-circle-right"></i>
													</button>
												</div>
										
											</div>
											</div>
											</div>
											
									