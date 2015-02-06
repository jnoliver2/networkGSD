<?php
class Language extends DataObject{
  static private $db = array(
                             'Type' =>'Varchar(50)',
                             'Related_ID'=>'Int',
                             
                             );
  static private $has_one = array('Language_List'=>'Language_List');
  
  
}