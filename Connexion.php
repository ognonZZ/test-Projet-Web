<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>InternView</title>
	<link rel="stylesheet" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">




    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/Connexion.css" class="css">
    <link rel="stylesheet" href="./assets/nav&footer.css" class="css">

</head>
<body>

    <div class="container-fluid section">
        <div class="row">
            <div class="col-lg-5 slogan">
                <img src="image/logo.png" class="img-fluid" alt="Responsive image" width="50%">
                <div><h1>Avec InternView, ayez une vision sur vos stages.</h1></div>
            </div>
            <div class="col-lg-5 connexion">

            <div class="login-form">
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
                <div class="wrapper fadeInDown">
                    <div id="formContent">
                      <!-- Tabs Titles -->
                  
                      <!-- Icon -->
                      <div class="fadeIn first">
                        <div><h1><strong>Connexion</strong></h1></div>
                      </div>
                  
                      <!-- Login Form -->
                      <form action="connexion_traitement.php" method="post">
                        <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email" required="required" autocomplete="off">
                        <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mot de passe" required="required" autocomplete="off">
                        <input type="submit" class="fadeIn fourth" value="Log In">
                      </form>
                  
                  
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>




    <?php include('footer.php'); ?>
    
<script src="./assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="./assets/vendors/jquery/jquery-3.6.0.min.js"></script>
</body>
</html>

