<?php require_once('../template/partiel/header.php'); ?>

<main id="mainIndexView">

    <section id="articleBdd">

        <article>
            <h2>Ajouter un article</h2>
            <a href="http://localhost/piscine-blog/public/addArticle">nouvelle article</a>
        </article>

        <?php

        foreach($articles as $article){

            echo "<article>";
            echo "<h2>" . $article['title'] . "</h2>";
            echo "<a href='http://localhost/piscine-blog/public/showArticle?id=" . $article['id'] . "'>Sélectionner</a>";
            echo "</article>";
        }

        ?>
    </section>

</main>

<?php  require_once('../template/partiel/footer.php');?>