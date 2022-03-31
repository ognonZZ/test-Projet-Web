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
    <link rel="stylesheet" href="./assets/nav&footer.css" class="css">
    <link rel="stylesheet" href="./assets/stages.css" class="css">

</head>
<body>
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
                  
                </div>
                <div class="col-lg-1 barnav">
                    <img class="photoprofil" src="image/PP.png" width= "20%" height="100%" alt="photoprofil" style="border-radius: 50%" onclick="window.location.href='profil.php';">

                </div>
            </div>
        </div>
    </nav>
    <div><br></div>


<h1>Conditions générales d'utilisation</h1>
<h2> Article 1 : Les mentions légales</h2>
{foreach $Article11 AS $Article1}
                                <p class="article">{$Article1}</p>
                            {/foreach}
<h2>ARTICLE 2 : Accès au site </h2>
{foreach $Article22 AS $Article2}
                                <p class="article">{$Article2}</p>
                            {/foreach}
<h2>ARTICLE 3 : Collecte des données </h2>
{foreach $Article33 AS $Article3}
                                <p class="article">{$Article3}</p>
                            {/foreach}
<h2> ARTICLE 4 : Propriété intellectuelle</h2>
{foreach $Article44 AS $Article4}
                                <p class="article">{$Article4}</p>
                            {/foreach}
<h2>ARTICLE 5 : Responsabilité </h2>
{foreach $Article55 AS $Article5}
                                <p class="article">{$Article5}</p>
                            {/foreach}
<h2>ARTICLE 6 : Liens hypertextes </h2>
{foreach $Article66 AS $Article6}
                                <p class="article">{$Article6}</p>
                            {/foreach}
<h2> ARTICLE 7 : Cookies</h2>
{foreach $Article77 AS $Article7}
                                <p class="article">{$Article7}</p>
                            {/foreach}
<h2>ARTICLE 8 : Publication par l’Utilisateur </h2>
{foreach $Article88 AS $Article8}
                                <p class="article">{$Article8}</p>
                            {/foreach}
<h2> ARTICLE 9 : Droit applicable et juridiction compétente</h2>
{foreach $Article99 AS $Article9}
                                <p class="article">{$Article9}</p>
                            {/foreach}

 
<!-- Footer -->
<footer class="bg-light text-center text-lg-start">
        <div class="container-fluid header">
            <div class="row background">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <ul class="list-unstyled mb-0">
                        <li>
                        <a href="#!" class="link">A propos de nous</a>
                        </li>
                        <li>
                        <a href="#!" class="link">Nous contacter</a>
                        </li>
                        <li>
                        <a href="#!" class="link">Support</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                        <ul class="list-unstyled mb-0">
                            <li>
                            <a href="Stages.php" class="link">Stage</a>
                            </li>
                            <li>
                            <a href="Entreprises.php" class="link">Entreprise</a>
                            </li>
                            <li>
                            <a href="#!" class="link">Partenariat</a>
                            </li>
                        </ul>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-3">
                    <section class="mb-4">
                        <!-- Facebook -->
                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #3b5998;"
                        href="#!"
                        role="button"
                        ><i class="fab fa-facebook-f"></i
                        ></a>
                
                        <!-- Twitter -->
                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #55acee;"
                        href="#!"
                        role="button"
                        ><i class="fab fa-twitter"></i
                        ></a>
                
                        <!-- Google -->
                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #dd4b39;"
                        href="#!"
                        role="button"
                        ><i class="fab fa-google"></i
                        ></a>
                
                        <!-- Instagram -->
                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #ef4b64;"
                        href="#!"
                        role="button"
                        ><i class="fab fa-instagram"></i
                        ></a>
                
                        <!-- Linkedin -->
                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #0082ca;"
                        href="#!"
                        role="button"
                        ><i class="fab fa-linkedin-in"></i
                        ></a>
                        <!-- Github -->
                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #333333;"
                        href="#!"
                        role="button"
                        ><i class="fab fa-github"></i
                        ></a>
                    </section>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="text-center p-3 copyright" style="background-color: #3C3F49;">
          <pre>© 2022    À propos   Accessibilité   Conditions générales d’utilisation de InternView    Politique de confidentialité    Politique relative aux cookies   Politique de copyright</pre>
        </div>
        <!-- Copyright -->
    </footer>
<!-- Footer -->


</body>
</html>
