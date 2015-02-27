<form class="aj_form">
<div id="AddClientGoverment" class="modal myModal fade" tabindex="-1" data-width="760" style="display: none;">
  		  <div class="modal-dialog">
    <div class="modal-content">
			<div class="modal-header">
			      <input type="hidden" name="Related_ID" value="{$Selected.ID}">
			      <input type="hidden" name="Class" value="Client">
    			  <input type="hidden" name="Sector" value="government">
    			  
    		  
    		  <% if Selected.ClassName == "Member" %>
    		    <input type="hidden" name="Type" value="user">
    		  <% end_if %>
    		  
    		   <% if Selected.ClassName == "Company" %>
    		    <input type="hidden" name="Type" value="company">
    		  <% end_if %>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Add Client (Government)</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					
					<div class="form-group">
					<label class="control-label">Client Name</label>
					<input type="text"  placeholder="" class="form-control"  id="newClientPublic" name="Name">
					</div>
		
	
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Cancel
				</button>
				<button type="submit"  class="btn btn-blue">
					Save Client
				</button>

			</div>
		</div>
</div>
</div>
</div>
</form>