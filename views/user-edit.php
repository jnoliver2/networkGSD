									<form method="post" role="form" id="form"  enctype="multipart/form-data">
												<div class="col-md-12">
													<h3>Profile Account Info</h3>
													<hr>
												</div>
												<div class="col-md-12">
												
									
													
										
													<div class="form-group">
														<label>
															Profile Image Upload
														</label>
														<div class="fileupload fileupload-new" data-provides="fileupload">
															<div class="fileupload-new thumbnail" style="width: 250px; height: 250px;"><img src="<?=$user->image?>" alt="">
															</div>
															<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 250px; max-height: 250px; line-height: 20px;"></div>
															<div class="user-edit-image-buttons">
																<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture"></i> Change</span>
																	<input type="file" name="new_photo">
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
															User Email
														</label>
												<input type="text" id="email" name="email" placeholder="Enter your email" class="form-control" value="<?=$user->email?>" >
														
													</div>
												</div><!-- End Account Type -->
												
												<div class="col-md-4">
												<div class="form-group">
														<label class="control-label">
															Password
														</label>
												<input type="text" placeholder="***********" class="form-control" id="password" name="password_new">
														
													</div>
												</div><!-- End Account Type -->
												
												
												<div class="col-md-4">
												<div class="form-group">
														<label class="control-label">
															Confirm Password
														</label>
												<input type="text" placeholder="***********" class="form-control" id="password2" name="password2_new">
														
													</div>
												</div><!-- End Account Type -->
												
												
												<div class="col-md-12"><hr></div>
					
					
												
												
												
												
												<div class="col-md-2">
												<div class="form-group">
														<label class="control-label">
															Prefix
														</label>
												<select id="prefix" name="prefix" class="form-control search-select">
														<option value="">&nbsp;</option>
														<option <? if ($user->prefix =="Mr.") { echo "selected"; } ?>>Mr.</option>
														<option <? if ($user->prefix =="Mrs.") { echo "selected"; } ?>>Mrs.</option>
														<option <? if ($user->prefix =="Ms.") { echo "selected"; } ?>>Ms.</option>
														<option <? if ($user->prefix =="Dr.") { echo "selected"; } ?>>Dr.</option>
														<option <? if ($user->prefix =="Honorable") { echo "selected"; } ?>>Honorable</option>
											</select>
														
													</div>
												</div><!-- End PreFix -->
												
												<div class="col-md-3">
												<div class="form-group">
														<label class="control-label">
															First Name
														</label>
														<input type="text" placeholder="" class="form-control" id="first_name" name="first_name" value="<?=$user->first_name?>">
													</div>
												</div><!-- End PreFix -->
												
												<div class="col-md-3">
												<div class="form-group">
														<label class="control-label">
															Middle Name
														</label>
														<input type="text" placeholder="" class="form-control" id="middle_name" name="middle_name" value="<?=$user->middle_name?>">
													</div>
												</div><!-- End PreFix -->
												
												
												<div class="col-md-3">
												<div class="form-group">
														<label class="control-label">
															Last Name
														</label>
														<input type="text" placeholder="" class="form-control" id="last_name" name="last_name" value="<?=$user->last_name?>">
													</div>
												</div><!-- End PreFix -->
												
												<div class="col-md-1">
												<div class="form-group">
														<label class="control-label">
															Suffix
														</label>
														  <select id="suffix" name="suffix" class="form-control search-select">
															<option value="">&nbsp;</option>
															<option  <? if ($user->suffix =="Sr.") { echo "selected"; } ?>>Sr.</option>
															<option  <? if ($user->suffix =="Jr.") { echo "selected"; } ?>>Jr.</option>
															<option  <? if ($user->suffix =="III") { echo "selected"; } ?>>III</option>
															<option  <? if ($user->suffix =="Esq.") { echo "selected"; } ?>>Esq.</option>
															<option  <? if ($user->suffix =="PhD") { echo "selected"; } ?>>PhD</option>
															<option  <? if ($user->suffix =="MD") { echo "selected"; } ?>>MD</option>
														  </select>
													</div>
												</div><!-- End PreFix -->
												
												
												
												
												
												
												
												
												
											
												
												<div class="col-md-4">
												<div class="form-group">
														<label class="control-label">
															Gender
														</label>
												<select id="form-field-select-3" name="gender" class="form-control search-select">
														<option>&nbsp;</option>
														<option <? if ($user->gender =="Male") { echo "selected"; } ?>>Male</option>
														<option  <? if ($user->gender =="Female") { echo "selected"; } ?>>Female </option>
														<option  <? if ($user->gender =="Transgender") { echo "selected"; } ?>>Transgender </option>
												</select>
														
													</div>
												</div><!-- End Account Type -->
												
												
												<div class="col-md-4">
												<div class="form-group">
														<label class="control-label">
															Ethnicity
														</label>
												<select id="form-field-select-3" name="ethnicity" class="form-control search-select">
														<option >&nbsp;</option>
														<option <? if ($user->ethnicity =="White") { echo "selected"; } ?>>White</option>
														<option <? if ($user->ethnicity =="African-American") { echo "selected"; } ?>>African-American</option>
														<option <? if ($user->ethnicity =="American Indian") { echo "selected"; } ?>>American Indian </option>
														<option <? if ($user->ethnicity =="Hispanic/Latino") { echo "selected"; } ?>>Hispanic/Latino </option>
														<option <? if ($user->ethnicity =="Asian / Chinese / Japanese") { echo "selected"; } ?>>Asian / Chinese / Japanese </option>
														<option <? if ($user->ethnicity =="Other") { echo "selected"; } ?>>Other</option>
												</select>
														
													</div>
												</div><!-- End Account Type -->
												
												
												
												<div class="col-md-4">
												<div class="form-group">
														<label class="control-label">
															Title
														</label>
												<select id="title" name="title" class="form-control search-select">
														<option value=""></option>
														<option <? if ($user->title =="Associate") { echo "selected"; } ?>>Associate</option>
														<option <? if ($user->title =="Of Counsel") { echo "selected"; } ?>>Of Counsel</option>
														<option <? if ($user->title =="Partner") { echo "selected"; } ?>>Partner</option>
														<option <? if ($user->title =="Account Manager") { echo "selected"; } ?>>Account Manager</option>
												</select>
														
													</div>
												</div><!-- End Account Type -->
												
												
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">
															Company / Firm Name
														</label>
														<input type="text" disalbed value="<?=$company->company_name?>" class="form-control" id="firstname" name="firstname">
													</div>
													
												</div>	
													<div class="col-md-6">
												<div class="form-group">
														<label class="control-label">
															Location
														</label>
														
														
														<select id="form-field-select-3" class="form-control search-select" name="location_id">
														<? while ($row=mysql_fetch_assoc($off_locs)) { ?>
															<option value="<?=$row['id']?>" <? if ($user->location_id==$row['id']) { echo "selected"; } ?>><?=$row['address1']?> <?=$row['address2']?>, <?=$row['city']?>, <?=$row['st']?> <?=$row['zip']?></option>
														<? } ?>
														
															
														</select>	
													</div>
												</div><!-- End md-4 -->
												
													
													
													<div class="col-md-6">
												<div class="form-group">
														<label class="control-label">
															Phone
														</label>
														<input type="phone" value="<?=$user->phone?>" placeholder="(305) 555-1212" class="form-control" id="phone" name="phone">
													</div>
												</div><!-- End md-4 -->
												
												
												<div class="col-md-6">
												<div class="form-group">
										<label for="form-field-select-3">
											Fax
										</label>
										<input type="fax" placeholder="(305) 555-1212" class="form-control" id="fax" name="fax" value="<?=$user->fax?>">
									</div>
												</div><!-- End md-4 -->
												
												
													
													
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
									<div class="col-md-12">
									
												
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
															<option>&nbsp;</option>
															<option <? if ($user->years_of_practice=="0 - 5") { echo "selected"; } ?>>0 - 5</option>
															<option <? if ($user->years_of_practice=="6 - 10") { echo "selected"; } ?>>6 - 10</option>
															<option <? if ($user->years_of_practice=="11 - 15") { echo "selected"; } ?>>11 - 15</option>
															<option <? if ($user->years_of_practice=="16 - 20") { echo "selected"; } ?>>16 - 20</option>
															<option <? if ($user->years_of_practice=="21+") { echo "selected"; } ?>>21+</option>
														</select>	
											</div>
											</div><!-- End md-6 -->
											
											
		
									</div><!-- End Business Information -->
									
									<div class="row">
									<div class="col-md-12">
									
												
												<div class="form-group">
