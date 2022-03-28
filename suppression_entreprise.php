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

<?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> Suppression réussie !
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> Entreprise inexistante !
                            </div>
                        <?php 

                    }
                }
    ?>


<?php include('nav.php'); ?>


<div class="container-fluid ">
<div class="section">
<div class="row text">
    
    <div class="col-6 slogan">
        <fieldset class="form1">
        <legend><b>Suppression d'une entreprise</b></legend>
        <form class="needs-validation" action="suppression_entreprise_traitement.php" method="post" novalidate >
                    <div class="row">
                        
                        <div class="col-md-8 mb-3">
                            <label for="validationCustom01" class="label">Nom de l'entreprise que vous souhaitez supprimer :</label>
                            <input type="text" name="nom_entreprise" class="form-control" id="validationCustom01" placeholder="Nom de l'entreprise" required>
                            <div class="invalid-feedback">
                                Merci d'indiquer le nom de l'entreprise.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4 mb-3">
                            <button class="btn btn-primary" type="submit">Supprimer une entreprise</button>
                        </div>
                    </div>
        </form>
    </fieldset>
    </div>

    <div class="col-4 slogan"></div>
    </div>
</div>

</div>
</div>

<?php include('footer.php'); ?>
</body>
</html>