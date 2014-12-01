<? 

require_once("database.php");

if ($_GET['to_id']!="") {
	
	mysql_query("insert into messages
					set message_type = '".$_GET['message_type']."',
						to_id = '".$_GET['to_id']."',
						from_id = '".$_GET['from_id']."',
						related_rfp = '".$_GET['related_rfp']."',
						body = '".str_ireplace("'","\'",$_GET['body'])."',
						date_sent = now(),
						subject = '".str_ireplace("'","\'",$_GET['subject'])."',
						`read` = '0',
						deleted = '0'");
						
				echo("Message Sent!"); 
}
if ($_GET['denyRFP']!="") {
	
	mysql_query("update messages set deleted='1' where id = '".$_GET['denyRFP']."'");
	
}

if ($_GET['delete']!="") {
	
	mysql_query("update messages set deleted='1' where id = '".$_GET['delete']."'");
	
}

