<? 

require_once("database.php");

if ($_GET['action']=="approve") {
	
	$approveQuery = "update connections set approved = '1' where to_type='user' and to_id ='".$_GET['to_id']."' and from_id = '".$_GET['from_id']."'";
	mysql_query($approveQuery);
	
						
	
} elseif ($_GET['action']=="deny") {
	
	$denyQuery = "delete from connections where to_type='user' and to_id ='".$_GET['to_id']."' and from_id = '".$_GET['from_id']."'";
	mysql_query($denyQuery);
	
}

