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
        $articleRepository -> insert($title, $content, $date);

    }

}

$addArticleController = new AddarticleController();
$addArticleController->addArticle();