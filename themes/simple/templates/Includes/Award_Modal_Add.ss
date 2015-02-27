<form class="aj_form">
<div id="AwardsHonors" class="modal myModal fade" tabindex="-1" data-width="760" style="display: none;">
  	<div class="modal-dialog">
    <div class="modal-content">
			<div class="modal-header">
			      <input type="hidden" name="Related_ID" value="{$Selected.ID}">
    			  <input type="hidden" name="Class" value="Award">

    		  <% if Selected.ClassName == "Member" %>
    		    <input type="hidden" name="Type" value="user">
    		  <% end_if %>
    		  
    		   <% if Selected.ClassName == "Company" %>
    		    <input type="hidden" name="Type" value="company">
    		  <% end_if %>

				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Add Award & Honor</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label">Award or Honor</label>
					<input type="text"  placeholder="" class="form-control" name="Name">
					</div>
												
					<div class="form-group">
					<label class="control-label">Year of Award/Honor</label>
					<input type="text"  placeholder="" class="form-control"  maxlength=4 name="Year">
					</div>
					
					</div>	
	
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Close
				</button>
				<button type="submit"  class="btn btn-blue">
					Save changes
				</button>
			</div>
		</div>
		
		</div>
		</div>
</form>