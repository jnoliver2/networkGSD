<?
//this is the main search functions
$rfpRS = mysql_query("select rfp.*, date_format(rfp_submission_deadline,'%M %d, %Y') as nicedate, date_format(rfp_project_start,'%M %d, %Y') as projectstart, date_format(rfp_project_end,'%M %d, %Y') as projectend,  company.company_name, company.company_overview, company.logo from rfp join company on rfp.company_id = company.ID where rfp.ID = '".$_GET['id']."'");
$thisRFP = mysql_fetch_assoc($rfpRS);

		if ($_POST['comment']) {
			
			if ($_POST['question_id']=="") {
				$sql = "insert into rfp_qa set rfp_id = '".$_GET['id']."', body ='".str_ireplace("'","\'",$_POST['comment'])."', user_id = '".$_SESSION['userid']."',  date_added = now()";
			} else {
				$sql = "insert into rfp_qa set rfp_id = '".$_GET['id']."', body ='".str_ireplace("'","\'",$_POST['comment'])."', user_id = '".$_SESSION['userid']."', question_id = '".$_POST['question_id']."', date_added = now()";
			}
			mysql_query($sql);
			echo $sql;
				
			
		}
		
		 if ($thisRFP['logo'] == "") { $thisRFP['logo'] =  "/assets/GLimages/gl-company-logo-250x250.jpg"; } else { $thisRFP['logo'] ="/network/uploads/".$company->logo; } 
							 $barstates = split(",",$thisRFP['bar_admittance_state']);
							 $diversity = split(",",$thisRFP['diversity']);
							 $certifications = split(",",$thisRFP['special_certifications']);
							 $language = split(",",$thisRFP['language']);
							 
							 if ($thisRFP['practice_areas']=="") $thisRFP['practice_areas']="-1";
							 $practiceAreas = mysql_query("select * from practicearea_list where id in (".$thisRFP['practice_areas'].")");
					
		
		$questions = mysql_query("select *, date_format(date_added,'%M %d, %Y') as nicedate from rfp_qa where rfp_id = '".$_GET['id']."' and question_id is NULL order by id");
					
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
