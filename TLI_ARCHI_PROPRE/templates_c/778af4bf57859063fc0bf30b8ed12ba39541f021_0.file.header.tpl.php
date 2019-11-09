<?php
/* Smarty version 3.1.33, created on 2019-10-16 18:09:33
  from 'C:\wamp64\www\TLI_ARCHI_PROPRE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da75cdd39e390_59732717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '778af4bf57859063fc0bf30b8ed12ba39541f021' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI_ARCHI_PROPRE\\templates\\header.tpl',
      1 => 1571249368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da75cdd39e390_59732717 (Smarty_Internal_Template $_smarty_tpl) {
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
