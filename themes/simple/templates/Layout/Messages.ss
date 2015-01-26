<!-- start: PAGE CONTENT -->

					<div class="row">
					  
						<div class="col-sm-12">
    						  <% if Message.Type %>
    					    <div class="alert alert-$Message.Type alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        $Message.Message
                      </div>
    					  <% end_if %>
							<div class="tabbable">
								<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
									<li >
										<a data-toggle="tab"  href="#panel_messages" id="apanel_messages">
											Messages <span class="badge badge-info"> $CurrentUser.allMessages.newEmails.Count </span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_rfp" id="apanel_rfp">
											RFP <span class="badge badge-info"> $CurrentUser.allMessages.rfpApply.Count  </span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_engagement" id="apanel_engagement">
											Engagement <span class="badge badge-info"> $CurrentUser.allMessages.engagements_to.Count</span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_connection" id="apanel_connection">
											Connection <span class="badge badge-info"> $Connections.Count</span>
										</a>
									</li>
									<li >
										<a data-toggle="tab" href="#panel_sent" id="apanel_sent">
											Sent
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_trash" id="apanel_trash">
											Trash
										</a>
									</li>
								</ul>
								
								
								
								<div class="tab-content">
								    <% include Tab_Inbox %>
								    
										<% include Modal_Compose %>
										
										<% include Tab_Rfp %>
										
										<% include Tab_Engagements %>
										
										<% include Tab_Connections %>

                    <% include Tab_Sent %>
                    
                    <% include Tab_Trash %>





									</div><!-- End Engagement Tab -->
									
								</div>
							</div>
						</div>
		
	