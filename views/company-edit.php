	<div id="panel_edit_account" class="tab-pane">
										<form action="/network/?page=company" method=post role="form" id="form" enctype="multipart/form-data">	
											<div class="row">
												<div class="col-md-12">
													<h3>Company Account Info</h3>
													<hr>
												</div>
												<div class="col-md-12">
												 
													
													
													
										
													<div class="form-group">
														<label>
															Company Image Upload
														</label>
														<div class="fileupload fileupload-new" data-provides="fileupload">
															<div class="fileupload-new thumbnail" style="width: 250px; height: 250px;"><img style="max-width: 250px; max-height: 250px;" src="<?=$company->logo?>" alt="">
															</div>
															<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 250px; max-height: 250px; line-height: 20px;"></div>
															<div class="user-edit-image-buttons">
																<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture"></i> Change</span>
																	<input type="file" name="new_logo">
																</span>
																<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
																	<i class="fa fa-times"></i> Remove
																</a>
															</div>
														</div>
													</div>
													</div>

												<div class="col-md-4">
												<div class="form-group">
														<label class="control-label">
															Account Type
														</label>
												<select id="company_type" name="company_type" class="form-control search-select">
														<option selected><?=$company->company_type?></option>
														<option>Corporate</option>
														<option>Firm </option>
														<option>Government </option>
														<option>Professional Associations</option>
														<option>Solo Practitioner Attorney</option>
														<option>Law Student</option>
												</select>
														
												</div><!-- End Account Type -->
												</div><!-- End Account Type -->

                                           <div class="col-md-8">
												<div class="form-group">
														<label class="control-label">
															Company / Firm Name
														</label>
