<?php require_once('../config/config.php'); ?>
<?php require_once('../template/partiel/header.php'); ?>

<main class="littleMain">

    <h1>Envoie d'article</h1>

    <!-- Penser à mettre le formulaire en method="post", sinon sa ne marchera pas -->
    <form method="post">
        <label><h2>Titre</h2>
            <input type="text" name="title">
        </label>
        <label><p>Contenue</p>
            <input type="text" name="content">
        </label>
        <input type="submit">
    </form>

    <?php if($isRequestOk){ ?>
        <p>L'article a été enregistré avec succès</p>
    <?php } ?>

</main>

<?php require_once('../template/partiel/footer.php'); ?>