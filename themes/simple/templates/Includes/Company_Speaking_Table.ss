<table class="table table-bordered table-hover" id="sample-table-1">
<thead>
	<tr>
		
	<th class="center hidden-sm hidden-xs">#</th>
	<th>Speaking Engagement</th>
	<th class="hidden-sm hidden-xs">Date</th>
	<th class="hidden-sm hidden-xs">Location</th>

	<th></th>
	</tr>
</thead>
<tbody>

<% loop Selected.speaking %>
	<tr>
	<td class="center hidden-sm hidden-xs">$Pos</td>
	<td>$Name</td>
	<td class="hidden-sm hidden-xs">$Month $Year </td>
	<td class="hidden-sm hidden-xs">$Location</td>
	
	<td class="center">
	<div class="">
		<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
		<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
	</div>
	<div class="hidden-xs hidden-sm hidden-md hidden-lg">
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