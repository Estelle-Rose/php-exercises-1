<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 11 : Les tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$hommes = ["Mathieu", "Pierre", "Marc", "Jean"];
$femmes = ["Morgane", "Mathilde", "Julie"];
$separateur = "---------------";
foreach ($hommes as $homme => $value) {
    echo "$homme : $value <br/>";
}
echo "<br/>$separateur<br/>";
foreach ($femmes as $femme => $value) {
    echo "$femme : $value <br/>";
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
