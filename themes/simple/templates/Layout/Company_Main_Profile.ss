
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<div class="tabbable">
								<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
								  <% if Selected.ClassName == "Member" %>
								  
								      <li class="active">
										<a data-toggle="tab" href="#panel_overview">
											My Profile
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_edit_account">
											Edit My Profile
										</a>
									</li>
									
								  <% else %>
									<li class="active">
										<a data-toggle="tab" href="#panel_overview">
											Company Overview
										</a>
									</li>
									<% if CurrentUser.User_Level == "1" %>
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
										<% end_if %>
									<% end_if %>
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
<% include Address_Modal_Add %>
<% include Engagement_Modal_Request %>
<% include Engagement_Modal_Add %>
<% include Award_Modal_Add %>
<% include Association_Modal_Add %>
<% include Speaking_Modal_Add %>
<% include Press_Modal_Add %>
<% include Client_Modal_Add_Govt %>
<% include Client_Modal_Add_Private %>
<% include Connection_Review_Modal %>
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
				
