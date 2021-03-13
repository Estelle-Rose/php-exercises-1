<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 17 : Tableaux complexes"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$joueurs = array(
    $j1 = ['Nom' => 'Matthieu', 'Age' => 30, 'Sexe' => true, 'Notes' => array(11,14,10,4,20,8,2)],
    $j2 = ['Nom' => 'Marie','Age' => 28, 'Sexe' => false, 'Notes' => array(5,13,9,3)],
    $j3 = ['Nom' => 'Marc','Age' => 25, 'Sexe' => true,'Notes' => array(12,15,13,7,18)],
    $j4 = ['Nom' => 'Mathilde','Age' => 32, 'Sexe' => false, 'Notes' => array(6,11,15,2)],
    
);
function moyenne($notes) {
     foreach ($notes as $key => $note) {        
         $result = 0;    
         $key = 'Note'; 
         $result += $note;        
         $moyenne = $result/count($notes);
         echo"$key : $note <br/>";       
        }
        echo "La moyenne  est de <br>$moyenne </br><br/>";
    
} 
 function display($joueurs) {
     foreach ($joueurs as $joueur) {        
                $separateur = "-----------";       
        
        foreach ($joueur as $index => $value) {
            if(!is_array($value)) {
                if($value === true) {
                    $value = 'Homme';
                } else if ($value === false) {
                    $value = 'Femme';
                }
                echo "$index : $value <br/>";

            }
           else{
                moyenne($value);
            }
        }
        echo "$separateur <br/>";
     }
    
} 
display($joueurs);
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
