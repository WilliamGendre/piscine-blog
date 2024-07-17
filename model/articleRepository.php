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
}