<?php

require_once ('../config/config.php');
require_once ('../model/articleRepository.php');

class ArticleController
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

    public function showArticle()
    {
        // Permet de sélectionner l'Id directement dans l'URL : ?id=...
        $id = $_GET['id'];

        $articleRepository = new articleRepository();
        // Déclare la valeure $article en lui donnant pour valeur l'article à l'Id selectionné avec findOneById($id)
        $article=$articleRepository ->findOneById($id);

        require_once ('../template/page/showArticleView.php');
    }

}

//$articleController = new ArticleController();
// $articleController->addArticle();
//$articleController->showArticle();
