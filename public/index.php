<?php

require_once ('../controller/articleController.php');
require_once ('../controller/indexController.php');

//Récupère l'url
$request = $_SERVER['REQUEST_URI'];

//Enlève les parmètres GET
$uri = parse_url($request, PHP_URL_PATH);

//Enlève la partie commune de l'url à toute les pages
$uri = str_replace('piscine-blog/public/', '', $uri);
$uri = trim($uri, '/');

// Redirige vers les pages souhaitez
// $uri === '' => renvoie à la page d'accueil
if($uri === ''){
    $indexController = new IndexController();
    $indexController->index();
} else if($uri === 'addArticle'){
    $articleController = new ArticleController();
    $articleController->addArticle();
} else if($uri === 'showArticle'){
    $showArticleController = new ArticleController();
    $showArticleController->showArticle();
}