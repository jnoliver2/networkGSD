<? 

require_once("database.php");

if ($_GET['question1']!="") {
	
	$body = "FROM PREVIOUS EXPERIENCE, WHAT MAKES YOUR COMPANY THE BEST CANDIDATE FOR THIS REQUEST? <br>".str_ireplace("'","\'",$_GET['question1'])."<br><br>";
	$body .= "PLEASE GIVE US SOME CASE EXAMPLES THAT RELATE DIRECTLY TO THIS REQUEST. <br>".str_ireplace("'","\'",$_GET['question2'])."<br><br>";
	
}
$sql = "insert into messages set message_type = '".$_GET['message_type']."', `read`=0, deleted=0, from_id = '".$_GET['from_id']."', to_id = '".$_GET['to_id']."', related_rfp = '".$_GET['related_rfp']."', body = '$body', date_sent = now()";
mysql_query($sql) or die('Error saving your RFP application. Please try again later or contact support.');

echo("RFP Application received!");


