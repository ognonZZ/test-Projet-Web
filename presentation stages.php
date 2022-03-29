
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

$sql= "SELECT * FROM 'offres_de_stage' WHERE 'id' = :id";

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


    //on définit le numéro de l'offre
    $titre=strip_tags($Offres_de_stage["Titre_de_l_offre_du_stage"]);

    ?>




<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>InternView</title>
    <link rel="stylesheet" href="./assets/presentation.css" class="css">
	<link rel="stylesheet" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/nav&footer.css" class="css">


</head>
<body>
<!-- Barre de navigation -->
<?php include('nav.php'); ?>



<!-- Presentation du stage-->
<div class="oui">
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
        <br>
        <div class="gauche">
            <div class="txt">
          <articles>
            <h1><a href=""> <?= strip_tags($Offres_de_stage['Titre_de_l_offre_du_stage']) ?> </a> </h1>
            <p>Publié le <?= $Offres_de_stage['created_at'] ?></p>
            <div>Domaine : <?= strip_tags($Offres_de_stage['Domaine_du_stage']) ?> </div>
        </articles>
            <div class="gauche">
                <div class="txt">
                <legend id="b">.  Titre du stage : <?= strip_tags($Offres_de_stage['Titre_de_l_offre_du_stage']) ?></legend>
                 <br>
                <h2 id="a">.     secteur d'activité</h2> 
                 <br>
                <h3 id="a">.     Nombre de stagiaire déjà accepté:</h3>
                <br>
                <h3 id="a">localité : </h3>
                 <br>
                 <h3 id="a">Ville</h3>
                 <br>
                 <h3 id="a">Numéro de voie</h3>
                 <br>
                 <h3 id="a">Code Postal</h3>
                 <br>
                 <h3 id="a">Ville</h3>
                 <br>
            
        </div>
        </div>
        </div>


    
            <div class="col-6"> 
            <br>
              <div class="scroller"> 
            <label> Description du stage : <br>
        </label>
    </div>

    
    </div>
</div>
<br>
</div>




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
