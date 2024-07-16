<?php

require_once('../config/config.php');

// Permet de faire une requête Select sans parmètres
$stmt = $pdo->query('SELECT * FROM articles');

// Retourne dans un tableau tous les produits grace au fetchAll, à ne pas confondre avec le fetch
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

require_once('../template/page/indexView.php');