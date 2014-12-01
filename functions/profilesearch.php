<?


$sql = "select * from company 
			where (company_name like '%".$_POST['searchname']."%' )" ;

if ($_POST['practicearea']!="") { $sql .= " and company.ID in (select related_id from practicearea where practicearea_type = 'company' and practicearea_id = '".$_POST['practicearea']."')"; }


$companies = mysql_query($sql);

$sql = "select user_profile.*, company.company_name from user_profile join company on company.ID = user_profile.company_id
			where (company_name like '%".$_POST['searchname']."%' or first_name like '%".$_POST['searchname']."%' or last_name like '%".$_POST['searchname']."%')" ;

if ($_POST['ethnicity']!="") 	{ $sql.=" and (ethnicity = '".$_POST['ethnicity']."') "; }	
if ($_POST['barstate']!="") { $sql.= " and user_profile.ID in (select related_id from barstate where barstate_type = 'user' and state = '".$_POST['barstate']."') "; }
if ($_POST['practicearea']!="") { $sql .= " and user_profile.ID in (select related_id from practicearea where practicearea_type = 'user' and practicearea_id = '".$_POST['practicearea']."')"; }


		
$profiles = mysql_query($sql);


include('scoring.php');


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







//get all the states they practice in
function getBarStates($type,$relatedID) {
	
		$res = mysql_query("select state from barstate where barstate_type = '$type' and related_id = '$relatedID'");
		
		$barstates = array();
		
		while ($row=mysql_fetch_assoc($res)) {
			$barstates[] = $row['state'];
		}
		
		return $barstates;
		
}





