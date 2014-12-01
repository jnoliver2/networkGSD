<? 

require_once("database.php");

if ($_GET['action']=="approve") {
	
	$approveQuery = "update engagements set approved = '1' where id ='".$_GET['id']."'";
	mysql_query($approveQuery);
	
						
	
} elseif ($_GET['action']=="deny") {
	
	$denyQuery = "delete from engagements where id = '".$_GET['id']."'";
	mysql_query($denyQuery);
	
}

