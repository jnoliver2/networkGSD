<?php

class Pages extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private $message;
	private $member;
	private static $allowed_actions = array ('Notifications','company','user','profiles','messages','rfps',
	                                         'rfpmanager' ,'sendmessage','connection_approve','connection_review',
	                                         'connection_request', 'rfp_apply','rfp_award','rfp_deny',
	                                         'rfp_view','rfp_applicants','rfp_question','rfp_question_reply','rfp_add',
	                                         'rfp_delete' ,'rfp_edit','registration' ,'register',
	                                         'company_main_profile','company_edit','engagement_request' ,
	                                         'engagement_approve','company_user_add','ajax_add','user_profile','profile_page'
	                                         );

	public function init() {
		parent::init();
		$this->member = Member::CurrentUser();
		$this->message = Session::get('Message');
		Session::clear('Message');
		
		// You can include any CSS or JS required by your project here.
		// See: http://doc.silverstripe.org/framework/en/reference/requirements
	}
	public function Notifications(){
	  $id = $this->member = Member::CurrentUser()->ID;  
	
	  
	  $results['Messages'] = Message::get()->filter(array('To_ID'=> $id ,'Read'=>0,'Deleted'=>0,'Type'=>array('mail','rfpaward')))->sort('Created','DESC');
	  return $this->Customise($results);
	}
	//print '<pre>'.print_r($vars,TRUE).'</pre>';
	  public function profile_page(){
	    $type = $this->request->param('OtherID');
	    $type_id = $this->request->param('ID');
	    if($type == 1 ){
	      $selected = Company::get()->byID($type_id);
	    }
	    else{
	    $selected = Member::get()->byID($type_id);
	    $members = new ArrayList();
	    $members->add($selected);
	    $mems = $this->member_connections($members);
	    $selected = $mems->first();
	    }
          $results= array('States'=>State::get(),
                  
                  'PA_List'=>PracticeArea_List::get(),
                  'AS_List'=>Association_List::get(),
                  'Ci_Private_List'=>Client::get()->filter('Sector','Private'),
                  'Company'=>$this->member->Company(),
                  'Selected'=>$selected,
                  'LA_List'=>Language_List::get(),
                  'States'=>State::get(),
                  'Message'=>$this->message,
                  'DI_List'=>Diversity_List::get(),
                  'Cert_List'=>Cert_List::get());
  return $this->Customise($results)->renderWith(array("Profile_Public_Page","Page"));
	    
	  }
  public function user(){
     $results= array('States'=>State::get(),
                  'Title'=>'USER PROFILE',
                  'PA_List'=>PracticeArea_List::get(),
                  'AS_List'=>Association_List::get(),
                  'Ci_Private_List'=>Client::get()->filter('Sector','Private'),
                  'Company'=>$this->member->Company(),
                  'Selected'=>$this->member,
                  'LA_List'=>Language_List::get(),
                  'States'=>State::get(),
                  'Message'=>$this->message,
                  'DI_List'=>Diversity_List::get(),
                  'Cert_List'=>Cert_List::get());
  return $this->Customise($results)->renderWith(array("Company_Main_Profile","Page"));
  
}
public function ajax_add(){
  
  $vars = $this->getRequest()->getVars();
    unset($vars['URL']);
  $record = new $vars['Class']();
  $record->update($vars);
  $record->write();
  return json_encode($record);
  
}

public function company_user_add(){
  $vars = $this->getRequest()->postVars();

  try{   
      $member = New Member();
    
      $member->CompanyID =$vars['company_id'];
      $member->Password = $vars['pass'];
      $member->FirstName = $vars['firstname'];
      $member->Surname = $vars['surname'];
      $member->Email = $vars['email'];
      $member->User_Level = $vars['level'];
      $member->write();
      $message = array('Type'=>'success','Message'=>'User successfully registered');
      Score::registration($member);  
   
  } catch (Exception $e) {
     //echo 'Caught exception: ',  $e->getMessage(), "\n";
  
     $message = array('Type'=>'danger','Message'=>'An error occured please try again. Please check the email');

 } 

  Session::set('Message',$message);
  $this->redirectBack();
}	


