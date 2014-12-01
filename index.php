<?

session_start();


$page = new StdClass;


require_once("database.php");

include("functions/security.php");

if (isset($_POST['email']) && isset($_POST['password'])) {
	$userid = tryLogin();
	if ($userid != false) {
		$user = getUser($userid);
		$company = getCompany($user->company_id);
		$_SESSION['userid']=$userid;
	} else {
		
		header("Location: /login/?invalid=1");
		//echo "Login failed";
		die();
		
	}
} elseif (isset($_SESSION['userid'])) {
	$user = getUser($_SESSION['userid']);
	$company = getCompany($user->company_id);
} else {
	die('Please login');
	
}



$GLOBALS['user']=$user;




switch ($_GET['page']) {
	
	case "user":
		//user
		$page->template="users.php";
		$page->title = "Users";	
		$page->functions = "users.php";
		break;
	case "company":
		//company
		$page->template="company.php";
		$page->title = "Company";
		$page->functions = "company.php";
		break;
	case "profiles":
		//profiles
		$page->template="profiles.php";
		$page->title = "Profiles";
		$page->functions = "profilesearch.php";
		break;
	case "rfpmanager":
		//rfp
		$page->template="rfpmanager.php";
		$page->functions="rfpmanager.php";
		$page->title = "RFP Manager";
		break;
	case "rfp-filter":
		//rfp
		$page->template="rfp-filter.php";
		$page->functions="rfp-filter.php";
		$page->title = "RFPs";
		break;
	case "rfp-view":
		//view rfp
		$page->template="rfp-view.php";
		$page->functions="rfp-view.php";
		$page->Title = "RFP";
		break;
	case "messages":
		$page->template="inbox.php";
		$page->functions="inbox.php";
		$page->title = "Messages";
		break;		
	case "profile":
		//one specific user profile
		$page->template="profile.php";
		$page->functions="profile.php";
		$page->title = "Gateway User Profile";
		break;
	case "profile-company":
		//one specific user profile
		$page->template="profile-company.php";
		$page->functions="profile-company.php";
		$page->title = "Gateway Company Profile";
		break;
	default:
		//dashboard
		$page->template="dashboard.php";
		$page->title = "Dashboard";
		$page->functions= "dashboard.php";
		break;
	
	
}

if (isset($page->functions))  include("functions/".$page->functions); 

include("views/header.php");
include("views/".$page->template);
include("views/footer.php");

?>