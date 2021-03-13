<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : La boucle for"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$random = rand(1,10);
echo "<h2 class='h5'>Voici la table de multiplication de $random : </h2>";
for($i=1;$i<=10; $i++) {
    $resultat = $random*$i;
    echo "$random * $i = $resultat <br/>";
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
