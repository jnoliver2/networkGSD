<?


require_once("profiles.php");

$barstates = getBarStates("company",$company->ID);
$certifications = getCertifications($company->ID);
$boardcertifications = getBoardCertifications("company",$company->ID);
$practiceAreas = getPracticeAreas("company",$company->ID);
$languages = getLanguages("company",$company->ID);
$associations = getAssociations("company",$company->ID);




if ($_POST['company_name']) {


	

	if (isset($_FILES['new_logo']) && $_FILES['new_logo']['name']!="") {
		
		$newfilename = $company->ID."_logo_".str_ireplace(" ","",$_FILES['new_logo']['name']);
		move_uploaded_file($_FILES['new_logo']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/network/uploads/".$newfilename) or die('Could not create file '.$_SERVER['DOCUMENT_ROOT']."/network/uploads/".$newfilename) ;
				//processing file upload
		$sql = "update company set logo = '$newfilename' where ID = '".$company->ID."'";
		mysql_query($sql);
		
	}
	$fields .= "company_name,years_of_practice,num_of_attorneys,diversity_statement,company_overview,diversity_link,website,workonsite,martingale,linkedin,governmentclearance,company_type";
	
	$fieldsplit = split(",",$fields);
	
	$sql = "update company set ";
	
	
	foreach ($fieldsplit as $thisfield) {
		$sql.= " $thisfield = '".str_ireplace("'","\'",$_POST[$thisfield])."', ";
	}
	$sql .= " date_modified = now() ";
	$sql .= " where ID = ".$company->ID;

	mysql_query("delete from barstate where barstate_type = 'company' and related_id = '".$company->ID."'");
	if (isset($_POST['barstate'])) {
		foreach($_POST['barstate'] as $thisState) {
				mysql_query("insert into barstate set barstate_type = 'company', related_id = '".$company->ID."', state = '".$thisState."'");
		}
	}
	
	
	//assocaitions
	mysql_query("delete from associations where related_type = 'company' and related_id = '".$company->ID."'");
	if (isset($_POST['association'])) {
		foreach($_POST['association'] as $thisAssociation) {
				mysql_query("insert into associations set related_type = 'company', related_id = '".$company->ID."', association = '".$thisAssociation."'");
				
		}
	}
	//divesity certification
	mysql_query("delete from certification where related_id = '".$company->ID."'");
	if (isset($_POST['certifications'])) {
		foreach($_POST['certifications'] as $thisCert) {
				mysql_query("insert into certification set related_id = '".$company->ID."', certification = '".$thisCert."'");
			
		}
	}
	
	//private cleints
	mysql_query("delete from clients where related_type = 'company' and sector = 'private' and related_id = '".$company->ID."'");
	if (isset($_POST['clients_private'])) {
		foreach($_POST['clients_private'] as $thisClient) {
				mysql_query("insert into clients set related_type = 'company', sector = 'private', related_id = '".$company->ID."', client = '".$thisClient."'");
			
		}
	}
	
	//private cleints
	mysql_query("delete from clients where related_type = 'company' and sector = 'public' and related_id = '".$company->ID."'");
	if (isset($_POST['clients_public'])) {
		foreach($_POST['clients_public'] as $thisClient) {
				mysql_query("insert into clients set related_type = 'company', sector = 'public', related_id = '".$company->ID."', client = '".$thisClient."'");
			
			
		}
	}
	
	//languages
	mysql_query("delete from language where language_type = 'company' and related_id = '".$company->ID."'");
	if (isset($_POST['languages'])) {
		foreach($_POST['languages'] as $thisLang) {
				mysql_query("insert into language set language_type = 'company', related_id = '".$company->ID."', language = '".$thisLang."'");
		}
	}
	//board certificaitons
	mysql_query("delete from boardcertification where boardcertification_type = 'company' and related_id = '".$company->ID."'");
	if (isset($_POST['boardcertifications'])) {
		foreach($_POST['boardcertifications'] as $thisCert) {
				mysql_query("insert into boardcertification set related_id = '".$company->ID."', boardcertification_type = 'company', certification_id = '".$thisCert."'");
		}
	}
	//practice areas
	mysql_query("delete from practicearea where practicearea_type = 'company' and related_id = '".$company->ID."'");
	if (isset($_POST['practiceareas'])) {
		foreach($_POST['practiceareas'] as $thisCert) {
				mysql_query("insert into practicearea set related_id = '".$company->ID."', practicearea_type = 'company', practicearea_id = '".$thisCert."'");
		}
	}
	
	

	
	mysql_query($sql) or die('Error Updating Company Table. '.$sql);
	header("Location: /network/?page=company");
	

}
	
	
