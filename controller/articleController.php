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

        $loader = new \Twig\Loader\FilesystemLoader('../template');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('page/addArticle.html.twig', ['isRequestOk' => $isRequestOk]);

    }

    public function showArticle()
    {
        // Permet de sélectionner l'Id directement dans l'URL : ?id=...
        $id = $_GET['id'];

        $articleRepository = new articleRepository();
        // Déclare la valeure $article en lui donnant pour valeur l'article à l'Id selectionné avec findOneById($id)
        $article=$articleRepository ->findOneById($id);

        $loader = new \Twig\Loader\FilesystemLoader('../template');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('page/showArticle.html.twig', ['article' => $article]);
    }

    public function deleteOneArticle()
    {
        $id = $_GET['id'];

        $articleRepository = new articleRepository();
        $deleteArticle = $articleRepository -> deleteOneById($id);

        //Renvoie directement à la page d'accueil
        header("location: http://localhost/piscine-blog/public/");
    }

}