<?php
class Produit {
    private $nom;
    private $image;
    private $tag;
    private $description;
    public static $produits = [];

    public function __construct($nom,$image, $tag,$description) {
        $this->nom = $nom;        
        $this->image = $image;        
        $this->tag = $tag;      
        $this->description = $description;
    }
   
  
    
    //getters
    public function getNom() {return $this->nom;}
    public function getImage() {return $this->image;}
    public function getDescription() {return $this->description;}
    //setters
    public function setNom($nom) {return $this->nom = $nom;}
    public function setLevel($level) {return $this->level = $level;}
    public function setDescription($description) {return $this->description = $description;}
    
     public function __tostring() {
        $display =  "<div class='card m-2 p-3' >";
          
                    $display .="<img src='./sources/$this->image' alt=' $this->nom '>";
                    $display .=" <div class='card-body'>";
                        $display .='<h5 class="card-title">'. $this->nom .'</h5>';
                        $display .='<p class="card-text">'.$this->description.'</p>';
                        $display .='<button type="button" class="btn btn-primary">'.$this->tag.'</button>';
                    $display .="</div>";
               
          
        $display .="</div>";
        return $display;
       
    }
}
?>