
<?php 

//On verifie si on a un id
if(!isset($_GET["id"]) || empty($_GET["id"])){
    //je n'ai pas l'id

    header("location : Acceuil.php");
    exit;
}
//je récupère l'id

$id = $_GET["id"];

// on se connecte a la base
    require_once 'config.php';

    // on va chercher les offres dans la base

$sql= "SELECT * FROM 'offres_de_stage' WHERE 'Offres_de_stage' = :id";

//on prepare la requete
$requete= $bdd->prepare($sql);

//On injecte les paramètres

$requete ->bindValue(":id", $id, PDO::PARAM_INT);

//on execute les paramètres

$requete->execute();

//on recupère les Offres

$Offres_de_stage= $requete->fetch();


// on verifie si article est vide
if($Offres_de_stage){
    //pas d'article
    http_response_code(404);
    echo"article inexistant";
    exit;
}
// Ici on a un article

else{
    //on définit le numéro de l'offre
    $titre=strip_tags($Offres_de_stage["Titre_de_l_offre_du_stage"]);}
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

</head>
<body>
<!-- Barre de navigation -->
    <nav>
        <div class="container-fluid header">
            <div class="row">
                <div class="row">
                <div class="recherche">
                </div>
                <div class="col-lg-2 barnav">
                    <img class="logo" src="image/logo.png" alt="LOGO">
                </div>
                <div class="col-lg-4 barnav">
                </div>
                <div class="col-lg-3 barnav">
                    <input class="style-button" type="button" value="Accueil" onclick="window.location.href='Accueil.php';">
                    <input class="style-button" type="button" value="Stages" onclick="window.location.href='Stages.php';">
                    <input class="style-button" type="button" value="Entreprises" onclick="window.location.href='Entreprises.php';">
                </div>
                <div class="col-lg-1 barnav">
                    <i class="fas fa-heart navicon " onclick="window.location.href='https://twitter.com/ognonZZ';"></i>
                    <i class="fas fa-envelope navicon"onclick="window.location.href='https://twitter.com/ognonZZ';"></i>
					<i class="fas fa-bell navicon"onclick="window.location.href='https://twitter.com/ognonZZ';"></i>
                </div>
                <div class="col-lg-1 barnav">
                    <div class="txt">Prénom NOM</div>
                </div>
                <div class="col-lg-1 barnav">
                    <img class="photoprofil" src="image/PP.png" width= "20%" alt="photoprofil" style="border-radius: 50%">
                </div>
            </div>
        </div>
    </nav>
    <div><br></div>
<!-- Barre de navigation -->


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
<br>
<!-- Offres de stages-->

        </div>
        <div class="col-6">
        <br>
           <div class="onestlabis">
        <div class="Stagesrecent">
                 <h1> Liste des stages <h1>

 

        <articles>
            <h1> <?=strip_tags($Offres_de_stage["Titre_de_l_offre_du_stage"]) ?>  </h1>
            <p>Publié le <?= $Offres_de_stage['created_at'] ?></p>
            <div>Domaine : <?= strip_tags($Offres_de_stage['Domaine_du_stage']) ?> </div>
        </articles>





 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
<br>
<!-- Footer -->

    <footer class="bg-light text-center text-lg-start">
        <div class="container-fluid header">
            <div class="row background">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <ul class="list-unstyled mb-0">
                        <li>
                        <a href="#!" class="link">A propos de nous</a>
                        </li>
                        <li>
                        <a href="#!" class="link">Nous contacter</a>
                        </li>
                        <li>
                        <a href="#!" class="link">S’inscrire</a>
                        </li>
                        <li>
                        <a href="#!" class="link">Support</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                        <ul class="list-unstyled mb-0">
                            <li>
                            <a href="Stages.php" class="link">Stage</a>
                            </li>
                            <li>
                            <a href="Entreprises.php" class="link">Entreprise</a>
                            </li>
                            <li>
                            <a href="#!" class="link">Partenariat</a>
                            </li>
                        </ul>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-3">
                    <section class="mb-4">
                        <!-- Facebook -->
                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #3b5998;"
                        href="#!"
                        role="button"
                        ><i class="fab fa-facebook-f"></i
                        ></a>
                
                        <!-- Twitter -->
                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #55acee;"
                        href="#!"
                        role="button"
                        ><i class="fab fa-twitter"></i
                        ></a>
                
                        <!-- Google -->
                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #dd4b39;"
                        href="#!"
                        role="button"
                        ><i class="fab fa-google"></i
                        ></a>
                
                        <!-- Instagram -->
                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #ef4b64;"
                        href="#!"
                        role="button"
                        ><i class="fab fa-instagram"></i
                        ></a>
                
                        <!-- Linkedin -->
                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #0082ca;"
                        href="#!"
                        role="button"
                        ><i class="fab fa-linkedin-in"></i
                        ></a>
                        <!-- Github -->
                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #333333;"
                        href="#!"
                        role="button"
                        ><i class="fab fa-github"></i
                        ></a>
                    </section>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="text-center p-3 copyright" style="background-color: #3C3F49;">
          <pre>© 2022    À propos   Accessibilité   Conditions générales d’utilisation de InternView    Politique de confidentialité    Politique relative aux cookies   Politique de copyright</pre>
        </div>
        <!-- Copyright -->
    </footer>
<!-- Footer -->
</body>
</html>

