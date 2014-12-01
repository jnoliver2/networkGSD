<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="/GLADMIN/assets/plugins/select2/select2.css">
		<link rel="stylesheet" href="/GLADMIN/assets/plugins/datepicker/css/datepicker.css">
		<link rel="stylesheet" href="/GLADMIN/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
		<link rel="stylesheet" href="/GLADMIN/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
		<link rel="stylesheet" href="/GLADMIN/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
		<link rel="stylesheet" href="/GLADMIN/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
		<link rel="stylesheet" href="/GLADMIN/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
		<link rel="stylesheet" href="/GLADMIN/assets/plugins/summernote/build/summernote.css">
		<link href="/GLADMIN/assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
		<link href="/GLADMIN/assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>		
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->


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
									RFP List
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
								<h1>RFP Listing </h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<!-- start: SEARCH RESULT -->
							<form method="post" action="/network/?page=rfp-filter">
							<div class="col-md-12 input-group well well-lg filter"> 
							
							
							<div class="col-md-12">
							<input type="text" class="filter form-control" name="name" value="<?=$POST['name']?>" placeholder="Search Name or Business Name">
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-3">
										<div class="form-group">
										<label for="form-field-select-3">Practice Areas</label>
										<select id="fpracticeAreas" name="practiceAreas" class="filter form-control filter search-select">
											<option value="">&nbsp;</option>
											<? getPracticeAreaList($_POST['practiceAreas']) ?>
										</select>

										</select>
									</div>
									</div><!-- End md-3 -->
							
									
							
									<div class="col-xs-12 col-sm-12 col-md-3">
										<div class="form-group">
										<label for="form-field-select-3">
											Bar Admittance States
										</label>
										<select id="barstate" name="barstate" class="form-control search-select">
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
											<option value="WY">Wyoming</option>										</select>
									</div>
									</div><!-- End md-3 -->
							
									<div class="col-xs-12 col-sm-12 col-md-3">
									<div class="form-group">
									<label for="form-field-select-3">
									Diversity 
									</label>
									<select id="diversity" name="diversity" class="form-control search-select">
									<option value="">&nbsp;</option>
									<option <? if ($_POST['diversity']=="MBE")  { echo " selected ";  } ?> value="MBE">MBE</option>
									<option <? if ($_POST['diversity']=="WMBE")  { echo " selected "; } ?> value="WMBE">WMBE</option>
									<option <? if ($_POST['diversity']=="LGBT")  { echo " selected "; } ?> value="LGBT">LGBT</option>
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
											<button type="submit" class="btn btn-blue" type="button"><i class="fa fa-search"></i> SEARCH</button> 
										 
									</div>
									
									</form>
							</div>
							
							
							<div class="clearfix"></div>
							
							
							<div class="search-classic col-md-9">
								
							 	<? while ($row=mysql_fetch_assoc($rfpRS)) {
							 	
							 if ($row['logo'] == "") { $row['logo'] =  "/assets/GLimages/gl-company-logo-250x250.jpg"; } else { $row['logo'] ="/network/uploads/".$company->logo; } 
							 $barstates = split(",",$row['bar_admittance_state']);
							 if ($row['practice_areas']=="") $row['practice_areas']="-1";
							 $practiceAreas = mysql_query("select * from practicearea_list where id in (".$row['practice_areas'].")");
							 
							 ?> 
							
							
							 	
								<div class="search-result col-md-12" style="padding-left:0px;">
								<div class="row">
								
								<div class="search-post-image col-xs-4 col-sm-4 col-md-3">
									<img src="<?=$row['logo']?>" alt="">
								</div>
								
								<div class="search-post-content col-xs-8 col-sm-8 col-md-9">
									<i class="fa fa-align-justify filter-icon filter-green"></i><h3><a href="/network/?page=rfp-view&id=<?=$row['ID']?>"><?=$row['rfp_title']?></a></h3>
									<br> 
											<div class="search-post-info" style="width:100%;">
                                                <div class="">
                                                    <i class="fa  fa-save"></i> <strong>SUBMISSION DEADLINE:</strong> <?=$row['nicedate']?>
                                                </div><br/><div class="">
                                                      <i class="fa fa-globe"></i> <? $x=0; foreach ($barstates as $thisState) { $x++;  ?> <?=$states[$thisState]?>  <? if ($x<sizeOf($barstates)) echo " &bull; "; ?> <?  } ?>                                 
                                                                                              </div><br><div class="">
                                                   <? if (mysql_num_rows($practiceAreas)>0) { ?>   <i class="fa fa-legal"></i> <?  $x=0; while ($thisPA = mysql_fetch_assoc($practiceAreas)) { $x++;  ?> <?=$thisPA['name']?>  <? if ($x<mysql_num_rows($practiceAreas)) echo " &bull; "; ?><? } } ?> 
                                                </div>
                                            </div>

									<p>
									<? if (strlen($row['rfp_description'])>200) { ?>
										<?=substr($row['rfp_description'],0,200)?>...
									<? } else { ?>
										<?=$row['rfp_description']?>
									<? } ?>
									
									</p>
									<div class="col-md-6">
								 <button class="btn btn-blue" type="button" href="#ApplyForRFP" onClick="document.getElementById('rfp_id').value='<?=$row['ID']?>';document.getElementById('to_id').value='<?=$row['user_id']?>'" data-toggle="modal"><i class="fa fa-align-justify"></i> APPLY FOR RFP</button> 
									</div>
									
									
								</div><!-- End Content -->
								</div></div>
								<div class="clearfix"></div>
							
								<? } ?>
									
								
								
								
								<div class="clearfix"></div>
								
																
									
								
							
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
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		<div class="footer clearfix">
			<div class="footer-inner">
				2014 &copy; Gateway Software Development. All Rights Reserved.
			</div>
			<div class="footer-items">
				<span class="go-top"><i class="clip-chevron-up"></i></span>
			</div>
		</div>
		<!-- end: FOOTER -->
		
		
		<script>
		
		function applyForRFP() {

			
			var xmlhttp;
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			    {
			    alert(xmlhttp.responseText);
			    }
			  }
			xmlhttp.open("GET","/network/functions/sendemail.php?message_type=rfpapply&from_id=<?=$_SESSION['userid']?>&to_id="+document.getElementById('to_id').value+"&related_rfp="+document.getElementById('rfp_id').value+"&question1="+document.getElementById('question1').value+"&question2="+document.getElementById('question2').value,true);
			xmlhttp.send();
			document.getElementById('question1').value='';
			document.getElementById('question2').value='';
		}
		
		</script>
		
		
		<div id="ApplyForRFP" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Apply for RFP</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					
					<div class="col-md-12">
					
					<div class="form-group">
					<label class="control-label">From previous experience, what makes your company the best candidate for this request?</label>
					<textarea maxlength="" id="question1" class="form-control" rows="5"></textarea>
					</div>
					
					<div class="form-group">
					<label class="control-label">Please give us some case examples that relate directly to this request.</label>
					<textarea maxlength="" id="question2" class="form-control" rows="5"></textarea>
					</div>
						
						
					
	
				</div>
			</div>
			<div class="modal-footer">
				<input type=hidden id="rfp_id" value="">
				<input type=hidden id="to_id">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Cancel
				</button>
				<button type="button" data-dismiss="modal" onClick="applyForRFP();" class="btn btn-blue">
					Submit Application
				</button>
			</div>
		</div></div>
		
		
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="/GLADMIN/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="/GLADMIN/assets/plugins/autosize/jquery.autosize.min.js"></script>
		<script src="/GLADMIN/assets/plugins/select2/select2.min.js"></script>
		<script src="/GLADMIN/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
		<script src="/GLADMIN/assets/plugins/jquery-maskmoney/jquery.maskMoney.js"></script>
		<script src="/GLADMIN/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="/GLADMIN/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
		<script src="/GLADMIN/assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
		<script src="/GLADMIN/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="/GLADMIN/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="/GLADMIN/assets/plugins/bootstrap-colorpicker/js/commits.js"></script>
		<script src="/GLADMIN/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
		<script src="/GLADMIN/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="/GLADMIN/assets/plugins/summernote/build/summernote.min.js"></script>
		<script src="/GLADMIN/assets/plugins/ckeditor/ckeditor.js"></script>
		<script src="/GLADMIN/assets/plugins/ckeditor/adapters/jquery.js"></script>
		<script src="/GLADMIN/assets/js/form-elements.js"></script>
		<script src="/GLADMIN/assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
		<script src="/GLADMIN/assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
		<script src="/GLADMIN/assets/js/ui-modals.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>


