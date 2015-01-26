	<!-- To do Change subject to rfp title -->
	
		<div id="panel_trash" class="tab-pane">
									
									
									
									<div class="row">
									<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<!-- start: INBOX PANEL -->
							
							<div class="col-md-12">
												<div class="col-md-12">
												
														
												<div class="form-group">
												
												<span class="input-icon input-icon-right">
													<input type="text" name="trash_search" placeholder="Search Messages" id="form-field-17" class="form-control">
													<i class="fa fa-search"></i> </span>
												</div>
												
												</div><!-- End Account Type -->
							
												
												
												
												<div class="clearfix"></div>
								
								
								
								<div class="panel-body messages">
										<ul class="messages-list">
        								<% loop $Trash %>
        									<li class="messages-item" onClick="showMailMessage($ID)">
        								
        										<span title="Mark as starred" class="messages-item-star"><i class="fa fa-star"></i></span>
            									<a href='/network/?page=profile&profile_id=$profile'>
            									  <img class="messages-item-avatar" src="{$BaseHref}assets/Uploads/user.png" border=0>
            									</a>
        											<span class="messages-item-from">$sender.FirstName $sender.Surname</span>
        										<div class="messages-item-time">
        											<span class="text">$Date_Sent.Date</span>
        										</div>
        										<span class="messages-item-subject">$Subject</span>
        										<span class="messages-item-preview">$Preview</span>
        									</li>
        									<? } ?>
        									<% end_loop %>
									</ul>
									
									<% loop Trash %>
									<div class="messages-content" id="$ID" 
									<% if First %>
									style="display:block;">
									<% else %>
									style="display:none;">
									<% end_if%>
									  
										<div class="message-header">
											<div class="message-time" id="trash-message-time">
											  $Date_Sent.Date
											</div>
											<div class="message-from" id="trash-message-from">
											   $sender.FirstName $sender.Surname
											</div>
											<div class="message-to" id="trash-message-to">
												To: $receiver.FirstName $sender.Surname
											</div>
											<div class="message-subject" id="trash-message-subject">
											  $Subject
											</div>
											<div class="message-actions">
												<a title="Move to trash" href="#"><i class="fa fa-trash-o"></i></a>
												<a title="Reply" onclick="getElementById('message_id').value=$ID" href="#"><i class="fa fa-reply"></i></a>
												<a title="Reply to all" href="#"><i class="fa fa-reply-all"></i></a>
												<a title="Forward" href="#"><i class="fa fa-long-arrow-right"></i></a>
											</div>
										</div>
										<div class="message-content" id="trash-message-content">
										  <p>$Body</p>
										
											<hr>
											
											
											
										</div>
										
									
									</div>
									
									<% end_loop %>
									
									
									
									
									
								</div>
							
						
							<!-- end: INBOX PANEL -->
							</div>
						</div>
					</div>
					</div>
					<!-- end: PAGE CONTENT--></div>	