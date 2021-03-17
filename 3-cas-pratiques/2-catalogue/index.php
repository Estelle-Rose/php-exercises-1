<?php


ob_start(); //NE PAS MODIFIER 
$titre = "Cas pratique 2 : Catalogue de produits"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
require_once('./classes/mon-pdo.class.php');
require_once('./classes/produits.class.php');

function getProductsFromDb() {
    $pdo = monPdo::getPdo();
    $stmt = $pdo->prepare('SELECT produits.nom as nom, produits.image as image, produits.description as description, tags.nomTag as tag FROM `produits` INNER JOIN `tags` ON tags.id = produits.fk_tag_id');
    $stmt->execute();
    $produits = $stmt->fetchAll();
    
    foreach ($produits as $produit) {
        Produit::$produits[] = new Produit($produit['nom'],$produit['image'],$produit['tag'],$produit['description']);
    }
}
 getProductsFromDb();

?>

<div class="container">
   <div class="row">
    <div class="col-12">
        <div class="">
         <h2>Voici toutes les produits : </h2>
         <div class="row">
            <?php foreach (Produit::$produits as $produit): ?>
            <div class="col-md-6">
            <?php echo $produit;?>
            </div>
            <?php endforeach;?>
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
