<? 

require_once("database.php");

if ($_GET['address1']!="") {
	
	$addQuery = "insert into address
					set address_type = '".$_GET['address_type']."',
						related_id = '".$_GET['related_id']."',
						address1 = '".str_ireplace("'","\'",$_GET['address1'])."',
						address2 = '".str_ireplace("'","\'",$_GET['address2'])."',
						city = '".str_ireplace("'","\'",$_GET['city'])."',
						st = '".str_ireplace("'","\'",$_GET['st'])."',
						zip = '".str_ireplace("'","\'",$_GET['zip'])."',
						phone = '".str_ireplace("'","\'",$_GET['phone'])."',
						fax = '".str_ireplace("'","\'",$_GET['fax'])."'";
	mysql_query($addQuery);
						
	
}

$query = "select * from address where address_type = '".$_GET['address_type']."' and related_id = '".$_GET['related_id']."'";
$rs = mysql_query($query);


?>


<div class="table-responsive">
										<table class="table table-bordered table-hover" id="sample-table-1">
											<thead>
												<tr>
													
												<th class="center hidden-sm hidden-xs">#</th>
												<th>Address</th>
												<th class="hidden-sm hidden-xs">City</th>
												<th class="hidden-sm hidden-xs">State</th>
												<th class="hidden-sm hidden-xs">Zip</th>
												<th class="hidden-sm hidden-xs">Phone</th>
												<th class="hidden-sm hidden-xs">Fax</th>
												<th></th>
												</tr>
											</thead>
											<tbody>
											
											<? while ($row=mysql_fetch_assoc($rs)) {  $x++; ?>
											
												<tr>
												<td class="center hidden-sm hidden-xs"><?=$x?></td>
												<td><?=$row['address1']?> <?=$row['address2']?></td>
												<td class="hidden-sm hidden-xs"><?=$row['city']?></td>
												<td class="hidden-sm hidden-xs"><?=$row['st']?></td>
												<td class="hidden-sm hidden-xs"><?=$row['zip']?></td>
												
												<td class="hidden-sm hidden-xs"><?=$row['phone']?></td>
												<td class="hidden-sm hidden-xs"><?=$row['fax']?></td>
												<td class="center">
												<div class="">
													<!--<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>-->
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
												</div>
												<div class="hidden-xs hidden-sm hidden-md hidden-lg">
													<div class="btn-group">
														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu pull-right">
														<!--	<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li> -->
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
									</div>
