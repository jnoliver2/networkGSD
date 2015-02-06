<?php
class Award extends DataObject{
  static private $db = array(
                             'Type' =>'Varchar(50)',
                             'Related_ID'=>'Int',
                             'Year'=>'Varchar(50)',
                             'Name' =>'Varchar(50)',

                             );
  
  
  
}