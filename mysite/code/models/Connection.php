<?php
class Connection extends DataObject{
  static private $db = array('From_Type' =>'Varchar(50)',
                             'To_Type' =>'Varchar(50)',
                             'From_ID'=>'Int',
                             'To_ID'=>'Int',
                             'Approved'=>'Int',
                             'Active'=>'Int',
                             'Reviewed'=>'Int',
                             'Knowledge'=>'Int',
                             'Creativity'=>'Int',
                             'Judgement'=>'Int',
                             'Response'=>'Int',
                             'Experience'=>'Int',
                             'Total'=>'Int', 
                             'Comments'=>'Text' ,
                             'Date_Approved'=>'Date',
                             'Date_Reviewed'=>'Date');
 
  public function connection_from(){
    
    return Member::get()->byID($this->From_ID);
  }
  
  public function connection_to(){
    
    return Member::get()->byID($this->To_ID);
  }
  
 
 
  
  

}