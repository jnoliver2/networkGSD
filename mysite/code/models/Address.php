<?php
class Address extends DataObject{
  static private $db = array(
                              'Type' =>'Varchar(50)',
                              'Related_ID'=>'Int',
                              'Address1'=>'Varchar(100)',
                              'Address2'=>'Varchar(100)',
                              'City'=>'Varchar(50)',
                              'St'=>'Varchar(50)',
                              'Zip'=>'Varchar(50)',
                              'Phone'=>'Varchar(50)',
                              'Fax'=>'Varchar(50)');
  static private $has_one = array('State'=>'State');

}