<label class="control-label">Law School</label>                                               
<input type="text" id="law_school" name="law_school" placeholder="Enter your Law School" class="form-control" value="<?=$user->law_school?>" >                                                
														<label class="control-label">
															Bio
														</label>
														<textarea maxlength="1000" id="bio" name="bio" class="form-control limited" rows="10"><?=$user->bio?></textarea>
														</div>
												
												</div><!-- End 12 -->
												
												
												<div class="col-md-12">	
												
												
												
												
												
												
												<label class="control-label">Clients (Private)</label> <a href="#AddClientPrivate" data-toggle="modal" class="label btn-dark-grey">+ Add Client (Private)</a>

												<div class="form-group">
													<select multiple="multiple" id="clients_private" name="clients_private[]" class="form-control search-select">
														<? getClientsPrivateList($privateClients); ?>
													</select>
												</div>

													
												
												
												
												<label class="control-label">Clients (Government)</label>  <a href="#AddClientGoverment" data-toggle="modal" class="label btn-dark-grey">+ Add Client (Government)</a>
												
													<div class="form-group">	
													<select multiple="multiple" id="clients_public" name="clients_public[]" class="form-control search-select">
														<? getClientsPublicList($publicClients); ?>
													</select>
													</div>
												</div>
												
												
												<div class="col-md-4">	
												<div class="form-group">
													<label class="control-label">Government Clearance Level</label>
													<select id="governmentclearance" name="governmentclearance" class="form-control search-select">
															<option <? if ($user->governmentclearance=="None") { echo "selected"; } ?>>None</option>
															<option <? if ($user->governmentclearance=="Confidential") { echo "selected"; } ?>>Confidential</option>
															<option <? if ($user->governmentclearance=="Secret") { echo "selected"; } ?>>Secret</option>
															<option <? if ($user->governmentclearance=="TS/SCI") { echo "selected"; } ?>>TS/SCI</option>
														</select>	

												</div>
												</div>
												
												
												<div class="col-md-4">	
												<div class="form-group">
													<label class="control-label">Martindale Hubble Company Profile Link</label>
													<input type="text" placeholder="http://www..." id="martingale" name="martingale"  value="<?=$user->martingale?>" class="form-control">
												</div>
												</div>
												
												<div class="col-md-4">	
												<div class="form-group">
													<label class="control-label">LinkedIn Company Profile Link</label>
													<input type="text" placeholder="http://www..." id="linkedin" name="linkedin" value="<?=$user->linkedin?>" class="form-control">
												</div>
												</div>
												
												<div class="col-md-12">	
												<div class="form-group">
														<label class="control-label">
															Professional Associations
														</label> <a href="#ProfessionalAssociation" data-toggle="modal" class="label btn-dark-grey">+ Add Professional Association</a>
												
														
												<select multiple="multiple" id="association" name="association" class="form-control search-select" placeholder="Type in Professional Association Name">
                                                
                                                <? getAssociationList(getAssociations("user",$user->ID)); ?>
                                                
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
                                                
<div class="form-group">

<label class="control-label">Client Goverment</label> 
<a href="#ClientGoverment" data-toggle="modal" class="label btn-dark-grey">+ Add Client Government</a>
												
<select multiple="multiple" id="form-field-select-1" class="form-control search-select" placeholder="Type in Professional Association Name">
<option value="hbdba">Hazel B Daniels Bar Association</option>
<option value="besla">Black Entertainment and Sports Lawyers Association</option>
<option value="blac">Black Lawyers Association of Cincinnati</option>
<option value="waaal">Wisconsin Association of African-American Lawyers</option>
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
												
												</div>
												
												
													<div class="col-md-12">	
											
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
														<input type="text" value="<?=$user->website?>" placeholder="" class="form-control" id="website" name="website">
												</div>
                                           </div>
		
        

  										
<div class="col-md-4"> 
<div class="form-group">
<label class="control-label" >Ability to Work On Site</label><br/>  
<select name="workonsite" class="form-control select">
<option value="yes" <? if ($user->workonsite == "yes") { echo "selected"; } ?>>Yes</option>
<option value="no" <? if ($user->workonsite == "no") { echo "selected"; } ?>>No</option>
</select>
</div>
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
											
										</form>
									
										