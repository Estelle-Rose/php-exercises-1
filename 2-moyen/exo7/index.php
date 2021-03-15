<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Manipuler 2 classes"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
 require_once('../exo7/arme.class.php'); 
 require_once('../exo7/player.class.php'); 

$arme1 = new Arme('Hache',10);
$arme2 = new Arme('Epée',8);

$player1 = new Player();
$player1->setNom('Milo');
$player1->setIdArme($arme1->getId());
$player2 = new Player();
$player2->setNom('Tya');
$player2->setIdArme($arme2->getId());
$players =[$player1,$player2];

?>

<div class="container">
   <div class="row">
    <div class="col-10">
        <div class="d-flex flex-column justify-content-between">
         
            <?php foreach ($players as $key => $player) : ?>
                  
             <?php echo $player; ?>
              

            <?php endforeach; ?>


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
