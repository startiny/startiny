<?php

require_once ("Model.php"); 

class ModelLogin extends Model{

  private $Lid;
  private $Username;
  private $Pwd;
  private $Date;
  protected static $table = 'Login';
  protected static $primary = 'Lid';

  public function __construct($Lid = NULL, $Username = NULL, $Pwd = NULL,$Date = NULL) {
    if (!is_null($Lid) && !is_null($Username) && !is_null($Pwd) && !is_null($Date)) {
      $this->Lid = $Lid;
      $this->Usename = $Usename;    
      $this->$Pwd = $Pwd;
      $this->$Date = $Date;


      
     }
  } 
  public function getLid() {
    return $this->Lid;  
}
 public function getUsername() {
       return $this->Username;  
  }
  public function getPassword() {
       return $this->Pwd;  
  }
  public function getDate() {
    return $this->Date;  
}

}