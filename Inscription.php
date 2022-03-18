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
    <link rel="stylesheet" href="./assets/inscription.css" class="css">
</head>
<body>
<!-- Barre de navigation -->
    <nav>
        <div class="container-fluid header">
            <div class="row">
                <div class="col-lg-2 barnav">
                    <img class="logo" src="image/logo.png" alt="LOGO">
                </div>
                <div class="col-lg-4 barnav">
                </div>
                <div class="col-lg-3 barnav">
                    <input class="style-button" type="button" value="Accueil" onclick="window.location.href='Accueil.html';">
                    <input class="style-button" type="button" value="Stages" onclick="window.location.href='Stages.html';">
                    <input class="style-button" type="button" value="Entreprises" onclick="window.location.href='Entreprises.html';">
                </div>
                <div class="col-lg-1 barnav">
                    <i class="fas fa-heart navicon " onclick="window.location.href='https://twitter.com/ognonZZ';"></i>
                    <i class="fas fa-envelope navicon"onclick="window.location.href='https://twitter.com/ognonZZ';"></i>
					<i class="fas fa-bell navicon"onclick="window.location.href='https://twitter.com/ognonZZ';"></i>
                </div>
                <div class="col-lg-1 barnav">
                    <div class="txt">Prénom NOM</div>
                </div>
                <div class="col-lg-1 barnav">
                    <img class="photoprofil" src="image/PP.png" width= "20%" alt="photoprofil" style="border-radius: 50%">
                </div>
            </div>
        </div>
    </nav>
<!-- Barre de navigation -->   


<div class="container-fluid section">

    
    <div class="row">
        
        <div class="col-6 slogan">
            <fieldset class="form1">
            <legend><b>Inscription</b></legend>
                <form class="needs-validation" novalidate>
                    
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">NOM</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="NOM" required>
                            <div class="invalid-feedback">
                                Merci d'indiquer votre NOM.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Prénom</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Prénom" required>
                            <div class="invalid-feedback">
                                Merci d'indiquer votre prénom.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Date de naissance</label>
                            <input type="date" class="form-control" id="validationCustom03" placeholder="Date de naissance" required>
                            <div class="invalid-feedback">
                                Merci d'indiquer votre date de naissance.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom04">Adresse mail</label>
                            <input type="text" class="form-control" id="validationCustom04" placeholder="Adresse mail" required>
                            <div class="invalid-feedback">
                                Merci d'indiquer votre Adresse mail.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom05">Adresse</label>
                            <input type="text" class="form-control" id="validationCustom05" placeholder="Adresse" required>
                            <div class="invalid-feedback">
                                Merci d'indiquer votre Adresse.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom06">Ville</label>
                            <input type="text" class="form-control" id="validationCustom06" placeholder="Ville" required>
                            <div class="invalid-feedback">
                                Merci d'indiquer votre Ville.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom07">Code Postal</label>
                            <input type="text" class="form-control" id="validationCustom07" placeholder="Code Postal" required>
                            <div class="invalid-feedback">
                                Merci d'indiquer votre code postal.
                            </div>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom08">Centre</label>
                            <input type="text" class="form-control" id="validationCustom08" placeholder="Centre" required>
                            <div class="invalid-feedback">
                                Merci d'indiquer votre Centre.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom09">Promotion</label>
                            <input type="text" class="form-control" id="validationCustom09" placeholder="Promotion" required>
                            <div class="invalid-feedback">
                                Merci d'indiquer votre Promotion.
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Quel est votre rôle?</label>
                            <select id="choixCategorie" class="form-control" onchange="myFunction()" required>
                              <option selected value="">Selectionner...</option>
                              <option value="executionDeScript">Pilote</option>
                              <option>Etudiant</option>
                              <option>Délégué</option>
                            </select>
                            <div id="collapseCategorie"></div>   
                        </div>
                            <div class="invalid-feedback">
                                Merci d'indiquer votre code postal.
                            </div>  
                    </div> 




                    <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                        You must agree before submitting.
                        </div>
                    </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
        </fieldset>
        </div>
  
        <div class="col-4 slogan"></div>
    </div>
</div>
  




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
                    <a href="#!" class="link">S’inscrire</a>
                    </li>
                    <li>
                    <a href="#!" class="link">Support</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">
                    <ul class="list-unstyled mb-0">
                        <li>
                        <a href="Stages.html" class="link">Stage</a>
                        </li>
                        <li>
                        <a href="Entreprises.html" class="link">Entreprise</a>
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
<script src="./assets/inscription.js"></script> 
</body>
</html>