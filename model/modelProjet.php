<?php

require_once ("Model.php"); 

class ModelProjet extends Model{

  private $Pid;
  private $Pnom;
  private $resp;
  private $start_date;
  private $end_date;
  protected static $table = 'Projet';
  protected static $primary = 'Pid';

  public function __construct($Pid = NULL, $Pnom = NULL, $resp = NULL,$start_date = NULL,$end_date = NULL) {
    if (!is_null($Pid) && !is_null($Pnom) && !is_null($start_date)&& !is_null($end_date)) {
      $this->Pid = $Pid;
      $this->Pnom = $Pnom;    
      $this->$resp = $resp;
      $this->start_date= $start_date;
      $this->end_date = $end_date;

      
     }
  } 
  public function getPid() {
    return $this->Pid;  
}
 public function getNomProjet() {
       return $this->Pnom;  
  }
  public function getresp() {
       return $this->resp;  
  }
public function getStart_date() {
  return $this->start_date;  
}
public function getEnd_date() {
  return $this->end_date;  
}

}
?>
