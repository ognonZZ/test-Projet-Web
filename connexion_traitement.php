<?php 
    session_start(); // Démarrage de la session
    require_once 'config.php'; // On inclut la connexion à la base de données

    if(isset($_POST['email'])  && isset($_POST['password'])) // Si il existe les champs email, password et qu'il sont pas vident
    {
        // Patch XSS
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);

        
        $email = strtolower($email); // email transformé en minuscule
        
        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        $check = $bdd->prepare('SELECT adresse_mail_utilise, mot_de_passe, Nom, Prenom FROM utilisateurs WHERE adresse_mail_utilise = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
       

        // Si > à 0 alors l'utilisateur existe
        if($row == 1)
        {
            // Si le mail est bon niveau format
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                
               /* $password = hash('sha512', $password);

                if($data['mot_de_passe'] === $password)
                {
                    $_SESSION['user'] = $data['adresse_mail_utilise'];
                    header('Location:landing.php');

                }else echo $password;
                        echo $data['mot_de_passe'];*/


                // Si le mot de passe est le bon

                $profil_user = $data['Prenom']." ".$data['Nom'];

                $hash=$data['mot_de_passe'];
                if(password_verify($password,$hash ))
                {
                    $_SESSION['user'] = $profil_user;
                    header('Location:Accueil.php');
      
                }else header('Location: connexion.php?login_err=password');
            }else header('Location: connexion.php?login_err=email');
        }else header('Location: connexion.php?login_err=already');
    }else header('Location: connexion.php');