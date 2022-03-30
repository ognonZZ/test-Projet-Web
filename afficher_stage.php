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
    <link rel="stylesheet" href="./assets/stages.css" class="css">

</head>
<body>





<section>


    <article>
       <h1><?= strip_tags($offre_stage["Titre_de_l_offre_de_stage"])?></h1>
       <p>Publié le : <?= $offre_stage["created_at"]?></p>
       <divl>Description : <?= strip_tags($offre_stage["Description_du_stage"])?></div> 
    </article>




</section>


</body>
</html>