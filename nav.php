<script src="./assets/vendors/jquery/jquery-3.6.0.min.js"></script>

<?php if($_COOKIE['role'] == "Etudiant"){
    echo "    <script> $(document).ready(function(){     

            $('#gestion').hide();
        }); 
        </script>";
 } ?>


<?php
   /* require_once 'config.php';

    $id_user = $_COOKIE['id_user'];
    $select = $bdd->query('SELECT Liens_du_document FROM documents WHERE ID_utilisateurs_Possede = "'.$id_user.'" AND Code_document__CV_ou_LM_ = "PP" ');
    $donnees = $select->fetch();
    
    $lien_cv = $donnees['Liens_du_document'];*/
?>

 
<!-- Barre de navigation -->
<nav>
        <div class="container-fluid header">
            <div class="row">
                <div class="col-lg-2 barnav">
                    <img class="logo" src="image/logo.png" alt="LOGO">
                </div>
                <div class="col-lg-3 barnav">
                </div>
                <div class="col-lg-4 barnav">
                <input class="style-button" type="button" id="gestion" value="Gestion" onclick="window.location.href='gestion.php';">
                    <input class="style-button" type="button" value="Accueil" onclick="window.location.href='Accueil.php';">
                    <input class="style-button" type="button" value="Stages" onclick="window.location.href='Stages.php';">
                    <input class="style-button" type="button" value="Entreprises" onclick="window.location.href='Entreprises.php';">
                </div>
                <div class="col-lg-1 barnav">
                    <i class="fas fa-heart navicon " onclick="window.location.href='https://twitter.com/ognonZZ';"></i>
                    <i class="fas fa-envelope navicon"onclick="window.location.href='https://twitter.com/ognonZZ';"></i>
					<i class="fas fa-bell navicon"onclick="window.location.href='https://twitter.com/ognonZZ';"></i>
                </div>
                <div class="col-lg-1 barnav">
                    <div class="txt"><?php echo $_COOKIE['user']; ?></div>
                </div>
                <div class="col-lg-1 barnav">
                    <img class="photoprofil" src="./document_user/pp_user/xjhv5guA_400x400.png" width= "30%" height="100%" alt="photoprofil" style="border-radius: 50%" onclick="window.location.href='profil.php';">

                </div>
            </div>
        </div>
    </nav>
    <div><br></div>
<!-- Barre de navigation -->