<?php
class Score extends DataObject{
  static private $db = array( 'Type'=>'Varchar(50)',
                              'Related_ID'=>'Int',
                              'Source_ID'=>'Int',
                              'Ref'=>'Varchar(50)',
                              'Points'=>'Int',
                              'Details'=>'Text',
                              'Verified'=>'Int');
                              
  public static function registration($member){
    
      $score = new Score();
      $score->Type = 'user';
      $score->Ref = 'Registration';
      $score->Related_ID = $member->ID;
      $score->Source_ID = $member->ID;
      $score->Points = 450;
      $score->Details ="User initial registration";
      $score->Verified = 1;
      $score->write();
      
      $score = new Score();
      $score->Type = 'company';
      $score->Ref = 'Registration';
      $score->Related_ID = $member->CompanyID;
      $score->Source_ID = $member->ID;
      $score->Points = 450;
      $score->Details ="User Registration - ".$member->Titles.", ".$member->FirstName." ".$member->Surname;
      $score->Verified = 1;
      $score->write();
    
  }
  public static function RFP_Add($rfp){
      $score = new Score();
      $score->Type = 'user';
      $score->Ref = 'RFP_Add';
      $score->Related_ID = $rfp->MemberID;
      $score->Source_ID =  $rfp->ID;
      $score->Points = 100;
      $score->Details ='RFP Add - '.$rfp->Title;
      $score->Verified = 1;
      $score->write(); 
  }
  
  public static function RFP_Apply($application){
      $rfp = Rfp::get()->byID($application->RfpID);
      $score = new Score();
      $score->Type = 'user';
      $score->Ref = 'RFP_Apply';
      $score->Related_ID = $application->From_ID;
      $score->Source_ID = $application->RfpID;
      $score->Points = 50;
      $score->Details ="Rfp Apply - ".$rfp->Title;
      $score->Verified = 1;
      $score->write(); 
    
  }
  
  public static function RFP_Award($message){
      $rfp = Rfp::get()->byID($message->RfpID);
      $score = new Score();
      $score->Type = 'user';
      $score->Ref = 'RFP_Award';
      $score->Related_ID = $message->From_ID;
      $score->Source_ID = $message->RfpID;
      $score->Points = 400;
      $score->Details ="Rfp Award - ".$rfp->Title;
      $score->Verified =1;
      $score->write();  
  }
    public static function Connection_Review($connection){
      $mem = Member::get()->byID($connection->To_ID);
      $score = new Score();
      $score->Type = 'user';
      $score->Ref = 'Connection_Review';
      $score->Related_ID = $connection->From_ID;
      $score->Source_ID = $connection->ID;
      $score->Points = $connection->Total;
      $score->Details ="Connection Review from - ".$mem->FirstName." ".$mem->Surname;
      $score->Verified =1;
      $score->write();  
  }
}