<?


require_once("profiles.php");




if ($_POST['first_name']) {


	
	if (isset($_FILES['new_photo']) && $_FILES['new_photo']['name']!="") {
		
		$newfilename = $user->ID."_photo_".str_ireplace(" ","",$_FILES['new_photo']['name']);
		move_uploaded_file($_FILES['new_photo']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/network/uploads/".$newfilename) or die('Could not create file '.$_SERVER['DOCUMENT_ROOT']."/network/uploads/".$newfilename) ;
				//processing file upload
		$sql = "update user_profile set image = '$newfilename' where ID = '".$user->ID."'";
		mysql_query($sql);
		
	}
	$fields .= "first_name,last_name,middle_name,suffix,prefix,email,gender,ethnicity,title,phone,fax,years_of_practice,law_school,bio,governmentclearance,linkedin,martingale,website,workonsite,location_id";
	
	$fieldsplit = split(",",$fields);
	
	$sql = "update user_profile set ";

	foreach ($fieldsplit as $thisfield) {
		$sql.= " $thisfield = '".str_ireplace("'","\'",$_POST[$thisfield])."', ";
	}
	$sql .= " date_modified = now() ";
	$sql .= " where ID = ".$user->ID;

	mysql_query("delete from barstate where barstate_type = 'user' and related_id = '".$user->ID."'");
	if (isset($_POST['barstate'])) {
		foreach($_POST['barstate'] as $thisState) {
				mysql_query("insert into barstate set barstate_type = 'user', related_id = '".$user->ID."', state = '".$thisState."'");
			
		}
	}
	
	
	
	//divesity certification
	//mysql_query("delete from certification where related_id = '".$user->ID."'");
	//if (isset($_POST['certifications'])) {
	//	foreach($_POST['certifications'] as $thisCert) {
	//			mysql_query("insert into certification set related_id = '".$user->ID."', certification = '".$thisCert."'");
	//	}
	//}
	
	//assocaitions
	mysql_query("delete from associations where related_type = 'user' and related_id = '".$user->ID."'");
	if (isset($_POST['association'])) {
		foreach($_POST['association'] as $thisAssociation) {
				mysql_query("insert into associations set related_type = 'user', related_id = '".$user->ID."', association = '".$thisAssociation."'");				
		}
	}
	
	//languages
	mysql_query("delete from language where language_type = 'user' and related_id = '".$user->ID."'");
	if (isset($_POST['languages'])) {
		foreach($_POST['languages'] as $thisLang) {
				mysql_query("insert into language set language_type = 'user', related_id = '".$user->ID."', language = '".$thisLang."'");
		}
	}
	
	//board certificaitons
	mysql_query("delete from boardcertification where boardcertification_type = 'user' and related_id = '".$user->ID."'");
	if (isset($_POST['boardcertifications'])) {
		foreach($_POST['boardcertifications'] as $thisCert) {
				mysql_query("insert into boardcertification set related_id = '".$user->ID."', boardcertification_type = 'user', certification_id = '".$thisCert."'");
		}
	}
	
	//practice areas
	mysql_query("delete from practicearea where practicearea_type = 'user' and related_id = '".$user->ID."'");
	if (isset($_POST['practiceareas'])) {
	
		foreach($_POST['practiceareas'] as $thisCert) {
				mysql_query("insert into practicearea set related_id = '".$user->ID."', practicearea_type = 'user', practicearea_id = '".$thisCert."'");
		}
	}
	
	
		
	//private cleints
	mysql_query("delete from clients where related_type = 'user' and sector = 'private' and related_id = '".$user->ID."'");
	if (isset($_POST['clients_private'])) {
		foreach($_POST['clients_private'] as $thisClient) {
				mysql_query("insert into clients set related_type = 'user', sector = 'private', related_id = '".$user->ID."', client = '".$thisClient."'");
			
		}
	}
	
	//private cleints
	mysql_query("delete from clients where related_type = 'user' and sector = 'public' and related_id = '".$user->ID."'");
	if (isset($_POST['clients_public'])) {
		foreach($_POST['clients_public'] as $thisClient) {
				mysql_query("insert into clients set related_type = 'user', sector = 'public', related_id = '".$user->ID."', client = '".$thisClient."'");
				
		}
	}
	
	
	//echo $sql;


	mysql_query($sql) or die('Error Updating user Table. ');
	
	//password
	if ($_POST['password_new']!="") {
		if ($_POST['password_new']!=$_POST['password2_new']) {
			echo "<script>alert('Your passwords did not match');</script>";
		} else {
			mysql_query("update user_profile set password = md5('".$_POST['password_new']."') where ID = '".$user->ID."' limit 1");
		}
	}
	
	//die();
	echo "<script>window.location='/network/?page=user';</script>";

}

//USER Variables

$barstates = getBarStates("user",$user->ID);
$showBarStates = showBarStates("user",$user->ID);

$certifications = getCertifications("user",$user->ID);

$boardcertifications = getBoardCertifications("user",$user->ID);
$showboardcertifications = showBoardCertifications("user",$user->ID);

//$getpublicclients = getPublicClients("user",$user->ID);
$showprivateclients = showPrivateClients("user",$user->ID);

//$getgovclients = getGovClients("user",$user->ID);
$showgovclients = showGovClients("user",$user->ID);

$privateClients = getPrivateClients("user",$user->ID);
$publicClients = getPublicClients("user",$user->ID);

//$getgovclients = getGovClients("user",$user->ID);
$showprofassociations = showProfAssociations("user",$user->ID);

$practiceAreas = getPracticeAreas("user",$user->ID);
$displayAreas = showPracticeAreas("user",$user->ID);

$languages = getLanguages("user",$user->ID);
$showanguages = showLanguages("user",$user->ID);

$awards = getAwards("user",$user->ID);
$showawards = showAwards("user",$user->ID);

$speaking = getSpeaking("user",$user->ID);
$engagements = getEngagements("user",$user->ID);
$press = getPress("user",$user->ID);

$barstates = getBarStates("user",$user->ID);
$displaybarstates = showBarStates("user",$user->company_id);

//COMPANY Variables
//$diversitycertification = getDivCertification("user",$user->company_id);

//Available office locations
$off_locs = mysql_query("select * from address where related_id = '".$user->company_id."' and address_type = 'company' order by id ");

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

if ($user->image == "")  { $user->image = "/GLADMIN/assets/GLimages/gl-company-logo-250x250.jpg"; } else { $user->image = "uploads/".$user->image; }
//var_dump($_POST);

//die();
