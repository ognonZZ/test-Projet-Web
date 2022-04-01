<?php 
    
    session_start();
    if(!isset($_COOKIE['user'])){
        header('Location:connexion.php');
    }
    
?>
<?php 
    // on va chercher les articles dans la base
    // on se connecte a la base
    require_once 'config.php';

    //On écrit la requête
    $sql = "SELECT * FROM `offres_de_stages` ORDER BY `offres_de_stages`.`created_at` DESC";
    $sql1 = "SELECT * FROM `offres_de_stages` ORDER BY `offres_de_stages`.`base_de_remuneration`";

    //on exécute la requête
    $Requete = $bdd->query($sql);

    //on récupère les données
    $offres_de_stages = $Requete->fetchAll();

    //on définit le numéro de l'offre
    $titre="Offres_de_stages";

    

   
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
    $i = 1;


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
<?php include('nav.php'); ?>
<!-- Filtres -->
<div class = "container-fluid test">
<div class="p-3 mb-2">
    <div class ="row d-flex justify-content-around">
       <div class="col-2">
       <select id="choixCategorie" name="role" class="form-select"  id="validationCustom11"  required>
                                <option selected disabled value="">Compétence</option>
                                <option value="Pilote">Pilote</option>
                                <option value="Etudiant">Etudiant</option>
                                <option value="Délégué">Délégué</option>
                                </select>
       </div>

       <div class="col-2">
         <button
             class="btn btn-secondary dropdown-toggle"
             type="button"
              id="dropdownMenuButton"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
         >
            Entreprises
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
       </div>


       <div class="col-2">
         <button
             class="btn btn-secondary dropdown-toggle"
             type="button"
              id="dropdownMenuButton"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
         >
            Durée du stage 
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
       </div>
       <div class="col-2">
         <button
             class="btn btn-secondary dropdown-toggle"
             type="button"
              id="dropdownMenuButton"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
         >
            Promotion
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
       </div>
       <div class="col-2">
         <button
             class="btn btn-secondary dropdown-toggle"
             type="button"
              id="dropdownMenuButton"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
         >
            Localité
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
       </div>
       <div class="col-2">
         <button
             class="btn btn-secondary dropdown-toggle"
             type="button"
              id="dropdownMenuButton"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
         >
            Base de rémunération 
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
       </div>
       </div>
    <br>
       
       <div class ="row d-flex justify-content-start">
       <div class ="col-2 flex-sm-fill">
 
       </div>
       <div class="col-2">
         <button
             class="btn btn-secondary dropdown-toggle"
             type="button"
              id="dropdownMenuButton"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
         >
            Date de l'offre 
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
       </div>
    


<div class="col-2">
         <button
             class="btn btn-secondary dropdown-toggle"
             type="button"
              id="dropdownMenuButton"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
         >
            Nombre de place disponibles
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
       </div>

       <!-- bouton Appliquer-->
<div class="col-2">      
       <button type="button" class="btn btn-danger">Appliquer mes critères</button>
       </div>
</div>
</div>
</div>

<!-- Filtres -->

<!-- Corps de page -->

<br>

<?php 






try {
  
  foreach($offres_de_stages as $offre_de_stage){  
  if ((1+($page-1)*6<$i)&&(8+($page-1)*6>$i)) {  
    
    ?>
  
  <div class="card mb-3">
      <div class="card-body">
        <div class="d-flex flex-column flex-lg-row">
          <span class="avatar avatar-text0">TT</span>
          <div class="row flex-fill">
            <div class="col-xl-4">
              <h4 class="h5"><?php echo strip_tags(($offre_de_stage["Titre_de_l_offre_de_stage"])) ?> </h4>
              <div class="badge bg-danger"><?php echo strip_tags(($offre_de_stage["Domaine_du_stage"])) ?> </div> <div class="badge bg-success"> <?php echo strip_tags(($offre_de_stage["base_de_remuneration"])) ?>€ </div>
            </div>
            <div class="col-xl-4">
              <h4 class="h5"><?php echo strip_tags(($offre_de_stage["Description_du_stage"])) ?></h4>
              <small class="text-muted"></small>
            </div>
            <div class="col-xl-3">
              <span class="badge bg-danger"><?php echo strip_tags(($offre_de_stage["competences"])) ?></span>
              <span class="badge bg-danger"><?php echo ($offre_de_stage["competences"]) ?></span>
              <span class="badge bg-danger"><?php echo ($offre_de_stage["competences"]) ?></span>
              <span class="badge bg-danger"><?php echo ($offre_de_stage["competences"]) ?></span>
            </div>
            
            <div class="col text-lg-end">
              <a href="afficher_stage.php?id=<?= $offre_de_stage["Offres_de_stage"]?>" class="btn btn-secondary stretched-link"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } 
    $i = $i+1;
    
  }
} 

  catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }
    $bdd = null;
?>

<div class="mb-3">
                    
                    <?php 
                        $pageInf = $page +1;
                        if($page>1){
                        $pageSup = $page -1;
                        }else{
                            $pageSup = 1;
                        }

                    ?>


<div class="pagination p9">
                        <ul>
                            <a class="badge bg-danger sinus" href='stages.php?page=<?= $pageSup ?>'><h6>< précédent </h6></a>
                            <a><?= $page ?></a>
                            <a class="badge bg-danger sinus" href='stages.php?page=<?= $pageInf ?>'><h6>suivant ></h6></a>
                        </ul>
                    </div>
  
  



</div>

<!-- Corps de page -->

<?php include('footer.php'); ?>


</body>
</html>
