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
									User Profile
								</li>
								<li class="active">
									<?=$thisUser->first_name?> <?=$thisUser->last_name?>
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
								<h1><?=$thisUser->first_name?> <?=$thisUser->last_name?> <small>User Profile</small></h1>
							</div>
					<div class="col-md-4">
					
					<div class="space12" style="text-align:center;">
					<img src="<?=$thisUser->image?>" style="max-width: 250px; max-height: 250px;" alt="">
					
										
					</div>	
					</div><!-- End Col 4 / Image Area -->
					
					
					<div class="col-md-8 well well-lg"> 
					<h4 class="zero-text"><?=$thisUser->title?> &bull; <?=$thisCompany->company_name?></h4>
					<div class="col-md-6">
                  <p class="member-subtitle">Practice Areas</p>
                  <p class="col-md-12">
<?
foreach ($displayAreas as $thisDisplayArea) {
  echo "$thisDisplayArea <br/>";
}
?>
					</p><!-- End Practice Area -->
                  </div>
                  
					<div class="col-md-6">
					<p class="member-subtitle">Bar Admissions States</p>
					<p class="col-md-12">
<?
foreach ($displaybarstates as $thisState) {
  echo $states[$thisState]."<br />";
}
					//var_dump($displaybarstates); 
?>
					</p><!-- End Bar Admission State --> 
					</div>
                  <div class="col-md-6">
					<p class="member-subtitle">Diversity Certifications</p>
					<p class="col-md-12">
<?php 
foreach ((getCertifications($thisUser->company_id)) as $thisCertification) {
  echo "$thisCertification <br/>";
}					
					//var_dump(getCertifications($thisUser->company_id)) 
?>
					
					</p><!-- End Bar Admission State --> 
					</div>
					
					</div><!-- End Col 8 / Profile Information -->
					
					
					<hr>
					
					<div class="clearfix"></div>
					
					
					
					
					
					
					
					<div class="col-xs-12 col-sm-6 col-md-4">
					<hr>
					
					<div class="col-md-6">
					
	<? $score=getPoints($thisUser->ID);
					?>
					<? if ($score>2500) { ?><img src="/GLADMIN/assets/GLimages/badge-green.jpg"><? } ?>
					<? if ($score>7500) { ?><img src="/GLADMIN/assets/GLimages/badge-red.jpg"><? } ?>
					<? if ($score>15000) { ?><img src="/GLADMIN/assets/GLimages/badge-yellow.jpg"><? } ?>
					<? if ($score>20000) { ?><img src="/GLADMIN/assets/GLimages/badge-blue.jpg"><? } ?>
					</div>
					
										
					<div class="col-md-6" style="text-align:right;">
					<h2 class="text-zero"><?=$score?></h2>
					</div>	
					
					<div class="clearfix"></div>
						<hr>
					<p>
										
											<button class="btn btn-blue btn-block" href="#RequestEngagement" data-toggle="modal">
											Request Engagement <i class="fa fa-plus"></i>
										</button>
										<? if ($connectionStatus<0) { ?>
										
										<button class="btn btn-green btn-block" onClick="window.location='/network/?page=profile&profile_id=<?=$_GET['profile_id']?>&requestconnect=1';">
											Request Connection <i class="fa fa-chain"></i>
										</button>
										
										<? } elseif ($connectionStatus==0) { ?>
										
										<button class="btn btn-grey btn-block" >
											Connection Requested <i class="fa fa-chain"></i>
										</button>
										<? } elseif ($connectionStatus==1) { ?>
											
										<button class="btn btn-red btn-block" href="#SendMessage" data-toggle="modal">
											Send Message <i class="fa fa-file"></i>
										</button>
										<button style="display: none;" class="btn btn-green btn-block" href="#ConnectionReview" data-toggle="modal">
											Connection Review <i class="fa fa-chain"></i>
										</button>
										
										<? } ?>
										
										
										
										
					</p>
				
										
					<hr>
						
						
					<div class="clearfix"></div>
					<div class="well well-sm profile-info" style="overflow:hidden;">
					
					
					<div class="col-sm-12 col-md-4"><strong>MAIN OFFICE:</strong></div>
					<div class="col-sm-12 col-md-8">
					<?=$loc_address['address1']?> <?=$loc_address['address2']?><br>
					<?=$loc_address['city']?>, <?=$loc_address['st']?> <?=$loc_address['zip']?>
					</div>
					
					
					<!-- div class="col-sm-12 col-md-4"><strong>PHONE:</strong></div>
					<div class="col-sm-12 col-md-8">
					<?=$user->phone?>
					</div -->
					

					
					
					
									
					</div>
					
					
					<hr><div class="clearfix"></div>
					<div class="connection">
					<h4>Connections</h4>

