	<div class="form-group">
										<select multiple="multiple"  name="Clients_Private[]" class="form-control search-select">
										  <% loop Selected.Client_Private_List %>
										   
										    <option value="{$ID}" >$Name</option>
										  <% end_loop %>
										  <% loop Selected.Client_Private_Selected %>
										   
										    <option value="{$ID}" selected=selected >$Name</option>
										  <% end_loop %>
										  </select>
</div>
										  
