
<?php 

class Book {
    private $nom;
    private $edition;
    private $auteur;
    private $date;

    public static $books = [];
    public static $editions = [];
    public static $dates = [];

    public function __construct($nom,$edition,$auteur,$date) {
        $this->nom = $nom;
        $this->edition = $edition;
        $this->auteur = $auteur;
        $this->date = $date;
    }
    public function addBook($book) {
       $this->books[] = $book;
       return $this->books;
    }
    public function getEdition(){
        return $this->edition;
    }
    public function getDate(){
        return $this->date;
    }
    public function getEditions(){
        return $this->edition;
    }
    public function getDates(){
       
          return $this->dates[]= $book->getDate();
        
       
    }
     public function __toString() {       
             $affichage = "<div class= 'card m-4 p-2' >" ;
                $affichage .="<div class= 'card-text' >";   
                   $affichage .= "Nom : ".$this->nom."<br/>";       
                    $affichage .= "Edition : ".$this ->edition."<br/>";        
                    $affichage .= "Auteur : ".$this ->auteur. " <br/>";
                    $affichage .= "Date : ".$this ->date. " <br/>";
                 $affichage .="</div>";
                
            $affichage .="</div>";
            return $affichage;
         
    }
}

?>