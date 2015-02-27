<div class="form-group">
<label class="control-label">Board Certifications</label>
										<select multiple="multiple" id="form-field-select-3" name="Cert[]" class="form-control search-select">
										  <% loop Cert_List %>
										   
										    <option value="{$ID}">$Name</option>
										  <% end_loop %>
										  <% loop Selected.Cert %>
										    <option value="{$Cert_List.ID}" selected=selected >$Cert_List.Name</option>
										  <% end_loop %>
										  </select>
										                      </div>