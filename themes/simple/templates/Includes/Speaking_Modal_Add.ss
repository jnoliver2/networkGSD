<form class="aj_form">
<div id="SpeakingEngagements" class="modal myModal fade" tabindex="-1" data-width="760" style="display: none;">
  	<div class="modal-dialog">
    <div class="modal-content">
			<div class="modal-header">
			      <input type="hidden" name="Related_ID" value="{$Selected.ID}">
    			  <input type="hidden" name="Class" value="Speaking">
    			
    			  
    		  
    		  <% if Selected.ClassName == "Member" %>
    		    <input type="hidden" name="Type" value="user">
    		  <% end_if %>
    		  
    		   <% if Selected.ClassName == "Company" %>
    		    <input type="hidden" name="Type" value="company">
    		  <% end_if %>

				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Add Speaking Engagement</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					
					<div class="form-group">
					<label class="control-label">Speaking Engagement</label>
					<input type="text"  placeholder="" class="form-control" name="Name">
					</div>

					
					<div class="form-group">
					<label class="control-label">Location</label>
					<input type="text"  placeholder="" class="form-control"  name="Location">
					</div>
					
					<div class="row">	
					<div class="form-group">								
					<label for="form-field-mask-1" class="col-md-12">
					Date of Speaking Engagement<small class="text-success">Month/Year</small>
					</label>
					<div class="col-md-6">
											
												<select name="Month" class="form-control search-select">
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
												
												<select name="Year" class="form-control search-select">
												<option>2014</option>
												<option>2013</option>
												<option>1960</option>												
												</select>
													
											</div><!-- End 6 -->
					
										</div>
					</div>

					
					</div>
	
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Close
				</button>
				<button type="submit"   class="btn btn-blue">
					Save changes
				</button>
			</div>
		</div>
			</div>
		</div>
		</form>