<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('nico01.pierson@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: nicolas.pierson@viacesi.fr');
    if ($retour)    {
        echo '<p>Votre message a bien été envoyé.</p>';
 } else {
            echo "Failed to send email...";
          }
    ?>
</body>
</html>