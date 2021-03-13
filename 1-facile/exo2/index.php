<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Variables et ternaires"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
 $nom = "Marie";
 $age = 30;
 $homme = false;
 $nom2 = "Pierre";
 $age2 = 32;
 $homme2 = true;
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
          <?php
          echo "<p>" . $nom . " a " . $age . " ans et c'est ";
          echo (!$homme )  ? 'une femme' : 'un homme' . "</p>";
         
          ?>
          <p><?=$nom2?> a <?=$age2?> ans et c'est <?= $homme2 ? 'un homme' : 'une femme'?></p>
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
