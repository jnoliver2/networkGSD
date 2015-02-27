<div class="form-group">
														<label class="control-label">
															Years of Practice
														</label>
														<select id="form-field-select-3" name="Company[Years_Of_Practice]" class="form-control search-select">
															<option value="">&nbsp;</option>
															<option value="Any Year" 
														     <% if $Selected.Years_Of_Practice == "Any Year" %>
														        selected=selected
														    <% end_if %>
														
														>Any Year</option>
														<option value="0 - 5" 
														     <% if $Selected.Years_Of_Practice == "0 - 5" %>
														        selected=selected
														    <% end_if %>
														
														>0 - 5</option>
												    <option value="6 - 10" 
														     <% if $Selected.Years_Of_Practice == "6 - 10" %>
														        selected=selected
														    <% end_if %>
														
														>6 - 10</option>
														<option value="11 - 15" 
														     <% if $Selected.Years_Of_Practice  == "11 - 15" %>
														        selected=selected
														    <% end_if %>
														
														>11 - 15</option>
														<option value="16 - 20" 
														     <% if $Selected.Years_Of_Practice == "16 - 20" %>
														        selected=selected
														    <% end_if %>
														
														>16 - 20</option>
														<option value="21+" 
														     <% if $Selected.Years_Of_Practice == "21+" %>
														        selected=selected
														    <% end_if %>
														
														>21+</option>

														</select>	
											</div>