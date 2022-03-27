<?php 
    session_start();
    /*if(!isset($_SESSION['user'])){
        header('Location:connexion.php');
    }*/
    if(!isset($_COOKIE['user'])){
        header('Location:connexion.php');
    }
    require_once 'config.php';

    $id_user = $_COOKIE['id_user'];
    $select = $bdd->query('SELECT Liens_du_document FROM documents WHERE ID_utilisateurs_Possede = "'.$id_user.'"');
    $donnees = $select->fetch();
    
    $lien_doc = $donnees['0'];


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
    <link rel="stylesheet" href="./assets/profil.css" class="css">

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
                    <input class="style-button" type="button" value="Accueil" onclick="window.location.href='Accueil.php';">
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

<!-- Upper right form-->
<div class="container-fluid">
    <!-- Account page navigation-->
    
    <hr class="pp">
    <div class="row justify-content-center">
        <div class="col-xl-3">
        <div class="card border-0 shadow-lg pt-4 my-5 ">

            <!-- Profile picture card-->
            <div class="card">
                <div class="card-header">Photo de profil</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="https://pbs.twimg.com/profile_images/669103856106668033/UF3cgUk4_400x400.jpg" alt="">
                    <!-- Profile picture help block-->
                    <div class="text-dark font-weight-bold mb-4">En vrai???</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-danger" type="button">Changer ma photo de profil</button>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-8">			    
            <div class="card border-0 shadow-lg pt-4 my-5 ">

            <!-- Account details card-->
            <div class="card">
                <div class="card-header">Details du compte</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        
                        <!-- Form Row-->
                        <div class="row">
                            <!-- Form Group (first name)-->
                            <div class="col">
                                <label class="text-dark font-weight-bold" for="inputFirstName">Prénom</label>
                                <section class="profil">
                                <div class="card-text">
						            <div class="text-center"><?php echo($_COOKIE['prenom'])?></div>
                                </div>  
                                </section>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col">
                                <label class="text-dark font-weight-bold" for="inputLastName">Nom</label>
                                <section class="profil">
                                <div class="card-text">
						            <div class="text-center"><?php echo($_COOKIE['nom'])?></div>
                                </div>  
                                </section>
                            </div>
                        </div>


                        <!-- Form Row        -->
                        <div class="row">                            
                            <div class="col">
                            <label class="text-dark font-weight-bold" for="inputUsername">Adresse email</label>
                            <section class="profil">
                                <div class="card-text">
						            <div class="text-center"><?php echo($_COOKIE['email'])?></div>
                                </div>  
                                </section>
                            </div>
                        </div>



                        <!-- Form Row        -->
                        <div class="row">
                                <div class="col">
                                <label class="text-dark font-weight-bold" for="inputOrgName">Numéro de voie</label>
                                <section class="profil">
                                <div class="card-text">
						            <div class="text-center"><?php echo($_COOKIE['voie'])?></div>
                                </div>  
                                </section>
                            </div>
                            <!-- Form Group (organization name)-->
                            <div class="col">
                                <label class="text-dark font-weight-bold" for="inputOrgName">Rue</label>
                                <section class="profil">
                                <div class="card-text">
						            <div class="text-center"><?php echo($_COOKIE['rue'])?></div>
                                </div>  
                                </section>
                            </div>
                        </div>

                           <!-- Form Row        -->
                           <div class="row">
                            <!-- Form Group (location)-->
                            <div class="col">
                                <label class="text-dark font-weight-bold" for="inputLocation">Ville</label>
                                <section class="profil">
                                <div class="card-text">
						            <div class="text-center"><?php echo($_COOKIE['ville'])?></div>
                                </div>  
                                </section>
                            </div>
                            <div class="col">
                                <label class="text-dark font-weight-bold" for="inputLocation">Code Postal</label>
                                <section class="profil">
                                <div class="card-text">
						            <div class="text-center"><?php echo($_COOKIE['code_postal'])?></div>
                                </div>  
                                </section>
                            </div>
                            </div>
                        
                        <!-- Form Row-->
                        <div class="row">
                            <!-- Form Group (first name)-->
                            <div class="col">
                                <label class="text-dark font-weight-bold" for="inputFirstName">Centre</label>
                                <section class="profil">
                                <div class="card-text">
						            <div class="text-center"><?php echo($_COOKIE['centre'])?></div>
                                </div>  
                                </section>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col">
                                <label class="text-dark font-weight-bold" for="inputLastName">Promotion</label>
                                <section class="profil">
                                <div class="card-text">
						            <div class="text-center"><?php echo($_COOKIE['promotion'])?></div>
                                </div>  
                                </section>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col">
                                <label class="text-dark font-weight-bold" for="inputLastName">Rôle</label>
                                <section class="profil">
                                <div class="card-text">
						            <div class="text-center"><?php echo($_COOKIE['role'])?></div>
                                </div>  
                                </section>
                            </div>
                        </div>
                        <!-- Form Row       -->
                        <!-- Save changes button-->
                        <!--<button class="btn btn-danger" type="button">Sauvegarder???</button>-->
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
    <div class="col-xl-5">
			    <div class="card border-0 shadow-lg pt-4 my-5 ">
                <h4 class="mm">Mon CV</h4>
				    <div class="card-body ">
					    <div class="card-text">
                            <iframe src="<?php echo $lien_doc; ?>" type="application/pdf" alt="cv" width="100%" height="100%" > </iframe>
					    </div>
                        
				    </div><!--//card-body-->
				    <div class="card-footer theme-bg-secondary border-0 text-center">
                        <form action="cv_traitement.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                            <!-- Le champs 'hidden' doit être défini avant le champs 'file'  -->   
                            <label><strong>Selectionner mon CV</strong></label> :
                            <input type="file" name="mon_fichier" class="btn btn-danger"><br>
                            <input type="submit" value="Valider" class="btn btn-danger">
                        </form>
				    </div><!--//card-footer-->
			    </div><!--//card-->
                </div>

                <div class="col-xl-5">
			    <div class="card border-0 shadow-lg pt-4 my-5 ">
                <h4 class="mm">Ma lettre de motivation</h4>
				    <div class="card-body ">
					    <div class="card-text">
                        <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Ma lettre de motivation ici</label>
                        </div>
					    </div>
                        
				    </div><!--//card-body-->
				    <div class="card-footer theme-bg-secondary border-0 text-center">
				    </div><!--//card-footer-->
			    </div><!--//card-->
                </div>
</div>



<!-- Upper right form-->



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
