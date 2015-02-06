<?php
class Speaking extends DataObject{
  static private $db = array('Name'=>'Varchar(100)',
                             'Type' =>'Varchar(50)',
                             'Location'=>'Varchar(100)',
                             'Date'=>'Date',
                             'Year'=>'Int',
                             'Related_ID'=>'Int',
                             'Month'=>'Varchar(50)',
                             );
  
  
  
}