public function company_edit(){
  $vars = $this->getRequest()->postVars();
  if(isset($vars['member_id'])){
     $company = Member::get()->byID($vars['member_id']);
  $company->update($vars['User']);
  /*
    This might complain later 
    
    */
    
  $company->update($vars['Company']);
    
  }
  else{
  $company = Company::get()->byID($vars['company_id']);
  $company->update($vars['Company']);
    
  }
  
   if(isset($vars['logo']) & $vars['logo']['size'] > 0){
        $upload = new Upload();
         $upload->load($vars['logo']);
         $imageid = $upload->getFile()->ID;
         $company->AvatarID = $imageid;
  
   }
    
  $company->write();
   $this->selected_options($company,$vars,'Language');
  $this->selected_options($company,$vars,'Cert');
  $this->selected_options($company,$vars,'BarState');
  $this->selected_options($company,$vars,'Diversity');
  $this->selected_options($company,$vars,'PracticeArea');
  $this->selected_options($company,$vars,'Association');
  $message =array('Type'=>'success','Message'=>'Changes Successfully made');
  Session::set('Message',$message);
  $this->redirectBack();
}	


public function engagement_request(){
  $vars = $this->getRequest()->postVars();
    $en = new Engagement();
    $en->Related_ID = $this->member->ID;
    $en->Name = $vars['Name'];
    $en->Description = $vars['Description'];
    $en->Year = $vars['Year'];
    $en->Month = $vars['Month'];
    
  if(isset($vars['cid']) & $vars['cid'] > 0){
    $en->To_user_id = $vars['cid'];
    $en->Type = 'company';
  }
  
  if(isset($vars['uid']) & $vars['uid'] > 0){
   $en->To_user_id = $vars['uid']; 
   $en->Type = 'user';
  }
  $en->write();
  $message =array('Type'=>'success','Message'=>'Engagement request  successfully');
  Session::set('Message',$message);
  $this->redirectBack();
}	
public function company_main_profile(){
  
  $results= array('States'=>State::get(),
                  'Title'=>'COMPANY PROFILE',
                  'PA_List'=>PracticeArea_List::get(),
                  'AS_List'=>Association_List::get(),
                  'Ci_Private_List'=>Client::get()->filter('Sector','Private'),
                  'Company'=>$this->member->Company(),
                  'Selected'=>$this->member->Company(),
                  'LA_List'=>Language_List::get(),
                  'States'=>State::get(),
                  'Message'=>$this->message,
                  'DI_List'=>Diversity_List::get(),
                  'Cert_List'=>Cert_List::get());
  return $this->Customise($results)->renderWith(array("Company_Main_Profile","Page"));
}
public function register(){
  $vars= $this->getRequest()->postVars();
  
  $company = New Company();
  $company->update($vars['Company']);
  $company->Phone = $vars['Phone'];
  $company->Fax = $vars['Fax'];
  $company->write();
  
  $address = New Address();
  $address->update($vars['Address']);
  $address->Phone = $vars['Phone'];
  $address->Fax = $vars['Fax'];
  $address->Related_ID = $company->ID;
  $address->Type = 'company';
  $address->write();

  try{   
  $member = New Member();
  $member->update($vars['User']);
  $member->CompanyID = $company->ID;
  $member->Password = $vars['pass1'];
  $member->Phone = $vars['Phone'];
  $member->Fax = $vars['Fax'];
  $member->write();
   $message = array('Type'=>'success','Message'=>'Company  registered');
   $success =1;
  } catch (Exception $e) {
     //echo 'Caught exception: ',  $e->getMessage(), "\n";
     $company->delete();
     $address->delete();
     $success =0;
     $message = array('Type'=>'danger','Message'=>'An error occured please try again');
     

 } 

  $address = New Address();
  $address->update($vars['Address']);
  $address->Phone = $vars['Phone'];
  $address->Fax = $vars['Fax'];
  $address->Related_ID = $member->ID;
  $address->Type = 'user';
  $address->write();
  $member->logIn();


  
       
        Session::set('Message',$message);
    if($success == 1){ $this->redirect("pages/company_main_profile");}
    else{
      
     $this->redirectBack();}
  
}
public function registration(){
  
  $results= array('States'=>State::get(),
                  'Message'=>$this->message);
  return $this->Customise($results)->renderWith(array("Registration","Home"));
}	
public function rfpmanager(){
  $rfps = Rfp::get()->filter('MemberID',$this->member->ID);
  $company = $this->member->Company();
  
   $results = array('Title'=>'RFP MANAGER',
                    'Rfps'=>$rfps,
                    'Company'=>$company,
                    'AS_List'=>Association_List::get(), 
                    'PA_List'=>PracticeArea_List::get(),
                    'LA_List'=>Language_List::get(),
                    'States'=>State::get(),
                    'Message'=>$this->message,
                    'DI_List'=>Diversity_List::get(),
                    'Cert_List'=>Cert_List::get(),
                    );
    return $this->Customise($results)->renderWith(array("Rfp_Manager","Page"));
  
}
public function rfp_edit(){
 $vars= $this->getRequest()->getVars();
 $rfp = Rfp::get()->byID($vars['id']);
 


  
   $results = array('Title'=>'RFP Edit',
                    'Rfp'=>$rfp,
                    'PA_List'=>PracticeArea_List::get(),
                    'LA_List'=>Language_List::get(),
                    'AS_List'=>Association_List::get(),
                    'States'=>State::get(),
                    'Message'=>$this->message,
                    'Di_List'=>Diversity_List::get(),
                    'Cert_List'=>Cert_List::get(),
                    );
    return $this->Customise($results)->renderWith(array("Rfp_Edit","Page"));
  
}
public function selected_options($rfp,$vars,$link){
  
    if(!isset($vars[$link]))$vars[$link]=array();
    
    $original = $rfp->{$link}();
   
    $submited = array_unique($vars[$link] );
     if($link == 'BarState'){$links = 'StateID';}
         else
         $links= $link."_ListID";
    foreach($submited as $key=>$value){ 
       foreach($original as $key2=>$value2){
        
         //echo $links;
         if($value2->{$links}  == $value){
            continue 2;
         }
    }
    $pr = new $link();
    if($rfp->ClassName =='Rfp'){
    $pr->Type ='Rfp';
    }
    if($rfp->ClassName =='Company'){
    $pr->Type ='company';
    }
     if($rfp->ClassName =='Member'){
    $pr->Type ='user';
    }
    $pr->Related_ID = $rfp->ID;
    $pr->{$links}= $value;
    $pr->write();

  }
  foreach($original as $key=>$value){ 
       foreach($submited as $key2=>$value2){
         if($value2 == $value->{$links}  ){
            continue 2;
         }
    }
    $value->delete();
  }
  
  
}
public function rfp_add(){
  $vars = $this->getRequest()->postVars();
   
  
  if(isset($vars['rfp_id'])){
      $rfp = Rfp::get()->byID($vars['rfp_id']); 
      $message = array('Type'=>'success','Message'=>'Rfp  successfully edited');
  }
  else{
    $rfp = new Rfp();
    $message = array('Type'=>'success','Message'=>'Rfp  successfully added');
  }
   
  
  $rfp->Title = $vars['rfp_title'];
  $rfp->CompanyID = $this->member->CompanyID;
  $rfp->MemberID = $this->member->ID;
  $rfp->Project_Start = $vars['project_start'];
  $rfp->Project_End = $vars['project_end'];
  $rfp->Submission_Deadline = $vars['submission_deadline'];
  $rfp->Number_Of_Attorneys = $vars['number_of_attorneys'];
  $rfp->Years_Of_Practice = $vars['years_of_practice'];
  $rfp->Description = $vars['rfp_description'];
  $rfp->Gender = $vars['gender'];
  $rfp->Ethnicity = $vars['ethnicity'];
  $rfp->Company_Overview = $vars['company_overview']; 
  $rfp->write();
  if(!isset($vars['rfp_id'])){
    Score::RFP_Add($rfp);
    
  }
  $this->selected_options($rfp,$vars,'Language');
  $this->selected_options($rfp,$vars,'Cert');
  $this->selected_options($rfp,$vars,'BarState');
  $this->selected_options($rfp,$vars,'Diversity');
  $this->selected_options($rfp,$vars,'PracticeArea');
  $this->selected_options($rfp,$vars,'Association');
  
  Session::set('Message',$message);
  $this->redirectBack();
}	
public function rfp_view(){
  $vars = $this->getRequest()->getVars();
   $rfp = Rfp::get()-> byID($vars['id']);
   $results = array('Title'=>$rfp->Title,
                    'Rfp'=>$rfp,
                    'Message'=>$this->message ,);
    return $this->Customise($results)->renderWith(array("Rfp_view","Page"));
  
}	

