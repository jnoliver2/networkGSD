							<div class="search-classic col-md-9">
								
							 <!--	<? while ($row=mysql_fetch_assoc($rfpRS)) {
							 	
							 if ($row['logo'] == "") { $row['logo'] =  "/assets/GLimages/gl-company-logo-250x250.jpg"; } else { $row['logo'] ="/network/uploads/".company->logo; } 
							 $barstates = split(",",$row['bar_admittance_state']);
							 if ($row['practice_areas']=="") $row['practice_areas']="-1";
							 $practiceAreas = mysql_query("select * from practicearea_list where id in (".$row['practice_areas'].")");
							 
							 ?> -->
							
							
				<% loop Rfps %>			 	
								<div class="search-result col-md-12" style="padding-left:0px;">
								<div class="row">
								
								<div class="search-post-image col-xs-4 col-sm-4 col-md-3">
									<img src="{$BaseHref}assets/Uploads/user.png" alt="" border=0>
								</div>
								
								<div class="search-post-content col-xs-8 col-sm-8 col-md-9">
									<i class="fa fa-align-justify filter-icon filter-green"></i><h3><a href="{$BaseHref}pages/rfp_view?id=$ID">$Title</a></h3>
									<br> 
											<div class="search-post-info" style="width:100%;">
                                                <div class="">
                                                    <i class="fa  fa-save"></i> <strong>SUBMISSION DEADLINE:</strong> $Submission_Deadline.format(M d), $Submission_Deadline.format(Y) 
                                                </div><br/><div class="">
                                                      <i class="fa fa-globe"></i> 
                                                      <% loop barstates %>
                                                        &bull;$State.Full
                                                      <% end_loop %>
                                                                                              </div><br>
                                                      <div class="">
                                                    <i class="fa fa-legal"></i> 
                                                    <% loop practiceAreas %>
                                                        &bull;$PracticeArea_List.Name
                                                      <% end_loop %>
                                                </div>
                                            </div>

									<p>
									  $description_preview
									
									</p>
									<div class="col-md-6">
								 <button class="btn btn-blue" type="button" href="#ApplyForRFP" onClick="document.getElementById('rfp_id').value='$ID';document.getElementById('to_id').value='$MemberID'; " data-toggle="modal"><i class="fa fa-align-justify"></i> APPLY FOR RFP</button> 
									</div>
									
									
								</div><!-- End Content -->
								</div></div>
								
								<div class="clearfix"></div>
							
							<% end_loop %>
									
								
								
								
								<div class="clearfix"></div>
								
																
									
								
							
								        
							</div>
							<!-- end: SEARCH RESULT -->
							
