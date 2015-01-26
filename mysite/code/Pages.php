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
	private static $allowed_actions = array ('company','user','profiles','messages','rfps',
	                                         'rfpmanager' ,'sendmessage','connection_approve',
	                                         'connection_request'
	                                         );

	public function init() {
		parent::init();
		$this->message = Session::get('Message');
		Session::clear('Message');
		
		// You can include any CSS or JS required by your project here.
		// See: http://doc.silverstripe.org/framework/en/reference/requirements
	}
	
  public function company(){
   $results = array('Title'=>'COMPANY PROFILE');
    return $this->Customise($results)->renderWith(array("Page"));
  
}
  public function user(){
   $results = array('Title'=>'USER PROFILE');
    return $this->Customise($results)->renderWith(array("Page"));
  
}

public function profiles(){
  $companies = Company::get();
  $members = Member::get();
  $vars=$this->getRequest()->postVars();
  $post_vars =$vars;
  
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
  }
  
  //$members = $members->filter($vars);
  $practices   = PracticeArea_List::get()->sort('Name','ASC');
  $states = State::get()->sort('Full','ASC');

   $results = array('Title'=>'PROFILES' ,
                    'Companies'=>$companies,
                    'Members'=>$members,
                    'Message'=>$this->message ,
                    'PracticeArea_List'=>$practices,
                    'States'=>$states,
                    'Post_Vars'=>$post_vars);
    return $this->Customise($results)->renderWith(array("Profiles","Page"));
  
}
public function rfps(){
   $results = array('Title'=>'RFPS');
    return $this->Customise($results)->renderWith(array("Page"));
  
}
public function rfpmanager(){
   $results = array('Title'=>'RFP MANAGER');
    return $this->Customise($results)->renderWith(array("Page"));
  
}
public function connection_approve(){
  $vars = $this->getRequest()->postVars();
  if(isset($vars['accept'])){
    $connection = Connection::get()->byID($vars['connection_id']);
    $connection->Approved =1;
    $connection->write();
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
public function connection_request(){
  
  
  $vars = $this->getRequest()->postVars();
  $connection = new Connection();
  $connection->To_ID = $vars['To_ID'];
  $connection->From_ID = Member::CurrentUserID();
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
  $rfps = Message::get()->filter(array('To_ID'=> $id ,'Deleted'=>0,'Type'=>'rfpapply'))->sort('Created','DESC'); 
  $engagements = Engagement::get()->filter(array('To_User_ID'=>$id  ,'Approved'=>0));
  $connections = Connection::get()->filter(array('To_ID'=>$id,'Approved'=>0));
  
   $results = array('Title'=>'MESSAGES',
                    'Messages'=>$msgs,
                    'Trash'=>$msgs_trash,
                    'Rfps'=>$rfps,
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
  
  $old_message = Message::get()->byID($vars['message_id']);
  $new_message = new Message();
  $new_message->To_ID = $old_message->From_ID;
  $new_message->From_ID = $old_message->To_ID;
  $new_message->Related_Rfp = $old_message->Related_Rfp;
  $new_message->Type = $old_message->Type;
  $new_message->Subject = $vars['subject'];
  $new_message->Body = $vars['message_body']; 
  $new_message->Date_Sent = date("Y-m-d H:i:s");
  $new_message->write();
  
  $message = array('Type'=>'success','Message'=>'Message successfully sent');
  Session::set('Message',$message);
  
  $this->redirect("pages/messages");
  //print '<pre>'.print_r( $this->getRequest()->postVars(),TRUE).'<pre>';
}
 
}
