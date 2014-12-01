<?

require_once('profiles.php');

$messages_inbox = mysql_fetch_assoc(mysql_query("select count(id) as msgs from messages where to_id = '".$_SESSION['userid']."' and `read`=0 and deleted=0 and message_type in ('mail', 'rfpaward') "));
$messages_rfpapply = mysql_fetch_assoc(mysql_query("select count(id) as msgs from messages where to_id = '".$_SESSION['userid']."' and `read`=0 and deleted=0 and message_type = 'rfpapply'"));

$msgs_rfpapply = mysql_query("select messages.*, rfp.rfp_title , concat(user_from.first_name,' ',user_from.last_name) as fromName,  concat(user_to.first_name,' ',user_to.last_name) as toName, date_format(date_sent, '%m/%d/%y') as prettyDate
								from messages join rfp on rfp.ID = messages.related_rfp 
							     join user_profile as user_from on user_from.ID = messages.from_id 
							     join user_profile as user_to on user_to.ID = messages.to_id
							     
							where to_id = '".$_SESSION['userid']."' and messages.deleted=0 and message_type  = 'rfpapply' order by id desc;
							");
		
if ($_POST['inbox_search']!="") {
		$inboxSearchWhere = " and (concat(user_from.first_name,' ',user_from.last_name) like '%".$_POST['inbox_search']."%' or body like '%".$_POST['inbox_search']."%' or subject like '%".$_POST['inbox_search']."%')  ";
	}
				

$msgs_mail = mysql_query("select messages.*, rfp.rfp_title , concat(user_from.first_name,' ',user_from.last_name) as fromName,  concat(user_to.first_name,' ',user_to.last_name) as toName, date_format(date_sent, '%m/%d/%y') as prettyDate
								from messages left join rfp on rfp.ID = messages.related_rfp 
							     join user_profile as user_from on user_from.ID = messages.from_id 
							     join user_profile as user_to on user_to.ID = messages.to_id
							     
							where to_id = '".$_SESSION['userid']."' and messages.deleted=0 and message_type in ('mail', 'rfpaward') $inboxSearchWhere order by id desc;
							");

$msgs_trash = mysql_query("select messages.*, rfp.rfp_title , concat(user_from.first_name,' ',user_from.last_name) as fromName,  concat(user_to.first_name,' ',user_to.last_name) as toName, date_format(date_sent, '%m/%d/%y') as prettyDate
								from messages left join rfp on rfp.ID = messages.related_rfp 
							     join user_profile as user_from on user_from.ID = messages.from_id 
							     join user_profile as user_to on user_to.ID = messages.to_id
							     
							where to_id = '".$_SESSION['userid']."' and messages.deleted=1  order by id  desc;
							");


//searching sent
if ($_POST['sent_search']!="") {
		$sentSearchWhere = " and (concat(user_from.first_name,' ',user_from.last_name) like '%".$_POST['sent_search']."%' or body like '%".$_POST['sent_search']."%' or subject like '%".$_POST['sent_search']."%')  ";
	}

$msgs_sent = mysql_query("select messages.*, rfp.rfp_title , concat(user_from.first_name,' ',user_from.last_name) as fromName,  concat(user_to.first_name,' ',user_to.last_name) as toName, date_format(date_sent, '%m/%d/%y') as prettyDate
								from messages left join rfp on rfp.ID = messages.related_rfp 
							     join user_profile as user_from on user_from.ID = messages.from_id 
							     join user_profile as user_to on user_to.ID = messages.to_id
							     
							where from_id = '".$_SESSION['userid']."' and messages.deleted=0  $sentSearchWhere  order by id  desc;
							");


$connections = mysql_query("SELECT user_profile.*, connections.from_id, connections.to_id FROM `connections`  join user_profile on connections.from_id = user_profile.id left join address on user_profile.location_id = address.id where to_id = '".$_SESSION['userid']."' and approved=0");


$engagements = mysql_query("SELECT * FROM `engagements` left join user_profile on engagements.related_id = user_profile.ID where to_user_id = '".$_SESSION['userid']."' and approved=0");

function showPhoto($profile) {
	
	
	$row= mysql_fetch_assoc(mysql_query("select image from user_profile where id = '$profile'"));
	if ($row['image'] == "")  { $row['image'] = "/network/uploads/user.png"; } else { $row['image'] = "/network/uploads/".$row['image']; }
	return "<a href='/network/?page=profile&profile_id=$profile'><img class=\"messages-item-avatar\" src='".$row['image']."' border=0></a>";
}