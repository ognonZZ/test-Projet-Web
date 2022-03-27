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
    <link rel="stylesheet" href="./assets/creation_entreprise.css" class="css">
</head>
<body>
<!-- Barre de navigation -->
    <nav>
        <div class="container-fluid header">
            <div class="row">
                <div class="col-lg-2 barnav">
                    <img class="logo" src="image/logo.png" alt="LOGO">
                </div>
                <div class="col-lg-4 barnav">
                </div>
                <div class="col-lg-3 barnav">
                    <input class="style-button" type="button" value="Accueil" onclick="window.location.href='Accueil.html';">
                    <input class="style-button" type="button" value="Stages" onclick="window.location.href='Stages.html';">
                    <input class="style-button" type="button" value="Entreprises" onclick="window.location.href='Entreprises.html';">
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



<div class="container-fluid ">


<?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> Création de l'entreprise réussie !
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> Entreprise déjà existante
                            </div>
                        <?php 

                    }
                }
    ?>




<div class="section">
    <div class="row text">
    
        <div class="col-6 slogan">
            <fieldset class="form1">
            <legend><h2><b>Création d'une fiche entreprise</b></h2></legend>
                <form class="needs-validation" action="creation_entreprise_traitement.php" method="post" novalidate >
                    
                    <div class="row">
                        <div class="form-group"> 
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01" class="label">Nom de l'entreprise</label>
                                <input type="text" name="nom_entreprise" class="form-control" id="validationCustom01" placeholder="Nom de l'entreprise" required>
                                <div class="invalid-feedback">
                                    Merci d'indiquer le nom de l'entreprise.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom14">Secteur d'activité</label>
                                <input type="text" name="secteur_activite" class="form-control" id="validationCustom14" placeholder="Secteur d'activité" required>
                                <div class="invalid-feedback">
                                    Merci d'indiquer le secteur d'activité.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom05">Nombre de stagiaire déjà accepté</label>
                                <input type="text" name="nb_stagiaire_accepte" class="form-control" id="validationCustom05" placeholder="Nombre de stagiaire déjà accepté" required>
                                <div class="invalid-feedback">
                                    Merci d'indiquer le nombre de stagiaire déjà accepté.
                                </div>
                            </div>
                    </div>
                    <br>
                    <div class="row">
                        <label><h3><strong>Localisation de l'entreprise :</strong></h3></label>
                    </div>
                    <br>

                    <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom05">Numéro de voie</label>
                                <input type="text" name="voie" class="form-control" id="validationCustom05" placeholder="Numéro de voie" required>
                                <div class="invalid-feedback">
                                    Merci d'indiquer votre Numéro de voie.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom06">Rue</label>
                                <input type="text" name="rue" class="form-control" id="validationCustom06" placeholder="Rue" required>
                                <div class="invalid-feedback">
                                    Merci d'indiquer votre Adresse.
                                </div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                    <label for="validationCustom07">Ville</label>
                                    <input type="text" name="ville" class="form-control" id="validationCustom07" placeholder="Ville" required>
                                    <div class="invalid-feedback">
                                        Merci d'indiquer votre Ville.
                                    </div>
                            </div> 
                            <div class="col-md-4 mb-3">
                                    <label for="validationCustom08">Code Postal</label>
                                    <input type="text" name="code_postal" class="form-control" id="validationCustom08" placeholder="Code Postal" required>
                                    <div class="invalid-feedback">
                                        Merci d'indiquer votre code postal.
                                    </div>
                            </div>
                            
                        </div>



                    <div class="row">
                        <div class="col-md-10 mb-3">
                            <label for="validationCustom08">Description de l'entreprise</label>
                            <input type="text" name="description_entreprise" class="form-control" id="validationCustom08" placeholder="Description de l'entreprise" required>
                            <div class="invalid-feedback">
                                Merci d'indiquer la description de l'entreprise.
                            </div>
                        </div>
                    </div>

                    <br>
                        
                    <button class="btn btn-primary" type="submit">Créer Entreprise</button>
                </form>
        </fieldset>
        </div>

        <div class="col-6 slogan"></div>
        </div>
    </div>
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
                            <a href="Stages.html" class="link">Stage</a>
                            </li>
                            <li>
                            <a href="Entreprises.html" class="link">Entreprise</a>
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
