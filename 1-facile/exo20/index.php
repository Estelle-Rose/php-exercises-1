<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 20 : Formulaires et tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$notes = [];
$result = 0;
$moyenne = 0;
$alert = '';
if(isset($_POST['note1']) && !empty($_POST['note1']) && isset($_POST['note2']) && !empty($_POST['note2']) && isset($_POST['note3']) && !empty($_POST['note3'])) {
$notes[] = (int)$_POST['note1'];
$notes[] = (int)$_POST['note2'];
$notes[] = (int)$_POST['note3'];
foreach ($notes as $note) {
   $result += $note;
}
$moyenne = $result / count($notes);
} else {
 $alert = 'Merci de renseigner les 3 notes';
}
?>

<div class="container">
    <form action="#" method="POST">
        <div class="form-group">
            <label for="note1">Note 1 : </label>
            <input type="number" name="note1" id="note1" class="form-control">
        </div>       
        <div class="form-group">
            <label for="note2">Note 2 : </label>
            <input type="number" name="note2" id="note2" class="form-control">
        </div>       
        <div class="form-group">
            <label for="note3">Note 3 : </label>
            <input type="number" name="note3" id="note3" class="form-control">
        </div>       
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>    
    <p class="lead mt-5">
     <?= ($moyenne) ? "La moyenne des 3 notes est de  :  $moyenne " : $alert ?>
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
