<?php 
    require_once 'config.php'; // On inclu la connexion à la bdd
    
    // Si les variables existent et qu'elles ne sont pas vides
    if(isset($_POST['nom_entreprise']) && isset($_POST['secteur_activite']) && isset($_POST['confiance_pilote']) && isset($_POST['nb_stagiaire_accepte']) && isset($_POST['voie']) && isset($_POST['rue']) && isset($_POST['ville']) && isset($_POST['code_postal']) && isset($_POST['description_entreprise']))
    {
        
        // Patch XSS
        $nom_entreprise = htmlspecialchars($_POST['nom_entreprise']);

        /*$logo_entreprise = htmlspecialchars($_POST['logo_entreprise']);*/
        $secteur_activite = htmlspecialchars($_POST['secteur_activite']); 
        $confiance_pilote = htmlspecialchars($_POST['confiance_pilote']); 
        $nb_stagiaire_accepte = htmlspecialchars($_POST['nb_stagiaire_accepte']);
        $voie = htmlspecialchars($_POST['voie']); 
        $rue = htmlspecialchars($_POST['rue']); 
        $ville = htmlspecialchars($_POST['ville']);
        $code_postal = htmlspecialchars($_POST['code_postal']); 
        $description_entreprise = htmlspecialchars($_POST['description_entreprise']);


        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT ID_entreprises,	Nom_entreprises, Description_de_l_entreprise, Secteur_D_avctivite, Nombres_de_stagiaires_CESI_deja_acceptes_en_stage, Evalutaion_des_stagiaires, Confiance_Pilotes_de_promotion, ID_localites, ID_localites_Situer	 FROM entreprises  WHERE Nom_entreprises = ?');
        $check->execute(array($nom_entreprise));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        
        
        $nom_entreprise = strtolower($nom_entreprise); // on transforme toute les lettres majuscule en minuscule
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            if($confiance_pilote <= 10){
                            $insert_localites = $bdd->prepare('INSERT INTO localites(Code_postal, Rue, Ville, Numero_de_voie) VALUES(:code_postal, :rue, :ville, :voie)');
                            $insert_localites->execute(array(
                                'code_postal' => $code_postal,
                                'rue' => $rue,
                                'ville' => $ville,
                                'voie' => $voie,
                            ));

                            $select = $bdd->query('SELECT MAX(ID_localites) FROM localites');
                            $donnees = $select->fetch();
                            
                            $id_localites = $donnees['0'];

                            echo $id_localites;

                            $insert_entreprise = $bdd->prepare('INSERT INTO entreprises(Nom_entreprises, Description_de_l_entreprise, Secteur_D_avctivite, Nombres_de_stagiaires_CESI_deja_acceptes_en_stage, Confiance_Pilotes_de_promotion, ID_localites, ID_localites_Situer) VALUES(:nom_entreprise, :description_entreprise, :secteur_activite, :nb_stagiaire_accepte, :confiance_pilote, :id_localites, :id_localites2) ');
                            $insert_entreprise->execute(array(
                                'nom_entreprise' => $nom_entreprise,
                                'description_entreprise'=> $description_entreprise,
                                'secteur_activite' => $secteur_activite,
                                'nb_stagiaire_accepte' => $nb_stagiaire_accepte,               
                                'confiance_pilote' => $confiance_pilote,            
                                'id_localites' => $id_localites,
                                'id_localites2' => $id_localites,
                            ));

                            


                            // On redirige avec le message de succès
                            
                            header('Location:creation_entreprise.php?reg_err=success');

                        }header('Location: creation_entreprise.php?reg_err=note');
        }else header('Location: creation_entreprise.php?reg_err=already');
    }