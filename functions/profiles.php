<?php

include('scoring.php');


//get all the states they practice in
function getBarStates($type,$relatedID) {
	
		$res = mysql_query("select state from barstate where barstate_type = '$type' and related_id = '$relatedID'");
		
		$barstates = array();
		
		while ($row=mysql_fetch_assoc($res)) {
			$barstates[] = $row['state'];
		}
		
		return $barstates;
		
}

function showBarStates($type,$relatedID) {
	
		$res = mysql_query("select state from barstate where barstate_type = '$type' and related_id = '$relatedID'");
		
		$barstates = array();
		
		while ($row=mysql_fetch_assoc($res)) {
			$barstates[] = $row['state'];
		}
		
		return $barstates;
		
}


function getAwards($type,$relatedID) {
	
		$res = mysql_query("select award_name, award_year from awards where award_type = '$type' and related_id = '$relatedID'");

		
		return $res;
}

function showAwards($type,$relatedID) {
	
		$res = mysql_query("select award_name, award_year from awards where award_type = '$type' and related_id = '$relatedID'");

		
		return $res;
}

function getSpeaking($type,$relatedID) {
	
		$res = mysql_query("select name, location, date from speaking where speaking_type = '$type' and related_id = '$relatedID' order by date ASC");

		return $res;
		
}

//builds a drop down list of associations
function getAssociationList($selected) {
	
	
		$res = mysql_query("select distinct association from associations order by association");
	
		
	while ($row=mysql_fetch_assoc($res)) {
		
		$sel="";
		if (in_array($row['association'],$selected)) $sel = " selected "; 
		echo "<option ".$sel.">".$row['association']."</option>";
		
	}
	
}

//gets the associated Associations
function getAssociations($type,$relatedID) {
	
	$res = mysql_query("select association from associations where related_type = '$type' and related_id = '$relatedID'");
	
	$assoc = array();
	
	while ($row=mysql_fetch_assoc($res)) {
		$assoc[] = $row['association'];
	}
	
	return $assoc;
	
}

function getConnections($type, $relatedID) {
	
		$res = mysql_query("select user_profile.*, company.company_name from user_profile join company on user_profile.company_id = company.ID where user_profile.ID in (select from_id from connections where to_id = '$relatedID' and approved=1 UNION select to_id from connections where from_id = '$relatedID' and approved=1)");
		
		return $res;
		
}
function getEngagements($type,$relatedID) {
	
		$res = mysql_query("select engagement_name, description, company_attorney, month, year from engagements where engagement_type = '$type' and related_id = '$relatedID' order by year ASC");

		return $res;
		
}

function getPress($type,$relatedID) {
	
		$res = mysql_query("select title, publication, description, date from press where press_type = '$type' and related_id = '$relatedID' order by date ASC");

		return $res;
		
}

function getBoardCertifications($type,$companyID) {

	$res = mysql_query("select certification_id from boardcertification where boardcertification_type = '$type' and related_id = '$companyID'");
	
	$certs = array();
	
	while ($row=mysql_fetch_assoc($res)) {
		$certs[] = $row['certification_id'];
	}
	
	return $certs;
		
}


function showBoardCertifications($type,$id) {

	$res = mysql_query("select certification_list.name from boardcertification join certification_list on certification_list.id = boardcertification.certification_id where boardcertification_type = '$type' and related_id = '$id'");

	$certs = array();
	
	while ($row=mysql_fetch_assoc($res)) {
		$certs[] = $row['name'];
	}
	
	return $certs;
		
}

function getPracticeAreas($type,$id) {
	
	$res = mysql_query("select practicearea_id from practicearea where practicearea_type = '$type' and related_id = '$id'");
	$practiceAreas = array();
	
	while ($row=mysql_fetch_assoc($res)) {
		$practiceAreas[] = $row['practicearea_id'];
	}
	
	return $practiceAreas;
	
}

function showPracticeAreas($type,$id) {
	
	$res = mysql_query("select practicearea_list.name from practicearea join practicearea_list on practicearea_list.id = practicearea.practicearea_id where practicearea_type = '$type' and related_id = '$id'");
	$practiceAreas = array();
	
	while ($row=mysql_fetch_assoc($res)) {
		$practiceAreas[] = $row['name'];
	}
	
	return $practiceAreas;
	
}

function getPracticeAreaList($selectedArea) {
	
		$res = mysql_query("select id, name from practicearea_list order by name");
	
	while ($row=mysql_fetch_assoc($res)) {
		
		$sel="";
		if (in_array($row['id'],$selectedArea)) $sel = " selected "; 
		echo "<option value='".$row['id']."' ".$sel.">".$row['name']."</option>";
		
	}
	
	
}


function getCertifications($companyID) {
	
	$res = mysql_query("select certification from certification where related_id = '".$companyID."'");
	
	$certs = array();
	
	while ($row=mysql_fetch_assoc($res)) {
		$certs[] = $row['certification'];
	}
	
	return $certs;
	
	
}



function getLanguages($type,$id) {

	$res = mysql_query("select language from language where language_type = '$type' and related_id = '".$id."'");
	
	$lang = array();
	
	while ($row=mysql_fetch_assoc($res)) {
		$lang[] = $row['language'];
	}
	
	return $lang;
	
}


