<?php 
    // on va chercher les articles dans la base
    // on se connecte a la base
    require_once "includes/config.php";

    //On écrit la requête
    $sql = "SELECT * FROM `offres_de_stages` ORDER BY `offres_de_stages`.`created_at` DESC";

    //on exécute la requête

    $requete = $db->query($sql);

    //on récupère les données

    $offres_de_stages = $requete->fetchAll();,





    ?>
    <h1> Liste des articles <h1>

    <?php foreach($article as $article): ?>

    <articles>
        <h1>
    </articles>

    <?php
        endforeach;