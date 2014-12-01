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

<!-- end: SPANEL CONFIGURATION MODAL FORM -->
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
								<li>
									RFP
								</li>
								<li class="active">
									<?=$thisRFP['rfp_title']?>
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
								<h1><?=$thisRFP['rfp_title']?> <small>Gateway RFP </small></h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					
					<div class="col-md-4">
					
					<div class="space12" style="text-align:center;">
					<img src="<?=$thisRFP['logo']?>" style="max-width: 400px; max-height: 400px;" alt="">
					
										
					</div>	
					</div><!-- End Col 4 / Image Area -->
					
					
					<div class="col-md-8 well well-lg"> 
					
					<h4 class="zero-five"><?=$thisRFP['company_name']?></h4><hr class="zero-five">
					
					<p><?=$thisRFP['company_overview']?></p>
					
					</div><!-- End Col 8 / Profile Information -->
					
					
					<hr>
					
					<div class="clearfix"></div>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					<div class="col-md-4">
					<hr>
					
					<p>
										<button class="btn btn-blue btn-block"  href="#ApplyForRFP"  onClick="document.getElementById('rfp_id').value='<?=$thisRFP['ID']?>';document.getElementById('to_id').value='<?=$thisRFP['user_id']?>'" data-toggle="modal">
											Apply for RFP <i class="fa fa-align-justify"></i>
										</button>
										<button class="btn btn-green btn-block">
											Ask Question <i class="fa fa-file-text"></i>
										</button>
									

					</p>
				
										
					<hr>
						
						
					<div class="clearfix"></div>
					<div class="well well-sm profile-info" style="overflow:hidden;">
					
					
					<div class="col-sm-12 col-md-4"><strong>MAIN OFFICE:</strong></div>
					<div class="col-sm-12 col-md-8">
					<?=$loc_address['address1']?> <?=$loc_address['address2']?><br>
											<?=$loc_address['city']?>, <?=$loc_address['st']?> <?=$loc_address['zip']?>
					</div>
					
					
					<div class="col-sm-12 col-md-4"><strong>FIRM SIZE:</strong></div>
					<div class="col-sm-12 col-md-8">
					
					</div>					
					</div>
					
					
					<hr><div class="clearfix"></div>
						
						
						
						
					</div><!-- End Left Column -->
					
					<div class="col-md-8"> 
					<hr>	
					
					<? if (empty($thisRFP['rfp_description'])) { } else { ?>
                  <p class="member-subtitle">RFP Description</p>
					<p><?=$thisRFP['rfp_description']?></p>
                  <? } ?>  
						
						<div class="row">
						<div class="col-md-12 well well-lg" style="background: rgba(255, 219, 0, 0.4);">
                        
						<div class="col-md-6">
						<p class="member-subtitle">RFP Timeframe</p><p> <?=$thisRFP['projectstart']?> - <?=$thisRFP['projectend']?></p>	
						</div>

						<div class="col-md-6">
						<p class="member-subtitle">RFP Submission Deadline</p><p> <?=$thisRFP['nicedate']?></p>	
						</div>

                      <? if (empty($diversity)) { } else {  ?>  
						<div class="col-md-6">
						<p class="member-subtitle">Diversity</p><p> <ul><? foreach ($diversity as $thisDiv) { ?><li><?=$thisDiv?></li> <? } ?><ul></p>	
						</div>
						<? } ?>												

                      <? if (empty($barstates)) { } else {  ?>  
						<div class="col-md-6">
						<p class="member-subtitle">Bar Admittance States</p><p> <ul><? foreach ($barstates as $thisSt) { ?><li><?=$states[$thisSt]?></li> <? } ?><ul></p>
						</div>
						<? } ?>

						<? //var_dump($certifications);
						if (strlen($certifications[0])=='') { } else {  ?>
						<div class="col-md-12">
						<p class="member-subtitle">Board Certifications</p>
                      </div>
						<div class="col-md-12">
						<ul><? foreach ($certifications as $thisCertification) { ?><li><?=$thisCertification?></li><? } ?><ul></p>	
						</div>
						<? } ?>												
						
						<? if (empty($thisRFP['number_of_attorneys'])) { } else {  ?>
						<div class="col-md-6">
						<p class="member-subtitle">Number of Attorneys</p><p> <?=$thisRFP['number_of_attorneys']?></p>	
						</div>
						<? } ?>												

						<? if (empty($thisRFP['years_of_practice'])) { } else {  ?>
						<div class="col-md-6">
						<p class="member-subtitle">Years of Practice</p><p> <?=$thisRFP['years_of_practice']?></p>	
						</div>
						<? } ?>												
						
                      <div class="form-group">
						<? //var_dump($language);
						if (strlen($language[0])=='') { } else {  ?>
						<div class="col-md-4">
						<p class="member-subtitle">Languages</p><p> <ul><? foreach ($language as $thisLanguage) { ?><li><?=$thisCertification?></li><? } ?></ul></p>	
						</div>
						<? } ?>		
                        										
						<? if (empty($thisRFP['gender'])) { }
					else {  ?>
						<div class="col-md-4">
						<p class="member-subtitle">Gender</p><p> <?=$thisRFP['gender']?></p>	
						</div>
						<? } ?>		

						<? if (empty($thisRFP['ethnicity'])) { }
					else {  ?>
						<div class="col-md-4">
						<p class="member-subtitle">Ethnicity</p><p> <?=$thisRFP['ethnicity']?></p>	
						</div>
						<? } ?>		
						</div>
                        
						</div><!-- End Well -->
						</div><!-- End Row -->
						
						<div class="clearfix"></div>
						
						
						
				</div><!-- End Right Side -->
					
					
				<div class="col-md-12">	<hr>
				<div class="post-media post-comments">
											<h4><i class="fa fa-comments"></i>RFP Questions (<?=mysql_num_rows($questions)?>)</h4>
											<? while ($row=mysql_fetch_assoc($questions)) { ?>
											<div class="media">
												<a class="pull-left" href="#">
													<img class="media-object" alt="" src="/GLADMIN/assets/images/avatar-2.jpg">
												</a>
												<div class="media-body">
													<h4 class="media-heading">Question </h4>
													<span class="pull-right"> <span> <? if ($_SESSION['userid']==$thisRFP['user_id']) { ?><a href="javascript:void();" onClick="document.getElementById('reply<?=$row['id']?>').style.display = 'block';"><i class="fa fa-reply"></i> Reply</a><? } ?></span>  </span>
													<p>
														<?=$row['body']?>
													</p>
													
													<div id="reply<?=$row['id']?>" style="display: none; ">
													<h4 style="margin-top: 10px;"><i class="fa fa-comment"></i>Post A Reply</h4>
													<form method="post" action="/network/?page=rfp-view&id=<?=$_GET['id']?>">
											
															
															<div class="row">
															<input type=hidden name="question_id" value="<?=$row['id']?>">
															
															<div class="col-md-12">
															<div class="form-group">
															<label class="control-label">Your Reply*</label>
															<textarea id="comment" name="comment" class="form-control" rows="5" maxlength="5000"></textarea>
															</div>
															</div>
															
															<div class="col-md-12">
															<input type="submit" data-loading-text="Loading..." class="btn btn-main-color" value="Post Question"><br><br>
															</div>
															
															</div>
														
														</form>
													</div>
													<span class="date pull-right"><?=$row['nicedate']?></span>
													<? $replies = mysql_query("select *, date_format(date_added,'%M %d, %Y') as nicedate from rfp_qa where rfp_id = '".$_GET['id']."' and question_id = '".$row['id']."' order by id"); ?>
													
													<!-- Nested media object -->
													<? while ($replyrow=mysql_fetch_assoc($replies)) { ?>
													
													<hr>
													<div class="media">
														<a class="pull-left" href="#">
															<img class="media-object" alt="" src="/GLADMIN/assets/images/avatar-1.jpg">
														</a>
														<div class="media-body">
																<?=$replyrow['body']?>
															</p>
															<span class="date pull-right"><?=$replyrow['nicedate']?></span>
														</div>
													</div> 	
													
													<? } ?>

													 <hr>
													<!--end media-->
													
													
											</div>
										
										</div>
										<hr>
										<? } ?>
										
										<div class="post-block post-leave-comment">
											<h4><i class="fa fa-comment"></i>Ask A Question</h4>
											<form method="post" action="/network/?page=rfp-view&id=<?=$_GET['id']?>">
											
												
												<div class="row">
												
												
												<div class="col-md-12">
												<div class="form-group">
												<label class="control-label">RFP QUESTION*</label>
												<textarea id="comment" name="comment" class="form-control" rows="10" maxlength="5000"></textarea>
												</div>
												</div>
												
												<div class="col-md-12">
												<input type="submit" data-loading-text="Loading..." class="btn btn-main-color" value="Post Question"><br><br>
												</div>
												
												</div>
											
											</form>
										</div>	
					
				</div>
					
					

					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		
		<!-- end: FOOTER -->
		
		
		</div>
		
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
		
		
		
		
		
		
		
		
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="/GLADMIN/assets/plugins/respond.min.js"></script>
		<script src="/GLADMIN/assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
		<script src="/GLADMIN/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="/GLADMIN/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="/GLADMIN/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="/GLADMIN/assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="/GLADMIN/assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="/GLADMIN/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="/GLADMIN/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="/GLADMIN/assets/plugins/less/less-1.5.0.min.js"></script>
		<script src="/GLADMIN/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="/GLADMIN/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="/GLADMIN/assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
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