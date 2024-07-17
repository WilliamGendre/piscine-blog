<?php

require_once ('../config/config.php');
require_once ('../model/articleRepository.php');

class AddarticleController
{

    function addArticle()
    {

        // controller
        $title = 'Mercredi';
        $content = 'milieu de semaine';
        $date = "2024-07-17";

        $articleRepository = new articleRepository();
        $isRequestOk = $articleRepository -> insert($title, $content, $date);

        require_once('../template/page/addArticleView.php');

    }

}

$addArticleController = new AddarticleController();
$addArticleController->addArticle();