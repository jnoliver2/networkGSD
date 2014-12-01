<?

$barstates = getBarStates("company",$thisCompany->ID);
$showBarStates = showBarStates("company",$thisCompany->ID);

$certifications = getCertifications("company",$thisCompany->ID);

$boardcertifications = getBoardCertifications("user",$thisCompany->ID);
$showboardcertifications = showBoardCertifications("user",$thisCompany->ID);

$practiceAreas = getPracticeAreas("company",$thisCompany->ID);
$displayAreas = showPracticeAreas("company",$thisCompany->ID);

$languages = getLanguages("company",$thisCompany->ID);
$showanguages = showLanguages("company",$thisCompany->ID);

$awards = getAwards("company",$thisCompany->ID);
$showawards = showAwards("company",$thisCompany->ID);

$speaking = getSpeaking("company",$thisCompany->ID);
$engagements = getEngagements("company",$thisCompany->ID);
$press = getPress("company",$thisCompany->ID);

$diversitycertification = getDivCertification("company",$thisCompany->ID);
$privateClients = getPrivateClients("company",$thisCompany->ID);
$publicClients = getPublicClients("company",$thisCompany->ID);

$barstates = getBarStates("company",$user->company_id);
$displaybarstates = showBarStates("company",$user->company_id);

$showprivateclients = showPrivateClients("company",$thisCompany->ID);

$showgovclients = showGovClients("company",$thisCompany->ID);

$showprofassociations = showProfAssociations("company",$thisCompany->ID);

//figure out an address for this company
$loc_address = mysql_fetch_assoc(mysql_query("select * from address where related_id = '".$thisCompany->ID."' order by id limit 1"));


$states = array(
    'AL'=>'Alabama',
    'AK'=>'Alaska',
    'AZ'=>'Arizona',
    'AR'=>'Arkansas',
    'CA'=>'California',
    'CO'=>'Colorado',
    'CT'=>'Connecticut',
    'DE'=>'Delaware',
    'DC'=>'District of Columbia',
    'FL'=>'Florida',
    'GA'=>'Georgia',
    'HI'=>'Hawaii',
    'ID'=>'Idaho',
    'IL'=>'Illinois',
    'IN'=>'Indiana',
    'IA'=>'Iowa',
    'KS'=>'Kansas',
    'KY'=>'Kentucky',
    'LA'=>'Louisiana',
    'ME'=>'Maine',
    'MD'=>'Maryland',
    'MA'=>'Massachusetts',
    'MI'=>'Michigan',
    'MN'=>'Minnesota',
    'MS'=>'Mississippi',
    'MO'=>'Missouri',
    'MT'=>'Montana',
    'NE'=>'Nebraska',
    'NV'=>'Nevada',
    'NH'=>'New Hampshire',
    'NJ'=>'New Jersey',
    'NM'=>'New Mexico',
    'NY'=>'New York',
    'NC'=>'North Carolina',
    'ND'=>'North Dakota',
    'OH'=>'Ohio',
    'OK'=>'Oklahoma',
    'OR'=>'Oregon',
    'PA'=>'Pennsylvania',
    'RI'=>'Rhode Island',
    'SC'=>'South Carolina',
    'SD'=>'South Dakota',
    'TN'=>'Tennessee',
    'TX'=>'Texas',
    'UT'=>'Utah',
    'VT'=>'Vermont',
    'VA'=>'Virginia',
    'WA'=>'Washington',
    'WV'=>'West Virginia',
    'WI'=>'Wisconsin',
    'WY'=>'Wyoming',
);


//get association list
$associations = getAssociations("company",$thisCompany->ID);

 if ($thisCompany->logo == "") { $thisCompany->logo =  "/network/uploads/company.png"; } else { $thisCompany->logo ="/network/uploads/".$thisCompany->logo; } 
 
													
													
//var_dump($engagements);
//echo mysql_num_rows($engagements);

//die();

