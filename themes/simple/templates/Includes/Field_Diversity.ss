
										<div class="form-group">
										  <label class="control-label">Diversity Certifications</label>	
										  <% loop Selected.Diversity %>
										<label class="checkbox-inline">
										<input type="checkbox" checked value="{$Diversity_List.ID}" name="Diversity[]" class="grey">$Diversity_List.Name</label>
										<% end_loop %>

										   <% loop Selected.Diversity_selects %>
										<label class="checkbox-inline">
										<input type="checkbox" value="{$ID}"  name="Diversity[]"  class="grey">$Name</label>
										 <% end_loop %>
										
										</div>