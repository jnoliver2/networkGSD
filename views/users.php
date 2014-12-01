
				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-file"></i>
									<a href="/network/">
										Pages
									</a>
								</li>
								<li class="active">
									User Profile
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
								<h1><?=$user->first_name?> <?=$user->last_name?> <small>User Profile</small></h1>
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
										<a data-toggle="tab" href="#panel_overview">
											Your Profile
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_edit_account">
											Edit Your Profile
										</a>
									</li>
								
								</ul>
								<div class="tab-content">
									<div id="panel_overview" class="tab-pane in active">
										<div class="row">
									
											<? include("user-profile.php"); ?>
											
										</div>
					
									</div>
									<div id="panel_edit_account" class="tab-pane">
										<div class="row">
											<? include("user-edit.php"); ?>
										</div>
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
		<!-- start: FOOTER -->
	
		<!-- end: FOOTER -->
		
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
					<input type="text"  placeholder="" class="form-control" id="=" name="">
					</div>
												
					<div class="form-group">
					<label class="control-label">Business Address 2</label>
					<input type="text"  placeholder="" class="form-control" id="=" name="">
					</div>
					
					</div>	
													
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">City</label>
					<input type="text"  placeholder="" class="form-control" id="=" name="">
					</div>
					</div><!-- End md-4 -->
												
												
					<div class="col-md-4">
					<div class="form-group"><label for="form-field-select-3">State</label>
										<select multiple="multiple" id="form-field-select-4" class="form-control search-select">
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
					<input type="text"  placeholder="" class="form-control" id="=" name="">
					</div>
					</div><!-- End md-4 -->
													
					<div class="col-md-6">
					<div class="form-group">
					<label class="control-label">Phone</label>
					<input type="email" placeholder="(305) 555-1212" class="form-control" id="phone" name="email">
					</div>
					</div><!-- End md-4 -->
												
												
					<div class="col-md-6">
					<div class="form-group">
					<label for="form-field-select-3">Fax</label>
					<input type="email" placeholder="(305) 555-1212" class="form-control" id="phone" name="email">
					</div>
					
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Close
				</button>
				<button type="button" class="btn btn-blue">
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
			xmlhttp.open("GET","/network/functions/ajax-awards.php?award_type=user&related_id=<?=$user->ID?>",true);
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
			xmlhttp.open("GET","/network/functions/ajax-awards.php?award_type=user&related_id=<?=$user->ID?>&award_name="+document.getElementById('award_name').value+"&award_year="+document.getElementById('award_year').value,true);
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
			xmlhttp.open("GET","/network/functions/ajax-significantengagement.php?engagement_type=user&related_id=<?=$user->ID?>&engagement_name="+document.getElementById('engagement_name').value+"&description="+document.getElementById('engagement_description').value+"&company_attorney="+document.getElementById('engagement_with').value+"&month="+document.getElementById('engagement_month').options[document.getElementById('engagement_month').selectedIndex].value+"&year="+document.getElementById('engagement_year').options[document.getElementById('engagement_year').selectedIndex].value,true);
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
			xmlhttp.open("GET","/network/functions/ajax-significantengagement.php?engagement_type=user&related_id=<?=$user->ID?>",true);
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


					<div class="row">		
					<div class="form-group">								
					<label for="form-field-mask-1" class="col-md-12">
					Date of Significant Engagement<small class="text-success"> (Month and Year)</small>
					</label>
					<div class="col-md-6"> 
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
                    </div>
                    <div class="col-md-6"> 
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
			  
			xmlhttp.open("GET","/network/functions/ajax-press.php?press_type=user&related_id=<?=$company->ID?>&title="+document.getElementById('presstitle').value+"&description="+document.getElementById('pressdescription').value+"&publication="+document.getElementById('publication').value+"&date="+document.getElementById('pressdate').value,true);
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
			xmlhttp.open("GET","/network/functions/ajax-press.php?press_type=user&related_id=<?=$company->ID?>",true);
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
					<input type="text"  placeholder="" class="form-control" id="=" name="">
					</div>
												
					
					</div>	
					
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Close
				</button>
				<button type="button" onClick="savePublicationPress();" class="btn btn-blue">
					Save changes
				</button>
			</div>
		</div>

<div id="ClientGoverment" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Add Client Goverment</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label">Client Goverment</label>
					<input type="text"  placeholder="" class="form-control" id="=" name="">
					</div>
												
					
					</div>	
					
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Close
				</button>
				<button type="button" onClick="savePublicationPress();" class="btn btn-blue">
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
			xmlhttp.open("GET","/network/functions/ajax-speakingengagements.php?speaking_type=user&related_id=<?=$user->ID?>&name="+document.getElementById('speakingname').value+"&location="+document.getElementById('speakinglocation').value+"&date_month="+document.getElementById('speaking_date_month').value+"&date_year="+document.getElementById('speaking_date_year').value,true);
			
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
			xmlhttp.open("GET","/network/functions/ajax-speakingengagements.php?speaking_type=user&related_id=<?=$user->ID?>",true);
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
			//alert(x.length);
			
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
					<input type="text"  placeholder="" class="form-control" id="newClientPrivate" name="clients_private">
					</div>
		
	
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Cancel
				</button>
				<button type="button" class="btn btn-blue"  data-dismiss="modal" onClick="saveClientPrivate();">
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
					<input type="text"  placeholder="" class="form-control" id="newClientPublic" name="client_gov_name">
					</div>
		
	
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Cancel
				</button>
				<button type="button" class="btn btn-blue"   data-dismiss="modal" onClick="saveClientPublic();">
					Save Client
				</button>
			</div>
		</div>
</div>