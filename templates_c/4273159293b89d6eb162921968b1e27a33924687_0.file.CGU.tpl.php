<?php
/* Smarty version 4.1.0, created on 2022-03-31 10:43:05
  from 'C:\testweb\www\CGU.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6245699903fe10_71998513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4273159293b89d6eb162921968b1e27a33924687' => 
    array (
      0 => 'C:\\testweb\\www\\CGU.tpl',
      1 => 1648716097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6245699903fe10_71998513 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Article11']->value, 'Article1');
$_smarty_tpl->tpl_vars['Article1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Article1']->value) {
$_smarty_tpl->tpl_vars['Article1']->do_else = false;
?>
                                <p class="article"><?php echo $_smarty_tpl->tpl_vars['Article1']->value;?>
</p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<h2>ARTICLE 2 : Accès au site </h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Article22']->value, 'Article2');
$_smarty_tpl->tpl_vars['Article2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Article2']->value) {
$_smarty_tpl->tpl_vars['Article2']->do_else = false;
?>
                                <p class="article"><?php echo $_smarty_tpl->tpl_vars['Article2']->value;?>
</p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<h2>ARTICLE 3 : Collecte des données </h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Article33']->value, 'Article3');
$_smarty_tpl->tpl_vars['Article3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Article3']->value) {
$_smarty_tpl->tpl_vars['Article3']->do_else = false;
?>
                                <p class="article"><?php echo $_smarty_tpl->tpl_vars['Article3']->value;?>
</p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<h2> ARTICLE 4 : Propriété intellectuelle</h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Article44']->value, 'Article4');
$_smarty_tpl->tpl_vars['Article4']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Article4']->value) {
$_smarty_tpl->tpl_vars['Article4']->do_else = false;
?>
                                <p class="article"><?php echo $_smarty_tpl->tpl_vars['Article4']->value;?>
</p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<h2>ARTICLE 5 : Responsabilité </h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Article55']->value, 'Article5');
$_smarty_tpl->tpl_vars['Article5']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Article5']->value) {
$_smarty_tpl->tpl_vars['Article5']->do_else = false;
?>
                                <p class="article"><?php echo $_smarty_tpl->tpl_vars['Article5']->value;?>
</p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<h2>ARTICLE 6 : Liens hypertextes </h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Article66']->value, 'Article6');
$_smarty_tpl->tpl_vars['Article6']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Article6']->value) {
$_smarty_tpl->tpl_vars['Article6']->do_else = false;
?>
                                <p class="article"><?php echo $_smarty_tpl->tpl_vars['Article6']->value;?>
</p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<h2> ARTICLE 7 : Cookies</h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Article77']->value, 'Article7');
$_smarty_tpl->tpl_vars['Article7']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Article7']->value) {
$_smarty_tpl->tpl_vars['Article7']->do_else = false;
?>
                                <p class="article"><?php echo $_smarty_tpl->tpl_vars['Article7']->value;?>
</p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<h2>ARTICLE 8 : Publication par l’Utilisateur </h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Article88']->value, 'Article8');
$_smarty_tpl->tpl_vars['Article8']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Article8']->value) {
$_smarty_tpl->tpl_vars['Article8']->do_else = false;
?>
                                <p class="article"><?php echo $_smarty_tpl->tpl_vars['Article8']->value;?>
</p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<h2> ARTICLE 9 : Droit applicable et juridiction compétente</h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Article99']->value, 'Article9');
$_smarty_tpl->tpl_vars['Article9']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Article9']->value) {
$_smarty_tpl->tpl_vars['Article9']->do_else = false;
?>
                                <p class="article"><?php echo $_smarty_tpl->tpl_vars['Article9']->value;?>
</p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

 
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
<?php }
}
