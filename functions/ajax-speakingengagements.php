<? 

require_once("database.php");

if ($_GET['name']!="") {

	
	
	$addQuery = "insert into speaking
					set speaking_type = '".$_GET['speaking_type']."',
						related_id = '".$_GET['related_id']."',
						name = '".str_ireplace("'","\'",$_GET['name'])."',
						location = '".str_ireplace("'","\'",$_GET['location'])."',
						date_month = '".$_GET['date_month']."',
						date_year = '".$_GET['date_year']."'
						";
	mysql_query($addQuery);

	
		
	
}





$query = "select * from speaking where speaking_type = '".$_GET['speaking_type']."' and related_id = '".$_GET['related_id']."'";
$rs = mysql_query($query);
?>


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

<? while ($row=mysql_fetch_assoc($rs)) { ?>
	<tr>
	<td class="center hidden-sm hidden-xs">1</td>
	<td><?=$row['name']?></td>
	<td class="hidden-sm hidden-xs"><?=$row['date_month']." ".$row['date_year']?></td>
	<td class="hidden-sm hidden-xs"><?=$row['location']?></td>
	
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
<? } ?>

</tbody>
</table>