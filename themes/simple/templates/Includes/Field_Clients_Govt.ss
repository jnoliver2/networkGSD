	<div class="form-group">
										<select multiple="multiple"  name="Clients_Govt[]" class="form-control search-select">
										  <% loop Selected.Client_Govt_List %>
										   
										    <option value="{$ID}" >$Name</option>
										  <% end_loop %>
										  <% loop Selected.Client_Govt_Selected %>
										   
										    <option value="{$ID}" selected=selected >$Name</option>
										  <% end_loop %>
</select>
</div>