<?php
/* Smarty version 3.1.33, created on 2019-10-17 14:06:47
  from 'C:\wamp64\www\TLI_ARCHI_PROPRE\TLI_ARCHI_PROPRE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da87577f2e074_15323646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a11e4188334e5db67da0d83286a2ab09aa1a186e' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI_ARCHI_PROPRE\\TLI_ARCHI_PROPRE\\templates\\header.tpl',
      1 => 1571321204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da87577f2e074_15323646 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">


<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/cssprincipal.css">
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print">
	<title>Accuponcture Chinoise</title>
</head>

<body>

<nav>
    <ul>
    	<li> <a href="?action=">Accueil</a></li>
	  	<li> <a href="?action=pathologies">Pathologies</a></li>
    	<li> <a href="?action=sources">Sources</a></li>
			<?php if ((empty($_smarty_tpl->tpl_vars['UtilisateurConnecte']->value))) {?>
	  	<li> <a href="?action=login">Connexion</a></li>
			<?php } else { ?>
			 <label id="hello">Bonjour <?php echo $_smarty_tpl->tpl_vars['UtilisateurConnecte']->value->nom;?>
</label>
			<li> <a href="?action=logout">Deconnexion</a></li>
			<?php }?>
    </ul>
		<?php if ((!empty($_smarty_tpl->tpl_vars['errorMessage']->value))) {?>
		<div id="error_message">
		    <?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>

		</div>
		<?php }?>

</nav>
<?php }
}
