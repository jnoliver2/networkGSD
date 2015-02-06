<?php
class Diversity extends DataObject{
  static private $db = array(
                             'Type' =>'Varchar(50)',
                             'Related_ID'=>'Int',
                             
                             );
  static private $has_one = array('Diversity_List'=>'Diversity_List');
  
  
}