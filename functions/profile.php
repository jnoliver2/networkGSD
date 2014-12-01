<?


require_once("profiles.php");


//USER Variables

$barstates = getBarStates("user",$_GET['profile_id']);
$showBarStates = showBarStates("user",$_GET['profile_id']);

$certifications = getCertifications("user",$_GET['profile_id']);

$boardcertifications = getBoardCertifications("user",$_GET['profile_id']);
$showboardcertifications = showBoardCertifications("user",$_GET['profile_id']);

//$getpublicclients = getPublicClients("user",$_GET['profile_id']);
$showprivateclients = showPrivateClients("user",$_GET['profile_id']);

//$getgovclients = getGovClients("user",$_GET['profile_id']);
$showgovclients = showGovClients("user",$_GET['profile_id']);


//$getgovclients = getGovClients("user",$_GET['profile_id']);
$showprofassociations = showProfAssociations("user",$_GET['profile_id']);

$practiceAreas = getPracticeAreas("user",$_GET['profile_id']);
$displayAreas = showPracticeAreas("user",$_GET['profile_id']);

$languages = getLanguages("user",$_GET['profile_id']);
$showanguages = showLanguages("user",$_GET['profile_id']);

$awards = getAwards("user",$_GET['profile_id']);
$showawards = showAwards("user",$_GET['profile_id']);

$speaking = getSpeaking("user",$_GET['profile_id']);
$engagements = getEngagements("user",$_GET['profile_id']);
$press = getPress("user",$_GET['profile_id']);

$company_id_rs = mysql_fetch_assoc(mysql_query("select * from user_profile where ID = '".$_GET['profile_id']."'"));
$company_id = $company_id_rs['company_id'];

$barstates = getBarStates("user",$_GET['profile_id']);
$displaybarstates = showBarStates("user",$_GET['profile_id']);

$thisCompany = mysql_fetch_object(mysql_query("select * from company where ID = '$company_id'"));
$thisUser = mysql_fetch_object(mysql_query("select * from user_profile where ID = '".$_GET['profile_id']."'"));
//COMPANY Variables
//$diversitycertification = getDivCertification("user",$company_id);

//Available office locations
$off_locs = mysql_query("select * from address where related_id = '".$company_id."' and address_type = 'company' order by id ");

//get this users address
$loc_address = mysql_fetch_assoc(mysql_query("select * from address where id = '".$user->location_id."' order by id limit 1"));
//echo ("select * from address where location_id = '".$user->location_id."' order by id limit 1");
//die();
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

//var_dump($_POST);
if ($thisUser->image == "")  { $thisUser->image = "/network/uploads/user.png"; } else { $thisUser->image = "uploads/".$thisUser->image; }


if ($_GET['requestconnect']==1) {
	//requesting a connection
	mysql_query("delete from connections where from_id = '".$_SESSION['userid']."' and from_type = 'user' and to_type = 'user' and to_id = '".$_REQUEST['profile_id']."'");
	$sqlAddConnection = "insert into connections 
							set from_id = '".$_SESSION['userid']."',
								from_type = 'user',
								to_type = 'user',
								to_id = '".$_REQUEST['profile_id']."',
								date_added = now(),
								approved = 0";
	mysql_query($sqlAddConnection);
}

//get connection stauts
$sqlCheckConnection = "select * from connections where from_id = '".$_SESSION['userid']."' and from_type = 'user' and to_type = 'user' and to_id = '".$_REQUEST['profile_id']."'";
$rsCheckConnection = mysql_query($sqlCheckConnection);
if (mysql_num_rows($rsCheckConnection)>0) {
	$rowCheckConnection = mysql_fetch_assoc($rsCheckConnection);
	$connectionStatus = $rowCheckConnection['approved'];
} else {
	$connectionStatus = -1;
}
//die();
