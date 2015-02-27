<div class="col-sm-6">
							<div class="panel panel-white">
								<div class="panel-heading">
									<i class="clip-database"></i>
									RFP Notifications
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
											<i class="fa fa-wrench"></i>
										</a>
										<a class="btn btn-xs btn-link panel-refresh" href="#">
											<i class="fa fa-refresh"></i>
										</a>
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body panel-scroll ps-container" style="height:400px">
									<ul class="activities">
															<% loop Notifications_RFP %>
															<li>
																<a class="activity" href="javascript:void(0)">
																	<% if  Image == "assets/" %>
																	   <img class="messages-item-avatar"  style="max-width: 50px; max-height: 50px;" src="{$Top.BaseHref}assets/Uploads/user.png" alt="">

                                     <% else %> 
                                      <img class="messages-item-avatar" style="max-width: 50px; max-height: 50px;" src="{$Top.BaseHref}{$Image}" alt="">

                                    <% end_if%> 
                                	<span class="desc">$Details</span>
														
																</a>
															</li>
															<% end_loop %>
															<!-- li>
																<a class="activity" href="javascript:void(0)">
																	<i class="clip-file-3 circle-icon circle-yellow"></i>
																	<span class="desc">Alecia Daniel has a question to RFP Title RFP4710.</span>
														
																</a>
															</li>
															<li>
																<a class="activity" href="javascript:void(0)">
																	<i class="clip-checkmark-2 circle-icon circle-green"></i>
																	<span class="desc">Dante' Fillyau has a accepted Award to RFP Title Project 346X.</span>
																
																</a>
															</li>
															<li>
																<a class="activity" href="javascript:void(0)">
																	<i class="clip-close circle-icon circle-red"></i>
																	<span class="desc">Kenneth Ross has not been awarded RFP Title DreamChaser.</span>
															
																</a>
															</li>
															
															<li>
																<a class="activity" href="javascript:void(0)">
																	<i class="clip-paperplane circle-icon circle-gray"></i>
																	<span class="desc">RFP Title WalMart4710 submissions end today.</span>
																
																</a>
															</li -->
															
														</ul>
								<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 467px; display: none;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 300px; display: inherit;"><div class="ps-scrollbar-y" style="top: 0px; height: 247px;"></div></div></div>
							</div>
						</div>