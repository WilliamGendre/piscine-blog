<?php

require_once('../config/config.php');
require_once('../model/articleRepository.php');

class IndexController{

    public function index(){
        
        // Instance de class pour appelé le tableau créer par la fonction findArticle
        $articleRepository = new ArticleRepository();
        $articles = $articleRepository->findArticles();

        require_once('../template/page/indexView.php');
    }

}

// Instance de class pour utiliser le tableau grâce à indexView

$indexController = new IndexController();
$indexController->index();