<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 9 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$a = 5;
$b = 122;
function isEven (int $chiffre) {
if($chiffre % 2 === 0) {
    echo "Le chiffre $chiffre est pair <br/>";
} else {
    echo "Le chiffre $chiffre est impair <br/>";
}
}
isEven($a);
isEven($b);
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
