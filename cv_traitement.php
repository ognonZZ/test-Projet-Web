<?php
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


  $insert_cv = $bdd->prepare('INSERT INTO localites(Code_postal, Rue, Ville, Numero_de_voie) VALUES(:code_postal, :rue, :ville, :voie)');
  $insert_cv->execute(array(
      'code_postal' => $code_postal,
      'rue' => $rue,
      'ville' => $ville,
      'voie' => $voie,
  ));

  header('Location:profil.php?reg_err=success');

}


?>