<?php
class monPDO {
    private const HOST_NAME = "localhost";
    private const DB_NAME = "Animals";
    private const USER_NAME = "root";
    private const PWD = "root";

    private static $monPDOInstance = null;
    public static function getPDO() {
        if(is_null(self::$monPDOInstance)) {
            try {
                $connexion = 'mysql:host='.self::HOST_NAME.';dbname='.self::DB_NAME;'charset=utf8'; 
                self::$monPDOInstance = new PDO($connexion,self::USER_NAME,self::PWD,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch (PDOException $e) {
                die('Erreur de connexion:' .$e->getMessage());
            }
                
          
        }
        return self::$monPDOInstance;
    }
}
?>