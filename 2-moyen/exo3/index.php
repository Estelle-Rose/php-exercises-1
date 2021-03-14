<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$animal1 = array(
    'nom' => 'Mina',
    'age' => 2,
    'type' => 'chien'
);
$animal2 = array(
    'nom' => 'Hocket',
    'age' => 26,
    'type' => 'chien'
);
$animal3 = array(
    'nom' => 'Tya',
    'age' => 4,
    'type' => 'chat'
);
$animal4 = array(
    'nom' => 'Milo',
    'age' => 7,
    'type' => 'chat'
);
 $animaux = array($animal1, $animal2, $animal3,$animal4);   

function displayanimals($animaux, $type) {
    echo "-----------------<br/>";
    
    foreach ($animaux as $key => $animal) {
        if($animal['type'] === $type) {
            foreach ($animal as $key => $value) {
                echo "$key : $value <br/>";
            }
            echo "-----------------<br/>";

        } else if($type === 'tous'){
            foreach ($animal as $key => $value) {
            echo "$key : $value <br/>";
        }
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
                    displayanimals($animaux, 'tous');
            } else if(isset($_GET['chiens'])) {
                    displayanimals($animaux,'chien');
                    
            } else if(isset($_GET['chats'])) {
                     displayanimals($animaux,'chat');
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
