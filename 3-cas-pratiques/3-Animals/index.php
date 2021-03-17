
<?php
ob_start(); //NE PAS MODIFIER 
$titre = "Cas pratique 3 : Liste d'animaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
require_once('./classes/Animal.class.php');
require_once('./classes/AnimalDAO.class.php');

AnimalDAO::getAnimalsFromDB();
/* echo"<pre>";
print_r(Animal::$animals);
echo "</pre>"; */
?>

<div class="container">
   <div class="row">
    <div class="col-12">
        <div class="">
         <h2 class="mt-5">Mes animaux : </h2>
         <div class="row no-gutters">
            <div class="col-12">
           
                <table class="table align-middle">
                    <thead>
                        <tr>
               
                        <th scope="col">#</th>
                        
                        <th scope="col">Nom</th>
                        <th scope="col">Age</th>
                        <th scope="col">Sexe</th>
                        <th scope="col">Type</th>
                        <th scope="col">Images</th>
                        
                       
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(Animal::$animals as $animal) :?>
                        <tr class="align-middle">
                            <th class="align-middle"><?= $animal->getId() ?></th>
                            <td class=" align-middle"><?= $animal->getNom() ?></td>
                            <td class="align-middle"><?= $animal->getAge() ?></td>
                            <td class="align-middle"><?= ((int)$animal->getSexe()) === 0? 'femelle' : 'mâle' ?></td>
                            <td class="align-middle"><?= $animal->getType() ?></td>
                            <td class="align-middle"><?php foreach ($animal->getImage() as $image) :?>
                            <div class="d-flex m-2">
                                <img src="./sources/<?=$image['url']?>" alt="./sources/<?=$image['libelle']?>" style="max-height:150px" class="img-thumbnail img-fluid">
                            </div>
                            <?php endforeach;?>
                            </td>
                        
                        </tr>
                        <?php endforeach; ?>
                    
                    </tbody>
                </table>
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
