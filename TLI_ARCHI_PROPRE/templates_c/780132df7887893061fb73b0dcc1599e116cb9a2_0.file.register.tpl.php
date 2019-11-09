<?php
/* Smarty version 3.1.33, created on 2019-09-12 11:58:33
  from 'C:\wamp64\www\smarty_projet\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7a32e95434e7_52390516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '780132df7887893061fb73b0dcc1599e116cb9a2' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty_projet\\templates\\register.tpl',
      1 => 1568289511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7a32e95434e7_52390516 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/cssprincipal.css">
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print">
	<title>Inscription</title>
</head>


<body>

<nav>
    <ul>
      <li> <a href="?action=defaut">Accueil</a></li>
    </ul>
</nav>	




<form class="form" action="php/creation.php" method="POST">
  <h2>Inscription</h2>
  
		<div>
			<label for="nom" class="floatLabel">Nom</label>
			<input id="nom" name="nom" required type="text" method="POST">
		</div>
  
		 <div>
			<label for="prenom" class="floatLabel">Prénom</label>
			<input id="prenom" name="prenom" required type="text" method="POST">
		 </div>
  
		<div>
			<label for="Email" class="floatLabel">Identifiant</label>
			<input id="Email" name="id" type="text" required placeholder="prénom.nom">
		</div>
		<div>
			<label for="password" class="floatLabel">Mot de passe</label>
			<input id="password" name="password" type="password" required>
		
		</div>
		<div>
			<label for="confirm_password" class="floatLabel">Confirmer le mot de passse</label>
			<input id="confirm_password" name="confirm_password" type="password" required >
		</div>
		<div>
			
			<div class="boutoninscrip">
			<button type="submit" class="btn btn-success" method="POST">Créer mon compte</button>
			</div>
		</div>
</form>


 



</body>

</html>
<?php }
}
