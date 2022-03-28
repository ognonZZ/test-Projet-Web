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
    <link rel="stylesheet" href="./assets/inscription.css" class="css">
</head>
<body>
<?php include('nav.php'); ?>
<div class="login-form">
    <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
    ?>


    <div class="container-fluid ">

        <div class="section">
        <div class="row text">
            
            <div class="col-6 slogan">
                <fieldset class="form1">
                <legend><b>Inscription</b></legend>
                    <form class="needs-validation" action="inscription_traitement.php" method="post" novalidate >
                        
                        <div class="row">
                            
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01" class="label">NOM</label>
                                    <input type="text" name="nom" class="form-control" id="validationCustom01" placeholder="NOM" required>
                                    <div class="invalid-feedback">
                                        Merci d'indiquer votre NOM.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Prénom</label>
                                    <input type="text" name="prenom" class="form-control" id="validationCustom02" placeholder="Prénom" required>
                                    <div class="invalid-feedback">
                                        Merci d'indiquer votre prénom.
                                    </div>
                                </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom04">Adresse mail</label>
                                <input type="text" name="email" class="form-control" id="validationCustom04" placeholder="Adresse mail" required>
                                <div class="invalid-feedback">
                                    Merci d'indiquer votre Adresse mail.
                                </div>
                            </div>
                        </div>

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
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom09">Centre</label>
                                <input type="text" name="centre" class="form-control" id="validationCustom09" placeholder="Centre" required>
                                <div class="invalid-feedback">
                                    Merci d'indiquer votre Centre.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom10">Promotion</label>
                                <input type="text" name="promotion" class="form-control" id="validationCustom10" placeholder="Promotion" required>
                                <div class="invalid-feedback">
                                    Merci d'indiquer votre Promotion.
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="validationCustom11">Quel est votre rôle?</label>
                                <select id="choixCategorie" name="role" class="form-select"  id="validationCustom11" required>
                                <option selected disabled value="">Selectionner...</option>
                                <option value="Pilote">Pilote</option>
                                <option value="Etudiant">Etudiant</option>
                                <option value="Délégué">Délégué</option>
                                </select>
                                <div class="invalid-feedback">
                                    Merci d'indiquer votre Rôle.
                                </div>  
                            </div> 
                            </div>
                            <div class="row">
                            <div class="col-md-5 mb-3">
                                    <label for="validationCustom12">Mot de passe</label>
                                    <input type="password" name="password" class="form-control" id="validationCustom12" placeholder="Mot de passe" required>
                                    <div class="invalid-feedback">
                                        Merci d'indiquer votre mot de passe.
                                    </div>
                            </div> 
                            <div class="col-md-5 mb-3">
                                    <label for="validationCustom13">Confirmation mot de passe</label>
                                    <input type="password" name="password_retype" class="form-control" id="validationCustom13" placeholder="Confirmation mot de passe" required>
                                    <div class="invalid-feedback">
                                        Merci de confirmer votre mot de passe.
                                    </div>
                            </div>
                            
                        </div>



                            
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
            </fieldset>
            </div>
  
            <div class="col-4 slogan"></div>
            </div>
        </div>
        </div>
    </div>

</div>


<?php include('footer.php'); ?>
<!-- onchange="myFunction()" 
value="executionDeScript"
value=""-->
<script src="./assets/inscription.js"></script> 
</body>
</html>