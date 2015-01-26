<?php
class Engagement extends DataObject{
  static private $db = array('Name'=>'Varchar(100)',
                             'Type' =>'Varchar(50)',
                             'Description'=>'Text',
                             'Company_Attorney'=>'Varchar(100)' ,
                             'Year'=>'Int',
                             'Month'=>'Varchar(50)',
                            
                             'To_user_id'=>'Int',
                             'Approved'=>'Int');

  static private $has_one = array('Member'=>'Member');
  
}