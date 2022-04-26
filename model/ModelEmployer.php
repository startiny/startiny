<?php

require_once ("Model.php"); 

class ModelEmployer extends Model{

  private $EMPid;
  private $EMPncin;
  private $EMPnom;
  private $EMPprenom;
  private $EMPdate_naissance;
  private $job;
  private $hire_date;
  protected static $table = 'Employer';
  protected static $primary = 'EMPncin';

  public function __construct($EMPncin = NULL, $EMPnom = NULL, $EMPprenom = NULL,$EMPdate_naissance = NULL,$job= NULL,$hire_date = NULL ) {
    if (!is_null($EMPncin) && !is_null($EMPnom) && !is_null($EMPprenom)&& !is_null($date_naissance)&& !is_null($ville)&& !is_null($sevice)) {
      $this->EMPncin = $EMPncin;
      $this->EMPnom = $EMPnom;
      $this->EMPprenom = $EMPprenom;
      $this->EMPdate_naissance = $EMPdate_naissance;
      $this->jobe = $job;
      $this->hire_date = $hire_date;
      
     }
  } 
  public function getid() {
    return $this->EMPid;  
}
 public function getNcin() {
       return $this->EMPncin;  
  }
 public function getNom() {
       return $this->EMPnom;  
  }
  public function getPrenom() {
       return $this->EMPprenom;  
  }
public function getdate_naissance() {
  return $this->EMPdate_naissance;  
}
public function getJob() {
  return $this->job;  
}
public function getHire_date() {
  return $this->hire_date;  
}

}
?>
