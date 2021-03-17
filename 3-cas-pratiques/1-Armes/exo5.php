<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 5 : Amélioration de la classe"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
class Arme {
    private $nom;
    private $image;
    private $description;
  

    public function __construct($nom,$description) {
        $this->nom = $nom;        
        $this->description = $description;
    }
    public function enleverAccent(string $mot) {
        $aremplacer = 'é';
        return $nouveauMot =  str_replace($aremplacer, 'e', $mot);
    }
    //getters
    public function getNom() {return $this->nom;}
    public function getImage() {return $this->image;}
    public function getDescription() {return $this->description;}
    //setters
    public function setNom($nom) {return $this->nom = $nom;}
    public function setImage($image) {return $this->image = $image;}
    public function setDescription($description) {return $this->description = $description;}
    
    public function __tostring() {
        $display =  "<div class='card m-2 p-3'>";
            $display .=  "<div class='row no-gutters'>";
                $display .="<div class='col-md-4'>";
                    $display .="<img src='./sources/$this->image' alt=' $this->nom '>";
                $display .="</div>";
                $display .="<div class='col-md-8'>";
                    $display .=" <div class='card-body'>";
                        $display .="<h5 class='card-title'> $this->nom </h5>";
                        $display .="<p class='card-text'>$this->description</p>";
                    $display .="</div>";
                $display .="</div>";
            $display .="</div>";
        $display .="</div>";
        return $display;
       
    }
}

$chiffre2 = rand(1,2);

$chiffre = rand(1,5);

$arme1 = new Arme('épée',
'Une arme tranchante');
$arme1->setImage("epee/epee$chiffre");

$arme2 = new Arme('arc',
'Une arme à distance');
$arme2->setImage("arc/arc$chiffre2");
$chiffre = rand(1,5);
$arme3 = new Arme('hache',
'Une arme tranchante ou un outil qui permet aussi de couper du bois'
);
$arme3->setImage("hache/hache$chiffre");
$chiffre = rand(1,5);
$arme4 = new Arme('fléau',
'Une arme contondante du moyen âge'
);
$arme4->setImage("fleau/fleau$chiffre");

$armes = [$arme1, $arme2, $arme3, $arme4];
?>

<div class="container">
   <div class="row">
    <div class="col-10">
        <div class="d-flex flex-column justify-content-between">
         <h2>Voici toutes les armes : </h2>
         <?php foreach ($armes as $arme): ?>
           <?php echo $arme;?>
         <?php endforeach;?>
        </div>
     
    </div>
    
   </div>
</div>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
