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