<?  $con=getConnections('user',$thisUser->ID);
	while ($conrow=mysql_fetch_assoc($con)) { 
		if ($conrow['image'] == "")  { $conrow['image'] = "/network/uploads/user.png"; } else { $conrow['image'] = "/network/uploads/".$conrow['image']; }
		
	?>
		<a href='/network/?page=profile&profile_id=<?=$conrow['ID']?>'><img border=0 alt="<?=$conrow['first_name']?> <?=$conrow['last_name']?>" src="<?=$conrow['image']?>" style="max-width: 50px; max-height: 50px;" class="circle-img info-button popovers" title="" data-content="<?=$conrow['title']?> &bullet; <?=$conrow['company_name']?>" data-placement="left" data-trigger="hover" data-rel="popover" data-original-title="<?=$conrow['first_name']?> <?=$conrow['last_name']?>" ></a>
<? } ?>
					





					</div>	
					
						
				
					
					<hr>				
						
						
						
						
					</div><!-- End Left Column -->
					
					<div class="col-xs-12 col-sm-6 col-md-8"> 
					<hr>	
						
										<p class="member-subtitle">Law School</p>
										<p><?=$thisUser->law_school?></p>

										<p class="member-subtitle">Years of Practice</p>
										<p><?=$thisUser->years_of_practice?></p> 



										<p class="member-subtitle">Bio</p>
										<p><?=$thisUser->bio?></p>
						
						
					
						
						
						<hr>
						<div class="clearfix"></div>
						
						<div class="panel-group accordion-custom accordion-teal" id="accordion">
						
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
													<i class="icon-arrow"></i>
													Board Certifications
												</a></h4>
											</div>
											<div id="collapseOne" class="panel-collapse collapse">
												<div class="panel-body">
													
<?
foreach ($showboardcertifications as $thisboardcertifications) {
  echo "<div class='single_award' style='display: block; float: left; width: 49%; height: 40px; overflow: auto; padding-left: 30px;'>".$thisboardcertifications."</div>";
}
?>														   
												</div>
											</div>
										</div>
						
						
						
						
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
													<i class="icon-arrow"></i>
													Clients (Private)
												</a></h4>
											</div>
											<div id="collapseFour" class="panel-collapse collapse">
												<div class="panel-body">
													<div class="col-md-6">
<?
foreach ($showprivateclients as $thisclient) {
  echo "<div class='single_award' style='display: block; float: left; width: 49%; height: 40px; overflow: auto; padding-left: 30px;'>".$thisclient."</div>";
}
?>
												</div>
													   
												</div>
											</div>
										</div>
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
													<i class="icon-arrow"></i>
													Clients (Government)
												</a></h4>
											</div>
											<div id="collapseTwo" class="panel-collapse collapse">
												<div class="panel-body">
													<div class="col-md-6">
<?
foreach ($showgovclients as $thisclient) {
  echo "<div class='single_award' style='display: block; float: left; width: 49%; height: 40px; overflow: auto; padding-left: 30px;'>".$thisclient."</div>";
}
?>
												</div>		   
												</div>
											</div>
										</div>
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
													<i class="icon-arrow"></i>
													Significant Engagements
												</a></h4>
											</div>
											<div id="collapseThree" class="panel-collapse collapse">
												<div class="panel-body">
<ul><?
while ($row=mysql_fetch_assoc($engagements)) {
  echo "<il><strong>".$row['engagement_name']."</strong><br />".$row['description']."<br/>"."<strong>Company/Attorney:</strong>".$row['company_attorney']."<br/><strong>Dates:</strong>".$row['month'].", ".$row['year']."</il><hr/>";
}
?></ul>
												</div>
											</div>
										</div>
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
													<i class="icon-arrow"></i>
													Professional Associations
												</a></h4>
											</div>
											<div id="collapse5" class="panel-collapse collapse">
												<div class="panel-body">
