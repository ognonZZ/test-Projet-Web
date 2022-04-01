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

<?php 
$id2 = $_GET['id'];
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
    <link rel="stylesheet" href="./assets/creation_entreprise.css" class="css">
</head>
<body>
<?php include('nav.php'); ?>



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
                                <strong>Succès</strong> Modification de l'entreprise réussie !
                            </div>
                        <?php
                        break;

                        case 'note':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> Note du pilote supérieur à 10 !
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
                <form class="needs-validation" action="modification_entreprise_traitement.php" method="post" novalidate >
                <input type="hidden" name="stage_id2" value= <?php echo $id2; ?> >
                    <div class="row">
                        
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

                    <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="validationCustom10">Confiance du pilote</label>
                                <input type="text" name="confiance_pilote" class="form-control" id="validationCustom10" placeholder="Confiance du pilote sur 10" required>
                                <div class="invalid-feedback">
                                    Merci d'indiquer la confiance du pilote sur 10.
                                </div>
                            </div>
                    </div>

                    <div class="row">
                            <div class="col-md-5 mb-3">
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
                            <label for="validationCustom09">Description de l'entreprise</label>
                            <input type="text" name="description_entreprise" class="form-control" id="validationCustom09" placeholder="Description de l'entreprise" required>
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



<?php include('footer.php'); ?>
</body>
</html>

