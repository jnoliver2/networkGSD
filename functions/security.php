<?php

function tryLogin() {
	
	$result =  mysql_query("select id from user_profile where email = '".$_POST['email']."' and password = md5('".$_POST['password']."') and deleted='0'");
	if (mysql_num_rows($result)==0) {
		return false;
	} else {
		$row = mysql_fetch_assoc($result);
		return $row['id'];
	}
}
function getUser($id) {
	
	$result=mysql_query("select * from user_profile where ID = '$id'");
	$row = mysql_fetch_object($result);
	return $row;
	
}

function getCompany($id) {
	
	$result=mysql_query("select * from company where ID = '$id'");
	$row = mysql_fetch_object($result);
	
	return $row;
}