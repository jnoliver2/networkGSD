	<!-- start: BOOTSTRAP EXTENDED MODALS -->
	<form class="aj_form">
		<div id="Location" class="modal fade myModal" tabindex="-1" data-width="760" style="display: none;">
		  <input type="hidden" name="Class" value="Address">
		  
		  <% if Selected.ClassName == "Member" %>
		    <input type="hidden" name="Type" value="user">
		  <% end_if %>
		  
		   <% if Selected.ClassName == "Company" %>
		    <input type="hidden" name="Type" value="company">
		  <% end_if %>
		  
		  <input type="hidden" name="Related_ID" value="{$Selected.ID}">
		  <div class="modal-dialog">
    <div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Add A Location</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label">Business Address 1</label>
					<input type="text"  placeholder="" class="form-control"  name="Address1">
					</div>
												
					<div class="form-group">
					<label class="control-label">Business Address 2</label>
					<input type="text"  placeholder="" class="form-control" name="Address2">
					</div>
					
					</div>	
													
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">City</label>
					<input type="text"  placeholder="" class="form-control" name="City">
					</div>
					</div><!-- End md-4 -->
												
												
					<div class="col-md-4">
					<div class="form-group"><label for="form-field-select-3">State</label>
										<select  id="addressst" name="StateID" class="form-control search-select">
										  
											<option value="">&nbsp;</option>
											<% loop States %>
											  <option value="{$ID}">$Full</option>
											<% end_loop %>
										</select>
									</div>
					</div><!-- End md-4 -->
												
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Zip</label>
					<input type="text"  placeholder="" class="form-control"  name="Zip">
					</div>
					</div><!-- End md-4 -->
													
					<div class="col-md-6">
					<div class="form-group">
					<label class="control-label">Phone</label>
					<input type="text" placeholder="(305) 555-1212" class="form-control"  name="Phone">
					</div>
					</div><!-- End md-4 -->
												
												
					<div class="col-md-6">
					<div class="form-group">
					<label for="form-field-select-3">Fax</label>
					<input type="text" placeholder="(305) 555-1212" class="form-control" name="Fax">
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
		</div>
</form>