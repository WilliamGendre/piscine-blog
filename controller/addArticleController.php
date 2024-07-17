<?php

require_once ('../config/config.php');
require_once ('../model/articleRepository.php');

class AddArticleController
{

    function addArticle()
    {

        $isRequestOk= false;

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            // controller
            $title = $_POST["title"];
            $content = $_POST['content'];
            $dateFormat = new DateTime('NOW');
            $date = $dateFormat->format('Y-m-d');

            $articleRepository = new articleRepository();
            $isRequestOk = $articleRepository -> insert($title, $content, $date);
        }

        require_once('../template/page/addArticleView.php');

    }

}

$addArticleController = new AddArticleController();
$addArticleController->addArticle();