?>
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="/assets/plugins/select2/select2.css">
		<link rel="stylesheet" href="/assets/plugins/datepicker/css/datepicker.css">
		<link rel="stylesheet" href="/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
		<link rel="stylesheet" href="/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
		<link rel="stylesheet" href="/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
		<link rel="stylesheet" href="/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
		<link rel="stylesheet" href="/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
		<link rel="stylesheet" href="/assets/plugins/summernote/build/summernote.css">
		<link href="/assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
		<link href="/assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
		
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->


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
								<li class="active">
									Company Profile
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
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
													
					
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="col-sm-12">
					<div class="page-header">
								<h1><?=$thisCompany->company_name?> <small>Company Profile</small></h1>
							</div>
					<div class="col-md-4">
					
					<div class="space12" style="text-align:center;">
					<img style="max-width: 250px; max-height: 250px;" src="<?=$thisCompany->logo?>" alt="">
					
										
					</div>	
					</div><!-- End Col 4 / Image Area -->


					<div class="col-md-8 well well-lg"> 
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
foreach ((getCertifications($user->company_id)) as $thisCertification) {
  echo "$thisCertification <br/>";
}					
					//var_dump(getCertifications($user->company_id)) 
?>
					
					</p><!-- End Bar Admission State --> 
					</div>
					
					</div><!-- End Col 8 / Profile Information -->
                    
                    
					

					
					
					<hr>
					
					<div class="clearfix"></div>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					<div class="col-xs-12 col-sm-6 col-md-4">
					<hr>
					
				<div class="col-md-6">
					
	<? $score=450;
					?>
					<? if ($score>2500) { ?><img src="/GLADMIN/assets/GLimages/badge-green.jpg"><? } ?>
					<? if ($score>7500) { ?><img src="/GLADMIN/assets/GLimages/badge-red.jpg"><? } ?>
					<? if ($score>15000) { ?><img src="/GLADMIN/assets/GLimages/badge-yellow.jpg"><? } ?>
					<? if ($score>20000) { ?><img src="/GLADMIN/assets/GLimages/badge-blue.jpg"><? } ?>
					</div>
					
										
					<div class="col-md-6" style="text-align:right;">
					<h2 class="text-zero">450</h2>
					</div>	
					
					<div class="clearfix"></div>
						<hr>
					<p>
												<button class="btn btn-blue btn-block" href="#RequestEngagement" data-toggle="modal">
											Request Engagement <i class="fa fa-plus"></i>

										</button>
										<button class="btn btn-green btn-block">
											Request Connection <i class="fa fa-chain"></i>
										</button>
										<button class="btn btn-red btn-block" href="#SendMessage" data-toggle="modal">
											Send Message <i class="fa fa-file"></i>
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
					<div class="connection">
					<h4>Connections</h4>



					</div>	
					
						
					
					
					<hr>				
						
						
						
						
					</div><!-- End Left Column -->
				
					<div class="col-xs-12 col-sm-6 col-md-8"> 
					<hr>	
						
										<p class="member-subtitle">Diversity Statement</p>
										<p><?=$thisCompany->diversity_statement?> <? if ($thisCompany->diversity_link != "") { ?>(<a href="<?=$thisCompany->diversity_link?>">READ COMPLETE STATEMENT</a>) <? } ?></p> 



										<p class="member-subtitle">Company Overview</p>
										<p><?=$thisCompany->company_overview?></p>
						
						
						
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
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><i class="icon-arrow"></i>Clients (Private)
												</a></h4>
											</div>
											<div id="collapseFour" class="panel-collapse collapse">
												<div class="panel-body">
