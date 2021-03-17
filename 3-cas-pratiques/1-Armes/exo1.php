<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 1 : Les variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$arme1 = 'épée';
$arme2 = 'arc';
$arme3 = 'hache';
$arme4 = 'fléau';
$armes = [$arme1, $arme2, $arme3, $arme4];
?>

<div class="container">
   <div class="row">
    <div class="col-10">
        <div class="d-flex flex-column justify-content-between">
         <h2>Voici toutes les armes : </h2>
           
                  <p>Arme 1 : <?= $arme1 ?></p>
                  <p>Arme 2 : <?= $arme2 ?></p>
                  <p>Arme 3 : <?= $arme3 ?></p>
                  <p>Arme 4 : <?= $arme4 ?></p>
            
            <div class="dropdown-divider"></div>
             <div class="form-group">
                <label for="armes">Armes</label>
                <select class="form-control" id="exampleFormControlSelect1" name="armes">
                <?php foreach ($armes as $key => $arme) : ?>
                    <option value="<?=$arme?>"><?=$arme?></option>
                <?php endforeach ;?>
                </select>
            </div>



        </div>
     
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
