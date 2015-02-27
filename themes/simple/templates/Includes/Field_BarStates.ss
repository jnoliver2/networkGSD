<div class="form-group">
												<label for="form-field-select-4">
													Bar Admittance States*
												</label>
												<select multiple="multiple" id="form-field-select-2" name="BarState[]" class="form-control search-select">
      											<% loop States %>
      										    <option value="{$ID}">$Full</option>
      										  <% end_loop %>
      										  <% loop Selected.Barstate %>
        										    <option value="{$State.ID}" selected=selected >$State.Full</option>
        										  <% end_loop %>
        								</select>
											</div>		