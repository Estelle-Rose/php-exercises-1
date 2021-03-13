<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 10 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$monMot = "Azerty";
$resultat = deleteVowels($monMot);
echo"$monMot sans voyelles est $resultat";
function deleteVowels($mot) {
    $voyelle = ["a","e","i","o","u","y"];
    return $result = str_replace($voyelle,"",strtolower($mot));
}
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