public function rfp_applicants(){
  $vars = $this->getRequest()->getVars();
   $rfp = Rfp::get()-> byID($vars['id']);
   $results = array('Title'=>'Rfp Applicants',
                    'RfpID'=>$rfp->ID,
                    'Companies'=> new ArrayList(),
                    'Members'=>$rfp->applicants(),
                    'Message'=>$this->message ,);
    return $this->Customise($results)->renderWith(array("Rfp_Applicants","Page"));
  
}	
public function rfp_delete(){
    	$vars = $this->getRequest()->getVars();
    	$rfp = Rfp::get()->byID($vars['id']);
    	$rfp->delete();
    	
      $message = array('Type'=>'success','Message'=>'Rfp successfully deleted');
      Session::set('Message',$message);
      
     $this->redirectBack();
	}
public function rfp_question_reply(){
    	$vars = $this->getRequest()->postVars();
    	$q =new Rfp_QA();
    	$q->RfpID=$vars['rfp_id'];
    	$q->QuestionID=$vars['question_id'];
    	$q->Body=$vars['comment'];
    	$q->MemberID = $this->member->ID;
    	$q->write();
    	
      $message = array('Type'=>'success','Message'=>'Reply successfully sent');
      Session::set('Message',$message);
      
     $this->redirectBack();
	}
