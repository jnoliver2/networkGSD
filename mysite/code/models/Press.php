<?php
class Press extends DataObject{
  static private $db = array(
                             'Type' =>'Varchar(50)',
                             'Related_ID'=>'Int',
                             'Date'=>'Date',
                             'Title' =>'Varchar(50)',
                             'Publication' =>'Varchar(50)',
                             'Description'=>'Text',
                             );
  
  
  
}