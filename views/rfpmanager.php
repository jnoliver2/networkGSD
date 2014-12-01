

<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-file"></i>
									<a href="#">
										Pages
									</a>
								</li>
								<li class="active">
									RFP Manager
								</li>
								<li class="search-box">
									<form class="sidebar-search">
										<div class="form-group">
											<input type="text" placeholder="Start Searching...">
											<button class="submit">
												<i class="clip-search-3"></i>
											</button>
										</div>
									</form>
								</li>
							</ol>
							<div class="page-header">
								<h1>RFP Manager <small>Manage Posted Request for Proposals/Work</small></h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<div class="tabbable">
								<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
									<li class="active">
										<a data-toggle="tab" href="#panel_rfp_list">
											RFP List
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_add_rfp">
											Add RFP
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_edit_popup">
											+ 
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="panel_rfp_list" class="tab-pane in active">
										<div class="row">
											<div class="col-md-12">
											
											<!-- start: TABLE WITH IMAGES PANEL -->
							<div class="panel panel-default">
								
								
									<table class="table table-striped table-bordered table-hover" id="sample-table-2">
										<thead>
											<tr>
												<th class="center">RFP Number</th>
												<th>RFP Name</th>
												<th class="hidden-xs">States</th>
												<th class="hidden-xs">Applicants</th>
												<th class="hidden-xs">RFP Submission Deadline</th>
												<th>Options</th>
											</tr>
										</thead>
										<tbody>  
										
										
										<?  while ($row=mysql_fetch_assoc($rfplist)) { ?>
										
											<tr>
												<td class="center"><?=$row['ID']?></td>
												<td><?=$row['rfp_title']?></td>
												<td class="hidden-xs"><?=$row['bar_admittance_state']?></td>
												<td class="hidden-xs">0</td>
												<th class="hidden-xs"><?=$row['rfp_submission_deadline']?></th>
												<td class="center">
												<div class="visible-md visible-lg hidden-sm hidden-xs">
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
													<a href="/network/?page=rfpmanager&delete=<?=$row['ID']?>" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group">
														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a  tabindex="-1" href="/network/?page=rfpmanager&delete=<?=$row['ID']?>">
																	<i class="fa fa-times"></i> Remove 
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											
										<? } ?>	
											
											
											
											
											
										</tbody>
									</table>
								
							</div>
							<!-- end: TABLE WITH IMAGES PANEL -->
											
											
											
											
											
											</div>
										</div>
									</div>
									<div id="panel_add_rfp" class="tab-pane">
										<form method="post" role="form" id="form">
										
											<div class="row">
												<div class="col-md-12">
													<h3>RFP Information</h3>
													<p>* Field Required </p>
													<hr>
												</div>
												
												
												
												
												
												<div class="col-md-2"><div class="form-group">
														<label class="control-label">
															RFP Number
														</label>
														<input type="text"  placeholder="000001" class="form-control" id="=" name="" disabled="disabled">
												</div></div>
												
												<div class="col-md-10">
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
															Law Firm / Business Name*
														</label>
												<input type="text"  placeholder="" class="form-control" id="=" name="business_name" value="<?=$company->company_name?>">
												</div>
													
												<div class="form-group">
														<label class="control-label">
															Company Overview*
														</label>
														
												<textarea maxlength="1000" id="form-field-23" class="form-control limited" rows="10"><?=$company->company_overview?></textarea>
												</div>	
                                           </div><!-- End 12 -->    
                                                                                          
                                           <div class="col-md-6">
                                           <div class="form-group">
												<label class="control-label">
															Project Start*
												</label>
												<div class="input-group">
													<span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
													<input type="text" data-date-format="yyyy-mm-dd" data-date-viewmode="years" name="rfp_project_start" class="form-control date-picker">
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
													<input type="text" data-date-format="yyyy-mm-dd" data-date-viewmode="years" name="rfp_project_end" class="form-control date-picker">
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
												<input type="text" data-date-format="yyyy-mm-dd" data-date-viewmode="years" name="rfp_submission_deadline" class="form-control date-picker">
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
										<select multiple="multiple" id="form-field-select-1" name="practiceAreas[]" class="form-control search-select"><? getPracticeAreaList($practiceAreas); ?></select>
										</div>                                        
                                    </div>
												<div class="col-md-12">
												<div class="form-group">
												<label for="form-field-select-4">
													Bar Admittance States*
												</label>
												<select multiple="multiple" id="form-field-select-4" name="bar_admittance_states[]" class="form-control search-select">
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
													<select id="form-field-select-2" name="number_of_attorneys" class="form-control search-select">
														<option value="">&nbsp;</option>
														<option>Any Number</option>
														<option>1 - 25</option>
														<option>25 - 60 </option>
														<option>60+</option>
														
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
														
												<textarea maxlength="1000" id="rfp_description" name="rfp_description" class="form-control limited" rows="10" placeholder="Give a detailed description related to ### work and any additional information that needs to be included."></textarea>
												</div>	
												
												
														
												
												
												
										
											
												<div class="form-group">
													<label for="form-field-select-7">
														Languages
													</label>
													<select multiple="multiple" name="languages[]" id="form-field-select-1" class="form-control search-select">
															<? $languages = array(); ?>
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
												<select id="form-field-select-3" nam="ethnicity" class="form-control search-select">
														<option value="">&nbsp;</option>
														<option>N/A</option>
														<option>White</option>
														<option>African-American</option>
														<option>American Indian </option>
														<option>Hispanic/Latino </option>
														<option>Asian / Chinese / Japanese </option>
														<option>Other</option>
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
														By clicking SUBMIT RFP, you are agreeing to the Private Policy and Terms &amp; Conditions.
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
									<div id="panel_analytics" class="tab-pane">
										<table class="table table-striped table-bordered table-hover" id="projects">
											<thead>
												<tr>
													<th class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></th>
													<th>Project Name</th>
													<th class="hidden-xs">Client</th>
													<th>Proj Comp</th>
													<th class="hidden-xs">%Comp</th>
													<th class="hidden-xs center">Priority</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>IT Help Desk</td>
													<td class="hidden-xs">Master Company</td>
													<td>11 november 2014</td>
													<td class="hidden-xs">
													<div class="progress progress-striped active progress-sm">
														<div style="width: 70%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar" class="progress-bar progress-bar-warning">
															<span class="sr-only"> 70% Complete (danger)</span>
														</div>
													</div></td>
													<td class="center hidden-xs"><span class="label label-danger">Critical</span></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right">
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>PM New Product Dev</td>
													<td class="hidden-xs">Brand Company</td>
													<td>12 june 2014</td>
													<td class="hidden-xs">
													<div class="progress progress-striped active progress-sm">
														<div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-info">
															<span class="sr-only"> 40% Complete</span>
														</div>
													</div></td>
													<td class="center hidden-xs"><span class="label label-warning">High</span></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right">
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>ClipTheme Web Site</td>
													<td class="hidden-xs">Internal</td>
													<td>11 november 2014</td>
													<td class="hidden-xs">
													<div class="progress progress-striped active progress-sm">
														<div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
															<span class="sr-only"> 90% Complete</span>
														</div>
													</div></td>
													<td class="center hidden-xs"><span class="label label-success">Normal</span></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right">
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>Local Ad</td>
													<td class="hidden-xs">UI Fab</td>
													<td>15 april 2014</td>
													<td class="hidden-xs">
													<div class="progress progress-striped active progress-sm">
														<div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning">
															<span class="sr-only"> 50% Complete</span>
														</div>
													</div></td>
													<td class="center hidden-xs"><span class="label label-success">Normal</span></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right">
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>Design new theme</td>
													<td class="hidden-xs">Internal</td>
													<td>2 october 2014</td>
													<td class="hidden-xs">
													<div class="progress progress-striped active progress-sm">
														<div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-success">
															<span class="sr-only"> 20% Complete (warning)</span>
														</div>
													</div></td>
													<td class="center hidden-xs"><span class="label label-danger">Critical</span></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right">
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>IT Help Desk</td>
													<td class="hidden-xs">Designer TM</td>
													<td>6 december 2014</td>
													<td class="hidden-xs">
													<div class="progress progress-striped active progress-sm">
														<div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
															<span class="sr-only"> 40% Complete (warning)</span>
														</div>
													</div></td>
													<td class="center hidden-xs"><span class="label label-warning">High</span></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right">
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
