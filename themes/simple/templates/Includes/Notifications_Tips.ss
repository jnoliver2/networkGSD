												<div class="col-sm-5 col-md-6">
										
												<div class="panel panel-white">
													<div class="panel-heading">
														<i class="clip-checkmark-2"></i>
														Tips & Alerts
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
													<div class="panel-body panel-scroll ps-container" style="height:300px">
														<ul class="todo">
															<!-- Show To Dos -->
															<% if $Engagements < 6 %>
															    <li>
															      <a href="pages/user"><span class="desc" style="opacity: 1; text-decoration: none;">
															        Add more than 5 Significant Engagements
															      </span></a>
															   </li>
															<% end_if %>
															
															<% if $Speakings < 6 %>
															    <li>
															      <a href="pages/user"><span class="desc" style="opacity: 1; text-decoration: none;">
															         Add more than 5 Speaking Engagements
															      </span></a>
															   </li>
															<% end_if %>
															
														</ul>
													</div>
												</div>
											</div>