<div class="search-classic col-md-9">
								
								
								
								<h3><?=mysql_num_rows($companies) ?> $Companies.Count Companies</h3>
								<hr>
								
							<% loop Companies %>
									
								 
													
								
								
								<div class="search-result col-md-12" style="padding-left:0px;">
								<div class="row">
								
								<div class="search-post-image col-xs-4 col-sm-4 col-md-3">
									<a href="/network/?page=profile-company&company_id=<?=$row['ID']?>"><img src="{$BaseHref}assets/Uploads/user.png" alt="" border=0></a>
								</div>
								
								<div class="search-post-content col-xs-8 col-sm-8 col-md-9">
								  <div class="col-md-12">
    									<i class="fa fa-archive filter-icon filter-green"></i>
    									<h3><a href="/network/?page=profile-company&company_id=<?=$row['ID']?>">$Name</a></h3>
									</div>
									<div class="col-md-12">
											<div class="search-post-info">
                                                <div class="">
                                                    <i class="fa fa-suitcase"></i> $company_address.State.Full
                                                </div><br/><div class="">
                                                    <i class="fa fa-globe"></i>
                                                    <% loop bar_states %>
                                                        $State.Full &bull;
                                                    <% end_loop %>
                                                    
                                                      </div><div class="">
                                                    <i class="fa fa-legal"></i> 
                                                    <%  loop practice_areas %>
                                                        $PracticeArea_List.Name
                                                        &bull;
                                                    <% end_loop%>
                                                   
                                                  </div>
                                            </div>
                  </div>
									<p>
										$company_overview_preview
									</p>
									
									<div class="col-md-6">
									
									
                    <form action="{$BaseHref}pages/connection_request" method="post">
                         <input type="hidden" name="To_ID" value="$ID">
                         <input type="hidden" name="To_Type" value="company">
          							 <% if connected == "No" %>
          										
    								
    										<button class="btn btn-green">
    											Connect <i class="fa fa-chain"></i>
    										</button>
    										
    										<% else %>
    										
    										<button class="disabled btn btn-grey btn-block" >
    											Connection Requested <i class="fa fa-chain"></i>
    										</button>
    										
    										<% end_if %>
										
									 </form> 
									</div>
									<div class="col-md-6" style="text-align:right;">
									<h2 class="text-zero"><?=getPoints($row['ID'],'company')?></h2>
									</div>
									
								</div><!-- End Content -->
								</div>
								</div>
								<div class="clearfix"></div>
															
								<% end_loop %>
								

								
								<h3>$Members.Count  People</h3>
								<hr>
								
								
								
								<% loop Members %>
								
								
								<div class="search-result col-md-12" style="padding-left:0px;">
								<div class="row">
								
								<div class="search-post-image col-xs-4 col-sm-4 col-md-3">
									<a href="/network/?page=profile-company&company_id=<?=$row['ID']?>"><img src="{$BaseHref}assets/Uploads/user.png" alt="" border=0></a>
								</div>
								
								
								<div class="search-post-content col-xs-8 col-sm-8 col-md-9">
								  <div class="col-md-12">
									<i class="fa fa-user filter-icon filter-green"></i><h3>
									  <a href="/network/?page=profile&profile_id=<?=$row['ID']?>">$FirstName $Surname</a></h3>
									</div>
									<div class="col-md-12">
										<div class="search-post-info">
                            <div class="">
                                <i class="fa fa-briefcase"></i>$Titles &bull; $Company.Name
                            </div>
                            <br/>
                            <div class="">
                                <i class="fa fa-globe"></i>    
                                <% loop bar_states %>
                                    &bullet;
                                    $State.Full
                                <% end_loop %>
                            </div>
                          <div class="">
                                <i class="fa fa-legal"></i>
                                  <% loop practice_areas %>
                                      &bull;
                                      $PracticeArea_List.Name
                                  <% end_loop %>
                                    
                           </div>
                        </div>
                        </div>

									<p>
										$bio_preview
									</p>
									
										
									<div class="col-md-6">
									
									
                    <form action="{$BaseHref}pages/connection_request" method="post">
                         <input type="hidden" name="To_ID" value="$ID">
                         <input type="hidden" name="To_Type" value="user">
          							 <% if connected == "No" %>
          										
    								
    										<button class="btn btn-green">
    											Connect <i class="fa fa-chain"></i>
    										</button>
    										
    										<% else %>
    										
    										<button class="disabled btn btn-grey btn-block" >
    											Connection Requested <i class="fa fa-chain"></i>
    										</button>
    										
    										<% end_if %>
										
									 </form> 
									</div>
								
									<div class="col-md-6" style="text-align:right;">
									<h2 class="text-zero" style=""><?=getPoints($row['ID'],'user')?></h2>
									</div>
									
								</div><!-- End Content -->
								</div></div>
								<div class="clearfix"></div>
							
															
																
						<% end_loop %>
								
							
								<!--
								<ol class="pagination text-center pull-right">
									<li class="prev disabled">
										<a href="#">
											Prev
										</a>
									</li>
									<li class="active">
										<a href="#">
											1
										</a>
									</li>
									<li>
										<a href="#">
											2
										</a>
									</li>
									<li>
										<a href="#">
											3
										</a>
									</li>
									<li>
										<a href="#">
											4
										</a>
									</li>
									<li>
										<a href="#">
											5
										</a>
									</li>
									<li class="next">
										<a href="#">
											Next
										</a>
									</li>
								</ol>
								-->
							</div>