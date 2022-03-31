<?php 
    session_start();
    /*if(!isset($_SESSION['user'])){
        header('Location:connexion.php');
    }*/
    if(!isset($_COOKIE['user'])){
        header('Location:connexion.php');
    }

    if($_COOKIE['role'] == "Etudiant"){
        header('Location:Accueil.php');
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
    <link rel="stylesheet" href="./assets/creation_stage.css" class="css">
</head>
<body>
<?php include('nav.php'); ?>


<div class="container-fluid ">
<div class="section">
    <div class="row text">
    
        <div class="col-6 slogan">
            <fieldset class="form1">
            <legend><b>Création d'une offre de stage</b></legend>
                <form class="needs-validation" action="creation_stage_traitement.php" method="post" novalidate >
                    


                    <div class="row">
                        
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01" class="label">Intitulé du stage</label>
                            <input type="text" name="nom_stage" class="form-control" id="validationCustom01" placeholder="Intitulé du stage" required>
                            <div class="invalid-feedback">
                                Merci d'indiquer l'intitulé du stage.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01" class="label">Nom de l'entreprise</label>
                                <input type="text" name="nom_entreprise" class="form-control" id="validationCustom01" placeholder="Nom de l'entreprise" required>
                                <div class="invalid-feedback">
                                    Merci d'indiquer le nom de l'entreprise.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Durée du stage</label>
                                <input type="text" name="duree_stage" class="form-control" id="validationCustom02" placeholder="Durée du stage" required>
                                <div class="invalid-feedback">
                                    Merci d'indiquer la durée du stage.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom14">Date de l'offre</label>
                                <input type="date" name="date_offre" class="form-control" id="validationCustom14" placeholder="Date de l'offre" required>
                                <div class="invalid-feedback">
                                    Merci d'indiquer la date de l'offre.
                                </div>
                            </div>
                        
                    </div>

                    <div class="row">

                        <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Compétences demandées</label>
                            <input type="text" name="competences" class="form-control" id="validationCustom03" placeholder="Compétences demandées" required>
                            <div class="invalid-feedback">
                                Merci d'indiquer la base de rémunération.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="validationCustom04">Base de rémunération</label>
                            <input type="text" name="base_remuneration" class="form-control" id="validationCustom04" placeholder="Base de rémunération" required>
                            <div class="invalid-feedback">
                                Merci d'indiquer la base de rémunération.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="validationCustom05">Nombre de place disponible</label>
                                <input type="text" name="nb_place" class="form-control" id="validationCustom05" placeholder="Nombre de place disponible" required>
                                <div class="invalid-feedback">
                                    Merci d'indiquer le nombre de place disponible.
                                </div>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationCustom05">Nombre de stagiaire déjà accepté</label>
                                <input type="text" name="nb_stagiaire_accepte" class="form-control" id="validationCustom05" placeholder="Nombre de stagiaire déjà accepté" required>
                                <div class="invalid-feedback">
                                    Merci d'indiquer le nombre de stagiaire déjà accepté.
                                </div>
                            </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-5 mb-3">
                                <label for="validationCustom06">Domaine du stage</label>
                                <input type="text" name="domaine_stage" class="form-control" id="validationCustom06" placeholder="Domaine du stage" required>
                                <div class="invalid-feedback">
                                    Merci d'indiquer le domaine du stage.
                                </div>
                        </div> 
                        <div class="col-md-5 mb-3">
                                <label for="validationCustom07">Adresse mail de contact du stage</label>
                                <input type="text" name="email_contact" class="form-control" id="validationCustom07" placeholder="Adresse mail de contact du stage" required>
                                <div class="invalid-feedback">
                                    Merci d'indiquer l'adresse mail de contact du stage.
                                </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 mb-3">
                            <label for="validationCustom08">Description du stage</label>
                            <input type="text" name="description_stage" class="form-control" id="validationCustom08" placeholder="Description du stage" required>
                            <div class="invalid-feedback">
                                Merci d'indiquer la description du stage.
                            </div>
                        </div>
                    </div>




                        
                    <button class="btn btn-primary" type="submit">Créer Offre de Stage</button>
                </form>
        </fieldset>
        </div>

        <div class="col-4 slogan"></div>
        </div>
    </div>
</div>



<?php include('footer.php'); ?>
</body>
</html>

