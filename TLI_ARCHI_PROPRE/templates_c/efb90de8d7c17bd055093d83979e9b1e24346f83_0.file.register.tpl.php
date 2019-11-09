<?php
/* Smarty version 3.1.33, created on 2019-10-03 17:50:38
  from 'C:\wamp64\www\max\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9634ee1d7540_54086322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efb90de8d7c17bd055093d83979e9b1e24346f83' => 
    array (
      0 => 'C:\\wamp64\\www\\max\\templates\\register.tpl',
      1 => 1570124800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5d9634ee1d7540_54086322 (Smarty_Internal_Template $_smarty_tpl) {
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
