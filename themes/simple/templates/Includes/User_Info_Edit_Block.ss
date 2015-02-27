<div class="col-md-4">
<div class="form-group">
		<label class="control-label">
			User Email
		</label>
<input type="text" id="email" name="User[Email]" placeholder="Enter your email" class="form-control" value="$Selected.Email" >
		
	</div>
</div><!-- End Account Type -->

<div class="col-md-4">
<div class="form-group">
		<label class="control-label">
			Password
		</label>
<input type="text" placeholder="***********" class="form-control" id="password" name="pass1">
		
	</div>
</div><!-- End Account Type -->


<div class="col-md-4">
<div class="form-group">
		<label class="control-label">
			Confirm Password
		</label>
<input type="text" placeholder="***********" class="form-control" id="password2" name="pass2">
		
	</div>
</div><!-- End Account Type -->											
<div class="col-md-12"><hr></div>

<div class="col-md-2">
<div class="form-group">
		<label class="control-label">
			Prefix
		</label>
<select id="prefix" name="User[Prefix]" class="form-control search-select">
		<option value="">&nbsp;</option>
		<option <% if Selected.Prefix == "Mr." %> selected=selected  <% end_if %> >Mr.</option>
		<option <% if Selected.Prefix == "Mrs." %> selected=selected  <% end_if %> >Mrs.</option>
		<option <% if Selected.Prefix == "Ms." %> selected=selected  <% end_if %> >Ms.</option> 
		<option <% if Selected.Prefix == "Dr." %> selected=selected  <% end_if %> >Dr.</option>
		<option <% if Selected.Prefix == "Honorable" %> selected=selected  <% end_if %> >Honorable</option>

</select>
		
	</div>
</div><!-- End PreFix -->

<div class="col-md-3">
<div class="form-group">
		<label class="control-label">
			First Name
		</label>
		<input type="text" placeholder="" class="form-control" id="first_name" name="User[FirstName]" value="{$Selected.FirstName}">
	</div>
</div><!-- End PreFix -->

<div class="col-md-2">
<div class="form-group">
		<label class="control-label">
			Middle Name
		</label>
		<input type="text" placeholder="" class="form-control" id="middle_name" name="User[MiddleName]" value="{$Selected.MiddleName}">
	</div>
</div><!-- End PreFix -->


<div class="col-md-3">
<div class="form-group">
		<label class="control-label">
			Last Name
		</label>
		<input type="text" placeholder="" class="form-control" id="last_name"  name="User[Surname]" value="{$Selected.Surname}">
	</div>
</div><!-- End PreFix -->

<div class="col-md-2">
<div class="form-group">
		<label class="control-label">
			Suffix
		</label>
		  <select id="suffix" name="User[Suffix]" class="form-control search-select">
			<option value="">&nbsp;</option>
			<option <% if Selected.Suffix == "Sr." %> selected=selected  <% end_if %> >Sr.</option>
			<option <% if Selected.Suffix == "Jr." %> selected=selected  <% end_if %> >Jr.</option>
			<option <% if Selected.Suffix == "III" %> selected=selected  <% end_if %> >III</option>
			<option <% if Selected.Suffix == "Esq." %> selected=selected  <% end_if %> >Esq.</option>
			<option <% if Selected.Suffix == "PhD." %> selected=selected  <% end_if %> >PhD.</option>
			<option <% if Selected.Suffix == "MD." %> selected=selected  <% end_if %> >MD.</option> 
			 
		  </select>
	</div>
</div><!-- End PreFix -->

<div class="col-md-4">
<div class="form-group">
		<label class="control-label">
			Gender
		</label>
<select id="form-field-select-3" name="User[Gender]" class="form-control search-select">
		<option>&nbsp;</option>
		<option <% if Selected.Gender == "Male" %> selected=selected  <% end_if %> >Male</option>
		<option <% if Selected.Gender == "Female" %> selected=selected  <% end_if %> >Female</option>
		<option <% if Selected.Gender == "Transgender" %> selected=selected  <% end_if %> >Transgender</option>
</select>
		
	</div>
</div><!-- End Account Type -->


<div class="col-md-4">
<div class="form-group">
		<label class="control-label">
			Ethnicity
		</label>
<select id="form-field-select-3" name="User[Ethnicity]" class="form-control search-select">
		<option >&nbsp;</option>
		<option <% if Selected.Ethnicity == "White" %> selected=selected  <% end_if %> >White</option>
		<option <% if Selected.Ethnicity == "African-American" %> selected=selected  <% end_if %> >African-American</option> 
		<option <% if Selected.Ethnicity == "American Indian" %> selected=selected  <% end_if %> >American Indian</option>
		<option <% if Selected.Ethnicity == "Hispanic/Latino" %> selected=selected  <% end_if %> >Hispanic/Latino</option>
		<option <% if Selected.Ethnicity == "Asian" %> selected=selected  <% end_if %> >Asian </option>
		<option <% if Selected.Ethnicity == "Other" %> selected=selected  <% end_if %> >Other</option>
		 

</select>
		
	</div>
</div><!-- End Account Type -->



<div class="col-md-4">
<div class="form-group">
		<label class="control-label">
			Title
		</label>
<select id="form-field-select-3"  name="User[Titles]" class="form-control search-select">
	  <option >&nbsp;</option>
		<option <% if Selected.Titles == "Associate" %> selected=selected  <% end_if %> >Associate</option>
		<option <% if Selected.Titles == "Of Counsel" %> selected=selected  <% end_if %> >Of Counsel</option> 
		<option <% if Selected.Titles == "Partner" %> selected=selected  <% end_if %> >Partner</option>
		<option <% if Selected.Titles == "Account Manager" %> selected=selected  <% end_if %> >Account Manager</option>

</select>
		
	</div>
	
</div><!-- End Account Type -->
<div class="col-md-6">
<div class="form-group">
		<label class="control-label">
			Phone
		</label>
		<input type="text" placeholder="" class="form-control" id="last_name"  name="User[Phone]" value="{$Selected.Phone}">
	</div>
</div>
<div class="col-md-6">
<div class="form-group">
		<label class="control-label">
			Fax
		</label>
		<input type="text" placeholder="" class="form-control" id="last_name"  name="User[Fax]" value="{$Selected.Fax}">
	</div>
</div>
<br />