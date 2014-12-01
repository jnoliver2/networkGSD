
	<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-attachment-2"></i>
									<a href="#">
										Pages
									</a>
								</li>
								<li class="active">
									Profiles
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
								<h1>Profile Listing <small>You can filter to be specific! </small></h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<form method="post">
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<!-- start: SEARCH RESULT -->
							
							<div class="col-md-12 input-group well well-lg filter"> 
							
							
							<div class="col-md-12">
							<input type="text" class="filter form-control" name="searchname" value="<?=$_POST['searchname']?>" placeholder="Search Name or Business Name">
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-3">
										<div class="form-group">
										<label for="form-field-select-3">Practice Areas</label>
										<select id="form-field-select-3" name="practicearea" class="filter form-control filter search-select">
											<option value="">&nbsp;</option>
											<? getPracticeAreaList(array($_POST['practicearea'])); ?>
										</select>

										</select>
									</div>
									</div><!-- End md-3 -->
							
									
							
									<div class="col-xs-12 col-sm-12 col-md-3">
										<div class="form-group">
										<label for="form-field-select-3">
											Bar Admittance States 
										</label>
										<select name="barstate" id="form-field-select-3" class="form-control search-select">
											<option value="">&nbsp;</option>
										<? if ($_POST['barstate']!="") { ?>
											<option selected value="<?=$_POST['barstate']?>"><?=$states[$_POST['barstate']]?></option>
										<? } ?>
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
									</div><!-- End md-3 -->
							
									<div class="col-xs-12 col-sm-12 col-md-3">
									<div class="form-group">
									<label for="form-field-select-3">
									Diversity
									</label>
									<select id="form-field-select-3" class="form-control search-select">
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
										<select name="ethnicity" id="form-field-select-3" class="form-control search-select">
											<option value="">&nbsp;</option>
															<option >&nbsp;</option>
														<option <? if ($_POST['ethnicity'] =="White") { echo "selected"; } ?>>White</option>
														<option <? if ($_POST['ethnicity'] =="African-American") { echo "selected"; } ?>>African-American</option>
														<option <? if ($_POST['ethnicity'] =="American Indian") { echo "selected"; } ?>>American Indian </option>
														<option <? if ($_POST['ethnicity'] =="Hispanic/Latino") { echo "selected"; } ?>>Hispanic/Latino </option>
														<option <? if ($_POST['ethnicity'] =="Asian / Chinese / Japanese") { echo "selected"; } ?>>Asian / Chinese / Japanese </option>
														<option <? if ($_POST['ethnicity'] =="Other") { echo "selected"; } ?>>Other</option>

										</select>
									</div>
									</div><!-- End md-3 -->
									
									<div class="col-md-9"></div>
									<div class="col-xs-12 col-sm-12 col-md-3">
											<button type=submit class="btn btn-blue" type="button"><i class="fa fa-search"></i> SEARCH</button> 
											<button class="btn btn-green" type="button"><i class="fa fa-search-plus"></i> ADVANCED SEARCH</button> 
									</div>
							</div>
							
							</form>
							
							<div class="clearfix"></div>
							
							
							<div class="search-classic col-md-9">
								
								
								
								<h3><?=mysql_num_rows($companies) ?> Companies</h3>
								<hr>
								
								<? while ($row=mysql_fetch_assoc($companies)) { 
									
								$mainAddr = mysql_query("select * from address where address_type = 'company' and related_id = '".$row['ID']."' order by ID ");
								if (mysql_num_rows($mainAddr)>0) {
									$primary = mysql_fetch_assoc($mainAddr);
									$primaryState = $states[$primary['st']];
								} else {
									$primaryState = "Unknown";
								}
								
									
								if ($row['logo'] == "") { $row['logo'] =  "/network/uploads/company.png"; } else { $row['logo'] ="/network/uploads/".$company->logo; } ?> 
													
								
								
								<div class="search-result col-md-12" style="padding-left:0px;">
								<div class="row">
								
								<div class="search-post-image col-xs-4 col-sm-4 col-md-3">
									<a href="/network/?page=profile-company&company_id=<?=$row['ID']?>"><img src="<?=$row['logo']?>" alt="" border=0></a>
								</div>
								
								<div class="search-post-content col-xs-8 col-sm-8 col-md-9">
									<i class="fa fa-archive filter-icon filter-green"></i><h3><a href="/network/?page=profile-company&company_id=<?=$row['ID']?>"><?=$row['company_name']?></a></h3>
											<div class="search-post-info">
                                                <div class="">
                                                    <i class="fa fa-suitcase"></i> <?= $primaryState ?>
                                                </div><br/><div class="">
                                                    <i class="fa fa-globe"></i>
                                                    <? $barstates = getBarStates("company",$row['ID']); ?>
                                                    
                                                    <? foreach ($barstates as $thisBarState) { echo $states[$thisBarState]."  &bull;  "; } ?>                                             </div><div class="">
                                                    <i class="fa fa-legal"></i>  <? $x=0; $pas = mysql_query("select name from practicearea join practicearea_list on practicearea.practicearea_id = practicearea_list.id  where related_id = '".$row['ID']."' and practicearea_type = 'company'"); while ($rowpa=mysql_fetch_assoc($pas)) { echo $rowpa['name']; $x++; if ($x<mysql_num_rows($pas)) echo " &bull; "; } ?> 
                                                </div>
                                            </div>

									<p>
											<? 
										if (strlen($row['company_overview'])>200) { ?>
										<?=substr($row['company_overview'],0,200)?>...
										<? } else { ?>
										<?=$row['company_overview']?>
										<? } ?>
									</p>
									<div class="col-md-6">
								 <button class="btn btn-green" type="button">Connect <i class="fa fa-chain"></i></button> 
									</div>
									<div class="col-md-6" style="text-align:right;">
									<h2 class="text-zero"><?=getPoints($row['ID'],'company')?></h2>
									</div>
									
								</div><!-- End Content -->
								</div></div>
								<div class="clearfix"></div>
															
																<? } ?>
								
								
								
								
								
								
								
								
																
								
								<h3><?=mysql_num_rows($profiles) ?>  People</h3>
								<hr>
								
								
								
								<? while ($row=mysql_fetch_assoc($profiles)) {
								
								if ($row['image'] == "")  { $row['image'] = "/network/uploads/user.png"; } else { $row['image'] = "uploads/".$row['image']; }

								 ?>
								
								<div class="search-result col-md-12" style="padding-left:0px;">
								<div class="row">
								
								<div class="search-post-image col-xs-4 col-sm-4 col-md-3">
									<a href="/network/?page=profile&profile_id=<?=$row['ID']?>"><img src="<?=$row['image']?>" style="max-width: 250px; max-height: 250px;" alt="" border=0></a>
								</div>
								
								<div class="search-post-content col-xs-8 col-sm-8 col-md-9">
									<i class="fa fa-user filter-icon filter-green"></i><h3><a href="/network/?page=profile&profile_id=<?=$row['ID']?>"><?=$row['first_name']?> <?=$row['last_name']?></a></h3>
																				<div class="search-post-info">
                                                <div class="">
                                                    <i class="fa fa-briefcase"></i> <?=$row['title']?> &bull; <?=$row['company_name']?>
                                                </div><br/><div class="">
                                                    <i class="fa fa-globe"></i>    <? $barstates = getBarStates("user",$row['ID']); ?>
                                                    
                                                    <?  $hasPrev=false; foreach ($barstates as $thisBarState) { if ($hasPrev==false) { $hasPrev=true; } else { echo " &bullet; "; } echo $states[$thisBarState]; } ?>                                               </div><div class="">
                                                    <i class="fa fa-legal"></i>  <? $x=0; $pas = mysql_query("select name from practicearea join practicearea_list on practicearea.practicearea_id = practicearea_list.id  where related_id = '".$row['ID']."' and practicearea_type = 'user'"); while ($rowpa=mysql_fetch_assoc($pas)) { echo $rowpa['name']; $x++; if ($x<mysql_num_rows($pas)) echo " &bull; "; } ?>                                                 </div>
                                            </div>

									<p>
										<? 
										if (strlen($row['bio'])>200) { ?>
										<?=substr($row['bio'],0,200)?>...
										<? } else { ?>
										<?=$row['bio']?>
										<? } ?>
									</p>
										
										
									<div class="col-md-6">
									
									<? 
									
									//get connection stauts
									$sqlCheckConnection = "select * from connections where from_id = '".$_SESSION['userid']."' and from_type = 'user' and to_type = 'user' and to_id = '".$row['ID']."'";
									$rsCheckConnection = mysql_query($sqlCheckConnection);
									if (mysql_num_rows($rsCheckConnection)>0) {
										$rowCheckConnection = mysql_fetch_assoc($rsCheckConnection);
										$connectionStatus = $rowCheckConnection['approved'];
									} else {
										$connectionStatus = -1;
									}
									
									?>
									

								<? if ($connectionStatus<0) { ?>
										
								
										<button class="btn btn-green" onClick="window.location='/network/?page=profile&profile_id=<?=$row['ID']?>&requestconnect=1';">
											Connect <i class="fa fa-chain"></i>
										</button>
										
										<? } elseif ($connectionStatus==0) { ?>
										
										<button class="btn btn-grey btn-block" >
											Connection Requested <i class="fa fa-chain"></i>
										</button>
										<? } ?>
										
									
									</div>
									<div class="col-md-6" style="text-align:right;">
									<h2 class="text-zero" style=""><?=getPoints($row['ID'],'user')?></h2>
									</div>
									
								</div><!-- End Content -->
								</div></div>
								<div class="clearfix"></div>
							
															
																
								<? } ?>	
								
							
								<!--
								<ol class="pagination text-center pull-right">
									<li class="prev disabled">
										<a href="#">
											Prev
										</a>
									</li>
									<li class="active">
										<a href="#">
											1
										</a>
									</li>
									<li>
										<a href="#">
											2
										</a>
									</li>
									<li>
										<a href="#">
											3
										</a>
									</li>
									<li>
										<a href="#">
											4
										</a>
									</li>
									<li>
										<a href="#">
											5
										</a>
									</li>
									<li class="next">
										<a href="#">
											Next
										</a>
									</li>
								</ol>
								-->
							</div>
							<!-- end: SEARCH RESULT -->
						
						
						<div class="col-md-3">Advertisement Area</div>
						</div>
						
						
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
		</div>