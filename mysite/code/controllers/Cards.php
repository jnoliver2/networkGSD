<?php

class Cards extends Page_Controller{
  public function index(){
    $ads   = BarState::get();
    foreach($ads as $ad){
    echo $ad->ID.'<br />';
     $ad->StateID = State::get()->filter('Initial',$ad->State)->first()->ID; 
     $ad->write();
      
    }
    //$cards = Message::newEmails()->toNestedArray();
    //$cards->newEmails()->toNestedArray();
    //print '<pre>'.print_r($cards,TRUE).'</pre>';
    //$card->write();
    
   /* $card= unserialize(Card::get()->byID(27)->T);
    print  '<pre>'.print_r($card,TRUE).'</pre>';*/
  }
  
}