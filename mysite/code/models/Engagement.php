<?php
class Engagement extends DataObject{
  static private $db = array('Name'=>'Varchar(100)',
                             'Type' =>'Varchar(50)',
                             'Description'=>'Text',
                             'Company_Attorney'=>'Varchar(100)' ,
                             'Year'=>'Int',
                             'Month'=>'Varchar(50)',
                             'Related_ID'=>'Int',
                             'To_user_id'=>'Int',
                             'Approved'=>'Int');


  public function from(){
    return Member::get()->byID($this->Related_ID);
  }
}