public function rfp_question(){
    	$vars = $this->getRequest()->postVars();
    	$q =new Rfp_QA();
    	$q->RfpID=$vars['rfp_id'];
    	$q->Body=$vars['comment'];
    	$q->MemberID = $this->member->ID;
    	$q->write();
    	
      $message = array('Type'=>'success','Message'=>'Question successfully sent');
      Session::set('Message',$message);
      
     $this->redirectBack();
	}
public function rfp_award(){
    	$vars = $this->getRequest()->postVars();
      $application = Rfp_Application::get()->byID($vars['message_id']);
      $new_message = new Message();
      $new_message->To_ID = $application->From_ID;
      $new_message->From_ID = $application->To_ID;
      $new_message->RfpID = $application->RfpID;
      $new_message->Type = 'rfpaward';
      $new_message->Body = $vars['message']; 
      $new_message->write();
      $rfp = Rfp::get()->byID($application->RfpID);
      $application->Awarded = 1;
      $application->write();
      Score::RFP_Award($new_message);
      $message = array('Type'=>'success','Message'=>'Rfp successfully awarded');
      Session::set('Message',$message);
      
     $this->redirectBack();
	}
	
	
	public function rfp_apply(){
	  
	  
	  $vars = $this->getRequest()->postVars();

	
  	$body = "<p>FROM PREVIOUS EXPERIENCE, WHAT MAKES YOUR COMPANY THE BEST CANDIDATE FOR THIS REQUEST? </p><p>".str_ireplace("'","\'",$vars['experience'])."</p><br />";
  	$body .="<p>PLEASE GIVE US SOME CASE EXAMPLES THAT RELATE DIRECTLY TO THIS REQUEST. </p><p>".str_ireplace("'","\'",$vars['examples'])."</p><p></p>";
  
     
	  $application = new Rfp_Application();
	  $application->To_ID = $vars['to_id'];
	  $application->From_ID = $this->member->ID;
	  $application->RfpID = $vars['rfp_id'];  
	  $application->Body = $body;
	  $application->write();
	  
	  Score::RFP_Apply($application);
	  
	  $rfp  = Rfp::get()->byID($vars['rfp_id']);
	  
	  $note = new Notification();
	  $note->MemberID = $rfp->MemberID;
	  $note->Type = "Rfp_Application";
	  $note->CLS = "Application";
	  $note->Related_ID =$application->ID; 
	  $note->Details = $this->member->FirstName.' '.$this->member->Surname.' applied to RFP Title '.$rfp->Title;
	  $note->Link = 'pages/messages';
	  $note->Image = $this->member->Avatar()->FileName;
	  $note->write();
	  
  	$message = array('Type'=>'success','Message'=>'Rfp apply request successfully sent');
    Session::set('Message',$message);
    $this->redirectBack();
	}
 public function rfp_deny(){
	  
	  
	  $vars = $this->getRequest()->postVars();
    $application = Rfp_Application::get()->byID($vars['application_id']);
    $application->Denied =1;
    $application->write();
	
  
  	$message = array('Type'=>'danger','Message'=>'Rfp application denied');
    Session::set('Message',$message);
    $this->redirectBack();
	}
	
  public function company(){
   $results = array('Title'=>'COMPANY PROFILE');
    return $this->Customise($results)->renderWith(array("Page"));
  
}


