		<!-- start: PAGE CONTENT -->
	
					<div class="col-md-4">
					
					<div class="space12" style="text-align:center;">
					<img src= "{$BaseHref}assets/Uploads/user.png" style="max-width: 200px; max-height: 200px;" alt="">
					
										
					</div>	
					</div><!-- End Col 4 / Image Area -->
					
					
					<div class="col-md-8 well well-lg"> 
					
					<h4 class="zero-five">$Rfp.Company.Name</h4><hr class="zero-five">
					
					<p>$Rfp.Company_Overview</p>
					
					</div><!-- End Col 8 / Profile Information -->
					
					
					<hr>
					
					<div class="clearfix"></div>

					<div class="col-md-4">
					<hr>
					
					<p>
										<button class="btn btn-blue btn-block"  href="#ApplyForRFP"  onClick="document.getElementById('rfp_id').value='$Rfp.ID';document.getElementById('to_id').value='$Rfp.MemberID'; " data-toggle="modal">
											Apply for RFP <i class="fa fa-align-justify"></i>
										</button>
										<button class="btn btn-green btn-block" href="#SendMessage" onclick="getElementById('rfpid').value=$Rfp.ID" data-toggle="modal">
											Ask Question <i class="fa fa-file-text"></i>
										</button>
									

					</p>
				
										
					<hr>
						
						
					<div class="clearfix"></div>
					
					
					
					<div class="clearfix"></div>
						
						
						
						
					</div><!-- End Left Column -->
					
					<div class="col-md-8" > 
					<hr>	
					
				
                  <p class="member-subtitle " >RFP Description</p>
					<p>$Rfp.description_text</p>
            
						
						<div class="row">
						<div class="col-md-12 well well-lg" style="background: rgba(255, 219, 0, 0.4);">
                        
						<div class="col-md-6">
						<p class="member-subtitle">RFP Timeframe</p><p> $Rfp.Project_Start.format(M d Y)  - $Rfp.Project_End.format(M d Y )</p>	
						</div>

						<div class="col-md-6">
						<p class="member-subtitle">RFP Submission Deadline</p><p> $Rfp.Submission_Deadline.format(M d Y)</p>	
						</div>

          
						<div class="col-md-6">
						<p class="member-subtitle">Diversity</p><p> <ul>
						  <% loop $Rfp.Diversity %>
						     <li>$Diversity_List.Name</li>
						  <% end_loop %>
						  <ul></p>	
						</div>
																

              
						<div class="col-md-6">
						<p class="member-subtitle">Bar Admittance States</p><p> <ul>
						  <% loop $Rfp.barstates %>
						     <li>$State.Full</li>
						  <% end_loop %>
						 <ul></p>
						</div>
						

					
						<div class="col-md-12">
						<p class="member-subtitle">Board Certifications</p>
                      </div>
						<div class="col-md-12">
						<ul><% loop $Rfp.Cert %>
						     <li>$Cert_List.Name</li>
						  <% end_loop %><ul></p>	
						</div>
																	
						
					
						<div class="col-md-6">
						<p class="member-subtitle">Number of Attorneys</p><p> $Rfp.Number_Of_Attorneys</p>	
						</div>
															

					
						<div class="col-md-6">
						<p class="member-subtitle">Years of Practice</p><p> $Rfp.Years_Of_Practice</p>	
						</div>
																	
						
                      <div class="form-group">
						
						<div class="col-md-4">
						<p class="member-subtitle">Languages</p><p> <ul>
						  <% loop $Rfp.Language %>
						     <li>$Language_List.Name</li>
						  <% end_loop %>
						  </ul></p>	
						</div>
						<? } ?>		
                        										
					
						<div class="col-md-4">
						<p class="member-subtitle">Gender</p><p> $Rfp.Gender</p>	
						</div>
					


						<div class="col-md-4">
						<p class="member-subtitle">Ethnicity</p><p> $Rfp.Ethnicity</p>	
						</div>
							
						</div>
                        
						</div><!-- End Well -->
						</div><!-- End Row -->
						
						<div class="clearfix"></div>
						
						
						
				</div><!-- End Right Side -->
					
					
				<div class="col-md-12">	<hr>
				<div class="post-media post-comments">
											<h4><i class="fa fa-comments"></i>RFP Questions $Rfp.QA.Count</h4>
											
											<% loop $Rfp.QA %>
											
											<div class="media">
											  
												<a class="pull-left" href="#">
													<img class="media-object" alt="" src="{$BaseHref}assets/Uploads/avatar-2.jpg">
													
												</a>
												<h4 class="media-heading">Question </h4>
													
													
													<% if $Top.CurrentMember.ID == $Top.Rfp.MemberID %>
													<span class="pull-right">
    													
    													   <span> 
    													      
    													          <a href="javascript:void();" onClick="document.getElementById('reply{$ID}').style.display = 'block';">
    													         <i class="fa fa-reply"></i> Reply</a>
    													     </span>  </span>
													     <% end_if %>
													     
													     <span class="date pull-right">$Created.format(M d Y)</span>
												<div class="media-body">
													
													<p>
														$Body
													</p>
													
													<div id="reply{$ID}" style="display: none; ">
													<h4 style="margin-top: 10px;"><i class="fa fa-comment"></i>Post A Reply</h4>
													<form method="post" action="{$BaseHref}/pages/rfp_question_reply">
											
															
															<div class="row">
															<input type=hidden name="question_id" value="{$ID}">
															<input type=hidden name="rfp_id" value="{$Top.Rfp.ID}">
															
															<div class="col-md-12">
															<div class="form-group">
															<label class="control-label">Your Reply*</label>
															<textarea id="comment" name="comment" class="form-control" rows="5" maxlength="5000"></textarea>
															</div>
															</div>
															
															<div class="col-md-12">
															<input type="submit" data-loading-text="Loading..." class="btn btn-main-color" value="Post Question"><br><br>
															</div>
															
															</div>
														
														</form>
													</div>
													
													<? $replies = mysql_query("select *, date_format(date_added,'%M %d, %Y') as nicedate from rfp_qa where rfp_id = '".$_GET['id']."' and question_id = '".$row['id']."' order by id"); ?>
													
													<!-- Nested media object -->
													<% loop answers %>
													
													
													
													<hr>
													<div class="media">
														<a class="pull-left" href="#">
															<img class="media-object" alt="" src="{$BaseHref}assets/Uploads/avatar-1.jpg">
														</a>
														<div class="media-body">
																$Body
															</p>
															<span class="date pull-right">$Created.format(M d Y)</span>
														</div>
													</div> 	
											
													<% end_loop %>

													 <hr>
													<!--end media-->
													
													
											</div>
										
										</div>
										<hr>
										<% end_loop %>
										
										<div class="post-block post-leave-comment">
											<h4><i class="fa fa-comment"></i>Ask A Question</h4>
											<form method="post" action="{$BaseHref}/pages/rfp_question">
											
												
												<div class="row">
												
												
												<div class="col-md-12">
												<div class="form-group">
												<label class="control-label">RFP QUESTION*</label>
												<textarea id="comment" name="comment" class="form-control" rows="10" maxlength="5000"></textarea>
												</div>
												</div>
												<input type="hidden" name="rfp_id" value="{$Rfp.ID}">
												<div class="col-md-12">
												<input type="submit" data-loading-text="Loading..." class="btn btn-main-color" value="Post Question"><br><br>
												</div>
												
												</div>
											
											</form>
										</div>	
					
				</div>

					<!-- end: PAGE CONTENT-->
				</div>
				
<% include Modal_Rfp_Apply %>		
<% include Modal_Compose %>	