<?


require_once("profiles.php");


$barstates = getBarStates("company",$_GET['company_id']);
$certifications = getCertifications($_GET['company_id']);
$boardcertifications = getBoardCertifications("company",$_GET['company_id']);
$practiceAreas = getPracticeAreas("company",$_GET['company_id']);
$languages = getLanguages("company",$_GET['company_id']);
$associations = getAssociations("company",$_GET['company_id']);


$thisCompany = mysql_fetch_object(mysql_query("select * from company where ID = '".$_GET['company_id']."'"));
	
	

