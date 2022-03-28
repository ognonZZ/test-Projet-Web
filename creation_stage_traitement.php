<?php 
    require_once 'config.php'; // On inclu la connexion à la bdd
    
    // Si les variables existent et qu'elles ne sont pas vides
    if(isset($_POST['nom_stage']) && ($_POST['nom_entreprise']) && isset($_POST['duree_stage']) && isset($_POST['date_offre']) && isset($_POST['base_remuneration']) && isset($_POST['nb_place']) && isset($_POST['nb_stagiaire_accepte']) && isset($_POST['domaine_stage']) && isset($_POST['email_contact']) && isset($_POST['description_stage']))

    
    {
        
        $nom_stage = htmlspecialchars($_POST['nom_stage']);
        $competences = htmlspecialchars($_POST['competences']);
        $nom_entreprise = htmlspecialchars($_POST['nom_entreprise']);

        /*$logo_entreprise = htmlspecialchars($_POST['logo_entreprise']);*/
        $duree_stage = htmlspecialchars($_POST['duree_stage']); 
        $date_offre = htmlspecialchars($_POST['date_offre']);
        $base_remuneration = htmlspecialchars($_POST['base_remuneration']); 
        $nb_place = htmlspecialchars($_POST['nb_place']); 
        $nb_stagiaire_accepte = htmlspecialchars($_POST['nb_stagiaire_accepte']);
        $domaine_stage = htmlspecialchars($_POST['domaine_stage']); 
        $email_contact = htmlspecialchars($_POST['email_contact']);
        $description_stage = htmlspecialchars($_POST['description_stage']);

        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT Offres_de_stage	,competences,	nom_entreprises,	duree_du_stage,	base_de_remuneration,	date_de_l_offre	,nombre_de_places_offertes_aux_etudiants,	Nombres_de_stagieres_acceptes	,Domaine_du_stage,	adresse_mail_stages	,ID_entreprises		 FROM offres_de_stages  WHERE Offres_de_stage = ?');
        $check->execute(array($nom_entreprise));
        $data = $check->fetch();
        $row = $check->rowCount();

        $nom_entreprise = strtolower($nom_entreprise); // on transforme toute les lettres majuscule en minuscule
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
                            
                            $select = $bdd->query('SELECT ID_entreprises FROM entreprises WHERE Nom_entreprises = "'.$nom_entreprise.'"');
                            $donnees = $select->fetch();
                            
                            $id_entreprise = $donnees['0'];

                            echo $id_entreprise;

                            $insert_stage = $bdd->prepare('INSERT INTO offres_de_stages(Titre_de_l_offre_de_stage, competences,	nom_entreprises,	duree_du_stage,	base_de_remuneration,	date_de_l_offre	,nombre_de_places_offertes_aux_etudiants,	Nombres_de_stagieres_acceptes	,Domaine_du_stage,	adresse_mail_stages	,Description_du_stage, ID_entreprises	) VALUES(:nom_stage, :competences, :nom_entreprise, :duree_stage, :base_remuneration, :date_offre, :nb_place, :nb_stagiaire_accepte, :domaine_stage,:email_contact, :description_stage, :id_entreprise) ');
                            $insert_stage->execute(array(
                                'nom_stage' => $nom_stage,
                                'competences' => $competences,
                                'nom_entreprise'=> $nom_entreprise,
                                'duree_stage' => $duree_stage,
                                'base_remuneration' => $base_remuneration,                            
                                'date_offre' => $date_offre,
                                'nb_place' => $nb_place,
                                'nb_stagiaire_accepte' => $nb_stagiaire_accepte,
                                'domaine_stage' => $domaine_stage,
                                'email_contact' => $email_contact,
                                'description_stage' => $description_stage,
                                'id_entreprise' => $id_entreprise,
                            ));

                            


                            // On redirige avec le message de succès
                            
                            header('Location:creation_stage.php?reg_err=success');

                
        }else header('Location: inscription.php?reg_err=already');
    }