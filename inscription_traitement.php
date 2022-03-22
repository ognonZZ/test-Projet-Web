<?php 
    require_once 'config.php'; // On inclu la connexion à la bdd
    
    // Si les variables existent et qu'elles ne sont pas vides
    if(isset($_POST['email']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['voie']) && isset($_POST['rue']) && isset($_POST['ville']) && isset($_POST['code_postal']) && isset($_POST['centre']) && isset($_POST['promotion']) && isset($_POST['role']) && isset($_POST['password']) && isset($_POST['password_retype']))
    {
        
        // Patch XSS
        $email = htmlspecialchars($_POST['email']);

        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']); 
        $voie = htmlspecialchars($_POST['voie']);
        $rue = htmlspecialchars($_POST['rue']); 
        $ville = htmlspecialchars($_POST['ville']);
        $code_postal = htmlspecialchars($_POST['code_postal']); 
        $centre = htmlspecialchars($_POST['centre']);
        $promotion = htmlspecialchars($_POST['promotion']); 
        $role = htmlspecialchars($_POST['role']);

        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);


        $id_user =  $prenom."_".$nom;
        
        $code_role = $role[0];

        if ($role == Etudiant){
            $permission = "NON";
        }
        else
        {
            $permission = "OUI";
        }
     


        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT ID_utilisateurs, ID_promotion, Prenom, Centre, adresse_mail_utilise, Nom, mot_de_passe , ID_localites_Habite FROM utilisateurs INNER JOIN localites ON utilisateurs.ID_localites_Habite = localites.ID_localites WHERE adresse_mail_utilise = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            
                if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                        if($password === $password_retype){ // si les deux mdp saisis sont bon

                            $password = password_hash($password, PASSWORD_DEFAULT);

                            // On insère dans la base de données


                            
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

                            $insert_user = $bdd->prepare('INSERT INTO utilisateurs(ID_utilisateurs, ID_promotion, Prenom, Centre, adresse_mail_utilise, Nom, mot_de_passe, ID_localites_Habite) VALUES(:id_user, :promotion, :prenom, :centre, :email, :nom, :password, :id_localites) ');
                            $insert_user->execute(array(
                                'id_user' => $id_user,
                                'promotion' => $promotion,
                                'prenom' => $prenom,
                                'centre' => $centre,
                                'email' => $email,
                                'nom' => $nom,
                                'password' => $password,
                                'id_localites' => $id_localites,
                            ));

                            $insert_role = $bdd->prepare('INSERT INTO roles(Code_roles,	role_nom, permissions, ID_utilisateurs) VALUES(:code_role, :role, :permission, :id_user) ');
                            $insert_role->execute(array(
                                'code_role' => $code_role,
                                'role' => $role,
                                'permission' => $permission,
                                'id_user' => $id_user,
                            ));

                            


                            // On redirige avec le message de succès
                            
                            header('Location:inscription.php?reg_err=success');

                        }else header('Location: inscription.php?reg_err=password');
                    }else header('Location: inscription.php?reg_err=email');
                }else header('Location: inscription.php?reg_err=email_length');
        }else header('Location: inscription.php?reg_err=already');
    }