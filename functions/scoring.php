<?


function getPoints($id, $type='user') {
	
	
	$awards = mysql_fetch_assoc(mysql_query("select count(id) as awards from awards where related_id = '$id' and award_type = '$type'"));
	$score = 450 + ($awards['awards']*10);
	
	
	return $score;
	
	
}
