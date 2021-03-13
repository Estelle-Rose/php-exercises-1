<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les tests"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$nombre1 = rand(1, 100);
$nombre2 = rand(1, 100);
$valeur = abs($nombre1-$nombre2);

echo "<h5>Nombre 1 : $nombre1 </h5>";   
echo "<h5>Nombre 2 : $nombre2 </h5>";   
if($valeur >= 25 && $valeur <= 75 ) {
echo" La valeur de absolue de $nombre1 - $nombre2  est comprise entre 25 est 75 <br/>";
} else  {
echo" La valeur de absolue de $nombre1 - $nombre2 n'est pas comprise entre 25 et 75 <br/>";
} 
echo  $valeur;

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
