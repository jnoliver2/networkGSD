<!-- start: PAGE CONTENT -->

					<div class="row">
					  
						<div class="col-sm-12">
    						
							<div class="tabbable">
								<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
									<li >
										<a data-toggle="tab"  href="#panel_messages" id="apanel_messages">
											Messages <span class="badge badge-info"> $Messages.Count </span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_rfp" id="apanel_rfp">
											RFP <span class="badge badge-info"> $Rfps.Count  </span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_engagement" id="apanel_engagement">
											Engagement <span class="badge badge-info"> $Engagements.Count</span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_connection" id="apanel_connection">
											Connection <span class="badge badge-info"> $Connections.Count</span>
										</a>
									</li>
									<li >
										<a data-toggle="tab" href="#panel_sent" id="apanel_sent">
											Sent <span class="badge badge-info"> $Sent.Count  </span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_trash" id="apanel_trash">
											Trash <span class="badge badge-info"> $Trash.Count  </span>
										</a>
									</li>
								</ul>
								
								
								
								<div class="tab-content">
								  <% include Tab_Inbox %>
								    
										<% include Modal_Compose %>
										<% include Modal_Award_Rfp %>	
										
										<% include Tab_Rfp %>
										
										<% include Tab_Engagements %>
										
										<% include Tab_Connections %>

                    <% include Tab_Sent %>
                    
                    <% include Tab_Trash %>







									</div><!-- End Engagement Tab -->
									
								</div>
							</div>
						</div>
		
	