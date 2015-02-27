<?php
class Notification extends DataObject{
  static private $db = array('Type'=>'Varchar(50)',
                             'CLS'=>'Varchar(50)',
                             'Related_ID'=>'Int',
                             'Link'=>'Varchar(200)',
                             'Details'=>'Varchar(200)',
                             'Read'=>'Int',
                             'Deleted'=>'Int',
                             'Image'=>'Varchar(100)');
  static private $has_one = array('Member'=>"Member");
  
}