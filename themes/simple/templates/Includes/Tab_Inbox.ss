<div id="panel_messages" class="tab-pane in active">
  <div class="row">
		<!-- end: PAGE HEADER -->
		<!-- start: PAGE CONTENT -->
		<div class="row">
        <div class="col-md-12">
							<!-- start: INBOX PANEL -->

									<form method="post" action="/network/?page=messages">
						 
						        <div class="col-md-12">
						          <div class="col-sm-8 col-md-10">
						            <div class="form-group"> <span class="input-icon input-icon-right">
						              <input type="text" placeholder="Search Messages" name="inbox_search" id="form-field-17" class="form-control" >
						              <i class="fa fa-search"></i> </span> </div>
						          </div>
						          
						          <!-- End Account Type -->
						          
						          <div class="col-sm-3 col-md-1">
						            <button class="btn btn-green" type="submit"><i class="fa fa-search"></i> SEARCH</button>
						          </div>
						          </form>
												
												
												<div class="clearfix"></div>
								
								
								
								<div class="panel-body messages">
								
										<ul class="messages-list">
								 
									<% loop $Messages %>
										
										<li class="messages-item" onClick="showMailMessage($ID)">
									
											<a href='/network/?page=profile&profile_id=$profile'>
											  <img class="messages-item-avatar" src="{$BaseHref}assets/Uploads/user.png" border=0>
											  </a>
											<span class="messages-item-from">$sender.FirstName $Sender.Surname</span>
											<div class="messages-item-time">
												<span class="text">$Date_Sent.Date</span>
											</div>
											<span class="messages-item-subject">&nbsp;$Subject</span>
											<span class="messages-item-preview">$preview</span>
										</li>
										
										
										
										
										<% end_loop %>
																		</ul>
																		
										<% loop Messages %>
										<div class="messages-content" id="$ID" 
										  <% if First %>
      									style="display:block;">
      									<% else %>
      									style="display:none;">
      							 <% end_if%>
      							 
										<div class="message-header">
										  
											<input type=hidden name id="mail-message-id">
											<div class="message-time" id="mail-message-time">
												$Created.Date
											</div>
											<div class="message-from" id="mail-message-from">
											  $sender.FirstName $sender.Surname
											
											</div>
											<div class="message-to" id="mail-message-to">
										       To: $receiver.FirstName $sender.Surname
											</div>
											<div class="message-subject" id="mail-message-subject">
												$Subject
											</div>
											<div class="message-actions">
												<a title="Move to trash" href="javascript:deleteMail();"><i class="fa fa-trash-o"></i></a>
												<a title="Reply" href="#SendMessage" onclick="getElementById('message_id').value=$ID" data-toggle="modal"><i class="fa fa-reply"></i></a>
										
												<!--<a title="Forward" href="#"><i class="fa fa-long-arrow-right"></i></a>-->
											</div>
										</div>
										<div class="message-content" id="mail-message-content">
											<p>
											$Body
											</p>
											<hr>
											
											
											
										</div>
										
									</div>  								
											
									<% end_loop %>
									
									
									
									
									
									
								</div>
								<script>
								  
								  function showMailMessage(id){
								  
								    $(".messages-content").hide();
								    $("#"+id).show();
								  
								  }
								  
								</script>
							
							<!-- end: INBOX PANEL -->
						</div>
					</div>
					 
					</div>
					<!-- end: PAGE CONTENT-->
									
								</div> <!-- End Panel Body -->
								</div><!-- End Overview Panel -->
								
								
								
					
					