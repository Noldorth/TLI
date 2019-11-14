<?php
/* Smarty version 3.1.33, created on 2019-11-14 13:26:14
  from 'C:\wamp64\www\TLI_ARCHI_PROPRE\TLI_ARCHI_PROPRE\templates\defaut.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcd55f6a05ea4_07427986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8365aef270d31a4153c61e6768fa075ffa3996f' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI_ARCHI_PROPRE\\TLI_ARCHI_PROPRE\\templates\\defaut.tpl',
      1 => 1573737971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5dcd55f6a05ea4_07427986 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Accuponcture Chinoise</h1>

<h2>Bienvenue sur ce site ! Vous y trouverez tout ce que vous avez toujours voulu savoir sur l'accuponcture Chinoise !</h2>



<?php if ((empty($_smarty_tpl->tpl_vars['UtilisateurConnecte']->value))) {?>
	
			<?php } else { ?>
<div class="box">
  <div class="container-1">
  <span class="icon"><i class="fa fa-search"></i></span>
      <input type="search" id="search" placeholder="Search..." />
  </div>
</div>
			<?php }?>




</body>
</html>
<?php }
}