public function profiles(){
  
  $companies = Company::get();
  $members = Member::get();
  $vars=$this->getRequest()->postVars();
  $post_vars =$vars;

  if(isset($vars['company'])){
      $company_vars = $vars['company'];
      unset($vars['company']);
  }
  foreach($vars as $key=>$value ){
    if(empty($value)){ unset($vars[$key]);}
  }
    
  if(!empty($vars)){ 
     
    if(isset($vars['Barstate'])){
      $members = State::get()->byID($vars['Barstate'])->barstate_members();
       $companies = State::get()->byID($vars['Barstate'])->barstate_companies(); 
       //$companies = $companies->filter('ID',7);
     unset($vars['Barstate']);
    }
    
    if(isset($vars['State'])){
      $members_ids = State::get()->byID($vars['State'])->state_members();
       $company_ids = State::get()->byID($vars['State'])->state_companies(); 
       $companies = $companies->filter(array('ID'=>array_values($company_ids))) ;
       $members = $members->filter(array('ID'=>array_values($members_ids))) ;
       //$companies = $companies->filter('ID',7);
     unset($vars['State']);
    }
  if(isset($vars['PracticeArea'])){
    $company_ids =  PracticeArea_List::get()->byID($vars['PracticeArea'])->companies();
    $members_ids =  PracticeArea_List::get()->byID($vars['PracticeArea'])->members();
    $companies = $companies->filter(array('ID'=>array_values($company_ids))) ;
    $members = $members->filter(array('ID'=>array_values($members_ids))) ;
    unset($vars['PracticeArea']);
    
  }
   if(isset($vars['searchname'])){

     $companies  = $companies->filter('Name:PartialMatch',$vars['searchname']);
     $members  = $members->filterAny(array('FirstName:PartialMatch'=>$vars['searchname'],
                                           'Surname:PartialMatch'=>$vars['searchname'],));
      unset($vars['searchname']);
   }
   
   if(!empty($vars)){$companies=new ArrayList();}
  }
  
  $members = $members->filter($vars);
  $practices   = PracticeArea_List::get()->sort('Name','ASC');
  $states = State::get()->sort('Full','ASC');
  
  $mems = $this->member_connections($members);

   $results = array('Title'=>'PROFILES' ,
                    'Companies'=>$companies,
                    'Members'=>$mems,
                    'Message'=>$this->message ,
                    'PracticeArea_List'=>$practices,
                    'States'=>$states,
                    'Post_Vars'=>$post_vars);
    return $this->Customise($results)->renderWith(array("Profiles","Page"));
  
}
public function member_connections($members){
  $connections = Connection::get()->filter('To_ID',$this->member->ID);
  $mems = new ArrayList();
 
  foreach($members as $mem){
     $mem->Connected = "No";
    foreach($connections as $con){
      if($con->From_ID == $mem->ID && $con->Approved == 1 && $con->Reviewed == 0 ){
        $mem->Connected = 'Approved';
      }
      if( $con->From_ID == $mem->ID && $con->Approved == 1 && $con->Reviewed == 1 ){
        $mem->Connected = 'Revieved' ;
        
      }
       if($con->From_ID == $mem->ID && $con->Approved == 0 && $con->Reviewed == 0 ){
         $mem->Connected = 'Waiting';
        
      }
    }
    $mems->add($mem);
  } 
  return $mems;
}
public function rfps(){
   $rfps = Rfp::get();
   $results = array('Title'=>'RFPS',
                    'Rfps'=>$rfps,
                    'Message'=>$this->message ,);
    return $this->Customise($results)->renderWith(array("Rfps","Page"));
  
}
public function engagement_approve(){
  $vars = $this->getRequest()->postVars();
  if(isset($vars['accept'])){
    $engagement = Engagement::get()->byID($vars['connection_id']);
    $engagement->Approved =1;
    $engagement->write();
    $message = array('Type'=>'success','Message'=>'Engagement request successfully accepted');
    
  }
  if(isset($vars['deny'])){
   $engagement = Engagement::get()->byID($vars['connection_id']); 
   $engagement->delete();
   $message = array('Type'=>'danger','Message'=>'Engagement request denied');
  }
  
  Session::set('Message',$message);
  $this->redirect("pages/messages");
}

