<?php

class ArticleRepository{

    private $pdo;

    function __construct(){

        // Instance de class pour accèder à la base de donnée
        $dbConnexion = new DbConnexion();
        $this->pdo = $dbConnexion->connect();

    }
    public function findArticles(){

        // Permet de faire une requête Select sans parmètres
        $stmt = $this->pdo->query('SELECT * FROM articles');

        // Retourne dans un tableau tous les produits grace au fetchAll, à ne pas confondre avec le fetch
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $articles;
    }

    // Les paramètres de la fonction permettent de récupérer les valeures qui sont enregistrer dans le controlleur
    public function insert($title, $content, $date){

        // créer une nouvelle donnée
        // model
        $sql = "INSERT INTO articles (title, content, createdAt) VALUE (:title, :content, :createdAt)";
        $stmt = $this->pdo->prepare($sql);

        // Définir les paramètres à éxécuter

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':createdAt', $date);

        // Executer la requête
        // view
        $isRequestOk = $stmt->execute();

        return $isRequestOk;
    }
}