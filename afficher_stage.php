<?php 
    session_start();
    /*if(!isset($_SESSION['user'])){
        header('Location:connexion.php');
    }*/
    if(!isset($_COOKIE['user'])){
        header('Location:connexion.php');
    }
?>
<?php

if(!isset($_GET["id"]) || empty($_GET["id"])){

    header("Location: Stages.php");
    exit;
}


$id = !empty($_GET['id']) ? $_GET['id'] : NULL ; 


require_once "config.php";

if ($id) {

$sql = "SELECT * FROM offres_de_stages WHERE Offres_de_stage = :id ";

$requete = $bdd->prepare($sql);

//$requete = $bdd->prepare("SELECT * FROM `offres_de_stages` WHERE 'Offres_de_stage = :id ");

$requete->bindParam(':id', $id, PDO::PARAM_INT);

$requete->execute();

$offre_stage = $requete->fetch();

}

if(!$offre_stage){
    http_response_code(404);
    echo "Offre de stage inexistante";

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
    <link rel="stylesheet" href="./assets/gestion.css" class="css">
    <script src="./assets/vendors/jquery/jquery-3.6.0.min.js"></script>

</head>
<body>

<?php if($_COOKIE['role'] == "Etudiant"){
    echo "    <script> $(document).ready(function(){     

            $('#supr').hide();
            $('#modif').hide();
        }); 
        </script>";
 } ?>

<?php include('nav.php'); ?>

<div class="container-fluid ">

<div class="section">
<div class="row text justify-content-around">
    
    <div class="col-6">
        <fieldset class="form1">
        <label><h1><?= strip_tags($offre_stage["Titre_de_l_offre_de_stage"])?></h1></label>
             <div><p>Date de l'offre : <?= $offre_stage["date_de_l_offre"]?></p></div>
             <article>
             <div>Nom de l'entreprise : <?= strip_tags($offre_stage["nom_entreprises"]) ?></div>
             <div>Durée du stage : <?= strip_tags($offre_stage["duree_du_stage"]) ?></div>
             <div>Nombre de place offerte aux étudiants : <?= strip_tags($offre_stage["nombre_de_places_offertes_aux_etudiants"]) ?></div>
             <div>Domaine du stage : <?= strip_tags($offre_stage["Domaine_du_stage"]) ?></div>
             <div>Base de rémunération : <?= strip_tags($offre_stage["base_de_remuneration"]) ?>€</div>
             <div>Adresse email de contact : <?= strip_tags($offre_stage["adresse_mail_stages"]) ?></div>
             </article>
        </fieldset>
    </div>
    


    <div class="col-6">
        <fieldset class="form1">
        <article>
            <div><h1>Description : </h1><?= strip_tags($offre_stage["Description_du_stage"])?></div> 
        </article>
        </fieldset>
        <br>
        <form method="post" action="suppression_stage.php" >
            <input type="hidden" name="stage_id" value= <?php echo $id; ?> >
            <input id="supr" class="btn btn-primary" type="submit" name="Submit" value="Suprimer l'offre de stage">
        </form>
        <br>
            <a href="modification_stage.php?id=<?php echo $offre_stage["Offres_de_stage"]?>"><input id="modif" class="btn btn-primary" type="submit" name="Submit2" value="Modifier l'offre de stage"></a>
    </div>
    </div>
</div>
</div>




<?php include('footer.php'); ?>

</body>
</html>