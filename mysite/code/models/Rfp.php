<?php
class Rfp extends DataObject{
  static private $db = array('Deleted'=>'Int' ,
                             'Title' =>'Varchar(50)',
                             'Bar_Admittance_State' =>'Varchar(200)',
                             'Number_Of_Attorneys'=>'Varchar(50)', 
                             'Job_Type'=>'Varchar(50)',
                             'Job_Category'=>'Varchar(100)',
                             'Description'=>'Text',
                             'Job_Timeframe'=>'Varchar(150)',
                             'Submission_Deadline'=>'Date',
                             'Special_Certifications'=>'Varchar(200)',
                             'Minority_Certifications'=>'Varchar(200)',
                             'CompanyID'=>'Int',
                             'MemberID'=>'Int',
                             'Language'=>'Varchar(100)',
                             'Years_Of_Practice'=>'Varchar(50)',
                             'Diversity'=>'Varchar(50)',
                             'Gender'=>'Varchar(50)',
                             'Practice_Areas'=>'Varchar(200)',
                             'Project_Start'=>'Text',
                             'Project_End'=>'Text',
                             'Ethnicity'=>'Varchar(200)');
  static private $has_one = array('Company'=>'Company','Member'=>'Member');
  static private $has_many = array('Messages'=>'Message');
  
  
  
  
  
  
}