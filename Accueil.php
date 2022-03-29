<?php 
    
    session_start();
    /*if(!isset($_SESSION['user'])){
        header('Location:connexion.php');
    }*/
    if(!isset($_COOKIE['user'])){
        header('Location:connexion.php');
    }
?>
<?php 
    // on va chercher les articles dans la base
    // on se connecte a la base
    require_once 'config.php';

    //On écrit la requête
    $sql = "SELECT * FROM `offres_de_stages` ORDER BY `offres_de_stages`.`created_at` DESC";

    //on exécute la requête
    $Requete = $bdd->query($sql);

    //on récupère les données
    $offres_de_stage = $Requete->fetchAll();

    //on définit le numéro de l'offre
    $titre="Offres_de_stages";

    ?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>InternView</title>
	<link rel="stylesheet" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/nav&footer.css" class="css">
    <link rel="stylesheet" href="./assets/accueil.css" class="css">
    <Link Rel="Stylesheet"Href="Https://Stackpath.Bootstrapcdn.Com/Bootstrap/4.3.1/Css/Bootstrap.Min.Css">
    <Link Rel="Stylesheet" Href="Https://Cdnjs.Cloudflare.Com/Ajax/Libs/Font-Awesome/5.9.0/Css/All.Css">
        <script>
            if('serviceWorker' in navigator){ navigator.serviceWorker.register('serviceWorker.js')
            .then( (sw) => console.log('Le Service Worker a été enregistrer', sw))
            .catch((err) => console.log('Le Service Worker est introuvable !!!', err));
            }
        </script>



</head>
<body>
<?php include('nav.php'); ?>


    <!-- Barre de recherche-->

<div class="container-fluid">
    <div class="container">
        <form class="form-inline" action="/recherche/" method="get">
            <fieldset>    
                <div class="input-group">
                <div class="input-group-prepend">
                <select id="oCategorie" name="oCategorie" class="form-control">
                <option selected="selected" value="0">Catégorie</option>
                <option value="1">INFO</option>
                <option value="2">BTP</option>
            </select>
        </div>
            <input id="oSaisie" name="oSaisie" type="text" class="form-control" aria-label="Saisie de mots clés" required="required">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">Recherche</button>
        </div>
      </div>
    </fieldset> 
  </form>
</div>



<!-- Twitter-->

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <br>
            <div class="row">
            <div class ="scrollertw">
                <div class="col-6">
                <div class="onestlabis">
                <div class="twitter">
                <a class="twitter-timeline" href="https://twitter.com/CESIingenieurs?ref_src=twsrc%5Etfw">Actualité twitter by CESIingenieurs</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
    </div>
</div>
</div>



<br>




    

        <br>


        </div>
        <div class="col-6">
        <br>
           <div class="onestlabis">
        <div class="Stagesrecent">
                 <h1> Stages les plus récents <h1>


<section>

<div class ="scrollerof">
    <?php 
    foreach($offres_de_stage as $Offres_de_stage): ?>

 
 
    <fieldset class="article">
        
        <articles>
        
            <h1><a href="Offres_stages.php?id=<?= $Offres_de_stage["id"] ?>"> <?= strip_tags($Offres_de_stage['Titre_de_l_offre_du_stage']) ?> </a> </h1>
            <p>Publié le <?= $Offres_de_stage['created_at'] ?></p>
            <div>Domaine : <?= strip_tags($Offres_de_stage['Domaine_du_stage']) ?> </div>
            <div>Nom de l'entreprise' : <?= strip_tags($Offres_de_stage['nom_entreprises']) ?> </div>
            <div>Nombres de places annoncées : <?= strip_tags($Offres_de_stage['nombre_de_places_offertes_aux_etudiants']) ?> </div>
           
        </articles>
       
    </fieldset>
  



    <?php endforeach; ?>
</div>

</section>



 </div>
 </div>
 </div>
 </div>
 </div>
 </div>

<br>
<?php include('footer.php'); ?>
<a href="deconnexion.php" class="btn-danger btn-lg"> Déconnexion </a>
</body>
</html>


