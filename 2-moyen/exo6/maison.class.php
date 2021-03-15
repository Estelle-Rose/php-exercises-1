
<?php 

class Maison {
    private static $nextid = 1;
    private $id;
    private $date;
    private $chambre;
    private $surface;

    public static $maisons = [];
    
    public function __construct($date,$chambre,$surface) {
        $this->id = self::$nextid; // self:: permet d'accéder à n'importe qu'elle variable de la classe alors que $this accède à un élément de l'objet de la classe
        self::$nextid ++;
        $this->date = $date;
        $this->chambre = $chambre;
        $this->surface = $surface;
    }
    public function getId() {
        return $this->id;
    }
    public function getDate() {
        return $this->date;
    }
    public function getChambres() {
        return $this->chambre;
    }
    public function getSurface() {
        return $this->surface;
    }
    
    /*  public function __toString() {       
            $affichage = "  <tr>" ;  
    
                $affichage .=" <th scope='row'>".$this->id."</th>";                         
                $affichage .= "<td>".$this ->date."</td>";        
                $affichage .= "<td>".$this ->chambre."</td>";        
                $affichage .= "<td>".$this ->surface."</td>";       
            $affichage .="</tr>";
            return $affichage;
         
    } */
}

?>