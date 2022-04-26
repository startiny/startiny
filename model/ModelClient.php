<?php

require_once ("Model.php"); 

class ModelClient extends Model{

  private $id;
  private $ncin;
  private $nom;
  private $prenom;
  private $email;
  private $date_naissance;
  private $ville;
  private $service;
  protected static $table = 'Client';
  protected static $primary = 'ncin';

  public function __construct($ncin = NULL, $nom = NULL, $prenom = NULL,$email = NULL,$date_naissance = NULL,$ville= NULL,$service = NULL ) {
    if (!is_null($ncin) && !is_null($nom) && !is_null($prenom)&& !is_null($email)&& !is_null($date_naissance)&& !is_null($ville)&& !is_null($sevice)) {
      $this->ncin = $ncin;
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->email = $email;
      $this->date_naissance = $date_naissance;
      $this->ville = $ville;
      $this->service = $service;
      
     }
  } 
  public function getid() {
    return $this->id;  
}
 public function getNcin() {
       return $this->ncin;  
  }
 public function getNom() {
       return $this->nom;  
  }
  public function getPrenom() {
       return $this->prenom;  
  }
  public function getEmail() {
    return $this->email;  
}
public function getDate_naissance() {
  return $this->date_naissance;  
}
public function getVille() {
  return $this->ville;  
}
public function getService() {
  return $this->service;  
}

}
?>
