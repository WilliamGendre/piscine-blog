<?php require_once('../config/config.php'); ?>
<?php require_once('../template/partiel/header.php'); ?>

<main>

    <h1>Envoie d'article</h1>

    <?php if($isRequestOk){ ?>
        <p>L'article a été enregistré avec succès</p>
    <?php } else {?>
        <p>L'article n'a pas pu être enregistré</p>
    <?php } ?>

</main>

<?php require_once('../template/partiel/footer.php'); ?>