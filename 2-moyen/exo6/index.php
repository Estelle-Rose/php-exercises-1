<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : Attribut statique"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
 require_once('../exo6/maison.class.php'); 

$maison1 = new Maison(2018,3,98);
$maison2 = new Maison(2019,4,120);
$maison3 = new Maison(2017,4,130);
$maison4 = new Maison(2021,7,180);

$maisons = [$maison1,$maison2,$maison3, $maison4];
foreach ($maisons as $maison) {
    Maison::$maisons[]= $maison;
}



?>

<div class="container">
   <div class="row">
    <div class="col-10">
        <div class="d-flex justify-content-between">
           <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Nombre de chambres</th>
      <th scope="col">Surface</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach(Maison::$maisons as $maison): ?>
      <tr>
        <th scope='row'><?= $maison->getId() ?></th>
        <td><?= $maison->getDate() ?></td>
        <td><?= $maison->getChambres() ?></td>
        <td><?= $maison->getSurface() ?></td>
      </tr>
        
        <?php endforeach; ?>
   
  </tbody>
</table>

        </div>
        <div>
     

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
