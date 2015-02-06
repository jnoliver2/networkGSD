<?php
class Cert extends DataObject{
  static private $db = array(
                             'Type' =>'Varchar(50)',
                             'Related_ID'=>'Int',
                             
                             );
  static private $has_one = array('Cert_List'=>'Cert_List');
  
  
}