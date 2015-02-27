<div id="panel_edit_account" class="tab-pane">

	<form action="{$BaseHref}pages/company_edit" method=post role="form" id="form" enctype="multipart/form-data">	
	    <div class="row">
	    
		
			<div class="col-md-12">
			  	<% if Selected.ClassName == "Member" %>
				    <h3>Profile Account Info</h3>
				   <% else %>
				    <h3>Company Account Info</h3>
				   <% end_if %>
				
				<hr>
			</div>
			<div class="col-md-12">

				<div class="form-group">
					<label>
						Image Upload
					</label>
					<div class="fileupload fileupload-new" data-provides="fileupload">
						<div class="fileupload-new thumbnail" style="width: 250px; height: 250px;">
						  <% if Selected.AvatarID %>
						  <img style="max-width: 250px; max-height: 250px;" src="{$BaseHref}{$Selected.Avatar.FileName}" alt="">
						  <% end_if%>
						</div>
						<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 250px; max-height: 250px; line-height: 20px;"></div>
						<div class="user-edit-image-buttons">
							<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture"></i> Change</span>
								<input type="file" name="logo">
							</span>
							<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
								<i class="fa fa-times"></i> Remove
							</a>
						</div>
					</div>
				</div>
				</div>
				
			<% if Selected.ClassName == "Member" %>	
			<input type="hidden" name="member_id" value="{$Selected.ID}">
			  <% include User_Info_Edit_Block %>
      <% else %>
      <input type="hidden" name="company_id" value="{$Selected.ID}">
			<div class="col-md-4">
			<div class="form-group">
					<label class="control-label">
						Account Type
					</label>
			<select id="company_type" name="Company[Type]" class="form-control search-select">
					<option selected>$Company.Type</option>
					<option>Corporate</option>
					<option>Firm </option>
					<option>Government </option>
					<option>Professional Associations</option>
					<option>Solo Practitioner Attorney</option>
					<option>Law Student</option>
			</select>
					
			</div><!-- End Account Type -->
			</div><!-- End Account Type -->

      <div class="col-md-8">
			<div class="form-group">
					<label class="control-label">
						Company / Firm Name
					</label>
<input type="text" class="form-control" id="company_name" value="{$Company.Name}" name="Company[Name]">													
			</div>	
			</div>	
      <% end_if %>
				<div class="col-md-12">
				<div class="form-group">
					<label class="control-label">Company/Firm Location(s) </label>  
					<a href="#Location" data-toggle="modal" class="label btn-dark-grey">+ Add Additional Office Locations</a>
				</div>
				
			</div><!-- End col-md-12 -->
				
				
				<div class="panel-body" id="office_locations">
	   
					<% include Company_Address_Edit_Table %>
				</div>



		</div>
		<div class="row">
			

<div class="col-md-12">
	  

	  <% include Field_PracticeAreas %>                                     

</div> 
</div>

<div class="row">


<div class="col-md-12">

<% include Field_Cert %> 


</div>

<div class="col-md-12">
	
<% include Field_BarStates %>	

    
</div>

<% if Selected.ClassName == "Company" %>
<div class="col-md-6">
			<div class="form-group">
					<label class="control-label">
						Number of Attorneys
					</label>
					<select id="num_of_attorneys" name="Company[Attorneys]" class="form-control search-select">
						<option value="">&nbsp;</option>
						
						<option
						    <% if Company.Attorneys == "1 - 25" %>
						 selected=selected
						<% end_if %>
						>1 - 25</option>
																					<option
						    <% if Company.Attorneys == "26 - 60" %>
						 selected=selected
						<% end_if %>
						>26 - 60</option>  
																					<option
						    <% if Company.Attorneys == "61+" %>
						 selected=selected
						<% end_if %>
						>61+</option>

						
					</select>	
				</div>
			</div><!-- End md-6 -->
<% end_if %>
			
			
<div class="col-md-6">
			<% include Field_Practice_Years %>	
</div><!-- End md-6 -->
		
		

</div><!-- End Business Information -->

