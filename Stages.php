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

<!-- Navigation -->
<?php include('nav.php'); ?>

<!-- Filtres -->
<div class = "container-fluid test">
<div class="p-3 mb-2">
    <div class ="row d-flex justify-content-around">
       <div class="col-2">
         <button
             class="btn btn-secondary dropdown-toggle"
             type="button"
              id="dropdownMenuButton"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
         >
            Compétences
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
       <div class="input-group rounded">
  <input type="search" class="form-control rounded" placeholder="Tape moi stpl je kiffe" aria-label="Search" aria-describedby="search-addon" />
  <span class="input-group-text border-0" id="search-addon">
    <i class="fas fa-search"></i>
  </span>
</div>
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
<div class="list-group offre">
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small>3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small>Donec id elit non mi porta.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
</div>
<!-- Corps de page -->

<?php include('footer.php'); ?>


</body>
</html>


<?php 

$server = "localhost";
$username = "root";
$password = "";
$dbname = "projet";

$conn = mysqli_connect($server, $username, $password, $dbname);

?>