<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 18 : Formulaires et methode GET"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
$pseudo = '';
$age = '';
$result = '';
    if(isset($_GET['pseudo']) && isset($_GET['age'])) {
        $pseudo = $_GET['pseudo'];
        $age = $_GET['age'];
        $result = $pseudo . ' a ' . $age . ' ans.';
    }
   
?>
<div class="container">
    <form action="#" method="GET">
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo" class="form-control">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" name="age" id="age" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
    <p class="lead mt-5"><?= (isset($_GET['pseudo']) && !empty($_GET['pseudo']) && isset($_GET['age']) && !empty($_GET['age'])) ? $result : 'Merci de renseigner votre pseudo et votre age'  ?></p>
</div>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