<?
foreach ($showprivateclients as $thisclient) {
  echo "<div class='single_award' style='display: block; float: left; width: 49%; height: 40px; overflow: auto; padding-left: 30px;'>".$thisclient."</div>";
}
?>	   
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
<?
foreach ($showgovclients as $thisclient) {
  echo "<div class='single_award' style='display: block; float: left; width: 49%; height: 40px; overflow: auto; padding-left: 30px;'>".$thisclient."</div>";
}
?>

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
foreach ($associations as $thisassociation) {
  echo "<div class='single_award' style='display: block; float: left; width: 49%; height: 40px; overflow: auto; padding-left: 30px;'>".$thisassociation."</div>";
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
													<?=$thisCompany->governmentclearance?>
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
													<ul><? foreach ($languages as $thisLang) { ?>
														<li><?=$thisLang?></li>
														<? } ?>
														 </ul>
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
													<? if ($thisCompany->website != "") { ?><a href="<?=$thisCompany->website?>"><?=$thisCompany->website?></a> <? } ?> &nbsp;
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
													<?=$thisCompany->workonsite?> &nbsp;
												</div>
											</div>
										</div>
										
										
									</div> </div></div>
									
								</div> <!-- End Panel Body -->
										
										
																	</div>
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
				
		<script>
		
		function loadAddress() {
			
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
			    document.getElementById("office_locations").innerHTML=xmlhttp.responseText;
			    }
			  }
			xmlhttp.open("GET","/network/functions/ajax-locations.php?address_type=company&related_id=<?=$thisCompany->ID?>",true);
			xmlhttp.send();
		}
		
		//on page load, load the table.
		loadAddress();
		
		function saveAddress() {
			
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
			    document.getElementById("office_locations").innerHTML=xmlhttp.responseText;
			    }
			  }
			xmlhttp.open("GET","/network/functions/ajax-locations.php?address_type=company&related_id=<?=$thisCompany->ID?>&address1="+document.getElementById('address1').value+"&address2="+document.getElementById('address2').value+"&city="+document.getElementById('city').value+"&st="+document.getElementById('addressst').options[document.getElementById('addressst').selectedIndex].value+"&zip="+document.getElementById('addresszip').value+"&phone="+document.getElementById('addressphone').value+"&fax="+document.getElementById('addressfax').value,true);
			xmlhttp.send();
			document.getElementById('address1').value='';
			document.getElementById('address2').value='';
			document.getElementById('city').value='';
			document.getElementById('addressst').value='';
			document.getElementById('addressphone').value='';
			document.getElementById('addressfax').value='';
			
		}
		
		
		
		</script>
		
		
		
		<!-- start: BOOTSTRAP EXTENDED MODALS -->
		<div id="Location" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Add A Location</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label">Business Address 1</label>
					<input type="text"  placeholder="" class="form-control" id="address1" name="">
					</div>
												
					<div class="form-group">
					<label class="control-label">Business Address 2</label>
					<input type="text"  placeholder="" class="form-control" id="address2" name="">
					</div>
					
					</div>	
													
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">City</label>
					<input type="text"  placeholder="" class="form-control" id="city" name="">
					</div>
					</div><!-- End md-4 -->
												
												
					<div class="col-md-4">
					<div class="form-group"><label for="form-field-select-3">State</label>
										<select multiple="multiple" id="addressst" class="form-control search-select">
											<option value="">&nbsp;</option>
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
					</div><!-- End md-4 -->
												
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Zip</label>
					<input type="text"  placeholder="" class="form-control" id="addresszip" name="">
					</div>
					</div><!-- End md-4 -->
													
					<div class="col-md-6">
					<div class="form-group">
					<label class="control-label">Phone</label>
					<input type="email" placeholder="(305) 555-1212" class="form-control" id="addressphone" name="">
					</div>
					</div><!-- End md-4 -->
												
												
					<div class="col-md-6">
					<div class="form-group">
					<label for="form-field-select-3">Fax</label>
					<input type="email" placeholder="(305) 555-1212" class="form-control" id="addressfax" name="">
					</div>
					
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Close
				</button>
				<button type="button" data-dismiss="modal" onClick="saveAddress();" class="btn btn-blue">
					Save changes
				</button>
			</div>
		</div>
		
		<script>
		
		function loadAwardsHonors() {
			
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
			    document.getElementById("awards_honors").innerHTML=xmlhttp.responseText;
			    }
			  }
			xmlhttp.open("GET","/network/functions/ajax-awards.php?award_type=company&related_id=<?=$thisCompany->ID?>",true);
			xmlhttp.send();
		}
		
		//on page load, load the table.
		loadAwardsHonors();
		
		function saveAwardsHonors() {
			
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
			    document.getElementById("awards_honors").innerHTML=xmlhttp.responseText;
			    }
			  }
			xmlhttp.open("GET","/network/functions/ajax-awards.php?award_type=company&related_id=<?=$thisCompany->ID?>&award_name="+document.getElementById('award_name').value+"&award_year="+document.getElementById('award_year').value,true);
			xmlhttp.send();
			document.getElementById('award_name').value='';
			document.getElementById('award_year').value='';
		}
		
		
		
		</script>
		<div id="AwardsHonors" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Add Award & Honor</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label">Award or Honor</label>
					<input type="text"  placeholder="" class="form-control" id="award_name" name="award_name">
					</div>
												
					<div class="form-group">
					<label class="control-label">Year of Award/Honor</label>
					<input type="text"  placeholder="" class="form-control" id="award_year" maxlength=4 name="award_year">
					</div>
					
					</div>	
	
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Close
				</button>
				<button type="button" data-dismiss="modal" onClick="saveAwardsHonors();" class="btn btn-blue">
					Save changes
				</button>
			</div>
		</div>
		
		<script>
	
	
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
			    document.getElementById("significant_engagements").innerHTML=xmlhttp.responseText;
			
				}
			  }
			xmlhttp.open("GET","/network/functions/ajax-significantengagement.php?engagement_type=company&related_id=<?=$thisCompany->ID?>&engagement_name="+document.getElementById('engagement_name').value+"&description="+document.getElementById('engagement_description').value+"&company_attorney="+document.getElementById('engagement_with').value+"&month="+document.getElementById('engagement_month').options[document.getElementById('engagement_month').selectedIndex].value+"&year="+document.getElementById('engagement_year').options[document.getElementById('engagement_year').selectedIndex].value,true);
			xmlhttp.send();
			document.getElementById('engagement_name').value='';
			document.getElementById('engagement_description').value='';
			document.getElementById('engagement_with').value='';
			document.getElementById('engagement_month').selectedIndex=0;
			document.getElementById('engagement_year').selectedIndex=0;
			
			
		}
		
		function loadSignificantEngagements() {
			
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
			    document.getElementById("significant_engagements").innerHTML=xmlhttp.responseText;
			    }
			  }
			xmlhttp.open("GET","/network/functions/ajax-significantengagement.php?engagement_type=company&related_id=<?=$thisCompany->ID?>",true);
			xmlhttp.send();
		}
		
		//on page load, load the table.
		loadSignificantEngagements();
		
		</script>
		
		<div id="SignificantEngagement" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Add Significant Engagement</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
				
					<p>Adding Significant Engagements with this method will serve as an Unverified Significant Engagement.  To post a Verified Significant Engagement please visit the profile of the Company / Firm / Attorney and click Verify Engagement on their profile page.  -Team Gateway Legal.</p>
					
					</div>
					
					<div class="col-md-12">
					
					<div class="form-group">
					<label class="control-label">Significant Engagement</label>
					<input type="text"  placeholder="" class="form-control" id="engagement_name" name="">
					</div>
					
					<div class="form-group">
					<label class="control-label">Project Description</label>
					<textarea maxlength="250"  id="engagement_description" class="form-control limited"></textarea>
					</div>
												
					<div class="form-group">
					<label class="control-label">Company/Attorney</label>
					<input type="text" id="engagement_with" class="form-control">
					</div>
					
						
					<div class="form-group">								
					<label for="form-field-mask-1">
					Date of Significant Engagement<small class="text-success"> (Month and Year)</small>
					</label>
					<div class="input-group">
					
				    <select id="engagement_month" class="form-control">
				    	<option value="">Month</option>
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
				    <select  id="engagement_year" class="form-control">
				    	<option value="">Year</option>
						<? 	$x=1990;
							while ($x<2015) { $x++; ?>
						<option><?=$x?></option>
						<? } ?>
				    </select> 	
					</div>
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
		</div>
		
		<script>
		
		
			function savePublicationPress() {
			
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
			    document.getElementById("publicationpress").innerHTML=xmlhttp.responseText;
			
				}
			  }
			  
			xmlhttp.open("GET","/network/functions/ajax-press.php?press_type=company&related_id=<?=$thisCompany->ID?>&title="+document.getElementById('presstitle').value+"&description="+document.getElementById('pressdescription').value+"&publication="+document.getElementById('publication').value+"&date="+document.getElementById('pressdate').value,true);
			xmlhttp.send();
			document.getElementById('presstitle').value='';
			document.getElementById('pressdescription').value='';
			document.getElementById('publication').value='';
			document.getElementById('pressdate').value='';
			
		}
		
		
			function loadPublicationPress() {
			
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
			    document.getElementById("publicationpress").innerHTML=xmlhttp.responseText;
			    }
			  }
			xmlhttp.open("GET","/network/functions/ajax-press.php?press_type=company&related_id=<?=$thisCompany->ID?>",true);
			xmlhttp.send();
		}
		
		//on page load, load the table.
		loadPublicationPress();
		
		</script>
		
		
		
		<div id="PublicationPress" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Add Publication or Press</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					
					<div class="form-group">
					<label class="control-label">Publication or Press Title</label>
					<input type="text"  placeholder="" class="form-control" id="presstitle" name="">
					</div>
					
					<div class="form-group">
					<label class="control-label">Publication (Newspaper, Journal, etc.)</label>
					<textarea maxlength="250" id="publication" class="form-control limited"></textarea>
					</div>
					
					<div class="form-group">
					<label class="control-label">General Description</label>
					<textarea maxlength="250" id="pressdescription" class="form-control limited"></textarea>
					</div>
						
						
					<div class="form-group">								
					<label for="form-field-mask-1">
					Date of Publication or Press<small class="text-success">99/99/9999</small>
					</label>
					<div class="input-group">
				    <input type="text" id="pressdate" class="form-control input-mask-date">
					<span class="input-group-btn">
					<button type="button" class="btn btn-default">
					<i class="fa fa-calendar"></i>Add Date</button> </span>
					</div>
					</div>
					</div>
	
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Close
				</button>
				<button type="button" data-dismiss="modal" onClick="savePublicationPress();" class="btn btn-blue">
					Save changes
				</button>
			</div>
		</div>
		
		
		<script>
		
		function saveProfessionalAssociation() { 
			var x = document.getElementById("association");
			var option = document.createElement("option");
			option.text = document.getElementById('newPA').value;
			option.selected = "selected";
			x.add(option);
			document.getElementById('newPA').value='';
			
			
		}
		
		</script>
		
		<div id="ProfessionalAssociation" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Add Professional Association</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label">Professional Association</label>
					<input type="text"  placeholder="" class="form-control" id="newPA" name="newPA">
					</div>
												
					
					</div>	
					
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Close
				</button>
				<button type="button" data-dismiss="modal" onClick="saveProfessionalAssociation();" class="btn btn-blue">
					Save changes
				</button>
			</div>
		</div>

		</div>
		
		
		<script>
		


			function saveSpeakingEngagement() {
			
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
			    document.getElementById("speakingengagements").innerHTML=xmlhttp.responseText;
			
				}
			  }
			xmlhttp.open("GET","/network/functions/ajax-speakingengagements.php?speaking_type=company&related_id=<?=$thisCompany->ID?>&name="+document.getElementById('speakingname').value+"&location="+document.getElementById('speakinglocation').value+"&date_month="+document.getElementById('speaking_date_month').value+"&date_year="+document.getElementById('speaking_date_year').value,true);
			xmlhttp.send();
			document.getElementById('speakingname').value='';
			document.getElementById('speakinglocation').value='';
			document.getElementById('speakingdate').value='';
			
			
			
		}

			function loadSpeakingEngagements() {
			
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
			    document.getElementById("speakingengagements").innerHTML=xmlhttp.responseText;
			    }
			  }
			xmlhttp.open("GET","/network/functions/ajax-speakingengagements.php?speaking_type=company&related_id=<?=$thisCompany->ID?>",true);
			xmlhttp.send();
		}
		
		//on page load, load the table.
		loadSpeakingEngagements();
		
		</script>
		
		<div id="SpeakingEngagements" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Add Speaking Engagement</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					
					<div class="form-group">
					<label class="control-label">Speaking Engagement</label>
					<input type="text"  placeholder="" class="form-control" id="speakingname" name="">
					</div>
					
			
					
						
						
					
					
					<div class="form-group">
					<label class="control-label">Location</label>
					<input type="text"  placeholder="" class="form-control" id="speakinglocation" name="">
					</div>
					
					<div class="row">	
					<div class="form-group">								
					<label for="form-field-mask-1" class="col-md-12">
					Date of Speaking Engagement<small class="text-success">Month/Year</small>
					</label>
					<div class="col-md-6">
											
												<select id="speaking_date_month" class="form-control search-select">
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
												
												<select id="speaking_date_year" class="form-control search-select">
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
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Close
				</button>
				<button type="button" data-dismiss="modal" onClick="saveSpeakingEngagement()" class="btn btn-blue">
					Save changes
				</button>
			</div>
		</div>


