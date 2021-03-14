<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 19 : Formulaires et methode POST"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->


<div class="container">
    <form action="#" method="POST">
        <div class="form-group">
            <label for="chiffre">Chiffre : </label>
            <input type="number" name="chiffre" id="chiffre" class="form-control">
        </div>       
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>    
    <p class="lead mt-5"><?php
        if (!isset($_POST['chiffre']) && empty($_POST['chiffre'])){
        echo "Merci de renseigner un chiffre";
    } else {
        if((int)$_POST['chiffre'] % 2 === 0) {
      echo  'Le chiffre saisi est pair' ;
    } else {
        echo 'Le chiffre saisi est impair';
    }
    }?>
    </p>
</div>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
