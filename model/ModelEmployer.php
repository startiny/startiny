<?php

require_once ("Model.php"); 

class ModelEmployer extends Model{

 
  private $ncin;
  private $EMPnom;
  private $EMPprenom;
  private $EMPdate_naissance;
  private $job;
  private $hire_date;
  private $admin;
  protected static $table = 'Employer';
  protected static $primary = 'ncin';

  public function __construct($EMPncin = NULL, $EMPnom = NULL, $EMPprenom = NULL,$EMPdate_naissance = NULL,$job= NULL,$hire_date = NULL, $admin = NULL ) {
    if (!is_null($EMPncin) && !is_null($EMPnom) && !is_null($EMPprenom)&& !is_null($date_naissance)&& !is_null($ville)&& !is_null($sevice)) {
      $this->ncin = $EMPncin;
      $this->EMPnom = $EMPnom;
      $this->EMPprenom = $EMPprenom;
      $this->EMPdate_naissance = $EMPdate_naissance;
      $this->jobe = $job;
      $this->hire_date = $hire_date;
      $this->admin = $admin;
     }
  } 

 public function getNcin() {
       return $this->ncin;  
  }
 public function getNom() {
       return $this->EMPnom;  
  }
  public function getPrenom() {
       return $this->EMPprenom;  
  }
public function getDate_naissance() {
  return $this->EMPdate_naissance;  
}
public function getJob() {
  return $this->job;  
}
public function getHire_date() {
  return $this->hire_date;  
}
public function getAdmin() {
  if($this->admin==1){
    return "Admin_Power";
  }else{return "User";}
}

}
?>