<div id="NewClient" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Add New Client</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
</div>
</div>
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
					<input type="text"  placeholder="" class="form-control" id="=" name="">
					</div>
					
					<div class="form-group">
					<label class="control-label">Message</label>
					<textarea maxlength="" id="form-field-23" class="form-control" rows="10"></textarea>
					</div>
						
						
					
	
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Cancel
				</button>
				<button type="button" class="btn btn-blue">
					Send Message
				</button>
			</div>
		</div>
        </div>
        
        	
		
		<script>
		
		function saveClientPrivate() { 
			var x = document.getElementById("clients_private");
			var option = document.createElement("option");
			option.text = document.getElementById('newClientPrivate').value;
			option.selected = "selected";
			x.add(option);
			document.getElementById('newClientPrivate').value='';
			
			
		}
		
		function saveClientPublic() { 
			var x = document.getElementById("clients_public");
			var option = document.createElement("option");
			option.text = document.getElementById('newClientPublic').value;
			option.selected = "selected";
			
			x.add(option);
			document.getElementById('newClientPublic').value='';
			alert(x.length);
			
		}
		
		</script>
		
        
<div id="AddClientPrivate" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Add Client(Private)</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					
					<div class="form-group">
					<label class="control-label">Client Name</label>
					<input type="text"  placeholder="" class="form-control" id="newClientPrivate" name="newClientPrivate">
					</div>
		
	
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Cancel
				</button>
				<button type="button" data-dismiss="modal" onClick="saveClientPrivate();" class="btn btn-blue">
					Save Client
				</button>
			</div>
		</div>
</div>

<div id="AddClientGoverment" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Add Client (Government)</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					
					<div class="form-group">
					<label class="control-label">Client Name</label>
					<input type="text"  placeholder="" class="form-control"  id="newClientPublic" name="newClientPublic">
					</div>
		
	
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Cancel
				</button>
				<button type="button" data-dismiss="modal" onClick="saveClientPublic();" class="btn btn-blue">
					Save Client
				</button>

			</div>
		</div>
</div>


<script>

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
			xmlhttp.open("GET","/network/functions/ajax-significantengagement.php?engagement_type=user&related_id=<?=$company->ID?>&engagement_name="+document.getElementById('engagement_name').value+"&description="+document.getElementById('engagement_description').value+"&company_attorney=<?=$company->company_name?>&to_company_id=<?=$_GET['company_id']?>&month="+document.getElementById('engagement_month').options[document.getElementById('engagement_month').selectedIndex].value+"&year="+document.getElementById('engagement_year').options[document.getElementById('engagement_year').selectedIndex].value,true);
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
		