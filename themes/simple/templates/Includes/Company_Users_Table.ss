<div class="panel-body">
	<table class="table table-striped table-bordered table-hover" id="sample-table-2">
		<thead>
			<tr>
				<th class="center">
				<div class="checkbox-table">
					<label>
						<input type="checkbox" class="flat-grey">
					</label>
				</div></th>
				<th class="center">Photo</th>
				<th>Full Name</th>
				<th class="hidden-xs">Role</th>
				<th class="hidden-xs">Email</th>
				
				<th></th>
			</tr>
		</thead>
		<tbody>
		  <% loop Company.Members %>
			<tr>
				<td class="center">
				<div class="checkbox-table">
					<label>
						<input type="checkbox" class="flat-grey">
					</label>
				</div></td>
				<td class="center">
				  					<% if AvatarID %>
							<img style="max-width: 50px; max-height: 50px;" src="{$BaseHref}{$Avatar.FileName}" alt="">
					 <% else %> 
					    <img style="max-width: 50px; max-height: 50px;" src="{$BaseHref}assets/Uploads/user.png" alt="">
					<% end_if%> 
				  
				  
				<td>$FirstName $Surname</td>
				<td class="hidden-xs">
				  <% if User_Level == 1 %>
				    Account Administrator
				  <% else %>
				      User
				  <% end_if %>
			  </td>
				<td class="hidden-xs">
				<a href="#" rel="nofollow" target="_blank">
					$Email
				</a></td>
				
				<td class="center">
				<div class="visible-md visible-lg hidden-sm hidden-xs">
					<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
					<!--<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a> -->
					<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
				</div>
				<div class="visible-xs visible-sm hidden-md hidden-lg">
					<div class="btn-group">
						<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
							<i class="fa fa-cog"></i> <span class="caret"></span>
						</a>
						<ul role="menu" class="dropdown-menu pull-right">
							<li role="presentation">
								<a role="menuitem" tabindex="-1" href="#">
									<i class="fa fa-edit"></i> Edit
								</a>
							</li>
							<li role="presentation">
								<a role="menuitem" tabindex="-1" href="#">
									<i class="fa fa-share"></i> Share
								</a>
							</li>
							<li role="presentation">
								<a role="menuitem" tabindex="-1" href="#">
									<i class="fa fa-times"></i> Remove
								</a>
							</li>
						</ul>
					</div>
				</div></td>
			</tr>
			<% end_loop %>
													
			
			
		</tbody>
	</table>
</div>
