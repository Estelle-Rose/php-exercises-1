<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : La boucle for"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$random = rand(5,15);
$resultat = 0;
echo "<h2 class='h5'>Voici le cumul des $random premiers nombres (sens inverse) </h2>";
for($i=$random; $i>=1;$i--) {
    $resultat += $i;    
    
    echo"<p> Etape :" . ($random-$i +1) ." - résultat =". $resultat  ." <br/></p>";
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