function showLanguages($type,$id) {
	
		$res = mysql_query("select language from language where language_type = '$type' and related_id = '$id'");
		
		return $res;
		
}

function getDivCertification($type,$id) {
	
		$res = mysql_query("select language from company where language_type = '$type' and related_id = '$id'");
		
		return $res;
		
}

function getCertificationList($matchingCertifications) {

	$res = mysql_query("select id, name from certification_list order by name");
	
	while ($row=mysql_fetch_assoc($res)) {
		
		$sel="";
		if (in_array($row['id'],$matchingCertifications)) $sel = " selected "; 
		echo "<option value='".$row['id']."' ".$sel.">".$row['name']."</option>";
		
	}
	
	
}

function getClientsPublicList($publicClients) { 
	
	$res = mysql_query("select distinct client from clients where sector='public' order by client");
	
	while ($row=mysql_fetch_assoc($res)) {
		
		$sel="";
		if (in_array($row['client'],$publicClients)) $sel = " selected "; 
		echo "<option  ".$sel.">".$row['client']."</option>";
		
	}
	
}




function getClientsPrivateList($privateClients) { 
	
	$res = mysql_query("select distinct client from clients where sector='private' order by client");
	
	while ($row=mysql_fetch_assoc($res)) {
		
		$sel="";
		if (in_array($row['client'],$privateClients)) $sel = " selected "; 
		echo "<option  ".$sel.">".$row['client']."</option>";
		
	}
	
}

function getPrivateClients($relatedType, $relatedID) { 
	
	$res = mysql_query("select distinct client from clients where sector='private' and related_type='$relatedType' and related_id = '$relatedID' order by client");
	
	$clients = array();
	
	while ($row=mysql_fetch_assoc($res)) {
		$clients[] = $row['client'];
	}
	

	return $clients;
	
}


function getPublicClients($relatedType, $relatedID) { 
	
	$res = mysql_query("select distinct client from clients where sector='public' and related_type='$relatedType' and related_id = '$relatedID' order by client");
	
	$clients = array();
	
	while ($row=mysql_fetch_assoc($res)) {
		$clients[] = $row['client'];
	}

	return $clients;
	
}


//ADDED BY ED METRO MEDIA

function showPrivateClients($relatedType, $relatedID) {
	
	$res = mysql_query("select client from clients where sector='private' and related_type='$relatedType' and related_id = '$relatedID' order by client");
	$clients = array();
	
	while ($row=mysql_fetch_assoc($res)) {
		$clients[] = $row['client'];
	}
	
	return $clients;
	
}


function showGovClients($relatedType, $relatedID) {
	
	$res = mysql_query("select client from clients where sector='public' and related_type='$relatedType' and related_id = '$relatedID' order by client");
	$clients = array();
	
	while ($row=mysql_fetch_assoc($res)) {
		$clients[] = $row['client'];
	}
	
	return $clients;
	
}




function showProfAssociations($relatedType, $relatedID) {
	
	$res = mysql_query("select association from associations where related_type='$relatedType' and related_id = '$relatedID' order by association");
	$associations = array();
	
	while ($row=mysql_fetch_assoc($res)) {
		$associations[] = $row['association'];
	}
	
	return $associations;
	
}


$states = array(
    'AL'=>'Alabama',
    'AK'=>'Alaska',
    'AZ'=>'Arizona',
    'AR'=>'Arkansas',
    'CA'=>'California',
    'CO'=>'Colorado',
    'CT'=>'Connecticut',
    'DE'=>'Delaware',
    'DC'=>'District of Columbia',
    'FL'=>'Florida',
    'GA'=>'Georgia',
    'HI'=>'Hawaii',
    'ID'=>'Idaho',
    'IL'=>'Illinois',
    'IN'=>'Indiana',
    'IA'=>'Iowa',
    'KS'=>'Kansas',
    'KY'=>'Kentucky',
    'LA'=>'Louisiana',
    'ME'=>'Maine',
    'MD'=>'Maryland',
    'MA'=>'Massachusetts',
    'MI'=>'Michigan',
    'MN'=>'Minnesota',
    'MS'=>'Mississippi',
    'MO'=>'Missouri',
    'MT'=>'Montana',
    'NE'=>'Nebraska',
    'NV'=>'Nevada',
    'NH'=>'New Hampshire',
    'NJ'=>'New Jersey',
    'NM'=>'New Mexico',
    'NY'=>'New York',
    'NC'=>'North Carolina',
    'ND'=>'North Dakota',
    'OH'=>'Ohio',
    'OK'=>'Oklahoma',
    'OR'=>'Oregon',
    'PA'=>'Pennsylvania',
    'RI'=>'Rhode Island',
    'SC'=>'South Carolina',
    'SD'=>'South Dakota',
    'TN'=>'Tennessee',
    'TX'=>'Texas',
    'UT'=>'Utah',
    'VT'=>'Vermont',
    'VA'=>'Virginia',
    'WA'=>'Washington',
    'WV'=>'West Virginia',
    'WI'=>'Wisconsin',
    'WY'=>'Wyoming',
);

