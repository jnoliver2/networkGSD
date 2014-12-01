<?

include("profiles.php");

function getRFPs($companyID) {
	
	$sqlRfp = "select * from rfp where company_id = '$companyID'";
	$rs = mysql_query($sqlRfp);
	
	return $rs;
	
}

// var_dump($_POST);


if ($_GET['delete']!="") { 
	
	mysql_query("delete from rfp where ID = '".$_GET['delete']."' and company_id = '".$user->company_id."'");
	
}
	if ($_POST['rfp_title']!="") {
		
		var_dump($_POST);
		
		$certs = implode(",",$_POST['diversity']);
		$_POST['diversity']=$certs;
		
		$fields .= "rfp_title,job_timeframe,diversity,number_of_attorneys,years_of_practice,rfp_submission_deadline,rfp_description,gender,bar_admittance_state,practice_areas,rfp_project_start,rfp_project_end,ethnicity";
			
		
		$fieldsplit = split(",",$fields);
		
		$sql = "insert into rfp set ";
	
		$_POST['bar_admittance_state'] = implode(",",$_POST['bar_admittance_states']);
		$_POST['practice_areas'] = implode(",",$_POST['practiceAreas']);
		
		foreach ($fieldsplit as $thisfield) {
			$sql.= " $thisfield = '".str_ireplace("'","\'",$_POST[$thisfield])."', ";
		}
		$sql .= " company_id = '".$user->company_id."', ";
		$sql .= " user_id = ".$user->ID;
		
		mysql_query($sql);
		
		
		
	}
 


$rfplist = getRFPs($user->company_id);