<input type="text" class="form-control" id="company_name" value="<?=$company->company_name?>" name="company_name">													
												</div>	
												</div>	

													<div class="col-md-12">
													<div class="form-group">
														<label class="control-label">Company/Firm Location(s) </label>  <a href="#Location" data-toggle="modal" class="label btn-dark-grey">+ Add Additional Office Locations</a>
													</div>
													
												</div><!-- End col-md-12 -->
													
													
													<div class="panel-body" id="office_locations">
										
														<!-- end company name-->
													</div>



											</div>
											<div class="row">
												
									
										<div class="col-md-12">
									<div class="form-group">
														<label class="control-label">
															Practice Areas
														</label>
																<select multiple="multiple" id="practicearealist" name="practiceareas[]" class="form-control search-select">
																	<? getPracticeAreaList($practiceAreas); ?>	
																</select>
												</div>
										</div>
                                        
									<div class="col-md-6">
									
									<div class="form-group">
														<label class="control-label">
															Board Certifications
														</label>
														<select multiple="multiple" id="form-field-select-1" name="boardcertifications[]" class="form-control search-select">
															<? getCertificationList($boardcertifications); ?>
														</select>
												</div>
									
									
									</div>
									
									
									
									
									<div class="col-md-6">
												<div class="form-group">
														<label class="control-label">
															Number of Attorneys
														</label>
														<select id="num_of_attorneys" name="num_of_attorneys" class="form-control search-select">
															<option value="">&nbsp;</option>
															<? if ($company->num_of_attorneys !="") { ?>
															<option selected><?=$company->num_of_attorneys?></option>
															<? } ?>
															<option>1 - 25</option>
															<option>26 - 60</option>
															<option>61+</option>
															
														</select>	
													</div>
												</div><!-- End md-6 -->

									<div class="col-md-6">
										
											
											
										<div class="form-group">
										<label for="form-field-select-4">
											Bar Admittance States
										</label>
										<select multiple="multiple" id="barstate" name="barstate[]"  class="form-control search-select">
											<option value="AL" <? if (in_array("AL",$barstates)) { echo "selected"; } ?>>Alabama</option>
											<option value="AK" <? if (in_array("AK",$barstates)) { echo "selected"; } ?>>Alaska</option>
											<option value="AZ" <? if (in_array("AZ",$barstates)) { echo "selected"; } ?>>Arizona</option>
											<option value="AR" <? if (in_array("AR",$barstates)) { echo "selected"; } ?>>Arkansas</option>
											<option value="CA" <? if (in_array("CA",$barstates)) { echo "selected"; } ?>>California</option>
											<option value="CO" <? if (in_array("CO",$barstates)) { echo "selected"; } ?>>Colorado</option>
											<option value="CT" <? if (in_array("CT",$barstates)) { echo "selected"; } ?>>Connecticut</option>
											<option value="DE" <? if (in_array("DE",$barstates)) { echo "selected"; } ?>>Delaware</option>
											<option value="FL" <? if (in_array("FL",$barstates)) { echo "selected"; } ?>>Florida</option>
											<option value="GA" <? if (in_array("GA",$barstates)) { echo "selected"; } ?>>Georgia</option>
											<option value="HI" <? if (in_array("HI",$barstates)) { echo "selected"; } ?>>Hawaii</option>
											<option value="ID" <? if (in_array("ID",$barstates)) { echo "selected"; } ?>>Idaho</option>
											<option value="IL" <? if (in_array("IL",$barstates)) { echo "selected"; } ?>>Illinois</option>
											<option value="IN" <? if (in_array("IN",$barstates)) { echo "selected"; } ?>>Indiana</option>
											<option value="IA" <? if (in_array("IA",$barstates)) { echo "selected"; } ?>>Iowa</option>
											<option value="KS" <? if (in_array("KS",$barstates)) { echo "selected"; } ?>>Kansas</option>
											<option value="KY" <? if (in_array("KY",$barstates)) { echo "selected"; } ?>>Kentucky</option>
											<option value="LA" <? if (in_array("LA",$barstates)) { echo "selected"; } ?>>Louisiana</option>
											<option value="ME" <? if (in_array("ME",$barstates)) { echo "selected"; } ?>>Maine</option>
											<option value="MD" <? if (in_array("MD",$barstates)) { echo "selected"; } ?>>Maryland</option>
											<option value="MA" <? if (in_array("MA",$barstates)) { echo "selected"; } ?>>Massachusetts</option>
											<option value="MI" <? if (in_array("MI",$barstates)) { echo "selected"; } ?>>Michigan</option>
											<option value="MN" <? if (in_array("MN",$barstates)) { echo "selected"; } ?>>Minnesota</option>
											<option value="MS" <? if (in_array("MS",$barstates)) { echo "selected"; } ?>>Mississippi</option>
											<option value="MO" <? if (in_array("MO",$barstates)) { echo "selected"; } ?>>Missouri</option>
											<option value="MT" <? if (in_array("MT",$barstates)) { echo "selected"; } ?>>Montana</option>
											<option value="NE" <? if (in_array("NE",$barstates)) { echo "selected"; } ?>>Nebraska</option>
											<option value="NV" <? if (in_array("NV",$barstates)) { echo "selected"; } ?>>Nevada</option>
											<option value="NH" <? if (in_array("NH",$barstates)) { echo "selected"; } ?>>New Hampshire</option>
											<option value="NJ" <? if (in_array("NJ",$barstates)) { echo "selected"; } ?>>New Jersey</option>
											<option value="NM" <? if (in_array("NM",$barstates)) { echo "selected"; } ?>>New Mexico</option>
											<option value="NY" <? if (in_array("NY",$barstates)) { echo "selected"; } ?>>New York</option>
											<option value="NC" <? if (in_array("NC",$barstates)) { echo "selected"; } ?>>North Carolina</option>
											<option value="ND" <? if (in_array("ND",$barstates)) { echo "selected"; } ?>>North Dakota</option>
											<option value="OH" <? if (in_array("OH",$barstates)) { echo "selected"; } ?>>Ohio</option>
											<option value="OK" <? if (in_array("OK",$barstates)) { echo "selected"; } ?>>Oklahoma</option>
											<option value="OR" <? if (in_array("OR",$barstates)) { echo "selected"; } ?>>Oregon</option>
											<option value="PA" <? if (in_array("PA",$barstates)) { echo "selected"; } ?>>Pennsylvania</option>
											<option value="RI" <? if (in_array("RI",$barstates)) { echo "selected"; } ?>>Rhode Island</option>
											<option value="SC" <? if (in_array("SC",$barstates)) { echo "selected"; } ?>>South Carolina</option>
											<option value="SD" <? if (in_array("SD",$barstates)) { echo "selected"; } ?>>South Dakota</option>
											<option value="TN" <? if (in_array("TN",$barstates)) { echo "selected"; } ?>>Tennessee</option>
											<option value="TX" <? if (in_array("TX",$barstates)) { echo "selected"; } ?>>Texas</option>
											<option value="UT" <? if (in_array("UT",$barstates)) { echo "selected"; } ?>>Utah</option>
											<option value="VT" <? if (in_array("VT",$barstates)) { echo "selected"; } ?>>Vermont</option>
											<option value="VA" <? if (in_array("VA",$barstates)) { echo "selected"; } ?>>Virginia</option>
											<option value="WA" <? if (in_array("WA",$barstates)) { echo "selected"; } ?>>Washington</option>
											<option value="WV" <? if (in_array("WV",$barstates)) { echo "selected"; } ?>>West Virginia</option>
											<option value="WI" <? if (in_array("WI",$barstates)) { echo "selected"; } ?>>Wisconsin</option>
											<option value="WY" <? if (in_array("WY",$barstates)) { echo "selected"; } ?>>Wyoming</option>
										</select>
									</div>		
	
									    
									</div>			
												
											    <div class="col-md-6">
												<div class="form-group">
														<label class="control-label">
															Years of Practice
														</label>
														<select id="years_of_practice" name="years_of_practice" class="form-control search-select">
															<option value="">&nbsp;</option>
															<? if ($company->years_of_practice !="") { ?>
															<option selected><?=$company->years_of_practice?></option>
															<? } ?>
															<option>0 - 5</option>
															<option>6 - 10</option>
															<option>11 - 15</option>
															<option>16 - 20</option>
															<option>21+ </option>
														</select>	
											</div>
											</div><!-- End md-6 -->
											
											
		
									</div><!-- End Business Information -->
									
									<div class="row">
									<div class="col-md-12">
									<label class="control-label">Diversity Certifications</label>
										<div class="form-group">		
										<label class="checkbox-inline">
										<input type="checkbox" value="MBA" name="certifications[]" <? if (in_array("MBA", getCertifications($company->ID))) echo "checked"; ?>  class="grey">MBE</label>
										<label class="checkbox-inline">
										<input type="checkbox" value="WMBE" name="certifications[]" <? if (in_array("WMBE", getCertifications($company->ID))) echo "checked"; ?>  class="grey">WMBE</label>
										<label class="checkbox-inline">
										<input type="checkbox" value="LGBT" name="certifications[]" <? if (in_array("LGBT", getCertifications($company->ID))) echo "checked"; ?> class="grey">LGBT</label>
										<label class="checkbox-inline">
										<input type="checkbox" value="Disabled Veteran"   name="certifications[]" <? if (in_array("MBA", getCertifications($company->ID))) echo "checked"; ?> class="grey">Disabled Veteran</label>
										</div>
												
												<div class="form-group">
														<label class="control-label">
															Diversity Statement
														</label>
														<textarea maxlength="1000" rows="10" id="diversity_statement" name="diversity_statement" class="form-control limited"><?=$company->diversity_statement?></textarea>
												</div>
												
												<div class="form-group">
														<label class="control-label">
															Diversity Statement Link (Web Site)
														</label>
														<input type="text" value="<?=$company->diversity_link?>" placeholder="http://www...." id="diversity_link" name="diversity_link" class="form-control">
												</div>
												
												
												<div class="form-group">
														<label class="control-label">
															Company Overview 
														</label>
														<textarea maxlength="1000" rows="10" id="company_overview" name="company_overview" class="form-control limited"><?=$company->company_overview?></textarea>
														</div>
												
												</div><!-- End 12 -->
												
												
												<div class="col-md-12">	
												
												<div class="form-group">
														<label class="control-label">
															Board Certifications
														</label>
														<select multiple="multiple" id="form-field-select-1" name="boardcertifications[]" class="form-control search-select">
															<? getCertificationList($boardcertifications); ?>
														</select>
												</div>
												
												
												
												<label class="control-label">Clients (Private)</label> <a href="#AddClientPrivate" data-toggle="modal" class="label btn-dark-grey">+ Add Client (Private)</a>	

												<div class="form-group">
													<select multiple="multiple" id="clients_private" name="clients_private[]" class="form-control search-select">
														<? getClientsPrivateList($privateClients); ?>
													</select>
												</div>
													
												
												
												
												<label class="control-label"> Clients (Government)</label> <a href="#AddClientGoverment" data-toggle="modal" class="label btn-dark-grey">+ Add Client (Goverment)</a>	
													<div class="form-group">	
													<select multiple="multiple" id="clients_public" name="clients_public[]" class="form-control search-select">
														<? getClientsPublicList($publicClients); ?>
													</select>
													</div>
												</div>
												
												<div class="col-md-12">	
												<div class="form-group">
														<label class="control-label">
															Significant Engagements
														</label> <a href="#SignificantEngagement" data-toggle="modal" class="label btn-dark-grey">+ Add Significant Engagement</a>
												
												<div id="significant_engagements">
												
												</div>
												
												</div>
												
												
												
												
												
												</div><!-- md12 -->
												
												
												
												
												<div class="col-md-12">	
												<div class="form-group">
														<label class="control-label">
															Professional Associations
														</label><a href="#ProfessionalAssociation" data-toggle="modal" class="label btn-dark-grey">+ Add Professional Association</a>
												
														
												<select multiple="multiple" id="association" name="association[]" class="form-control search-select">
												
													<? getAssociationList(getAssociations("company",$company->ID)); ?>
																											
												</select>
											
												</div>
												</div>
												<div class="col-md-4">	
												<div class="form-group">
													<label class="control-label">Government Clearance Level</label>
													<select id="governmentclearance" name="governmentclearance" class="form-control search-select">
															<option <? if ($company->governmentclearance=="None") { echo "selected"; } ?>>None</option>
															<option <? if ($company->governmentclearance=="Confidential") { echo "selected"; } ?>>Confidential</option>
															<option <? if ($company->governmentclearance=="Secret") { echo "selected"; } ?>>Secret</option>
															<option <? if ($company->governmentclearance=="TS/SCI") { echo "selected"; } ?>>TS/SCI</option>
														</select>	

												</div>
												</div>
												
												
												<div class="col-md-4">	
												<div class="form-group">
													<label class="control-label">Martindale Hubble Company Profile Link</label>
													<input type="text" placeholder="http://www..." id="martingale" name="martingale"  value="<?=$company->martingale?>" class="form-control">
												</div>
												</div>
												
												<div class="col-md-4">	
												<div class="form-group">
													<label class="control-label">LinkedIn Company Profile Link</label>
													<input type="text" placeholder="http://www..." id="linkedin" name="linkedin" value="<?=$company->linkedin?>" class="form-control">
												</div>
												</div>
												

												<div class="col-md-12">	
												
												
														<label class="control-label">
															Awards & Honors
														</label> <a href="#AwardsHonors" data-toggle="modal" class="label btn-dark-grey">+ Add Award / Honors</a>
														<div class="form-group" id="awards_honors">
												
														</div>
												</div>
												
												<div class="col-md-12">	
												
														<label class="control-label">
															Speaking Engagements
														</label> <a href="#SpeakingEngagements" data-toggle="modal" class="label btn-dark-grey">+ Add Speaking Engagements</a>
												
												<div class="form-group" id="speakingengagements">
												
												</div>
												
												
												
														<label class="control-label">
															Publications & Press
														</label> <a href="#PublicationPress" data-toggle="modal" class="label btn-dark-grey">+ Add Publication or Press</a>
												
												<div class="form-group" id="publicationpress">
												
												</div>
												</div>
												
												<div class="col-md-12">
												<div class="form-group">
														<label class="control-label">
															Languages
														</label>
														<select multiple="multiple" id="language" name="languages[]" class="form-control search-select">
															<option value="Arabic" <? if (in_array("Arabic",$languages)) { echo "selected"; } ?>>Arabic</option>
															<option value="Cantonese" <? if (in_array("Cantonese",$languages)) { echo "selected"; } ?>>Chinese (Cantonese)</option>
															<option value="English" <? if (in_array("English",$languages)) { echo "selected"; } ?>>English</option>
															<option value="French"  <? if (in_array("French",$languages)) { echo "selected"; } ?>>French</option>
															<option value="Farsi" <? if (in_array("Farsi",$languages)) { echo "selected"; } ?>>Farsi (Persian)</option>
															<option value="German" <? if (in_array("German",$languages)) { echo "selected"; } ?>>German</option>
															<option value="Japanese" <? if (in_array("Japanese",$languages)) { echo "selected"; } ?>>Japanese</option>
															<option value="Mandarin" <? if (in_array("Mandarin",$languages)) { echo "selected"; } ?>>Chinese (Mandarin)</option>
															<option value="Portuguese" <? if (in_array("Portuguese",$languages)) { echo "selected"; } ?>>Portuguese</option>
															<option value="Russian" <? if (in_array("Russian",$languages)) { echo "selected"; } ?>>Russian</option>
															<option value="Spanish" <? if (in_array("Spanish",$languages)) { echo "selected"; } ?>>Spanish</option>
														</select>
												</div>
												</div>
												
												
												
												<div class="col-md-12">
											
												
												<div class="form-group">
														<label class="control-label">
															Web Site
														</label>
														<input type="text" value="<?=$company->website?>" placeholder="" class="form-control" id="website" name="website">
													</div>
	</div>
                                                    
												
<div class="col-md-4">    										
<div class="form-group">
<label class="control-label">Ability to Work On Site</label><br/>
<select name="workonsite" class="form-control select">
<option value="yes" <? if ($user->workonsite == "yes") { echo "selected"; } ?>>Yes</option>
<option value="no" <? if ($user->workonsite == "no") { echo "selected"; } ?>>No</option>
</select>
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
													<button class="btn btn-green btn-block"  type="submit">
														Update <i class="fa fa-arrow-circle-right"></i>
													</button>
												</div>
											</div>
										</form>
									</div>


									<!-- End Account Users Panel -->