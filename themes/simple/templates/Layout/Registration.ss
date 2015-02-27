<div class="main-reg-head">
  <h4>GATEWAY LEGAL SIGN-UP</h4>
  <p>Become a part of a groundbreaking network that values the power of diversity. <strong>Connect. Expand. Grow. </strong></p>
</div>
<div class="well main-reg-content">
<form method="post" action="{$BaseHref}registration/register">
<div class="row">
  <div class="col-md-6">
      <div class="form-group">
				<label class="control-label">SELECT BUSINESS TYPE*</label>
				<select  id="form-field-select-1" name="Company[Type]" class="form-control">
				    <option value="0">I'm a......</option>
				    <option value="Firm">Firm</option>
  			    <option value="Government">Government</option>
  			    <option value="Profesional Association">Profesional Association</option>
  			    <option value="Solo Practitioner Attorney">Solo Practitioner Attorney</option>
  			    <option value="Law Student">Law Student</option>
	         
			</select>
				</div>  
    
  </div>
    <div class="col-md-6">
      <div class="form-group">
				<label class="control-label">Email*</label>
				<input type="text"  placeholder="" class="form-control" name="User[Email]" > 
		  </div>
	</div>

</div>
<div class="row">
  <div class="col-md-6">
      <div class="form-group">
				<label class="control-label">Password*</label>
				<input type="text"  placeholder="" class="form-control" name="pass1"> 
		  </div>
	</div>
	<div class="col-md-6">
      <div class="form-group">
				<label class="control-label">Confirm Password*</label>
				<input type="text"  placeholder="" class="form-control" name="pass2" > 
		  </div>
	</div>
	
</div>
<div class="row">
  <div class="col-md-2">
      <div class="form-group">
				<label class="control-label">PREFIX*</label>
				<select   name="User[Prefix]" class="form-control">
				    <option></option>
				    <option value="Mr.">Mr.</option>
  			    <option value="Mrs.">Mrs.</option>
  			    <option value="Ms.">Ms</option>
  			    <option value="Dr.">Dr</option>
  			    <option value="Honorable">Honorable</option>
	         
			</select>
				</div> 
	</div>
	<div class="col-md-3">
      <div class="form-group">
				<label class="control-label">FIRST NAME*</label>
				<input type="text"  placeholder="" class="form-control" name="User[FirstName]"> 
		  </div>
	</div>
	<div class="col-md-3">
      <div class="form-group">
				<label class="control-label">MIDDLE NAME</label>
				<input type="text"  placeholder="" class="form-control" name="User[MiddleName]" > 
		  </div>
	</div>
	<div class="col-md-3">
      <div class="form-group">
				<label class="control-label">LAST NAME*</label>
				<input type="text"  placeholder="" class="form-control" name="User[Surname]" > 
		  </div>
	</div>
    <div class="col-md-1">
      <div class="form-group">
				<label class="control-label">SUFFIX</label>
				<select name="User[Suffix]" class="form-control">
				    <option></option>
  			    <option value="Jr.">Jr.</option>
  			    <option value="III">III</option>
  			    <option value="Esq">Esq</option>
  			    <option value="PhD">PhD</option>
  			    <option value="MD">MD</option>
	         
			</select>
				</div> 
	</div>

  
