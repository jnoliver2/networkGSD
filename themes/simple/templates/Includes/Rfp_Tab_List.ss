	<div id="panel_rfp_list" class="tab-pane in active">
										<div class="row">
											<div class="col-md-12">
											
											<!-- start: TABLE WITH IMAGES PANEL -->
							<div class="panel panel-default">
								
								
									<table class="table table-striped table-bordered table-hover" id="sample-table-2">
										<thead>
											<tr>
												<th class="center">RFP Number</th>
												<th>RFP Name</th>
												<th class="hidden-xs">States</th>
												<th class="hidden-xs">Applicants</th>
												<th class="hidden-xs">RFP Submission Deadline</th>
												<th>Options</th>
											</tr>
										</thead>
										<tbody>  
										
										
										<% loop $Rfps %>
										
											<tr>
												<td class="center">$ID</td>
												<td><a href="{$BaseHref}pages/rfp_view?id={$ID}">$Title</a></td>
												<td class="hidden-xs">
												  <% loop barstates %>
												    $State.Initial ,
												  <% end_loop %>
												 
												</td>
												<td class="hidden-xs"><a href="{$BaseHref}pages/rfp_applicants?id={$ID}">$applications.Count</a></td>
												<th class="hidden-xs">$Submission_Deadline.format(M d Y)</th>
												<td class="center">
												<div class="visible-md visible-lg hidden-sm hidden-xs">
													<a  href="{$BaseHref}pages/rfp_edit?id={$ID}" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit">
													  <i class="fa fa-edit"></i></a>
													<a href="{$BaseHref}pages/rfp_delete?id={$ID}" 
													class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove">
													  <i class="fa fa-times fa fa-white"></i></a>
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group">
														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1"  href="{$BaseHref}pages/rfp_edit?id={$ID}">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a  tabindex="-1" href="${$BaseHref}pages/rfp_delete?id={$ID}">
																	<i class="fa fa-times"></i> Remove 
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											
										<% end_loop %>
											
											
											
											
											
										</tbody>
									</table>
								
							</div>
							<!-- end: TABLE WITH IMAGES PANEL -->
											
											
											
											
											
											</div>
										</div>
									</div>