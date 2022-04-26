<?php

require_once ("Model.php"); 

class ModelService extends Model{

  private $Sid;
  private $Snom;
  private $emp;
   protected static $table = 'service';
  protected static $primary = 'Sid';

  public function __construct($Sid = NULL, $Snom = NULL, $emp = NULL) {
    if (!is_null($Sid) && !is_null($Snom) && !is_null($emp)) {
      $this->Sid = $Sid;
      $this->Snom = $Snom;    
      $this->$emp = $emp;
      
     }
  } 
  public function getSid() {
    return $this->Sid;  
}
 public function getNomService() {
       return $this->Snom;  
  }
  public function getEmp() {
       return $this->emp;  
  }

}