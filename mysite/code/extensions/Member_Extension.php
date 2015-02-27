<?php

class Member_Extension extends DataExtension{
  static private $db = array( 
                              'MiddleName'=>'Varchar(25)',
                              'Prefix'=>	'Varchar(10)',
                              'Suffix'=>'Varchar(10)',
                              'Titles'=>	'Varchar(25)',
                              'Gender'=>	'Varchar(15)',
                              'Partnership'=>	'Varchar(50)',
                              'Deleted'=>	'Int',
                              'User_Level'=>'Int',
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
                              'Work_On_Site'=>'Varchar(10)',
                              'Ethnicity'=>'Varchar(50)',
                              'Linkedin'=>'Varchar(200)',
                              'Martingale'=>'Varchar(200)',
                              'Package_Type'=>'Varchar(150)',

    );
  //private $id;
/*  public function onAfterWrite() {
    parent::onAfterWrite();
    $this->owner->Surname = "Him";
    $this->owner ->write();
        
           parent::onAfterWrite();
  }*/
    public function Score(){
    return Score::get()->filter(array('Type'=>'user','Related_ID'=>$this->owner->ID,'Verified'=>1))->sum('Points');
    
  } 
  private static $has_one = array('Company'=>'Company','Avatar'=>'File','Address'=>'Address');
  private static $has_many = array('Notifications'=>'Notification');
  public function  PracticeArea(){
     return  PracticeArea::get()->filter(array('Related_ID'=>$this->owner->ID,'Type'=>'user'));
 
   }
  public function company_address(){
    return Address::get()->filter(array('Related_ID'=>$this->owner->ID,'Type'=>'user'))->first();
  }
   public function company_addresses(){
    return Address::get()->filter(array('Related_ID'=>$this->owner->ID,'Type'=>'user'));
  }
public function press(){
    Return Press::get()->filter(array('Related_ID'=>$this->owner->ID  ,'Type'=>'user'));
    
  }
 public function languages(){
    Return Language::get()->filter(array('Related_ID'=>$this->owner->ID  ,'Type'=>'user'));
    
  }
  
   public function Connection(){
    Return Connection::get()->filter(array('From_ID'=>$this->owner->ID  ,'From_Type'=>'user','Approved'=>1));
    
  }
        public function Language(){
    Return Language::get()->filter(array('Related_ID'=>$this->owner->ID  ,'Type'=>'user'));
    
  }
  public function Award(){
    return Award::get()->filter(array('Related_ID'=>$this->owner->ID,'Type'=>'user'));
  }
 public function speaking(){
    Return Speaking::get()->filter(array('Related_ID'=>$this->owner->ID  ,'Type'=>'user'));
    
  }
  
    public function Association(){
    return Association::get()->filter(array('Related_ID'=>$this->owner->ID,'Type'=>'user'));
  }
  
     public function board_certs(){
    return Cert::get()->filter(array('Related_ID'=>$this->owner->ID,'Type'=>'company'));
  }
  
  public function  Cert(){
    
    return Cert::get()->filter(array('Related_ID'=>$this->owner->ID,'Type'=>'company'));
  }
  public function Diversity(){
    
    return  Diversity::get()->filter(array('Related_ID'=>$this->owner->ID,'Type'=>'user'));
  }
   public function Diversity_selects(){
    $divs =Diversity::get()->filter(array('Related_ID'=>$this->owner->ID,'Type'=>'user'))->map('Diversity_ListID','Diversity_ListID')->toArray();
    return Diversity_List::get()->exclude('ID',array_values($divs));
  }
   public function Client_Private_List(){
    
    return Client::get()->exclude(array('Related_ID'=>$this->owner->ID))->filter(array('Type'=>'user','Sector'=>'private'));
  
     
  }
   public function Client_Private_Selected(){
     return Client::get()->filter(array('Related_ID'=>$this->owner->ID,'Type'=>'user','Sector'=>'private'));
  }
  
  public function Client_Govt_List(){
    
    return Client::get()->exclude(array('Related_ID'=>$this->owner->ID))->filter(array('Type'=>'user','Sector'=>'government'));
  
     
  }
   public function Client_Govt_Selected(){
     return Client::get()->filter(array('Related_ID'=>$this->owner->ID,'Type'=>'user','Sector'=>'government'));
  }
     public function clients_govt (){
    return Client::get()->filter(array('Related_ID'=>$this->owner->ID,'Type'=>'user','Sector'=>'government'));
  }
  public function clients_private(){
    return Client::get()->filter(array('Related_ID'=>$this->owner->ID,'Type'=>'user','Sector'=>'private'));
  }
  
  
  public function allMessages(){
    
    return new Message();
  }
  public function Speakings(){
    return Speaking::get()->filter(array('Related_ID'=>$this->owner->ID,'Type'=>'user'));
  } 
public function Engagements(){
    return Engagement::get()->filter(array('Related_ID'=>$this->owner->ID,'Type'=>'user'));
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
  public function BarState(){
    return BarState::get()->filter(array('Related_ID'=>$this->owner->ID,'Type'=>'user'));
  }

  
  /*  public function connected(){
    $id = Member::CurrentUserID();
    $response = array();
    $connections = Connection::get()->filter(array('To_ID'=>$this->owner->ID,'From_ID'=>$id,'To_Type'=>'user'));
    if($connections->exists()){
      $con = $connections->first();
      if($con->Approved == 1 && $con->Reviewed == 0 ){
        $response['Approved'] =1 ;
        
      }
      if($con->Approved == 1 && $con->Reviewed == 1 ){
        $response['Revieved'] =1 ;
        
      }
       if($con->Approved == 0 && $con->Reviewed == 0 ){
         $response['Waiting'] =1 ;
        
      }
      
     
      
    }
    else 
    $response['No'] =1 ;
    return $response;
  } 
 
  */
  
  
}