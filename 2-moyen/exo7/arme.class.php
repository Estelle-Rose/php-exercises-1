<?php

class Arme {
    
    private static $nextid = 1;
    private static $armes = [];
    private $id;
    private $nom;
    private $degat;


    public function __construct($nom,$degat) {
        $this->id = self::$nextid;
        self::$nextid ++;
        $this->nom = $nom;
        $this->degat = $degat;
        self::$armes[] = $this;
    }
    public function getId() { return $this->id;}
    public function getNom() { return $this->nom;}
    public function getDegat() { return $this->degat;}
    public function setNom($nom){ $this->nom = $nom;}
    public function setDegat($degat){ $this->degat = $degat;}

    public function __toString() {

    $display = "<p>ID : ". $this->id . "</p>";
    $display = "<p>Nom : ". $this->nom . "</p>";
    $display .= "<p>Degat : ". $this->degat . "</p>";
    return $display;
    }
    public static function getArme($id) {
        foreach(self::$armes as $arme) {
            if($id === $arme->id) {
                return $arme;
            }
        }
    }
}



?>