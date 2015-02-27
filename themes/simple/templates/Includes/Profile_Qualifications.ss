<div class="panel-group accordion-custom accordion-teal" id="accordion">
						
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
													<i class="icon-arrow"></i>
													Board Certifications
												</a></h4>
											</div>
											<div id="collapseOne" class="panel-collapse collapse">
												<div class="panel-body">
                          <% loop board_certs %>
                            <div class='single_award' style='display: block; float: left; width: 49%; height: 40px; overflow: auto; padding-left: 30px;'>
                              $Cert_List.Name
                              </div>
                          <% end_loop %>
		
														   
												</div>
											</div>
										</div>
						
						
						
						
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><i class="icon-arrow"></i>Clients (Private)
												</a></h4>
											</div>
											<div id="collapseFour" class="panel-collapse collapse">
												<div class="panel-body">
                        <% loop clients_private %>
                          <div class='single_award' style='display: block; float: left; width: 49%; height: 40px; overflow: auto; padding-left: 30px;'>
                            $Name
                        </div>
                       <% end_loop %>  
												</div>
											</div>
										</div>
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
													<i class="icon-arrow"></i>
													Clients (Government)
												</a></h4>
											</div>
											<div id="collapseTwo" class="panel-collapse collapse">
												<div class="panel-body">
                          <% loop clients_govt %>
                          <div class='single_award' style='display: block; float: left; width: 49%; height: 40px; overflow: auto; padding-left: 30px;'>
                            $Name
                        </div>
                       <% end_loop %> 

												</div>
											</div>
										</div>
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
													<i class="icon-arrow"></i>
													Significant Engagements
												</a></h4>
											</div>
											<div id="collapseThree" class="panel-collapse collapse">
												<div class="panel-body">
												  <ul> 
												  <% loop engagements %>
                              <il><strong>$Name</strong><br />
                              $Description<br/>
                              <strong>Company/Attorney:</strong>$Company_Attorney <br/>
                              <strong>Dates:</strong>$Month, $Year
                              </il>
                              <hr/>
                          <% end_loop %>
                      </ul>

                       
												</div>
											</div>
										</div>
										
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
													<i class="icon-arrow"></i>
													Professional Associations
												</a></h4>
											</div>
											<div id="collapse5" class="panel-collapse collapse">
												<div class="panel-body">
													
                         <% loop Association %>
                            <div class='single_award' style='display: block; float: left; width: 49%; height: 40px; overflow: auto; padding-left: 30px;'>
                              $Association_List.Name
                            </div>
                        	<% end_loop %>													   
												</div>
											</div>  
										</div>
                                        
                                        
                                      
                                        
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
													<i class="icon-arrow"></i>
													Government Level of Clearance 
												</a></h4>
											</div>
											<div id="collapse6" class="panel-collapse collapse">
												<div class="panel-body">
													$Government_Clearance
												</div>
											</div>
										</div>
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7">
													<i class="icon-arrow"></i>
													Awards & Honors
												</a></h4>
											</div>
											<div id="collapse7" class="panel-collapse collapse">
												<div class="panel-body">
                            <% loop Award %>
                              <div class='single_award' style='display: block; float: left; width: 49%; height: 60px; overflow: auto; padding-left: 30px;'>
                                $Name<br /> 
                                <strong> Date: </strong> $Year
                               </div>
                            <% end_loop %>
                            
												</div>
											</div>
										</div>
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse8">
													<i class="icon-arrow"></i>
													Speaking Engagements
												</a></h4>
											</div>
											<div id="collapse8" class="panel-collapse collapse">
												<div class="panel-body">
                          <% loop speaking %>
                          <div class='single_award' style='display: block; float: left; width: 49%; height: 80px; overflow: auto; padding-left: 30px;'>
                            <strong>$Name</strong><br />
                            <strong>Location:</strong>$Location<br />
                            <strong>Date:</strong>$Date
                            </div>
                          <% end_loop %>
												</div>
											</div>
										</div>
										
										
												<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse9">
													<i class="icon-arrow"></i>
													Publications & Press
												</a></h4>
											</div>
											<div id="collapse9" class="panel-collapse collapse">
												<div class="panel-body">
                            <ul>
                              <% loop press %>
                              
                                <il><strong>$Title</strong><br />
                                            $Publication <br/>
                                            <strong>Description:</strong> $Description<br/>
                                            <strong>Date of Publication:</strong>$Date</il>
                                            <hr/>
                            <% end_loop %>
                           </ul>	   
												</div>
											</div>
										</div>
										
										
											<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse10">
													<i class="icon-arrow"></i>
													Languages
												</a></h4>
											</div>
											<div id="collapse10" class="panel-collapse collapse">
												<div class="panel-body">
													<ul>
													  <% loop languages %>
														<li>$Language_List.Name</li>
														<% end_loop %>
														 </ul>
												</div>
											</div>
										</div>
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse11">
													<i class="icon-arrow"></i>
													Web Site
												</a></h4>
											</div>
											<div id="collapse11" class="panel-collapse collapse">
												<div class="panel-body">
													<% if Website %>
										    <a href="{$Website}">$Website</a>
										  <% end_if %>
													 &nbsp;
												</div>
											</div>
										</div>
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse12">
													<i class="icon-arrow"></i>
													Ability to Work Onsite
												</a></h4>
											</div>
											<div id="collapse12" class="panel-collapse collapse">
												<div class="panel-body">
													$Work_On_Site &nbsp;
												</div>
											</div>
										</div>
										
										
									</div> 
									
									
									
									
									
									