<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : Private & Getters"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
 require_once('../exo5/book.class.php'); 

$book1 = new Book('Tonton','Babibar', 'Tom', 2000);
$book2 = new Book('Tonton2','Babibar', 'Sophie', 2001);
$book3 = new Book('Abelix','Bebat', 'Marc', 2000);
$book4 = new Book('Abelix2','Bebat', 'Marc',2000);
$book5 = new Book('Abelix3','Bebat', 'Marie', 2001);
$library = [$book1,$book2,$book3,$book4,$book5];
foreach ($library as $value) {
    Book::$books[] = $value;
}

function afficherlivres($books, $edition, $date){
       foreach($books as $book) {
           if(($book->getEdition() === $edition || $edition==="tous") && ($book->getDate() === (int)$date || $date==="tous")) {
               echo $book;
           }
         
        }
}


?>

<div class="container">
   <div class="row">
    <div class="col-6">
        <div class="d-flex justify-content-between">
            <form action="" method="POST">
                 <label for="edition">Edition : </label>
                 <select name="edition" class="custom-select">
                   
                    <option value="tous">Tous</option>
                    <option value="Babibar">Babibar</option>
                    <option value="Bebat">Bebat</option>
                
                </select>
                 <label for="date">Date de parution : </label>
                 <select name="date" class="custom-select">
                   
                    <option value="tous">Tous</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                
                </select>
                <button type="submit" class="btn btn-primary my-3"> Valider</button>
            </form>
        </div>
        <div>
       <?php 
       if(isset($_POST['edition']) && !empty($_POST['edition']) && isset($_POST['date']) && !empty($_POST['date']) ) {
           afficherlivres(Book::$books, $_POST['edition'],$_POST['date']);

       } 
        
        ?>

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
