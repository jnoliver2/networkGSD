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
  static private $has_one = array('Image'=>'File');
  public function company_address(){
    return Address::get()->filter(array('Related_ID'=>$this->ID,'Type'=>'company'))->first();
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
    return Client::get()->filter(array('Related_ID'=>$this->ID,'Type'=>'company','Sector'=>'goverment'));
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
  public function diversity(){
    Return Diversity::get()->filter(array('Related_ID'=>$this->ID  ,'Type'=>'company'));
    
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
  
   public function connected(){
    $id = Member::CurrentUserID();
    $connections = Connection::get()->filter(array('To_ID'=>$this->ID,'From_ID'=>$id,'To_Type'=>'company'));
    if($connections->exists( )){ 
      return 'Yes';
      
    }
    else return 'No';
    
   } 
  
  

}