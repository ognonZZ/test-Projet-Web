<?php
require_once 'config.php'; // On inclu la connexion à la bdd
    
    // Si les variables existent et qu'elles ne sont pas vides
    if(isset($_POST['stage_id']))
    {
        

        $id_stage = htmlspecialchars($_POST['stage_id']);
     
        $sql = "DELETE FROM offres_de_stages WHERE Offres_de_stage = :id ";
    
        $requete = $bdd->prepare($sql);

        //$requete = $bdd->prepare("SELECT * FROM `offres_de_stages` WHERE 'Offres_de_stage = :id ");
        
        $requete->bindParam(':id', $id_stage, PDO::PARAM_INT);
        
        $requete->execute();
       
        header('Location:Stages.php');

    }

    ?>