<?
foreach ($showprofassociations as $thisassociation) {
  echo "<div class='single_award' style='display: block; float: left; width: 49%; min-height: 50px; overflow: auto; padding-left: 30px;'>".$thisassociation."</div>";
}
?>
												</div>
											</div>
										</div>
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
													<i class="icon-arrow"></i>
													Government Level of Clearance 
												</a></h4>
											</div>
											<div id="collapse6" class="panel-collapse collapse">
												<div class="panel-body">
												<p><strong><?=$thisUser->governmentclearance?></strong></p>
												</div>
											</div>
										</div>
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7">
													<i class="icon-arrow"></i>
													Awards & Honors
												</a></h4>
											</div>
											<div id="collapse7" class="panel-collapse collapse">
												<div class="panel-body">

<?
while ($row=mysql_fetch_assoc($showawards)) {
  echo "<div class='single_award' style='display: block; float: left; width: 49%; height: 60px; overflow: auto; padding-left: 30px;'>".$row['award_name']." <br /> <strong> Date:</strong> ".$row['award_year']."</div>";

}
?>   
											</div>
											</div>
										</div>
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse8">
													<i class="icon-arrow"></i>
													Speaking Engagements
												</a></h4>
											</div>
											<div id="collapse8" class="panel-collapse collapse">
												<div class="panel-body">
<?
while ($row=mysql_fetch_assoc($speaking)) {
echo "<div class='single_award' style='display: block; float: left; width: 49%; height: 80px; overflow: auto; padding-left: 30px;'><strong>".$row['name']."</strong><br /><strong>Location:</strong> ".$row['location']."<br />"."<strong>Date:</strong> ".$row['date']."</div>";
}
?> 
												</div>
											</div>
										</div>
										
										
												<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse9">
													<i class="icon-arrow"></i>
													Publications & Press
												</a></h4>
											</div>
											<div id="collapse9" class="panel-collapse collapse">
												<div class="panel-body">


<ul><?
while ($row=mysql_fetch_assoc($press)) {
  echo "<il><strong>".$row['title']."</strong><br />".$row['publication']."<br/>"."<strong>Description:</strong> ".$row['description']."<br/><strong>Date of Publication:</strong> ".$row['date']."</il><hr/>";
}
?></ul>

												</div>
											</div>
										</div>
										
										
											<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse10">
													<i class="icon-arrow"></i>
													Languages
												</a></h4>
											</div>
											<div id="collapse10" class="panel-collapse collapse">
												<div class="panel-body">

