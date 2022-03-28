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
    <link rel="stylesheet" href="./assets/gestion.css" class="css">
</head>
<body>
<?php include('nav.php'); ?>


<div class="container-fluid ">

<div class="section">
<div class="row text justify-content-around">
    
    <div class="col-4">
        <fieldset class="form1">
            <legend><b>Création</b></legend>
                
                        <div class="row">
                            <div class="form-group"> 
                                <div class="col-md-4 mb-3">
                                    <button class="btn btn-primary" type="submit" onclick="window.location.href='creation_stage.php'">Création offre de stage</button>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <button class="btn btn-primary" type="submit" onclick="window.location.href='creation_entreprise.php'">Création fiche entreprise </button>
                                </div>
                            </div>
                        </div>
             
        </fieldset>
    </div>

    <div class="col-4">
        <fieldset class="form1">
            <legend><b>Suppression</b></legend>
                
                        <div class="row">
                            <div class="form-group"> 
                                <div class="col-md-4 mb-3">
                                    <button class="btn btn-primary" type="submit" onclick="window.location.href='suppression_stage.php'">Suppression offre de stage</button>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <button class="btn btn-primary" type="submit" onclick="window.location.href='suppression_entreprise.php'">Suppression fiche entreprise </button>
                                </div>
                            </div>  
                        </div>
             
        </fieldset>
    </div>

    

    <div class="col-4">
        <fieldset class="form1">
            <legend><b>Modification</b></legend>
            <div class="row">
                            <div class="form-group"> 
                                <div class="col-md-4 mb-3">
                                    <button class="btn btn-primary" type="submit" onclick="window.location.href='creation_stage.php'">Modification offre de stage</button>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <button class="btn btn-primary" type="submit" onclick="window.location.href='creation_entreprise.php'">Modification fiche entreprise </button>
                                </div>
                            </div>
                        </div>
             
                
        </fieldset>
    </div>
    </div>
</div>
</div>



<?php include('footer.php'); ?>
</body>
</html>

