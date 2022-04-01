
<?php

if(!isset($_GET["id"]) || empty($_GET["id"])){

    header("Location: Entreprises.php");
    exit;
}


$id = !empty($_GET['id']) ? $_GET['id'] : NULL ; 


require_once "config.php";

if ($id) {

$sql = "SELECT * FROM entreprises WHERE ID_entreprises = :id ";

$requete = $bdd->prepare($sql);

//$requete = $bdd->prepare("SELECT * FROM `offres_de_stages` WHERE 'Offres_de_stage = :id ");

$requete->bindParam(':id', $id, PDO::PARAM_INT);

$requete->execute();

$entreprises = $requete->fetch();

}

if(!$entreprises){
    http_response_code(404);
    echo "Entreprise inexistante";

}


$nom_entreprise = ucfirst($entreprises["Nom_entreprises"]);

$id_localite = $entreprises["ID_localites_Situer"];

if ($id_localite) {

    $sql2 = "SELECT * FROM localites WHERE 	ID_localites  = :id ";
    
    $requete2 = $bdd->prepare($sql2);
    
    $requete2->bindParam(':id', $id_localite, PDO::PARAM_INT);
    
    $requete2->execute();
    
    $localite = $requete2->fetch();
    
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

</head>
<body>
<?php include('nav.php'); ?>

<?php if($_COOKIE['role'] == "Etudiant"){
    echo "    <script> $(document).ready(function(){     

            $('#supr').hide();
            $('#modif').hide();
        }); 
        </script>";
 } ?>

<div class="container-fluid ">

<div class="section">
<div class="row text justify-content-around">
    
    <div class="col-6">
        <fieldset class="form1">
        <label><h1><?= $nom_entreprise?></h1></label>
             
        <div class="row text justify-content-around">
             <article>
             <div>Secteur d'activité : <?= strip_tags($entreprises["Secteur_D_avctivite"]) ?></div>
             <div>Nombre de stagiaire CESI déjà accepté en stage : <?= strip_tags($entreprises["Nombres_de_stagiaires_CESI_deja_acceptes_en_stage"]) ?></div>
             <div>Evaluation des stagiaires : <?= strip_tags($entreprises["Evalutaion_des_stagiaires"]) ?>/10</div>
             <div>Confiance du pilotes de promotion : <?= strip_tags($entreprises["Confiance_Pilotes_de_promotion"]) ?>/10</div>
             </article>
        </div>
        <br>
        <label><h1>Localité :</h1></label>
        <div class="row text justify-content-around">
             <article>
             <div>Numéro de voie : <?= strip_tags($localite["Numero_de_voie"]) ?></div>
             <div>Rue : <?= strip_tags($localite["Rue"]) ?></div>
             <div>Ville : <?= strip_tags($localite["Ville"]) ?></div>
             <div>Code postal : <?= strip_tags($localite["Code_postal"]) ?></div>
             </article>
        </div>

        </fieldset>
    </div>
    


    <div class="col-6">
        <fieldset class="form1">
        <article>
            <div><h1>Description : </h1><?= strip_tags($entreprises["Description_de_l_entreprise"])?></div> 
        </article>
        </fieldset>
        <br>
        <form method="post" action="suppression_entreprise2.php" >
            <input type="hidden" name="entreprise_id" value= <?php echo $id; ?> >
            <input id="supr" class="btn btn-primary" type="submit" name="Submit" value="Suprimer l'entreprise">
        </form>
        <br>
            <a href="modification_entreprise.php?id=<?php echo $entreprises["ID_entreprises"]?>"><input id="modif" class="btn btn-primary" type="submit" name="Submit2" value="Modifier l'entreprise"></a>
    </div>


    </div>
</div>
</div>




<?php include('footer.php'); ?>

</body>
</html>