<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les tests"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$nombre = rand(1, 20);
function test() {
    global $nombre;
    if($nombre <= 5) {
        echo" Il est comprise entre 1 est 5";
    } else if ($nombre <=10) {
        echo" Il est comprise entre 6 est 10";
    } else if ($nombre <=15) {
        echo" Il est comprise entre 11 est 15";
    } else {
        echo " Il est comprise entre 16 est 20";
    }

}
?>
<h2>Le nombre est <?=$nombre?></h2>
<p><?=test($nombre)?></p>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
