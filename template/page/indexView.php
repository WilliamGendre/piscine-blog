<?php require_once('../template/partiel/header.php'); ?>

<main id="mainIndexView">

    <section id="articleBdd">
        <?php

        foreach($articles as $article){

            echo "<article>";
            echo "<h2>" . $article['title'] . "</h2>";
            echo "<h3>" . $article['content'] . "</h3>";
            echo "<p>" . $article['createdAt'] . "</p>";
            echo "</article>";
        }

        ?>
    </section>

</main>

<?php  require_once('../template/partiel/footer.php');?>