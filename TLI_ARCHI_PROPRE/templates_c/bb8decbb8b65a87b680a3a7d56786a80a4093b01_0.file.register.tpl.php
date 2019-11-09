<?php
/* Smarty version 3.1.33, created on 2019-10-16 18:18:40
  from 'C:\wamp64\www\TLI_ARCHI_PROPRE\TLI_ARCHI_PROPRE\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da75f00bb5486_48504372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb8decbb8b65a87b680a3a7d56786a80a4093b01' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI_ARCHI_PROPRE\\TLI_ARCHI_PROPRE\\templates\\register.tpl',
      1 => 1570124800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5da75f00bb5486_48504372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form class="form" action="?action=AddUser" method="POST">
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
			<label for="Email" class="floatLabel">Mail</label>
			<input id="Email" name="email" type="text" required placeholder="prénom.nom">
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
