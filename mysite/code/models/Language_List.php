<?php
class Language_List extends DataObject{
  static private $db = array(
                             'Name' =>'Varchar(150)',
                             
                             );
  static private $has_many = array('Language'=>'Language');
    public function companies(){
    $companies_ids = $this->Language()->filter('Type','company')->map('ID','Related_ID')->toArray();
    return $companies_ids;
    if(empty( $companies_ids))
      return new ArrayList();
      else
    return Company::get()->byIDs(array_values( $companies_ids));
    
    
  }
  
   public function members(){
    $members_ids = $this->Language()->filter('Type','user')->map('ID','Related_ID')->toArray();
    return $members_ids;
   
    
    
  }

}