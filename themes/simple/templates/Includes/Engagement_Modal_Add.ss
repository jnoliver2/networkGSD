<form class="aj_form">
<div id="SignificantEngagement" class="modal myModal fade" tabindex="-1" data-width="760" style="display: none;">
  	<div class="modal-dialog">
    <div class="modal-content">
			<div class="modal-header">
			      <input type="hidden" name="Related_ID" value="{$Selected.ID}">
    			  <input type="hidden" name="Class" value="Engagement">

    		  <% if Selected.ClassName == "Member" %>
    		    <input type="hidden" name="Type" value="user">
    		  <% end_if %>
    		  
    		   <% if Selected.ClassName == "Company" %>
    		    <input type="hidden" name="Type" value="company">
    		  <% end_if %>


				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Add Significant Engagement</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
				
					<p>Adding Significant Engagements with this method will serve as an Unverified Significant Engagement.  To post a Verified Significant Engagement please visit the profile of the Company / Firm / Attorney and click Verify Engagement on their profile page.  -Team Gateway Legal.</p>
					
					</div>
					
					<div class="col-md-12">
					
					<div class="form-group">
					<label class="control-label">Significant Engagement</label>
					<input type="text"  placeholder="" class="form-control"  name="Name">
					</div>
					
					<div class="form-group">
					<label class="control-label">Project Description</label>
					<textarea maxlength="250" name="Description" id="engagement_description" class="form-control limited"></textarea>
					</div>
												
					<div class="form-group">
					<label class="control-label">Company/Attorney</label>
					<input type="text" name="Company_Attorney" class="form-control">
					</div>
					
						
					<div class="row">		
					<div class="form-group">								
					<label for="form-field-mask-1" class="col-md-12">
					Date of Significant Engagement<small class="text-success"> (Month and Year)</small>
					</label>
					<div class="col-md-6">
				    <select name="Month" class="form-control">
				    	<option value="">Month</option>
				    	<option>January</option>
				    	<option>February</option>
				    	<option>March</option>
				    	<option>April</option>
				    	<option>May</option>
				    	<option>June</option>
				    	<option>July</option>
				    	<option>August</option>
				    	<option>September</option>
				    	<option>October</option>
				    	<option>November</option>
				    	<option>December</option>
				    </select>
                    </div>
                    <div class="col-md-6"> 
				    <select name="Year" class="form-control">
				    	<option value="">Year</option>

						<option>1990</option>
						 <option>1991</option>
						 <option>1992</option>
						 <option>1993</option>
						 <option>1994</option>
						 <option>1995</option>
						 <option>1996</option>
						 <option>1997</option>
						 <option>1998</option>
					
				    </select> 	
					</div>
					</div>
					</div>
	
				</div>
			</div>
				<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Close
				</button>
				<button type="submit" class="btn btn-blue">
					Save changes
				</button>
				</div>
			</div>
		</div>
		</div>
		</div>
	</form>