<?php

class Player {

    private $nom;
    private $force;
    private $PV;
    private $idArme;

    public function __construct() {
       
        $this->force = 5;
        $this->PV = 100;
        
    }
    public function getNom() { return $this->nom;}
    public function getForce() { return $this->force;}
    public function getPV() { return $this->PV;}
    public function getIdArme() { return $this->idArme;}
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setIdArme($arme){
        $this->idArme = $arme;
    }
    public function setForce($force){
        $this->force = $force;
    }
    public function setPV($PV){
        $this->PV = $PV;
    }
    public function __toString() {
        $arme = Arme::getArme($this->idArme);
        $display =   "<p>Nom : ". $this->nom ." </p>";
        $display .=   "<p>Force : ". $this->force ." </p>";
        $display .=   "<p>PV : ". $this->PV ." </p>";
        $display .=   "<p>Arme : </p>";
         $display .=   "<p>ID : ". $this->idArme ." </p>"; 
         $display .=   $arme; 
        return $display;
                
    }

    
}



?>