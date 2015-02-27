<?php
class Company extends DataObject{
  static private $db = array('Deleted'=>'Int',
                              'Name'=>'Varchar(100)',
                              'Type'=>'Varchar(50)',
                              'Attorneys'=>'Varchar(50)',
                              'Phone'=>'Varchar(50)',
                              'Fax'=>'Varchar(50)',
                              'Years_Of_Practice'=>'Varchar(50)',
                              'Diversity_Statement'=>'Text',
                              'Overview'=>'Text',
                              'Diversity_Link'=>'Text',
                              'Website'=>'Varchar(200)',
                              'Work_On_Site'=>'Varchar(50)',
                              'Martingale'=>'Text',
                              'Linkedin'=>'Varchar(200)',
                              'Government_Clearance'=>'Text',
                              'Logo'=>'Varchar(200)', 
                              'Package_Type'=>'Varchar(150)',

                             );
  static private $has_many = array('Members'=>'Member'); 
  static private $has_one = array('Avatar'=>'File');
  
  public function Score(){
    return Score::get()->filter(array('Type'=>'company','Related_ID'=>$this->ID,'Verified'=>1))->sum('Points');
    
  }
  
  public function Diversity(){
    
    return  Diversity::get()->filter(array('Related_ID'=>$this->ID,'Type'=>'company'));
  }
  public function Client_Private_List(){
    
    return Client::get()->exclude(array('Related_ID'=>$this->ID))->filter(array('Type'=>'company','Sector'=>'private'));
  
     
  }
   public function Client_Private_Selected(){
     return Client::get()->filter(array('Related_ID'=>$this->ID,'Type'=>'company','Sector'=>'private'));
  }
  
  public function Client_Govt_List(){
    
    return Client::get()->exclude(array('Related_ID'=>$this->ID))->filter(array('Type'=>'company','Sector'=>'government'));
  
     
  }
   public function Client_Govt_Selected(){
     return Client::get()->filter(array('Related_ID'=>$this->ID,'Type'=>'company','Sector'=>'government'));
  }

  public function Diversity_selects(){
    $divs =Diversity::get()->filter(array('Related_ID'=>$this->ID,'Type'=>'company'))->map('Diversity_ListID','Diversity_ListID')->toArray();
    return Diversity_List::get()->exclude('ID',array_values($divs));
  }
  public function company_address(){
    return Address::get()->filter(array('Related_ID'=>$this->ID,'Type'=>'company'))->first();
  }
    public function  BarState(){
    
    return BarState::get()->filter(array('Related_ID'=>$this->ID,'Type'=>'company'));
  }
  public function company_addresses(){
    return Address::get()->filter(array('Related_ID'=>$this->ID,'Type'=>'company'));
  }
  
  public function company_overview_preview(){
   
    
    return substr($this->Overview,0,200);
  }
   
  public function engagements (){
    return Engagement::get()->filter(array('Related_ID'=>$this->ID,'Type'=>'company'));
  }
  public function Association(){
    return Association::get()->filter(array('Related_ID'=>$this->ID,'Type'=>'company'));
  }
   public function clients_govt (){
    return Client::get()->filter(array('Related_ID'=>$this->ID,'Type'=>'company','Sector'=>'government'));
  }
  public function clients_private(){
    return Client::get()->filter(array('Related_ID'=>$this->ID,'Type'=>'company','Sector'=>'private'));
  }
  public function bar_states(){
    return BarState::get()->filter(array('Related_ID'=>$this->ID,'Type'=>'company'));
  }
   public function board_certs(){
    return Cert::get()->filter(array('Related_ID'=>$this->ID,'Type'=>'company'));
  }
  
   public function Award(){
    return Award::get()->filter(array('Related_ID'=>$this->ID,'Type'=>'company'));
  }
  
  public function practice_areas(){
    Return PracticeArea::get()->filter(array('Related_ID'=>$this->ID  ,'Type'=>'company'));
    
  }
   public function  PracticeArea(){
     return  PracticeArea::get()->filter(array('Related_ID'=>$this->ID,'Type'=>'company'));
 
   }
    public function  Cert(){
    
    return Cert::get()->filter(array('Related_ID'=>$this->ID,'Type'=>'company'));
  }
 
  public function press(){
    Return Press::get()->filter(array('Related_ID'=>$this->ID  ,'Type'=>'company'));
    
  }
    public function speaking(){
    Return Speaking::get()->filter(array('Related_ID'=>$this->ID  ,'Type'=>'company'));
    
  }
      public function languages(){
    Return Language::get()->filter(array('Related_ID'=>$this->ID  ,'Type'=>'company'));
    
  }
        public function Language(){
    Return Language::get()->filter(array('Related_ID'=>$this->ID  ,'Type'=>'company'));
    
  }
  public function Connection(){
    Return Connection::get()->filter(array('From_ID'=>$this->ID  ,'From_Type'=>'company' ,'Approved'=>1));
    
  }
  
   public function connected(){
    $id = Member::CurrentUserID();
    $connections = Connection::get()->filter(array('To_ID'=>$this->ID,'From_ID'=>$id,'To_Type'=>'company'));
    if($connections->exists( )){ 
      return 'Yes';
      
    }
    else return 'No';
    
   } 
  
  

}