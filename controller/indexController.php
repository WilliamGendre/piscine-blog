<?php

require_once('../config/config.php');
require_once('../model/articleRepository.php');

class IndexController{

    public function index(){
        $articleRepository = new ArticleRepository();
        $articles = $articleRepository->findArticle();

        require_once('../template/page/indexView.php');
    }

}

$indexController = new IndexController();
$indexController->index();