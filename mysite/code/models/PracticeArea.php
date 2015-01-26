<?php
class PracticeArea extends DataObject{
  static private $db = array(
                             'Type' =>'Varchar(50)',
                             'Related_ID'=>'Int',
                             
                             );
  static private $has_one = array('PracticeArea_List'=>'PracticeArea_List');
  
  
}