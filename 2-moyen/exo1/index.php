<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Tableau à deux dimensions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
/* $lignes = [];
for($j=1; $j <=10; $j++) {
  
    $colonnes = [];
    for($i=1;$i <= 10; $i++) {
        $colonnes[] = $i * $j;     
    }
    $lignes[] = $colonnes;
} */

?>

<div class="container">
   <table class="table">
   <?php for($j=1; $j <=10; $j++): ?>
        <tr <?= ($j===1) ? 'class="font-weight-bold"': ''?>>
            <?php for($i=1;$i <=10; $i++): ?>
            <td <?= ($i===1) ? 'class="font-weight-bold"': ''?>>
            <?= $i * $j?></td>
            <?php endfor; ?>
        </tr>

   <?php endfor; ?>
   </table>
</div>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
