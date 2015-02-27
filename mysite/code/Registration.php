<?php

class Registration extends Controller {

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
	private static $allowed_actions = array ('register'
	);

	public function init() {
		parent::init();
		
		// You can include any CSS or JS required by your project here.
		// See: http://doc.silverstripe.org/framework/en/reference/requirements
	}
	
public function index(){

  
  $results= array('States'=>State::get(),
                  'Message'=>$this->message);
  return $this->Customise($results)->renderWith(array("Registration","Home"));
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
  $member->User_Level = 1;
  $member->Password = $vars['pass1'];
  $member->Phone = $vars['Phone'];
  $member->Fax = $vars['Fax'];
  $member->write();
   
  Score::registration($member);  





  
   $message = array('Type'=>'success','Message'=>'Company successfully registered');
   $success =1;
   
  $address = New Address();
  $address->update($vars['Address']);
  $address->Phone = $vars['Phone'];
  $address->Fax = $vars['Fax'];
  $address->Related_ID = $member->ID;
  $address->Type = 'user';
  $address->write();
  $member->logIn();
  
  } catch (Exception $e) {
     //echo 'Caught exception: ',  $e->getMessage(), "\n";
     $company->delete();
     $address->delete();
     $success =0;
     $message = array('Type'=>'danger','Message'=>'An error occured please try again');
     

 } 




  
       
        Session::set('Message',$message);
    if($success == 1){ $this->redirect("pages/company_main_profile");}
    else{
      
     $this->redirectBack();}
  
}


 
}
