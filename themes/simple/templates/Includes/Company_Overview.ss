<div class="row">
						
						
					
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="col-sm-12">
					<div class="page-header">
								<h1>$Name <small>Company Profile</small></h1>
							</div>
					<div class="col-md-4">
					
					<div class="space12" style="text-align:center;">
					<img style="max-width: 250px; max-height: 250px;" src="{$BaseHref}assets/Uploads/user.png" alt="">
					
										
					</div>	
					</div><!-- End Col 4 / Image Area -->


					<div class="col-md-8 well well-lg"> 
					<div class="col-md-6">
                  <p class="member-subtitle">Practice Areas</p>
                  <p class="col-md-12">
                    <% loop practice_areas %>
                      $PracticeArea_List.Name 
                      <br />
                    <% end_loop %>
					</p><!-- End Practice Area -->
                  </div>
                  
					<div class="col-md-6">
					<p class="member-subtitle">Bar Admissions States</p>
					<p class="col-md-12">
                 <% loop bar_states %>
                      $State.Full
                      <br />
                    <% end_loop %>
					</p><!-- End Bar Admission State --> 
					</div>
                  <div class="col-md-6">
					<p class="member-subtitle">Diversity Certifications</p>
					<p class="col-md-12">
                    <% loop diversity %>
                      $Diversity_List.Name 
                      <br />
                    <% end_loop %>
					
					</p><!-- End Bar Admission State --> 
					</div>
					
					</div><!-- End Col 8 / Profile Information -->
                    
                    
					

					
					
					<hr>
					
					<div class="clearfix"></div>

					<div class="col-xs-12 col-sm-6 col-md-4">
					<hr>
					
					<div class="col-md-6">
					
										
	<!-- score=450;
					-->
					<!-- if (score>2500) { --><img src="/GLADMIN/assets/GLimages/badge-green.jpg"><!-- } -->
					<!-- if (score>7500) { --><img src="/GLADMIN/assets/GLimages/badge-red.jpg"><!-- } -->
					<!-- if (score>15000) { --><img src="/GLADMIN/assets/GLimages/badge-yellow.jpg"><!-- } -->
					<!-- if (score>20000) { --><img src="/GLADMIN/assets/GLimages/badge-blue.jpg"><!-- } -->


					</div>
					
					<div class="col-md-6" style="text-align:right;">
					<h2 class="text-zero"></h2>
					</div>	
					
					<div class="clearfix"></div>
						<hr>
					<p>
										
											<button class="btn btn-blue btn-block" href="#RequestEngagement" onclick="getElementById('cid').value=$ID" data-toggle="modal">
											Request Engagement <i class="fa fa-plus"></i></button>
											
											<form action="{$BaseHref}pages/connection_request" method="post">
                         <input type="hidden" name="To_ID" value="$ID">
                         <input type="hidden" name="To_Type" value="company">
          							 <% if connected == "No" %>
          										
    								
    										<button class="btn btn-green btn-block">
    											Request Connection <i class="fa fa-chain"></i>
    										</button>
    										
    										<% else %>
    										
    										<button class="disabled btn btn-grey btn-block" >
    											Connection Requested <i class="fa fa-chain"></i>
    										</button>
    										
    										<% end_if %>
										
									 </form> 
										<br />
										<button class="btn btn-red btn-block" href="#SendMessage" data-toggle="modal" onclick="getElementById('company_id').value={$ID}">
											Send Message <i class="fa fa-file"></i>
										</button>
					</p>
				
										
					<hr>
						
						
					<div class="clearfix"></div>
					<div class="well well-sm profile-info" style="overflow:hidden;">
					
					
					<div class="col-sm-12 col-md-4"><strong>MAIN OFFICE:</strong></div>
					<div class="col-sm-12 col-md-8">
					<% with $company_address %>
					  $Address1 $Address2 <br />
					  $City <br />
					  $State.Full <br />
					  $Zip
					<% end_with %>

					</div>
					
					
					<div class="col-sm-12 col-md-4"><strong>FIRM SIZE:</strong></div>
					<div class="col-sm-12 col-md-8">
					  
					</div>
					
					
										
					</div>
					
					
					<hr><div class="clearfix"></div>
					<div class="connection" style="display: none;">
					<h4>Connections</h4>
					
<img alt="Michael Hall" src="./assets/images/avatar-2.jpg" class="circle-img info-button popovers" title="" data-content="Senior Partner • MediumFour, LLC" data-placement="left" data-trigger="hover" data-rel="popover" data-original-title="Michael W. Hall">
<img alt="Michael Hall" src="./assets/images/avatar-2.jpg" class="circle-img info-button popovers" title="" data-content="Senior Partner • MediumFour, LLC" data-placement="left" data-trigger="hover" data-rel="popover" data-original-title="Michael W. Hall">
<img alt="Michael Hall" src="./assets/images/avatar-2.jpg" class="circle-img info-button popovers" title="" data-content="Senior Partner • MediumFour, LLC" data-placement="left" data-trigger="hover" data-rel="popover" data-original-title="Michael W. Hall">
<img alt="Michael Hall" src="./assets/images/avatar-2.jpg" class="circle-img info-button popovers" title="" data-content="Senior Partner • MediumFour, LLC" data-placement="left" data-trigger="hover" data-rel="popover" data-original-title="Michael W. Hall">
<img alt="Michael Hall" src="./assets/images/avatar-2.jpg" class="circle-img info-button popovers" title="" data-content="Senior Partner • MediumFour, LLC" data-placement="left" data-trigger="hover" data-rel="popover" data-original-title="Michael W. Hall">
<img alt="Michael Hall" src="./assets/images/avatar-2.jpg" class="circle-img info-button popovers" title="" data-content="Senior Partner • MediumFour, LLC" data-placement="left" data-trigger="hover" data-rel="popover" data-original-title="Michael W. Hall">
					</div>	
					
						
					
					
					<hr>				
						
						
						
						
					</div><!-- End Left Column -->
					
					<div class="col-xs-12 col-sm-6 col-md-8"> 
					<hr>	
						
										<p class="member-subtitle">Diversity Statement</p>
										<p>
										  $Diversity_Statement
										  <% if Diversity_Link %>
										    <a href="{$Diversity_Link}">READ COMPLETE STATEMENT</a>
										  <% end_if %>
										</p> 



										<p class="member-subtitle">Company Overview</p>
										<p>$Overview</p>
						
						
						
						<hr>
						<div class="clearfix"></div>
						
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
										
										
									</div> </div></div>
									
								</div> <!-- End Panel Body -->
