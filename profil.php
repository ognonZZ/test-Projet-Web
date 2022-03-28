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
    <link rel="manifest" href="./manifest.json">
        <script>
            if('serviceWorker' in navigator){ navigator.serviceWorker.register('serviceWorker.js')
            .then( (sw) => console.log('Le Service Worker a été enregistrer', sw))
            .catch((err) => console.log('Le Service Worker est introuvable !!!', err));
            }
        </script>

</head>
<body>

<?php include('nav.php'); ?>

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
                    <img class="img-account-profile rounded-circle mb-2" src="image/UF3cgUk4_400x400.png" width="auto" height="auto" alt="">
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
                            <iframe src="<?php echo $lien_doc; ?>" type="application/pdf" alt="cv" width="100%" height="100%" title="cv"> </iframe>
					    </div>
                        
				    </div><!--//card-body-->
				    <div class="card-footer theme-bg-secondary border-0 text-center">
                        <form action="cv_traitement.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                            <!-- Le champs 'hidden' doit être défini avant le champs 'file'  -->   
                            <label for="inputLastName"><strong>Selectionner mon CV</strong></label> :
                            <input type="file" name="mon_fichier" class="btn btn-danger" id="inputLastName"><br>
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

<?php include('footer.php'); ?>

<!-- Upper right form-->
</body>
</html>
