<?php
    session_start();
    /*if(!isset($_SESSION['user'])){
        header('Location:connexion.php');
    }*/
    if(!isset($_COOKIE['user'])){
        header('Location:connexion.php');
    }

require_once 'config.php';

if ($_FILES['mon_fichier']['error']) {
  switch ($_FILES['mon_fichier']['error']){
    case 1: // UPLOAD_ERR_INI_SIZE
      echo "Le fichier dépasse la limite autorisée par le serveur (fichier php.ini) !";
      break;
    case 2: // UPLOAD_ERR_FORM_SIZE
      echo "Le fichier dépasse la limite autorisée dans le formulaire HTML !";
      break;
    case 3: // UPLOAD_ERR_PARTIAL
      echo "L'envoi du fichier a été interrompu pendant le transfert !";
      break;
    case 4: // UPLOAD_ERR_NO_FILE
      echo "Le fichier que vous avez envoyé a une taille nulle !";
      break;
  }
}else{
  // $_FILES['nom_du_fichier']['error'] vaut 0 soit UPLOAD_ERR_OK
  // ce qui signifie qu'il n'y a eu aucune erreur
  $name = $_FILES['mon_fichier']['name'];
  $nom = $_FILES['mon_fichier']['tmp_name'];
  $nomdestination = './document_user/cv_user/'.$name.'';
  move_uploaded_file($nom, $nomdestination);

  $type_doc = "CV";

  $id_user = $_COOKIE['id_user'];
  $id_user2 = $_COOKIE['id_user'];


  $delete = $bdd->query('DELETE  FROM documents WHERE ID_utilisateurs_Possede = "'.$id_user.'"');


  $insert_cv = $bdd->prepare('INSERT INTO documents (Code_document__CV_ou_LM_, Liens_du_document, ID_utilisateurs, ID_utilisateurs_Possede ) VALUES (:type_doc, :nomdestination, :id_user, :id_user2)');
  $insert_cv->execute(array(
      'type_doc' => $type_doc,
      'nomdestination' => $nomdestination,
      'id_user' => $id_user,
      'id_user2' => $id_user2,
  ));

 header('Location:profil.php?reg_err=success');

}


?>