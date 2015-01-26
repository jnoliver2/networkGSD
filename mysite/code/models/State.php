<?php
class State extends DataObject{
  static private $db = array(
                              'Initial' =>'Varchar(50)',
                              'Full'=>'Varchar(100)');
  static private $has_many = array('Addresses'=>'Address','BarStates'=>'BarState');
  
  public function barstate_members(){
    $members_ids = $this->BarStates()->filter('Type','user')->map('ID','Related_ID')->toArray();
    if(empty($members_ids))
      return new ArrayList();
      else
    return Member::get()->byIDs(array_values($members_ids));
    
    
  }
  
  public function barstate_companies(){
    $companies_ids = $this->BarStates()->filter('Type','company')->map('ID','Related_ID')->toArray();
    if(empty( $companies_ids))
      return new ArrayList();
      else
    return Company::get()->byIDs(array_values( $companies_ids));
    
    
  }
  
    public function state_members(){
    $members_ids = $this->Addresses()->filter('Type','user')->map('ID','Related_ID')->toArray();
        return $members_ids;
  } 
  
    public function state_companies(){
    $members_ids = $this->Addresses()->filter('Type','company')->map('ID','Related_ID')->toArray();
        return $members_ids;
  } 
  
}