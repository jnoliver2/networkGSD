<div class="form-group">
<label class="control-label">Practice Areas*</label>
										<select multiple="multiple" id="form-field-select-6" name="PracticeArea[]" class="form-control search-select">
										  <% loop PA_List %>
										   
										    <option value="{$ID}">$Name</option>
										  <% end_loop %>
										  <% loop Selected.PracticeArea %>
										    <option value="{$PracticeArea_List.ID}" selected=selected >$PracticeArea_List.Name</option>
										  <% end_loop %>
										  </select>
										                      </div>
									   