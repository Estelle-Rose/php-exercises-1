<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les objets"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
 require_once('../exo4/animal.class.php'); 

$animal1 = new Animal('Mina',2, 'chien');
$animal2 = new Animal('Hocket',6, 'chien');
$animal3 = new Animal('Tya',7, 'chat');
$animal4 = new Animal('Milo',4, 'chat');
$animaux = [$animal1,$animal2,$animal3,$animal4];
function displayanimals() {
    global $animaux;
    echo "-----------------<br/>";
    
    foreach ($animaux as $key => $animal) {
        echo "Nom : $animal->nom <br/>";
        echo "Age : $animal->age <br/>";
        echo "Type : $animal->type <br/>";
        echo "-----------------<br/>";
        
    }
}
function displayanimalsbytype($race) {
    global $animaux;
    echo "-----------------<br/>";
    
    foreach ($animaux as $key => $animal) {
        if($animal->type === $race) {
        echo "Nom : $animal->nom <br/>";
        echo "Age : $animal->age <br/>";
        echo "Type : $animal->type <br/>";
        echo "-----------------<br/>";
        }
        
    }
}

?>

<div class="container">
   <div class="row">
    <div class="col-4">
        <div class="d-flex justify-content-between">
            <form action="" method="get">
                <button class="btn btn-primary" type="submit" name="tous">Tous</button>         
            </form>
            <form action="" method="get">
            <button class="btn btn-primary" type="submit" name="chiens">Chien</button>
                
            </form>
            <form action="" method="get">
                <button class="btn btn-primary" type="submit" name="chats">Chat</button>           
            </form>
        </div>
        <div>
         <?php if(isset($_GET['tous'])) {
                    displayanimals();
            } else if(isset($_GET['chiens'])) {
                    displayanimalsbytype('chien');
                    
            } else if(isset($_GET['chats'])) {
                     displayanimalsbytype('chat');
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