public function connection_approve(){
  $vars = $this->getRequest()->postVars();
  if(isset($vars['accept'])){
    $connection = Connection::get()->byID($vars['connection_id']);
    $connection->Approved =1;
    $connection->write();
    
    $con = Connection::get()->filter(array('To_ID'=>$connection->From_ID ,'From_ID'=>$connection->To_ID))->first();
    $con->Active = 1;
    $con->Approved = 1;
    $con->write();
    
    $message = array('Type'=>'success','Message'=>'Connection request successfully accepted');
    
  }
  

  if(isset($vars['deny'])){
   $connection = Connection::get()->byID($vars['connection_id']); 
   $connection->delete();
   $message = array('Type'=>'danger','Message'=>'Connection request denied');
  }
  
  Session::set('Message',$message);
  $this->redirect("pages/messages");
}
public function connection_review(){
  $vars = $this->getRequest()->postVars();
  
    $connection = Connection::get()->filter(array('From_ID'=>$vars['rvmid'],'To_ID'=>$this->member->ID))->first();
    $connection->update($vars);
    $connection->Total = $vars['Knowledge'] + $vars['Creativity'] + $vars['Judgement'] + $vars['Response'] + $vars['Experience'] ;
    $connection->Reviewed = 1;
    $connection->write();
    $message = array('Type'=>'success','Message'=>'Connection successfully reviewed');
  Score::Connection_Review($connection);
  Session::set('Message',$message);
  $this->redirectBack();
} 
public function connection_request(){
  
  
  $vars = $this->getRequest()->postVars();
  $connection = new Connection();
  $connection->To_ID = $vars['To_ID'];
  $connection->From_ID = Member::CurrentUserID();
  $connection->From_Type = 'user';
  $connection->To_Type = $vars['To_Type'];
  $connection->Active = 1;
  
  $connection->write();
  $connection = new Connection();
  $connection->To_ID =  Member::CurrentUserID(); 
  $connection->From_ID = $vars['To_ID'];
  $connection->From_Type = 'user';
  $connection->To_Type = $vars['To_Type'];
  
  
  $connection->write();
  $message = array('Type'=>'success','Message'=>'Connection request successfully sent');
  Session::set('Message',$message);
  $this->redirectBack();
}
public function messages(){
 
  $id =  Member::CurrentUserID();
  $msgs = Message::get()->filter(array('To_ID'=> $id ,'Read'=>0,'Deleted'=>0,'Type'=>array('mail','rfpaward')))->sort('Created','DESC');
  $msgs_sent = Message::get()->filter(array('From_ID'=> $id ,'Read'=>0,'Deleted'=>0,'Type'=>array('mail','rfpaward')))->sort('Created','DESC');
  $msgs_trash =Message::get()->filter(array('To_ID'=> $id ,'Deleted'=>1))->sort('Created','DESC');
  $rfps_msg = Message::get()->filter(array('To_ID'=> $id ,'Deleted'=>0,'Type'=>'rfp_msg'))->sort('Created','DESC');
  $rfps_application = Rfp_Application::get()->filter(array('To_ID'=> $id ,'Deleted'=>0))->sort('Created','DESC');
  
  $rfps = new ArrayList();
  $rfps->merge($rfps_msg);
  $rfps->merge($rfps_application);
  //print '<pre>'.print_r($rfps->toArray(),TRUE).'<pre>';
  //die();
    $engagements = Engagement::get()->filter(array('To_user_id'=>$id  ,'Approved'=>0,'Type'=>'user'));
   if($this->member->User_Level == 1 ){
     $list = new ArrayList();
     $list->merge($engagements);
     $list->merge(Engagement::get()->filter(array('To_user_id'=>$this->member->CompanyID  ,'Approved'=>0,'Type'=>'company')));
     $engagements= $list;
 }
 
 
  $connections = Connection::get()->filter(array('To_ID'=>$id,'Approved'=>0,'Active'=>1));
  
   $results = array('Title'=>'MESSAGES',
                    'Messages'=>$msgs,
                    'Trash'=>$msgs_trash,
                    'Rfps'=>$rfps->sort('Created','DESC'),
                    'Sent'=>$msgs_sent,
                    'Engagements'=>$engagements,
                    'Connections'=>$connections,
                    'Message'=>$this->message
                    );
   $vars = $this->getRequest()->getVars() ;
   
   
    return $this->Customise($results)->renderWith(array("Messages","Page"));
  
}


