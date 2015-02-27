<div id="panel_users" class="tab-pane">
										<form action="{$BaseHref}pages/company_user_add" role="form" id="form" method="post">
										  <input type=hidden name="company_id" value="{$Company.ID}">
											<div class="row">
												<div class="col-md-12">
													<h3>Add User Accounts </h3>
													<hr>
												</div>
												<div class="col-md-6">

												
													<div class="form-group">
														<label class="control-label">
															FIRST NAME
														</label> 
														<input type="text"  class="form-control" id="firstname" name="firstname">
													</div>
											</div>
											<div class="col-md-6">

												
													<div class="form-group">
														<label class="control-label">
															SURNAME
														</label> 
														<input type="text" class="form-control" id="surname" name="surname">
													</div>
											</div>
													
											<div class="col-md-12">
													<div class="form-group">
														<label class="control-label">
															User Email Address
														</label>
														<input type="text"  placeholder="" class="form-control"  name="email">
													</div>
												<div class="form-group">
														<label class="control-label">
															User Password
														</label>
														<input type="text"  placeholder="" class="form-control" id="=" name="pass">
													</div>
													
													<label class="control-label">Account Type</label>
										<div class="form-group">		
										<label class="checkbox-inline">
										<input type="checkbox" value="1" name="level" class="grey">Administrator</label>
										<label class="checkbox-inline">
										<input type="checkbox" value="2" name="level" class="grey">User</label>
										
										</div>
													
												</div>	
													
												
											</div>
											<div class="row">
										
									</div><!-- End Business Information -->
									
									
											<div class="row">
												<div class="col-md-12">
													
												</div>
											</div>
											<div class="row">
												<div class="col-md-8">
													<p>
														By clicking ADD USER, you are agreeing to the Private Policy and Terms &amp; Conditions.
													</p>
												</div>
												<div class="col-md-4">
													<button class="btn btn-green btn-block" type="submit">
														ADD USER <i class="fa fa-arrow-circle-right"></i>
													</button>
												</div>
											
											
										
											<div class="col-md-12">
													<h3>Company User Accounts </h3>
													<hr>
												</div>
											</div>
											</form><!-- End ADD USER --> 	
										
										<% include Company_Users_Table %>
										
										
								</div><!-- End User Tab -->