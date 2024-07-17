<?php

class ArticleRepository{
    public function findArticles(){

        // Instance de class pour accèder à la base de donnée
        $dbConnexion = new DbConnexion();
        $pdo = $dbConnexion->connect();

        // Permet de faire une requête Select sans parmètres
        $stmt = $pdo->query('SELECT * FROM articles');

        // Retourne dans un tableau tous les produits grace au fetchAll, à ne pas confondre avec le fetch
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $articles;
    }

    public function insert($title, $content, $date){
        // Instance de class pour connecter à la base de données
        // Model

        $dbConnexion = new DbConnexion();
        $pdo = $dbConnexion->connect();

        // créer une nouvelle donnée
        // model
        $sql = "INSERT INTO articles (title, content, createdAt) VALUE (:title, :content, :createdAt)";
        $stmt = $pdo->prepare($sql);

        // Définir les paramètres à éxécuter

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':createdAt', $date);

        // Executer la requête
        // view
        if($stmt->execute()){
            echo "nouvel article ajouté avec succès";
        }else{
            echo "Erreur lors de l'ajout de l'article";
        }
    }
}