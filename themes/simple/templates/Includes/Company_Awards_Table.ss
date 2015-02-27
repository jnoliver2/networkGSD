<table class="table table-hover table-bordered" id="awards-table">
	<thead>
		<tr>
			<th class="center">#</th>
			<th>Award</th>
			<th>Year</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<% loop Selected.Award %>
		<tr>
			<td class="center">$Pos</td>
			<td>$Name</td>
			<td>$Year</td>
			<td class="center">
			<div class="visible-md visible-lg hidden-sm hidden-xs">
				<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
			</div>
		    </td>
		</tr>
	<% end_loop %>
	</tbody>
</table>