</div>
<div class="row">
  <div class="col-md-4">
      <div class="form-group">
				<label class="control-label">Gender*</label>
				<select name="User[Gender]" class="form-control">
				    <option></option>
  			    <option value="Male">Male</option>
  			    <option value="Female">Female</option>
			</select>
				</div> 
	</div> 
	<div class="col-md-4">
      <div class="form-group">
				<label class="control-label">Ethnicity*</label>
				<select name="User[Ethnicity]" class="form-control">
				    <option></option>
						<option value="White">White</option>
						<option value="African-American">African-American</option>
						<option value="American Indian">American Indian </option>
						<option value="Hispanic/Latino">Hispanic/Latino </option>
						<option value="Asian / Chinese / Japanese">Asian / Chinese / Japanese </option>
						<option value="Other">Other</option>
			
	         
			</select>
				</div> 
	</div>
	<div class="col-md-4">
      <div class="form-group">
				<label class="control-label">PARTNERSHIP INFORMATION/TITLE*</label>
				<select name="User[Titles]" class="form-control">

					<option value=""></option>
					<option value="Associate">Associate</option>
					<option value="Of Counsel" >Of Counsel</option>
					<option value="Partner">Partner</option>
					<option value="Paralegal">Paralegal</option>
					<option value="Account Manager">Account Manager</option>
										  
	         
			</select>
				</div> 
	</div>
  
  
</div>
<div class="row">
  	<div class="col-md-6">
      <div class="form-group">
				<label class="control-label">COMPANY / LAW FIRM NAME*</label>
				<input type="text" name="Company[Name]"  placeholder="" class="form-control" > 
		  </div>
	</div>
		<div class="col-md-6">
      <div class="form-group">
				<label class="control-label">NUMBER OF ATTORNEYS*</label>
				<select name="Company[Attorneys]" class="form-control">
						<option value=""></option>
						<option value="1 - 25">1 - 25</option>
						<option value="26 - 60">26 - 60</option>
						<option value="61+">61+</option>

			</select>
				</div> 
	</div>

  
</div>
<div class="row">
  <div class="col-md-12">
      <div class="form-group">
				<label class="control-label">COMPANY / LAW FIRM ADDRESS* (MAIN OFFICE)</label>
				<input type="text" name="Address[Address1]"  placeholder="" class="form-control" > 
		  </div>
	</div>
</div>
<div class="row">
  <div class="col-md-12">
      <div class="form-group">
				<label class="control-label">COMPANY / LAW FIRM ADDRESS LINE 2</label>
				<input type="text"  name="Address[Address2]"  placeholder="" class="form-control" > 
		  </div>
	</div>
</div>
<div class="row">
  <div class="col-md-4">
      <div class="form-group">
				<label class="control-label">CITY*</label>
				<input type="text" name="Address[City]"  placeholder="" class="form-control" > 
		  </div>
	</div>
	<div class="col-md-4">
      <div class="form-group">
				<label class="control-label">STATE*</label>
				<select name="Address[StateID]" class="form-control">
				  <option></option>
					<% loop States %>
              <option value="{$ID}">$Full</option>
					<% end_loop %>

			</select>
				</div> 
	</div>
	
	<div class="col-md-4">
      <div class="form-group">
				<label class="control-label">ZIP (FIRST 5 DIGITS)*</label>
				<input type="text"  name="Address[Zip]"  placeholder="" class="form-control" > 
		  </div>
	</div>
</div>
<div class="row">
  	<div class="col-md-6">
      <div class="form-group">
				<label class="control-label">PHONE*</label>
				<input type="text" name="Phone"  placeholder="" class="form-control" > 
		  </div>
	</div>
		<div class="col-md-6">
      <div class="form-group">
				<label class="control-label">FAX</label>
				<input type="text" name="Fax"  placeholder="" class="form-control" > 
				</div> 
	</div>

  
</div>
<div class="row">
  <div class="col-md-12">
      <div class="form-group">
				<label class="control-label">ENTER PROMO CODE HERE:</label>
				<input type="text" name="Promo-Code"  placeholder="" class="form-control" > 
		  </div>
	</div>
</div>
<div class="row">
		<div class="col-md-12">
			<div>
				Required Fields*
				<hr>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<p>
				By clicking SUBMIT RFP, you are agreeing to the Private Policy and Terms &amp; Conditions.
			</p>
		</div>
		
		<div class="col-md-4">
			<button class="btn btn-green btn-block" type="submit">
				SUBMIT  <i class="fa fa-arrow-circle-right"></i>
			</button>
		</div>
	</div>
	<br />

</form>
</div>
