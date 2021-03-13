<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 12 : Tableaux et moyenne"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$Marc = [12,15,13,7,18];
$Mathieu = [11,14,10,4,20,8,2];

function moyenne($notes, $nom) {
    $result = 0;          
    foreach ($notes as $key => $note) {
        $result += $note;        
    }    
    $moyenne = $result/count($notes);
  
    echo "La moyenne des notes de <b>$nom</b>  est de <b>$moyenne </b><br/>";
    
}
moyenne($Marc, "Marc");
moyenne($Mathieu, "Mathieu");
moyenne($Pierre, "Mathieu");
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
