<?php require_once('../template/partiel/header.php'); ?>

<main id="mainIndexView">

    <section id="articleBdd">
        <?php

        foreach($articles as $article){

            echo "<article>";
            echo "<h2>" . $article['title'] . "</h2>";
            echo "<a href='http://localhost/piscine-blog/controller/articleController.php?id=" . $article['id'] . "'>Sélectionner</a>";
            echo "</article>";
        }

        ?>
    </section>

</main>

<?php  require_once('../template/partiel/footer.php');?>