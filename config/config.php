<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_set_cookie_params(30);


// permet d'utiliser twig
require_once ('../vendor/autoload.php');

class DbConnexion{
    private $dsn;
    private $username;
    private $password;

    function __construct(){
        $this->dsn = 'mysql:host=localhost:3306; dbname=piscine_blog_php';
        $this->username = 'root';
        $this->password = 'root';
    }

    public function connect(){
        // test si le $dsn, le $username, le $password sont bon

        try{

            // créer une instance de classe
            $pdo = new PDO($this->dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }

        // si se n'est pas bon

        catch(PDOException $e){
            echo 'erreur de connexion' . $e->getMessage();
        }
    }
}