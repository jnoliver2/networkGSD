<div id="panel_rfp" class="tab-pane">
		<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<!-- start: INBOX PANEL -->
							
						<div class="col-md-12">
												<div class="col-md-5">
												
														<label class="control-label">Search</label>
												<div class="form-group">
												
												<span class="input-icon input-icon-right">
													<input type="text" placeholder="Text Field" id="rfpsearch" class="form-control">
													<i class="fa fa-search"></i> </span>
												</div>
												
												</div><!-- End Account Type -->
							
												<div class="col-md-3">
												<div class="form-group">
														<label class="control-label">Posted RFP</label>
												<select id="posted_rfp" class="form-control">
														<option value="">--All RFPs--</option>
														<? while ($row=mysql_fetch_assoc($rfp_posted)) { ?>
														<option <? if ($_GET['posted_rfp']==$row['id']) { echo "selected "; } ?> value="<?=$row['id']?>"><?=$row['rfp_title']?> (<?=$row['id']?>)</option>
														<? } ?>
												</select>
												</div>
												</div><!-- End Account Type -->
												
												<div class="col-md-2">
												<div class="form-group">
														<label class="control-label">Applied RFP</label>
												<select id="applied_rfp" class="form-control">
														<option value="">--All RFPs--</option>
															<? while ($row=mysql_fetch_assoc($rfp_applied)) { ?>
														<option <? if ($_GET['applied_rfp']==$row['id']) { echo "selected "; } ?>   value="<?=$row['id']?>"><?=$row['rfp_title']?>  (<?=$row['id']?>)</option>
														<? } ?>
												</select>
												</div>
												</div><!-- End Account Type -->
												
												<div class="col-md-1" style="padding-top:25px;"><button onClick="ajaxRFP(document.getElementById('rfpsearch').value,document.getElementById('posted_rfp').options[document.getElementById('posted_rfp').selectedIndex].value,document.getElementById('applied_rfp').options[document.getElementById('applied_rfp').selectedIndex].value);" class="btn btn-green" type="button"><i class="fa fa-search"></i> SEARCH</button></div>
												<div class="clearfix"></div>
								
								
								
								
								
								
								<div class="panel-body messages">
									<ul class="messages-list">
									  
    							  <% loop Rfps %>
										<li class="messages-item" onClick="showMailMessage($ID)">
									
											<span title="Mark as starred" class="messages-item-star"><i class="fa fa-star"></i></span>
											<a href='/network/?page=profile&profile_id=$profile'>
											  <img class="messages-item-avatar" src="{$BaseHref}assets/Uploads/user.png" border=0>
											</a>
											<span class="messages-item-from">$sender.FirstName $Sender.Surname</span>
											<div class="messages-item-time">
												<span class="text">$Created.Date</span>
											</div>
											<span class="messages-item-subject">RFP $RfpID:  $Rfp.Title </span>
											<span class="messages-item-preview">$Preview</span>
										</li>
										<? } ?>
										
										<% end_loop %>
									</ul>
									
									<% loop Rfps %>
									<div class="messages-content" id="$ID" 
										  <% if First %>
      									style="display:block;">
      									<% else %>
      									style="display:none;">
      							 <% end_if%>
      							 
										<div class="message-header">
									
											<div class="message-time" id="rfp-message-time">
												$Created.Date
											</div>
											<div class="message-from" id="rfp-message-from">
											  $sender.FirstName $sender.Surname
											</div>
											<div class="message-to" id="rfp-message-to">
												 To: $receiver.FirstName $sender.Surname
											</div>
											<div class="message-subject" id="rfp-message-subject">
												 $Rfp.Title
											</div>
											<div class="message-actions">
												<a title="Move to trash" href="javascript:denyRFP();"><i class="fa fa-trash-o"></i></a>
												<a title="Reply" href="#SendMessage" data-toggle="modal"><i class="fa fa-reply"></i></a>
												<!--<a title="Forward" href="#"><i class="fa fa-long-arrow-right"></i></a>-->
											</div>
										</div>
										<div class="message-content" id="rfp-message-content">
											<p>
											$body_text.forTemplate
											</p>
											<hr>
											
											
											
										</div>
										
										
										
										<div id="rfp-message-buttons" style="padding-left: 15px;">
												<button class="btn btn-green" type="button" href="#AwardRFP" data-toggle="modal" onclick="getElementById('msg_id').value=$ID" ><i class="fa fa-trophy"></i> AWARD RFP</button>   
												<button onClick="denyRFP();" class="btn btn-red" type="button"><i class="fa fa-minus-square"></i> DENY</button> <input type=hidden name="thisRFPid" id="thisRFPid" value="">
											</div>
									</div>
									
									<% end_loop %>
								</div>
								
							
							
													
							<!-- end: INBOX PANEL -->
						</div>
						
							
					</div>
					
					</div>
					<!-- end: PAGE CONTENT-->
</div>
					
					
<script>
										
										function denyRFP() {
												
			
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
												xmlhttp.open("GET","/network/functions/ajax-message.php?denyRFP="+document.getElementById('thisRFPid').value,true);
												xmlhttp.send();
												//alert("/network/functions/ajax-message.php?denyRFP="+document.getElementById('thisRFPid').value);
												document.getElementById('rfp-message-content').innerHTML = "RFP Application Archived";
											document.getElementById('rfp-message-buttons').style.display = 'none';	
										
											}
											
										</script>
										
		 <div id="AwardRFP" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
		   <div class="modal-dialog">
        <div class="modal-content">
        <form action="{$BaseHref}pages/rfp_award" method="post" >
			<div class="modal-header">
			  
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Award RFP</h4>
				
				<p><em>You are awarding the RFP to the following candidate. Please note you should include the next steps in the process, how to contact you.... etc. </em></p>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					
					
					<div class="form-group">
					<label class="control-label">Message</label>
					<textarea name ="message" maxlength="" id="rfp-award-apply" class="form-control" rows="5" placeholder="Include additional information here in regards to the RFP."></textarea>
					</div>
						
					<input type=hidden id="msg_id" name="message_id" >

				    
						
					
	
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Cancel
				</button>
				<button type="submit"  class="btn btn-blue">
					Award RFP
				</button>
			</div>
		</div>
		</form>
		</div>	
		</div>
		</div>