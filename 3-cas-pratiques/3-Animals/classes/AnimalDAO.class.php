<?php
require_once('MonPdo.class.php');
require_once('Animal.class.php');
class AnimalDAO {
    public static function getAnimalsFromDB() {
            $pdo = monPDO::getPdo();
            $req = 'SELECT animal.idAnimal as idAnimal, animal.nom as nom, animal.age as age,  animal.sexe as sexe , type.libelle as type FROM `animal` INNER JOIN `type` ON type.idType = animal.idType';
            $stmt = $pdo->prepare($req);
            $stmt->execute();
            $animals = $stmt->fetchAll();            
            foreach($animals as $animal) {
                Animal::$animals[] = new Animal($animal['idAnimal'],$animal['nom'], $animal['age'],$animal['sexe'], $animal['type'], AnimalDAO::getImages((int)$animal['idAnimal']));
            
            }
            
        }
    public static function getImages($animalId) {
            $pdo = monPDO::getPdo();
            $req = 'SELECT  image.libelle, image.url FROM `image_animal` INNER JOIN `image` ON
                    image.idImage = image_animal.idImage WHERE image_animal.idAnimal = :idAnimal;';
            $stmt = $pdo->prepare($req);
            $stmt->bindValue(":idAnimal",$animalId,PDO::PARAM_INT);
            $stmt->execute();
            $images = $stmt->fetchAll();            
            return $images;
            
        }
    
    
}
?>