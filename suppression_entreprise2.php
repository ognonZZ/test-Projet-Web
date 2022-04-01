<?php
require_once 'config.php'; // On inclu la connexion à la bdd
    
    // Si les variables existent et qu'elles ne sont pas vides
    if(isset($_POST['entreprise_id']))
    {
        

        $id_entreprise = htmlspecialchars($_POST['entreprise_id']);

        $select = $bdd->query('SELECT ID_localites_Situer FROM entreprises WHERE ID_entreprises = "'.$id_entreprise.'" ');
        $donnees = $select->fetch();
        
        $id_localites = $donnees['0'];


        
       $sql = "DELETE FROM entreprises WHERE ID_entreprises  = :id ";
    
       $requete = $bdd->prepare($sql);
       
       $requete->bindParam(':id', $id_entreprise, PDO::PARAM_INT);
       
       $requete->execute();
      
   
        /*$sql1 = "SELECT ID_localites_Situer WHERE ID_entreprises = :id ";
        $requete1 = $bdd->prepare($sql1);
        
        $requete1->bindParam(':id', $id_entreprise, PDO::PARAM_INT);
        
        $requete1->execute();

        $localite = $requete1->fetchAll();
        
        echo $localite["0"];*/





        $sql2 = "DELETE FROM localites WHERE ID_localites  = :id ";
        $requete2 = $bdd->prepare($sql2);
        
        $requete2->bindParam(':id', $id_localites, PDO::PARAM_INT);
        
        $requete2->execute();
     

        header('Location:Entreprises.php');


    }

    ?>