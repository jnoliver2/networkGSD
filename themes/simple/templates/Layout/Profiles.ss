<!-- start: PAGE HEADER -->
				
				
					
					<div class="row">
						<div class="col-sm-12 col-md-12">
						  
						  <% if Message.Type %>
					    <div class="alert alert-$Message.Type alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    $Message.Message
                  </div>
					  <% end_if %>
							<% include Profiles_Search %>
							
							<div class="clearfix"></div>
							<% include Profiles_Results %>
							
							
							<!-- end: SEARCH RESULT -->
						
						
						<div class="col-md-3">Advertisement Area</div>
						</div>
						
						
					</div>
					<!-- end: PAGE CONTENT-->