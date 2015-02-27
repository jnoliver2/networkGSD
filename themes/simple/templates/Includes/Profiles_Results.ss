<div class="search-classic col-md-9">
	<% if $Companies %>
		<h3>$Companies.Count Companies</h3>
		<hr>
	<% end_if %>
	
<% loop Companies %>

  	  <div class="search-result col-md-12" style="padding-left:0px;">
      	<div class="search-post-image col-xs-4 col-sm-4 col-md-3">
      		<a href="{$BaseHref}pages/profile_page/{$ID}/1">
      		  <% if AvatarID %>
      		   <img src="{$BaseHref}$Avatar.FileName" alt="" border=0>
      		  <% else %>
      		    <img src="{$BaseHref}assets/Uploads/user.png" alt="" border=0>
      		  <% end_if %>
      		  </a>
      	</div>
	
      	<div class="search-post-content col-xs-8 col-sm-8 col-md-9">
      	  <div class="col-md-12">
      				<i class="fa fa-archive filter-icon filter-green"></i>
      				<h3><a href="{$BaseHref}pages/profile_page/{$ID}/1">$Name</a></h3>
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

	<div class="clearfix"></div>
								
	<% end_loop %>
	

<% if $Members %>
<h3>$Members.Count  People</h3>
							<hr>
	
	<% end_if %>

	
	
	<% loop Members %>
	
	
	<div class="search-result col-md-12" style="padding-left:0px;">
	<div class="search-post-image col-xs-4 col-sm-4 col-md-3">
		<a href="{$BaseHref}pages/profile_page/{$ID}/2">
		  <% if AvatarID %>
		   <img src="{$BaseHref}$Avatar.FileName" alt="" border=0>
		  <% else %>
		    <img src="{$BaseHref}assets/Uploads/user.png" alt="" border=0>
		  <% end_if %>
		  </a>
	</div>
	
	<div class="search-post-content col-xs-8 col-sm-8 col-md-9">
	  <div class="col-md-12">
		<i class="fa fa-user filter-icon filter-green"></i><h3>
		  <a href="{$BaseHref}pages/profile_page/{$ID}/2">$FirstName $Surname</a></h3>
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
      <div class="col-md-12"> 
      		<p>
      			$bio_preview
      		</p>
      </div>		
			
		<div class="col-md-6">
		  <% if Top.Title == "Rfp Applicants" %>
		      <div id="rfp-message-buttons" style="padding-left: 15px;">
         <form action="{$BaseHref}pages/rfp_deny" method="post" >
		         <input type=hidden name="application_id" value="$ID">
		         	<button class="btn btn-green" type="button" href="#AwardRFP" data-toggle="modal" onclick="getElementById('msg_id').value=$ID" ><i class="fa fa-trophy"></i> AWARD RFP</button>   
		         <button class="btn btn-red" type="submit" name="deny"><i class="fa fa-minus-square"></i> DENY</button>
		      </form>

				</div>
		
		  <% else %>
		
      <form action="{$BaseHref}pages/connection_request" method="post">
           <input type="hidden" name="To_ID" value="$ID">
           <input type="hidden" name="To_Type" value="user">
					 <% if Connected == "No" %>
								
			
					<button class="btn btn-green">
						Connect <i class="fa fa-chain"></i>
					</button>
					
					<% else %>
					
					<button class="disabled btn btn-grey btn-block" >
						Connection Requested <i class="fa fa-chain"></i>
					</button>
					
					<% end_if %>
			
		 </form> 
		 <% end_if %>
		</div>
		</div>
	

		

	</div>
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



