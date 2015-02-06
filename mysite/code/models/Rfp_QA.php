<?php
class Rfp_QA extends DataObject{
  static private $db = array(
                              'QuestionID' =>'Int',
                              'Body'=>'Text');
  static private $has_one = array('Member'=>'Member','Rfp'=>'Rfp');
  public function answers(){
    
    return Rfp_QA::get()->filter('QuestionID',$this->ID);
  }
}