<?php

require_once ('../config/config.php');

class AddarticleController
{

    function addArticle()
    {

        // Instance de class pour connecter à la base de données
        // Model

        $dbConnexion = new DbConnexion();
        $pdo = $dbConnexion->connect();

        // controller
        $title = 'Mercredi';
        $content = 'milieu de semaine';
        $date = "2024-07-17";

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

$addArticleController = new AddarticleController();
$addArticleController->addArticle();