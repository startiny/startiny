<?php

require_once ("Model.php"); 

class ModelService extends Model{

  private $sid;
  private $snom;
  private $emp;
   protected static $table = 'service';
  protected static $primary = 'Sid';

  public function __construct($Sid = NULL, $Snom = NULL, $emp = NULL) {
    if (!is_null($Sid) && !is_null($Snom) && !is_null($emp)) {
      $this->sid = $Sid;
      $this->snom = $Snom;    
      $this->emp = $emp;
      
     }
  } 
  public function getid() {
    return $this->Sid;  
}
 public function getService() {
       return $this->Snom;  
  }
  public function getEmp() {
       return $this->emp;  
  }

}