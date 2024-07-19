<?php

require_once('../config/config.php');
require_once('../model/articleRepository.php');

class IndexController{

    public function index(){
        
        // Instance de class pour appelé le tableau créer par la fonction findArticle
        $articleRepository = new ArticleRepository();
        $articles = $articleRepository->findArticles();

        $loader = new \Twig\Loader\FilesystemLoader('../template');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('page/index.html.twig', ['articles' => $articles]);
    }

}