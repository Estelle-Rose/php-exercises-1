<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 4 : La POO"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
class Arme {
    public $nom;
    public $image;
    public $description;

    public function __construct($nom,$image,$description) {
        $this->nom = $nom;
        $this->image = $image;
        $this->description = $description;
    }
}
$arme1 = new Arme('épée',
 './sources/epee/epee1.png',
 'Une arme tranchante');
$arme2 = new Arme('arc',
'./sources/arc/arc1.png',
'Une arme à distance');
$arme3 = new Arme('hache',
'./sources/hache/hache1.png',
'Une arme tranchante ou un outil qui permet aussi de couper du bois'
);
$arme4 = new Arme('fléau',
 './sources/fleau/fleau1.png',
'Une arme contondante du moyen âge'
);

$armes = [$arme1, $arme2, $arme3, $arme4];
?>

<div class="container">
   <div class="row">
    <div class="col-10">
        <div class="d-flex flex-column justify-content-between">
         <h2>Voici toutes les armes : </h2>
         <?php foreach ($armes as $arme): ?>
             <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="<?= $arme->image?>" alt="<?= $arme->nom ?>">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $arme->nom ?></h5>
                        <p class="card-text"><?= $arme->description ?></p>
                    </div>
                    </div>
                </div>
            </div>
         <?php endforeach;?>
          
           <div class="card m-2 p-3">
           
            <div class="dropdown-divider"></div>
             <div class="form-group">
                <label for="armes">Armes</label>
                <select class="form-control" id="exampleFormControlSelect1" name="armes">
                <?php foreach ($armes as $key => $arme) : ?>
                    <option value="<?=$arme->nom?>"><?=$arme->nom?></option>
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
