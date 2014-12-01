<? 

require_once("database.php");

if ($_GET['title']!="") {
	
	if ($_GET['date']!="") {
		$date = split("/",$_GET['date']);
		$datesql = " , date = '".$date[2]."-".$date[0]."-".$date[1]."'";
		
	}
	
	
	$addQuery = "insert into press
					set press_type = '".$_GET['press_type']."',
						related_id = '".$_GET['related_id']."',
						title = '".str_ireplace("'","\'",$_GET['title'])."',
						publication = '".str_ireplace("'","\'",$_GET['publication'])."',
						description = '".str_ireplace("'","\'",$_GET['description'])."'
						$datesql
						";
	mysql_query($addQuery);
		
	
}





$query = "select *, date_format(date,'%m/%d/%Y') as cleandate from press where press_type = '".$_GET['press_type']."' and related_id = '".$_GET['related_id']."'";
$rs = mysql_query($query);
?>



<div class="table-responsive">
										<table class="table table-bordered table-hover" id="sample-table-1">
											<thead>
												<tr>
													
												<th class="center hidden-sm hidden-xs">#</th>
												<th>Title</th>
												<th class="hidden-sm hidden-xs">Publication</th>
												<th class="hidden-sm hidden-xs">General Description</th>
												<th class="hidden-sm hidden-xs">Date of Publication</th>
												<th></th>
												</tr>
											</thead>
											<tbody>
											<? while ($row=mysql_fetch_assoc($rs)) { 
												$x++;
												
											?>
												<tr>
												<td class="center hidden-sm hidden-xs">1</td>
												<td><?=$row['title']?></td>
												<td class="hidden-sm hidden-xs"><?=$row['publication']?></td>
												<td class="hidden-sm hidden-xs"><?=$row['description']?></td>
												<td class="hidden-sm hidden-xs"><?=$row['cleandate']?></td>
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