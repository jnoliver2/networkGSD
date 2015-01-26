<?php
class Speaking extends DataObject{
  static private $db = array('Name'=>'Varchar(100)',
                             'Type' =>'Varchar(50)',
                             'Location'=>'Varchar(100)',
                             'Date'=>'Date',
                             'Year'=>'Int',
                             'Month'=>'Varchar(50)',
                             );
  static private $has_one = array('Member'=>'Member');
  
  
}