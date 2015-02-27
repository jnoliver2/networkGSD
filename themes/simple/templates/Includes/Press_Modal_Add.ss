<form class="aj_form">
<div id="PublicationPress" class="modal myModal fade" tabindex="-1" data-width="760" style="display: none;">
  	<div class="modal-dialog">
    <div class="modal-content">
			<div class="modal-header">
			      <input type="hidden" name="Related_ID" value="{$Selected.ID}">
    			  <input type="hidden" name="Class" value="Press">

    		  <% if Selected.ClassName == "Member" %>
    		    <input type="hidden" name="Type" value="user">
    		  <% end_if %>
    		  
    		   <% if Selected.ClassName == "Company" %>
    		    <input type="hidden" name="Type" value="company">
    		  <% end_if %>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Add Publication or Press</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					
					<div class="form-group">
					<label class="control-label">Publication or Press Title</label>
					<input type="text"  placeholder="" class="form-control" name="Title">
					</div>
					
					<div class="form-group">
					<label class="control-label">Publication (Newspaper, Journal, etc.)</label>
					<textarea maxlength="250" name="Publication" class="form-control limited"></textarea>
					</div>
					
					<div class="form-group">
					<label class="control-label">General Description</label>
					<textarea maxlength="250" name="Description" class="form-control limited"></textarea>
					</div>
						
						
					<div class="form-group">								
					<label for="form-field-mask-1">
					Date of Publication or Press<small class="text-success">99/99/9999</small>
					</label>
					<div class="input-group">
				    <input type="text" name="Date" class="form-control input-mask-date">
					<span class="input-group-btn">
					<button type="button" class="btn btn-default">
					<i class="fa fa-calendar"></i>Add Date</button> </span>
					</div>
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