<?php
ob_start(); //NE PAS MODIFIER 
$titre = "Cas pratique 2 : Catalogue de produits"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
require_once('./classes/MonPdo.class.php');
require_once('./classes/Produits.class.php');

function getProductsFromDb() {
    $pdo = monPdo::getPdo();
    $req = 'SELECT produits.nom as nom, produits.image as image, produits.description as description, tags.nomTag as tag FROM `produits` INNER JOIN `tags` ON tags.id = produits.fk_tag_id';
    $stmt = $pdo->prepare($req);
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
         <h2 class="mt-5">Voici toutes les produits : </h2>
         <div class="row no-gutters">
            <?php foreach (Produit::$produits as $produit): ?>
            <div class="col-md-6 col-lg-4">
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
