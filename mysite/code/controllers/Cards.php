<?php

class Cards extends Page_Controller{
  public function index(){
    $ads   = Rfp::get();
    foreach($ads as $ad){
      //echo $ad->ID;
      $states = explode(',',$ad->Practice_Areas) ;
     
      //print_r($states);
      foreach($states as $key=>$value){
        echo $value;
        
        $st = PracticeArea_List::get()->byID($value);
        $bs = new PracticeArea();
        $bs->Type ='Rfp';
        $bs->Related_ID =$ad->ID;
        $bs->PracticeArea_ListID = $st->ID;
        
        $bs->write();
        
      }
  
      
    }
    //$cards = Message::newEmails()->toNestedArray();
    //$cards->newEmails()->toNestedArray();
    //print '<pre>'.print_r($cards,TRUE).'</pre>';
    //$card->write();
    
   /* $card= unserialize(Card::get()->byID(27)->T);
    print  '<pre>'.print_r($card,TRUE).'</pre>';*/
  }
  
}