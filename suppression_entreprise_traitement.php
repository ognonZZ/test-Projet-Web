<?php 
    require_once 'config.php'; // On inclu la connexion à la bdd
    
    // Si les variables existent et qu'elles ne sont pas vides
    if(isset($_POST['nom_entreprise']))
    
    {
        
        $nom_entreprise = htmlspecialchars($_POST['nom_entreprise']);


        $check = $bdd->prepare('SELECT ID_entreprises,	Nom_entreprises, Description_de_l_entreprise, Secteur_D_avctivite, Nombres_de_stagiaires_CESI_deja_acceptes_en_stage, Evalutaion_des_stagiaires, Confiance_Pilotes_de_promotion, ID_localites, ID_localites_Situer	 FROM entreprises  WHERE Nom_entreprises = ?');
        $check->execute(array($nom_entreprise));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        
        
        $nom_entreprise = strtolower($nom_entreprise); // on transforme toute les lettres majuscule en minuscule
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 1){ 
            
            //$delete = $bdd->query('DELETE FROM entreprises WHERE Nom_entreprises = "'.$nom_entreprise.'"');

            $delete = $bdd->prepare("DELETE FROM entreprises WHERE Nom_entreprises = :nom_entreprise");
            $delete->bindParam(':nom_entreprise', $nom_entreprise, PDO::PARAM_INT);
            $delete->execute();


                            // On redirige avec le message de succès
                            
                            header('Location:suppression_entreprise.php?reg_err=success');

        }else header('Location: suppression_entreprise.php?reg_err=already');
    }