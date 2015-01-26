<?php

class Member_Extension extends DataExtension{
  static private $db = array( 
                              'MiddleName'=>'Varchar(25)',
                              'Prefix'=>	'Varchar(10)',
                              'Suffix'=>'Varchar(10)',
                              'Titles'=>	'Varchar(25)',
                              'Gender'=>	'Varchar(15)',
                              'Deleted'=>	'Int',
                              'Phone'=>'Varchar(25)',
                              'Fax'	=>'Varchar(10)',
                              'Area_Of_Practice'=>'Varchar(200)',	
                              'Bar_Admittance_State'=>'Varchar(10)',
                              'Years_Of_Practice'=>'Varchar(10)',
                              'Law_School'=>'Varchar(100)',
                              'Bio'=>'Text',
                              'Client_Private_Sector'=>'Varchar(200)',
                              'Clients_Government_Sector'=>'Varchar(200)',
                              'Significant_Engagements'=>'Varchar(200)',
                              'Minority_Certifications'=>'Varchar(100)',
                              'Professional_Associations'=>'Varchar(100)',
                              'Special_Certifications'=>'Varchar(100)',
                              'Mh_Membership_Verify'=>'Varchar(100)',
                              'Government_Clearance'=>'Varchar(100)',
                              'Awards_Honors'=>'Varchar(100)',
                              'Speaking_Engagements'=>'Varchar(100)',
                              'Publication_Press'=>'Varchar(100)',
                              'Languages'=>'Varchar(100)',
                              'Website'=>'Varchar(200)',
                              'Workonsite'=>'Varchar(10)',
                              'Ethnicity'=>'Varchar(50)',
                              'Linkedin'=>'Varchar(200)',
                              'Martingale'=>'Varchar(200)',
                              'Package_Type'=>'Varchar(150)',

    );
  //private $id;

  private static $has_many = array('Engagements'=>'Engagement','Speakings'=>'Speaking','PracticeArea'=>'PracticeArea');
  private static $has_one = array('Company'=>'Company','Avatar'=>'File','Address'=>'Address');
  
  
  public function allMessages(){
    
    return new Message();
  }
  
public function practice_areas(){
    Return PracticeArea::get()->filter(array('Related_ID'=>$this->owner->ID  ,'Type'=>'user'));
    
  } 
  public function bio_preview(){
    return substr($this->owner->Bio,0,200);
    
  } 
  
  public function bar_states(){
    return BarState::get()->filter(array('Related_ID'=>$this->owner->ID,'Type'=>'user'));
  }
  
  public function connected(){
    $id = Member::CurrentUserID();
    $connections = Connection::get()->filter(array('To_ID'=>$this->owner->ID,'From_ID'=>$id,'To_Type'=>'user'));
    if($connections->exists( )){ 
      return 'Yes';
      
    }
    else return 'No';
    
  } 
 
  
  
  
}