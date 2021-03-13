<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 14 : Tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$tableaudenotes = array(
    'Marc' => [12,15,13,7,18],
    'Mathieu' => [11,14,10,4,20,8,2],
    'Pierre' => [5,13,9,3],
    'Paul' => [6,11,15,2]
);


 function moyenne($tableau) {
     foreach ($tableau as $key => $notes) {        
         $result = 0;          
         foreach ($notes as $index => $note) {
             $result += $note;        
         }    
         $moyenne = $result/count($notes);
       
         echo "La moyenne des notes de <b>$key</b>  est de <b>$moyenne </b><br/>";
     }
    
} 
moyenne($tableaudenotes);
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
