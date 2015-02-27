<div class="form-group">
													<label class="control-label">Government Clearance Level</label>
													<select id="governmentclearance" name="Company[Government_Clearance]" class="form-control search-select">
															<option value="">&nbsp;</option>
															<option value="None" 
														     <% if $Selected.Government_Clearance == "None" %>
														        selected=selected
														    <% end_if %>
														
														>None</option>
														<option value="Confidential" 
														     <% if $Selected.Government_Clearance == "Confidential" %>
														        selected=selected
														    <% end_if %>
														
														>Confidential</option>
												    <option value="Secret" 
														     <% if $Selected.Government_Clearance == "Secret" %>
														        selected=selected
														    <% end_if %>
														
														>Secret</option>
														<option value="TS/SCI" 
														     <% if $Selected.Government_Clearance  == "TS/SCI" %>
														        selected=selected
														    <% end_if %>
														
														> TS/SCI</option>
														
														</select>	
											</div>