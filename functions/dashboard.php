<?php

function showToDoList() {

	
	$thisUserId = $GLOBALS['user']->ID;
	
	//ADD MORE THAN 5 SIGNIFICANT ENGAGEMENTS
	$checkSignificantEngagementCount = mysql_fetch_assoc(mysql_query("select count(id) as qty from engagements where engagement_type = 'user' and related_id = '$thisUserId'"));
	if ($checkSignificantEngagementCount['qty']<6) {
		echo "<li>";
		echo "<a href=\"/network/?page=user\">";
		//echo "<i class=\"fa fa-square-o\"></i>";
		echo "<span class=\"desc\" style=\"opacity: 1; text-decoration: none;\">Add more than 5 Significant Engagements </span>";
		//echo "<span class=\"label label-danger\" style=\"opacity: 1;\"> asap</span>";
		echo "</a>";
		echo "</li>";
	} 
	
	//ADD MORE THAN 5 SPEAKING ENGAGEMENTS
	$checkSpeakingEngagementCount = mysql_fetch_assoc(mysql_query("select count(id) as qty from speaking where speaking_type = 'user' and related_id = '$thisUserId'"));
	if ($checkSpeakingEngagementCount['qty']<6) {
		echo "<li>";
		echo "<a href=\"/network/?page=user\">";
		//echo "<i class=\"fa fa-square-o\"></i>";
		echo "<span class=\"desc\" style=\"opacity: 1; text-decoration: none;\">Add more than 5 Speaking Engagements </span>";
		//echo "<span class=\"label label-danger\" style=\"opacity: 1;\"> asap</span>";
		echo "</a>";
		echo "</li>";
	} 
	
	//TODO: Ability ot add other to do items
	echo "<li>";
	echo "<a class=\"todo-actions\" href=\"javascript:void(0)\">";
	echo "<i class=\"fa fa-square-o\"></i>";
	echo "<span class=\"desc\" style=\"opacity: 1; text-decoration: none;\">Complete Your Profile</span>";
	echo "<span class=\"label label-danger\" style=\"opacity: 1;\"> asap</span>";
	echo "</a>";
	echo "</li>";
	
																
}
