<? 

require_once("database.php");

if ($_GET['engagement_name']!="") {
	
	$addQuery = "insert into engagements
					set engagement_type = '".$_GET['engagement_type']."',
						related_id = '".$_GET['related_id']."',
						engagement_name = '".str_ireplace("'","\'",$_GET['engagement_name'])."',
						description = '".str_ireplace("'","\'",$_GET['description'])."',
						company_attorney = '".str_ireplace("'","\'",$_GET['company_attorney'])."',
						month = '".$_GET['month']."',
						to_user_id = '".$_GET['to_user_id']."',
						year = '".$_GET['year']."' ";
	mysql_query($addQuery);
		
	
}





$query = "select id, engagement_name, description, company_attorney, month, year from engagements where engagement_type = '".$_GET['engagement_type']."' and related_id = '".$_GET['related_id']."'";
$rs = mysql_query($query);
?>
<table class="table table-bordered table-hover" id="significantengagements-table">
<thead>
	<tr>
		
	<th class="center hidden-sm hidden-xs">#</th>
	<th>Significant Engagement</th>
	<th class="hidden-sm hidden-xs">Project Description</th>
	<th class="hidden-sm hidden-xs">Company/Attorney</th>
	<th class="hidden-sm hidden-xs">Date</th>
	<th></th>
	</tr>
</thead>
<tbody>
<? while ($row=mysql_fetch_assoc($rs)) { 
	$x++;
?> 
	<tr>
	<td class="center hidden-sm hidden-xs"><?=$x?></td>
	<td><?=$row['engagement_name']?></td>
	<td class="hidden-sm hidden-xs"><?=$row['description']?></td>
	<td class="hidden-sm hidden-xs"><?=$row['company_attorney']?></td>
	<td class="hidden-sm hidden-xs"><?=$row['month']?> <?=$row['year']?></td>
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