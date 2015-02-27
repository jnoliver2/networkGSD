<?php
class Rfp_Application extends DataObject{
  static private $db = array('Body'=>'Text',
                             'From_ID'=>'Int',
                             'To_ID'=>'Int',
                             'Read'=>'Int',
                             'Deleted'=>'Int',
                             'Awarded'=>'Int',
                             'Denied'=>'Int',
                           );
  static private $has_one = array('Rfp'=>'Rfp');

   public function newMessages(){
  
    return $messages = Message::get()->filter(array('To_ID'=>Member::CurrentUserID()  ,'Read'=>0,'Deleted'=>0));
    
  }
  
  public function body_text(){
     $cc =new HTMLText(); 
     $cc->setValue($this->Body);
    return $cc;
  }
  
  public function trashMessages(){
    return Message::get()->filter('Deleted',1);
    
  } 
 
  public function newEmails(){
    
    return $this->newMessages()->filter('Type',array('mail','rfpaward'));
  }
  
  public function rfpApply(){
    
    return $this->newMessages()->filter('Type','rfpapply');
  }
  
  public function engagements_to(){
  
  return  Engagement::get()->filter('To_user_id',Member::CurrentUserID());
  }
  
  public function engagements_from(){
    
    return  Engagement::get()->filter('From_user_id', Member::CurrentUserID());
  }
  
  
  
  public function sender(){
    return Member::get()->byID($this->From_ID);
  }
  public function receiver(){
    return Member::get()->byID($this->To_ID);
  }
  
  public function preview(){
    return substr($this->Body,0,50);
  } 

  
  
  
}