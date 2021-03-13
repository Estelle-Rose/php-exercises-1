<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
 $a = 3;
 $b = 5;
 $c = 7;
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-uppercase h5">*********** Avant permutation ***********</h2>
            <ul class="list-unstyled">
                <li>A : <?=$a?></li>
                <li>B : <?=$b?></li>
                <li>C : <?=$c?></li>
            </ul>
        </div>
        <div class="col-12">
            <h2 class="text-uppercase h5">*********** Après permutation ***********</h2>
            <ul class="list-unstyled">
            <?php 
            $tmp = $a;
            $a = $b;
            $b = $c;
            $c = $tmp;
            ?>
                <li>A : <?=$a?></li>
                <li>B : <?=$b?></li>
                <li>C : <?=$c?></li>
            </ul>
        </div>
    </div>
</div>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