<?
while ($row=mysql_fetch_assoc($showanguages)) {
  echo "<div class='single_language' style='display: block; float: left; width: 49%; padding: 20px; overflow: auto; padding-left: 30px;'>".$row['language']." </div>";	
}
?>

												</div>
											</div>
										</div>
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse11">
													<i class="icon-arrow"></i>
													Web Site
												</a></h4>
											</div>
											<div id="collapse11" class="panel-collapse collapse">
												<div class="panel-body">
												<p><strong><?=$thisUser->website?></strong></p>
												</div>
											</div>
										</div>
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse12">
													<i class="icon-arrow"></i>
													Ability to Work Onsite
												</a></h4>
											</div>
											<div id="collapse12" class="panel-collapse collapse">
												<div class="panel-body">
												<p><strong><?=$thisUser->workonsite?></strong></p>
												</div>
											</div>
										</div>
										
										
									</div> </div></div>
									
											<script>
										
										function sendMessage() {
												
			
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
												xmlhttp.open("GET","/network/functions/ajax-message.php?to_id="+document.getElementById('messageToID').value+"&from_id="+document.getElementById('messageFromID').value+"&message_type=mail&body="+document.getElementById('messageBody').value+"&subject="+document.getElementById('messageSubject').value,true);
												xmlhttp.send();
												//alert("/network/functions/ajax-message.php?denyRFP="+document.getElementById('thisRFPid').value);
												document.getElementById('messageSubject').value = "";
												document.getElementById('messageBody').value = "";
												
										
											}
											
										
	
			function saveSignificantEngagement() {
			
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
			   // alert(xmlhttp.responseText);
			    alert('Engagement sent for confirmation');
			
				}
			  }
			xmlhttp.open("GET","/network/functions/ajax-significantengagement.php?engagement_type=user&related_id=<?=$user->ID?>&engagement_name="+document.getElementById('engagement_name').value+"&description="+document.getElementById('engagement_description').value+"&company_attorney=<?=$thisUser->first_name." ".$thisUser->last_name?>&to_user_id=<?=$_GET['profile_id']?>"+"&month="+document.getElementById('engagement_month').options[document.getElementById('engagement_month').selectedIndex].value+"&year="+document.getElementById('engagement_year').options[document.getElementById('engagement_year').selectedIndex].value,true);
			xmlhttp.send();
			document.getElementById('engagement_name').value='';
			document.getElementById('engagement_description').value='';
			document.getElementById('engagement_with').value='';
			document.getElementById('engagement_month').selectedIndex=0;
			document.getElementById('engagement_year').selectedIndex=0;
			
			
		}
		</script>					

		
		<div id="RequestEngagement" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Request Engagement</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					
					<div class="form-group">
					<label class="control-label">Significant Engagement</label>
					<input type="text"  placeholder="" class="form-control" id="engagement_name" name="engagement_name">
					</div>
					
					<div class="form-group">
					<label class="control-label">Project Description</label>
					<textarea maxlength="250" id="engagement_description" class="form-control limited"></textarea>
					</div>
												
					
					<div class="row">	
					<div class="form-group">								
					<label for="form-field-mask-1" class="col-md-12">
					Date of Engagement<small class="text-success">Month/Year</small>
					</label>
					<div class="col-md-6">
											
												<select id="engagement_month" class="form-control search-select">
												<option>January</option>
												<option>February</option>
												<option>March</option>
												<option>April</option>
												<option>May</option>
												<option>June</option>
												<option>July</option>
												<option>August</option>
												<option>September</option>
												<option>October</option>
												<option>November</option>
												<option>December</option>
												</select>
											</div>
											
											<div class="col-md-6">
												
												<select id="engagement_year" class="form-control search-select">
												<option>2014</option>
												<option>2013</option>
												<option>2012</option>
												<option>2011</option>
												<option>2010</option>
												<option>2009</option>
												<option>2008</option>
												<option>2007</option>
												<option>2006</option>
												<option>2005</option>
												<option>2004</option>
												<option>2003</option>
												<option>2002</option>
												<option>2001</option>
												<option>2000</option>
												<option>1999</option>
												<option>1998</option>
												<option>1997</option>
												<option>1996</option>
												<option>1995</option>
												<option>1994</option>
												<option>1993</option>
												<option>1992</option>
												<option>1991</option>
												<option>1990</option>
												<option>1989</option>
												<option>1988</option>
												<option>1987</option>
												<option>1986</option>
												<option>1985</option>
												<option>1984</option>
												<option>1983</option>
												<option>1982</option>
												<option>1981</option>
												<option>1980</option>
												<option>1979</option>
												<option>1978</option>
												<option>1977</option>
												<option>1976</option>
												<option>1975</option>
												<option>1974</option>
												<option>1973</option>
												<option>1972</option>
												<option>1971</option>
												<option>1970</option>
												<option>1969</option>
												<option>1968</option>
												<option>1967</option>
												<option>1966</option>
												<option>1965</option>
												<option>1964</option>
												<option>1963</option>
												<option>1962</option>
												<option>1961</option>
												<option>1960</option>												
												</select>
													
											</div><!-- End 6 -->
					
										</div>
					</div>
	
				</div>
			</div>
			
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Close
				</button>
				<button type="button" data-dismiss="modal" onClick="saveSignificantEngagement();" class="btn btn-blue">
					Save changes
				</button>
			</div>
		
		
			</div>
		
		
		<div id="SendMessage" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Send Message</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					
					<div class="form-group">
					<label class="control-label">Subject</label>
					<input type="text"  placeholder="" class="form-control" id="messageSubject" name="">
					</div>
					
					<div class="form-group">
					<label class="control-label">Message</label>
					<textarea maxlength=""  class="form-control" id="messageBody" rows="10"></textarea>
					</div>
						
						
					<input type=hidden id="messageFromID" value="<?=$user->ID?>">
					<input type=hidden id="messageToID" value="<?=$_GET['profile_id']?>">
					
					
						
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Cancel
				</button>
				<button type="button" data-dismiss="modal" onClick="sendMessage();" class="btn btn-blue">
					Send Message
				</button>
			</div>
		</div>
		</div>
		</div>
		</div>
		
		
	
		
		
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

		<link href="/assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
		<link href="/assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>

									
