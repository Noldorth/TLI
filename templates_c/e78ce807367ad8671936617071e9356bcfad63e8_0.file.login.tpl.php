<?php
/* Smarty version 3.1.33, created on 2019-09-12 14:50:23
  from 'C:\wamp64\www\smarty_projet\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7a5b2f7d9c85_87029879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e78ce807367ad8671936617071e9356bcfad63e8' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty_projet\\templates\\login.tpl',
      1 => 1568298233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7a5b2f7d9c85_87029879 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/cssprincipal.css">
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print">
	<title>Connexion</title>
</head>

<body>

<nav>
    <ul>
      <li> <a href="?action=defaut">Accueil</a></li>
    </ul>
</nav>	


  <div class="form">
  
    <h2>Identification</h2>
	
	<form action="lib/login/index.php?action=register" name="login" method="post" accept-charset="utf-8" required autofocus>

      <input type="text" name="login" placeholder="Utilisateur"/>
      <input type="password" name="password" placeholder="Mot de passe"/>
      <input class="button" type="submit" value="Connexion" method="post"/>
	  
	  <p>Pas encore inscrit ? <a href="?action=register"><u>Cliquez ici !</u></a></p>
    </form>
  </div>









</body>



</html>
<?php }
}