public function sendmessage(){
 
  
  $vars = $this->getRequest()->postVars() ;
  
  if(isset($vars['member_id'])&& $vars['member_id'] >   0){

      $new_message = new Message();
      $new_message->To_ID = $vars['member_id'];
      $new_message->From_ID = $this->member->ID;
      $new_message->Type = 'mail';
      $new_message->Subject = $vars['subject'];
      $new_message->Body = $vars['message_body']; 
      $new_message->write();
      

    
  }
  
  if(isset($vars['company_id'])&& $vars['company_id'] >   0){
    $admins = Company::get()->byID($vars['company_id'])->Members()->filter('User_level',1);
    foreach($admins as $admin){
      $new_message = new Message();
      $new_message->To_ID = $admin->ID;
      $new_message->From_ID = $this->member->ID;
      $new_message->Type = 'mail';
      $new_message->Subject = $vars['subject'];
      $new_message->Body = $vars['message_body']; 
      $new_message->write();
      
    }
    
  }
  
  if(isset($vars['message_id'])&& $vars['message_id'] >   0){
      $new_message = new Message();
      $old_message = Message::get()->byID($vars['message_id']);
      $new_message->To_ID = $old_message->From_ID;
      $new_message->From_ID = $old_message->To_ID;
      $new_message->RfpID = $old_message->RfpID;
      $new_message->Type = $old_message->Type;
      $new_message->Subject = $vars['subject'];
      $new_message->Body = $vars['message_body']; 
      $new_message->write();
    
    
    }
  if(isset($vars['rfpid'])&& $vars['rfpid'] >   0){
      $new_message = new Message();
      $rfp=Rfp::get()->byID($vars['rfpid']);
      $new_message->To_ID = $rfp->MemberID;
      $new_message->From_ID = $this->member->ID;
      $new_message->RfpID = $rfp->ID;
      $new_message->Type ='rfp_msg';
      $new_message->Subject = $vars['subject'];
      $new_message->Body = $vars['message_body']; 
      $new_message->write();
  
    
  }
 
  $message = array('Type'=>'success','Message'=>'Message successfully sent');
  Session::set('Message',$message);
  
 $this->redirectBack();
  //print '<pre>'.print_r( $this->getRequest()->postVars(),TRUE).'<pre>';
}
 
}