<? 

require_once("database.php");

if ($_GET['award_name']!="") {
	
	$addQuery = "insert into awards 
					set award_type = '".$_GET['award_type']."',
						related_id = '".$_GET['related_id']."',
						award_name = '".str_ireplace("'","\'",$_GET['award_name'])."',
						award_year = '".$_GET['award_year']."' ";
	mysql_query($addQuery);
						
	
}

$query = "select id, award_name, award_year from awards where award_type = '".$_GET['award_type']."' and related_id = '".$_GET['related_id']."'";
$rs = mysql_query($query);



?>
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
	<? while ($row=mysql_fetch_assoc($rs)) {
		$x++;
		 ?>
		<tr>
			<td class="center"><?=$x?></td>
			<td><?=$row['award_name']?></td>
			<td><?=$row['award_year']?></td>
			<td class="center">
			<div class="visible-md visible-lg hidden-sm hidden-xs">
				<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
			</div>
		    </td>
		</tr>
	<? } ?>
	</tbody>
</table>
