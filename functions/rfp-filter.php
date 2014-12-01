<?

//query filters
$sqlWhere = " where 1=1 ";
if ($_POST['name']!="") {
	$sqlWhere .= " and (rfp.rfp_title like '%".$_POST['name']."%' or company.company_name like '%".$_POST['name']."%') ";
}
if ($_POST['barstate']!="") {
	$sqlWhere .= " and bar_admittance_state like '%".$_POST['barstate']."%' ";
}
if ($_POST['diversity']!="") {
	$sqlWhere .= "  and rfp.diversity like '%".$_POST['diversity']."%' ";
	
}
//this is the main search functions
$rfpRS = mysql_query("select rfp.*, date_format(rfp_submission_deadline,'%M %d, %Y') as nicedate, company.company_name, company.logo from rfp join company on rfp.company_id = company.ID $sqlWhere ");


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


function getPracticeAreaList($selectedArea) {
	
		$res = mysql_query("select id, name from practicearea_list order by name");
	
	while ($row=mysql_fetch_assoc($res)) {
		
		$sel="";
		if (in_array($row['id'],$selectedArea)) $sel = " selected "; 
		echo "<option value='".$row['id']."' ".$sel.">".$row['name']."</option>";
		
	}
	
	
}

?>





