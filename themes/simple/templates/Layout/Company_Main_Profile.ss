
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<div class="tabbable">
								<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
									<li class="active">
										<a data-toggle="tab" href="#panel_overview">
											Company Overview
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_edit_account">
											Edit Company Account
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_users">
											Account Users
										</a>
									</li>
									
								</ul>
								<div class="tab-content">
								    <% include Company_Tab_Overview %>
								    <% include Company_Tab_Edit %>
								    <% include Company_Tab_Users %>
									
								</div>
							</div>
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
<% include Modal_Compose %>
<% include Engagement_Modal_Request %>	
					



		
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
			xmlhttp.open("GET","/network/functions/ajax-locations.php?address_type=company&related_id=<?=company->ID?>",true);
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
			xmlhttp.open("GET","/network/functions/ajax-locations.php?address_type=company&related_id=<?=company->ID?>&address1="+document.getElementById('address1').value+"&address2="+document.getElementById('address2').value+"&city="+document.getElementById('city').value+"&st="+document.getElementById('addressst').options[document.getElementById('addressst').selectedIndex].value+"&zip="+document.getElementById('addresszip').value+"&phone="+document.getElementById('addressphone').value+"&fax="+document.getElementById('addressfax').value,true);
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
			xmlhttp.open("GET","/network/functions/ajax-awards.php?award_type=company&related_id=<?=company->ID?>",true);
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
			xmlhttp.open("GET","/network/functions/ajax-awards.php?award_type=company&related_id=<?=company->ID?>&award_name="+document.getElementById('award_name').value+"&award_year="+document.getElementById('award_year').value,true);
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
			xmlhttp.open("GET","/network/functions/ajax-significantengagement.php?engagement_type=company&related_id=<?=company->ID?>&engagement_name="+document.getElementById('engagement_name').value+"&description="+document.getElementById('engagement_description').value+"&company_attorney="+document.getElementById('engagement_with').value+"&month="+document.getElementById('engagement_month').options[document.getElementById('engagement_month').selectedIndex].value+"&year="+document.getElementById('engagement_year').options[document.getElementById('engagement_year').selectedIndex].value,true);
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
			xmlhttp.open("GET","/network/functions/ajax-significantengagement.php?engagement_type=company&related_id=<?=company->ID?>",true);
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
						<? 	x=1990;
							while (x<2015) { x++; ?>
						<option><?=x?></option>
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
			  
			xmlhttp.open("GET","/network/functions/ajax-press.php?press_type=company&related_id=<?=company->ID?>&title="+document.getElementById('presstitle').value+"&description="+document.getElementById('pressdescription').value+"&publication="+document.getElementById('publication').value+"&date="+document.getElementById('pressdate').value,true);
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
			xmlhttp.open("GET","/network/functions/ajax-press.php?press_type=company&related_id=<?=company->ID?>",true);
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
			xmlhttp.open("GET","/network/functions/ajax-speakingengagements.php?speaking_type=company&related_id=<?=company->ID?>&name="+document.getElementById('speakingname').value+"&location="+document.getElementById('speakinglocation').value+"&date_month="+document.getElementById('speaking_date_month').value+"&date_year="+document.getElementById('speaking_date_year').value,true);
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
			xmlhttp.open("GET","/network/functions/ajax-speakingengagements.php?speaking_type=company&related_id=<?=company->ID?>",true);
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
				<!-- start: PANEL CONFIGURATION MODAL FORM -->
				<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title">Panel Configuration</h4>
							</div>
							<div class="modal-body">
								Here will be a configuration form
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button>
								<button type="button" class="btn btn-primary">
									Save changes
								</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- end: SPANEL CONFIGURATION MODAL FORM -->
				
