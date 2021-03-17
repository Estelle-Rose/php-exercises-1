<?php
session_start();
if(!isset($_SESSION['épée'])) $_SESSION['épée']= 1;
if(!isset($_SESSION['arc'])) $_SESSION['arc']= 1;
if(!isset($_SESSION['hache'])) $_SESSION['hache']= 1;
if(!isset($_SESSION['fléau'])) $_SESSION['fléau']= 1;

ob_start(); //NE PAS MODIFIER 
$titre = "Partie 8 : Finalisation avec les sessions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
class Arme {
    private $nom;
    private $level;
    private $maxLevel;
    private $description;
  

    public function __construct($nom,$maxLevel,$description) {
        $this->nom = $nom;        
        $this->level = 1;        
        $this->maxLevel = $maxLevel;        
        $this->description = $description;
    }
   
    public function defineImage() {
        $aremplacer = 'é';
        $nom = str_replace($aremplacer, 'e', $this->nom);
       
        $level = $this->level;
        
        return $nom."/".$nom.$level;
    }
    
    //getters
    public function getNom() {return $this->nom;}
    public function getLevel() {return $this->level;}
    public function getDescription() {return $this->description;}
    //setters
    public function setNom($nom) {return $this->nom = $nom;}
    public function setLevel($level) {return $this->level = $level;}
    public function setDescription($description) {return $this->description = $description;}
    
    public function __tostring() {
        $display =  "<div class='card m-2 p-3'>";
            $display .=  "<div class='row no-gutters'>";
                $display .="<div class='col-md-4'>";
                    $display .='<img src="./sources/'.$this->defineImage().'.png" alt='. $this->nom.'>';
                $display .="</div>";
                $display .="<div class='col-md-2'>";
                    $display .= '<form action="" method="GET">';
                    $display .= '<div class="form-group">';
                    $display .= '<label for="level">Level</label>';
                    $display .= '<select onChange="submit()" class="form-control" id="level" name="level'.$this->nom.'">';
                    for($i=1; $i<=$this->maxLevel;$i++) {
                        $display .= '<option value='.$i.' ';
                        $display .= ($i===(int)$_SESSION[$this->nom]) ? "selected ": "";
                        $display .= ' >'.$i.'</option>';
                    }
                    
                    $display .= '</select>';
                  
                        $display .= '</div>';
                      $display .="</form>";
                $display .="</div>";
                $display .="<div class='col-md-5'>";
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



$arme1 = new Arme( 'épée',5,
'Une arme tranchante');
$arme2 = new Arme('arc',2,
'Une arme à distance');
$arme3 = new Arme('hache',5,
'Une arme tranchante ou un outil qui permet aussi de couper du bois'
);
$arme4 = new Arme('fléau',5,
'Une arme contondante du moyen âge'
);
$armes = [$arme1, $arme2, $arme3, $arme4];
foreach ($armes as $arme) {
    $nomarme = $arme->getNom();    
    if(isset($_GET["level$nomarme"])) {
        $_SESSION["$nomarme"] = $_GET["level$nomarme"] ;    
    }
    $arme->setLevel($_SESSION["$nomarme"]);
}
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