<div class="row">
<div class="col-md-12">
	<% include Field_Diversity %>
	
	
	<% if Selected.ClassName == "Company" %>		
			<div class="form-group">
					<label class="control-label">
						Diversity Statement
					</label>
					<textarea maxlength="1000" rows="10" id="diversity_statement" name="Company[Diversity_Statement]" class="form-control limited">$Company.Diversity_Statement</textarea>
			</div>
			
			<div class="form-group">
					<label class="control-label">
						Diversity Statement Link (Web Site)
					</label>
					<input type="text" value="$Company.Diversity_Link" placeholder="http://www...." id="diversity_link" name="Company[Diversity_Link]" class="form-control">
			</div>
			
			
			<div class="form-group">
					<label class="control-label">
						Company Overview 
					</label>
					<textarea maxlength="1000" rows="10" id="company_overview" name="Company[Overview]" class="form-control limited">$Company.Overview </textarea>
					</div>
					
			<% else %>
			<div class="form-group">
					<label class="control-label">
						Law School
					</label>
					<input type="text" value="$Selected.Law_School" placeholder="" id="" name="User[Law_School]" class="form-control">
			</div>
			<div class="form-group">
					<label class="control-label">
						Bio
					</label>
					<textarea maxlength="1000" rows="10"  name="User[Bio]" class="form-control limited">$Selected.Bio</textarea>
			</div>
			
			
			<% end_if %>
			</div><!-- End 12 -->
			
			
			<div class="col-md-12">	
			
		
			
			
			
			<label class="control-label">Clients (Private)</label> <a href="#AddClientPrivate" data-toggle="modal" class="label btn-dark-grey">+ Add Client (Private)</a>	

	      <% include Field_Clients_Private %>
			</div>
			
			<div class="col-md-12"> 
			<label class="control-label"> Clients (Government)</label> <a href="#AddClientGoverment" data-toggle="modal" class="label btn-dark-grey">+ Add Client (Goverment)</a>	
			 <% include Field_Clients_Govt %>
			</div>
			
			<div class="col-md-12">	
			<div class="form-group">
					<label class="control-label">
						
					</label> <a href="#SignificantEngagement" data-toggle="modal" class="label btn-dark-grey">+ Add Significant Engagement</a>
			
			<div id="significant_engagements">
			  <% include Company_Engagement_Table %>
			</div>
			
			</div>
			
			
			
			
			
			</div><!-- md12 -->
			
			
			
			
			<div class="col-md-12">	
			<div class="form-group">
					<label class="control-label">
						Professional Associations
					</label><a href="#ProfessionalAssociation" data-toggle="modal" class="label btn-dark-grey">+ Add Professional Association</a>
			      <% include Field_Associations %>
		
		
			</div>
			</div>
			<div class="col-md-4">	
			  <% include Field_Govt_Clearance %>
			</div>
			
			
			<div class="col-md-4">	
			<div class="form-group">
				<label class="control-label">Martindale Hubble Company Profile Link</label>
				<input type="text" placeholder="http://www..." id="martingale" name="Company[Martingale]"  value="$Selected.Martingale" class="form-control">
			</div>
			</div>
			
			<div class="col-md-4">	
			<div class="form-group">
				<label class="control-label">LinkedIn Company Profile Link</label>
				<input type="text" placeholder="http://www..." id="linkedin" name="Company[Linkedin]" value="$Selected.Linkedin" class="form-control">
			</div>
			</div>
			

			<div class="col-md-12">	
			
			
					<label class="control-label">
						Awards & Honors
					</label> <a href="#AwardsHonors" data-toggle="modal" class="label btn-dark-grey">+ Add Award / Honors</a>
					<div class="form-group" id="awards_honors">
					  <% include Company_Awards_Table %>
			
					</div>
			</div>
			
			<div class="col-md-12">	
			
					<label class="control-label">
						Speaking Engagements
					</label> <a href="#SpeakingEngagements" data-toggle="modal" class="label btn-dark-grey">+ Add Speaking Engagements</a>
			
			<div class="form-group" id="speakingengagements">
			  <% include Company_Speaking_Table %>
			
			</div>
			</div>
			
				<div class="col-md-12">	
					<label class="control-label">
						Publications & Press
					</label> <a href="#PublicationPress" data-toggle="modal" class="label btn-dark-grey">+ Add Publication or Press</a>
			
			<div class="form-group" id="publicationpress">
			  <% include Company_Press_Table %>
			</div>
			</div>
			
			<div class="col-md-12">
          <% include Field_Languages %>
			</div>
			
			
			
			<div class="col-md-12">
		
			
			<div class="form-group">
					<label class="control-label">
						Web Site
					</label>
					<input type="text" value="{$Selected.Website}" placeholder="" class="form-control" id="website" name="Company[Website]">
				</div>
</div>
                                  
			
<div class="col-md-4">    										
<div class="form-group">
<label class="control-label">Ability to Work On Site</label><br/>
<select name="Company[Work_On_Site]" class="form-control select">
<option
<% if Company.Work_On_Site == "yes" %>
selected=selected
<% end_if %>
>Yes</option>
									<option
<% if Company.Work_On_Site == "No" %>
selected=selected
<% end_if %>
>No</option>  

</select>
</div>
</div>

			
			
			
</div><!-- End Additional Information -->	









		<div class="row">
			<div class="col-md-12">
				<div>
					Required Fields*
					<hr>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<p>
					By clicking UPDATE, you are agreeing to the Private Policy and Terms &amp; Conditions.
				</p>
			</div>
			<div class="col-md-4">
				<button class="btn btn-green btn-block"  type="submit">
					Update <i class="fa fa-arrow-circle-right"></i>
				</button>
			</div>
		</div>
	</form>
</div>


								<!-- End Account Users Panel -->