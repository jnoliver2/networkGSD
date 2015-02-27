
														<select multiple="multiple" id="form-field-select-1" name="Association[]" class="form-control search-select">
														  <% loop AS_List %>
        										    <option value="{$ID}">$Name</option>
            									<% end_loop %>
            									<% loop Selected.association  %>
              									<option value="{$Association_List.ID}" selected=selected >$Association_List.Name</option>
          										  <% end_loop %>
												
													</select>
