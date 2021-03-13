<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 15 : Tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$joueurs = array(
    $j1 = ['Nom' => 'Matthieu', 'Age' => 30, 'Sexe' => true],
    $j2 = ['Nom' => 'Marie','Age' => 28, 'Sexe' => false],
    $j3 = ['Nom' => 'Marc','Age' => 25, 'Sexe' => true],
    $j4 = ['Nom' => 'Mathilde','Age' => 32, 'Sexe' => false],
    
);
 function display($joueurs) {
     foreach ($joueurs as $joueur) {        
                $separateur = "-----------";       
        
        foreach ($joueur as $index => $value) {
            if($value === true) {
                $value = 'Homme';
            } else if ($value === false) {
                $value = 'Femme';
            }
            echo "$index : $value <br/>";
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
