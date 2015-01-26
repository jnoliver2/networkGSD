<?php
class Connection extends DataObject{
  static private $db = array('Date_Added'=>'SS_Datetime',
                             'From_Type' =>'Varchar(50)',
                             'To_Type' =>'Varchar(50)',
                             'From_ID'=>'Int',
                             'To_ID'=>'Int',
                             'Approved'=>'Int');
 
  public function connection_from(){
    
    return Member::get()->byID($this->From_ID);
  }
  
  public function connection_to(){
    
    return Member::get()->byID($this->To_ID);
  }
  
 
 
  
  

}