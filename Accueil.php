<?php 
    
    session_start();
    /*if(!isset($_SESSION['user'])){
        header('Location:connexion.php');
    }*/
    if(!isset($_COOKIE['user'])){
        header('Location:connexion.php');
    }
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
<<<<<<< HEAD

=======
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
            <div class ="scroller">
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
>>>>>>> 71387a7104e471799b19a165e74e673ece552e92

<!-- Offres de stages-->

<<<<<<< HEAD
    <form class="form-inline" action="/recherche/" method="get">
        <fieldset>    
            <div class="input-group">
                <div class="input-group-prepend">
                    <select id="oCategorie" name="oCategorie" class="form-control">
                        <option selected="selected" value="0">Catégorie</option>
                        <option value="1">...</option>
                    </select>
                </div>
                    <input id="oSaisie" name="oSaisie" type="text" class="form-control" aria-label="Saisie de mots clés" required="required">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Recherche</button>
                </div>
            </div>
        </fieldset> 
    </form>

        <br>
<div class="container-fluid">        
    <div class="row justify-content-around">
        
        <div class="col-5">
            <div class ="scroller">
                <div class="onestlabis">
                    <div class="twitter">
                        <a class="twitter-timeline" href="https://twitter.com/CESIingenieurs?ref_src=twsrc%5Etfw">Actualité twitter by CESIingenieurs</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>


        <!-- Offres de stages recentes -->

        <div class="col-5">
            <div class="onestlabis">
                <div class="Stagesrecent">
                    <article class="txt">Ici se trouvera l'ensemble des offres de stages
                        <br>
                        <br>
                        <br>
                        <a href="deconnexion.php" class="btn-danger btn-lg"> Déconnexion </a>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </article>
                </div>       
            </div>  
        </div>
    </div>  
</div>
=======
        </div>
        <div class="col-6">
        <br>
           <div class="onestlabis">
        <div class="Stagesrecent">
                 <article class="txt">Ici se trouvera l'ensemble des sites internet
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                   </article>
</div>       
</div>  
</div>
</div>
</div>
</div>






>>>>>>> 71387a7104e471799b19a165e74e673ece552e92
<br>
<?php include('footer.php'); ?>
</body>
</html>


