<?php
require_once('AnimalDAO.class.php');
class Animal {
    private $id;
    private $nom;
    private $age;
    private $sexe;
    private $type;
    private $images;
    public static $animals = [];

    public function __construct($id,$nom,$age,$sexe,$type, array $images) {
        $this->id = $id;        
        $this->nom = $nom;        
        $this->age = $age;        
        $this->sexe = $sexe;        
        $this->type = $type;        
        $this->images = $images;        
                
       
    }
   
  
    
    //getters
    public function getId() {return $this->id;}
    public function getNom() {return $this->nom;}
    public function getAge() {return $this->age;}
    public function getSexe() {return $this->sexe;}
    public function getType() {return $this->type;}
    public function getImage() {return $this->images;}
    
    //setters
    public function setNom($nom) {return $this->nom = $nom;}
    public function setAge($nom) {return $this->age = $age;}
    public function setSexe($nom) {return $this->sexe =$sexe;}
    public function setType($nom) {return $this->type = $type;}
    public function setImage($nom) {return $this->image= $image;}

/*     public function getImagesfromDB($id) {
        $id = $this->getId();       
        
           AnimalDAO::getImages($id);
            return $this->image;
        
    } */
    
    
}
?>