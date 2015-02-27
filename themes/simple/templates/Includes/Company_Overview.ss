

<div class="row">

	<!-- end: PAGE HEADER -->
	<!-- start: PAGE CONTENT -->
	<div class="col-sm-12">
	<div class="page-header">
	  <% if ClassName == "Company" %>
				<h1>$Name <small>Company Profile</small></h1>
		<% end_if %>
		
		<% if ClassName == "Member" %>
				<h1>$Name <small>User Profile</small></h1>
		<% end_if %>
			</div>
	<div class="col-md-4">
	
	<div class="space12" style="text-align:center;">
	<% if AvatarID %>
			<img style="max-width: 250px; max-height: 250px;" src="{$BaseHref}{$Avatar.FileName}" alt="">
	 <% else %> 
	    <img style="max-width: 250px; max-height: 250px;" src="{$BaseHref}assets/Uploads/user.png" alt="">
	<% end_if%>
						
	</div>	
	</div><!-- End Col 4 / Image Area -->


	<div class="col-md-8 well well-lg"> 
  <% if ClassName == "Member" %>
	<h4 class="zero-text">$Titles &bull; $Company.Name </h4>
	<% end_if %>
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
 if (score>2500)<img src="/GLADMIN/assets/GLimages/badge-green.jpg">
	if (score>7500) <img src="/GLADMIN/assets/GLimages/badge-red.jpg">
	 if (score>15000) <img src="/GLADMIN/assets/GLimages/badge-yellow.jpg">
	if (score>20000) <img src="/GLADMIN/assets/GLimages/badge-blue.jpg"> -->


	</div>
	
	<div class="col-md-6" style="text-align:right;">
	<h2 class="text-zero">
	  $Score
	  
	  
	</h2>
	</div>	
	
	<div class="clearfix"></div>
		<hr>
	  <p><button class="btn btn-blue btn-block" href="#RequestEngagement" 
				 <% if ClassName == "Company" %>
				      onclick="getElementById('cid').value=$ID" 
				 <% else %>
				    onclick="getElementById('uid').value=$ID"
				 <% end_if %>
				  data-toggle="modal">Request Engagement <i class="fa fa-plus"></i></button>
		</p>				
		<form action="{$BaseHref}pages/connection_request" method="post">
       <input type="hidden" name="To_ID" value="$ID">
       <% if ClassName == "Company" %>
       <input type="hidden" name="To_Type" value="company">
       <% else %>
        <input type="hidden" name="To_Type" value="user">
       <% end_if %>
       
			 <% if Connected == "No" %>
    <p>
			<button class="btn btn-green btn-block">
				Request Connection <i class="fa fa-chain"></i>
			</button>
			<% end_if %>
			<% if Connected == "Waiting" %>
			
			<button class="btn btn-grey btn-block" type="button">
				 Connection Requested <i class="fa fa-chain"></i>
			</button>
		</p>	
			<% end_if %>
			
			
	
 </form> 
	<p>		
		<% if Connected == "Approved" %>
	<button class="btn btn-green btn-block" href="#Connection_Review" data-toggle="modal" 
	<% if ClassName == "Company" %> 
	onclick="getElementById('rvcid').value={$ID}"
	<% else %>
	  onclick="getElementById('rvmid').value={$ID}"
	<% end_if %>
	>
		Connection Review <i class="fa fa-chain"></i>
	</button>
	<% end_if %>
	<button class="btn btn-red btn-block" href="#SendMessage" data-toggle="modal" 
	<% if ClassName == "Company" %> 
	onclick="getElementById('company_id').value={$ID}"
	<% else %>
	  onclick="getElementById('member_id').value={$ID}"
	<% end_if %>
	>
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

	</div>
	
	
	<hr>
<div class="clearfix"></div>
<div class="connection">			
<h4>Connections</h4>	

<% loop Connection  %>
 <img width="50" height="50" alt="{$connection_to.FirstName} {$connection_to.MiddleName}. {$connection_to.Surname}" 
<% if $connection_to.AvatarID=="0" %>
    src="{$Top.BaseHref}assets/Uploads/user.png"
  
  

  <% else %>
    src="{$Top.BaseHref}$connection_to.Avatar.Filename"
  
  

    <% end_if %>
    class="circle-img info-button popovers" title="" 
    data-content="{$Top.Titles}• {$Top.Company.Name}" data-placement="left" data-trigger="hover" data-rel="popover" 
    data-original-title="{$connection_to.FirstName} {$connection_to.MiddleName}. {$connection_to.Surname}">
	<% end_loop %>	
						<hr>	
</div>
<div class="clearfix"></div>
<div class="connection">			
<h4>Connection Review</h4>	
  <div class="panel-group accordion-custom accordion-teal" id="accordion">
						<% loop Connection  %>
						      <% if Top.ClassName == "Member" %>
						      <% if Reviewed == "1"  %>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
													<i class="icon-arrow"></i>
													$connection_to.Company.Name/ $connection_to.FirstName - SCORE:$Total -25
												</a></h4>
											</div>
											<div id="collapseOne" class="panel-collapse collapse">
												<div class="panel-body">
                          
                            <div class='single_award' style='display: block; float: left; width: 49%; height: 40px; overflow: auto; padding-left: 30px;'>
                              $Comments
                              </div>
                          
                         
														   
												</div>
											</div>
										</div>
									<% end_if %>	
										<% end_if %>	
									<% end_loop %>	
										</div>
	
						<hr>	
</div>
	</div><!-- End Left Column -->
	
	
	<div class="col-xs-12 col-sm-6 col-md-8"> 
	
		<% if ClassName == "Company" %>
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
		<% end_if %>
		<% if ClassName == "Member" %>
			<hr>	 
		
						<p class="member-subtitle">Law School</p>
						<p>$Law_School</p> 
						<p class="member-subtitle">Years of Practice</p>
						<p>$Years_Of_Practice</p>
						<p class="member-subtitle">Bio</p>
						<p>$Bio</p>
		
		<hr>
		<% end_if %>
		
		<div class="clearfix"></div>
		<% include Profile_Qualifications %>
		
		</div>
		
		</div>
					
				</div> <!-- End Panel Body -->
