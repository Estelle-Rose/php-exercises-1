<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Fichier de fonctions et tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
require_once('../../2-moyen/exo2/functions.php');
$tableaux = array(
    "tableau1" => [2,6,10,20,9,14],
    "tableau2" => [4,8,2,26,18,16]
)
?>

<div class="container">
   <div class="row">
   <?php foreach ($tableaux as $tableau) : ?>
    <div class="col-6">
        <h2>Tableau 1 : </h2>
        <p><?= affichertableau($tableau) ?></p>
        <p> La moyenne est de : <?= calculermoyenne($tableau) ?></p>
        <p> Le tableau <?= (iseven($tableau)) ? 'contient que des valeurs paires' : 'ne contient pas que des valeurs paires' ?></p>
    </div>
    <?php endforeach; ?>
    
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
