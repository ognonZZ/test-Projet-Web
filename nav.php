<?php 
    
    session_start();
    /*if(!isset($_SESSION['user'])){
        header('Location:connexion.php');
    }*/
    if(!isset($_COOKIE['user'])){
        header('Location:connexion.php');
    }
?>

 
<!-- Barre de navigation -->
<nav>
        <div class="container-fluid header">
            <div class="row">
                <div class="col-lg-2 barnav">
                    <img class="logo" src="image/logo.png" alt="LOGO">
                </div>
                <div class="col-lg-4 barnav">
                </div>
                <div class="col-lg-3 barnav">
                    <input class="style-button" type="button" value="Accueil" onclick="window.location.href='Accueil.php';">
                    <input class="style-button" type="button" value="Stages" onclick="window.location.href='Stages.php';">
                    <input class="style-button" type="button" value="Entreprises" onclick="window.location.href='Entreprises.php';">
                </div>
                <div class="col-lg-1 barnav">
                    <i class="fas fa-heart navicon " onclick="window.location.href='https://twitter.com/ognonZZ';"></i>
                    <i class="fas fa-envelope navicon"onclick="window.location.href='https://twitter.com/ognonZZ';"></i>
					<i class="fas fa-bell navicon"onclick="window.location.href='https://twitter.com/ognonZZ';"></i>
                </div>
                <div class="col-lg-1 barnav">
                    <div class="txt"><?php echo $_COOKIE['user']; ?></div>
                </div>
                <div class="col-lg-1 barnav">
<<<<<<< HEAD
                    <img class="photoprofil" src="image/PP.png" width= "20%" height="100%" alt="photoprofil" style="border-radius: 50%" onclick="window.location.href='profil.php';">
=======
                    <img class="photoprofil" src="image/PP.png" width= "20%" height="100%" alt="photoprofil" style="border-radius: 50%" onclick="window.location.href='profil.php'">
>>>>>>> b79d81be1bcf3f541ea93b21807e3001ba082e92
                </div>
            </div>
        </div>
    </nav>
    <div><br></div>
<!-- Barre de navigation -->