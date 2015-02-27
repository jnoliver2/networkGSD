<div class="form-group">
													<label for="form-field-select-7">
														Languages
													</label>
													<select multiple="multiple" name="Language[]" id="form-field-select-5" class="form-control search-select">
															
															<% loop LA_List %>
        										    <option value="{$ID}">$Name</option>
            									<% end_loop %>
            									<% loop Selected.Language %>
              									<option value="{$Language_List.ID}" selected=selected >$Language_List.Name</option>
          										  <% end_loop %>
													</select>
													</div>