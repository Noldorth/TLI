<?php
/* Smarty version 3.1.33, created on 2019-10-16 18:17:52
  from 'C:\wamp64\www\TLI_ARCHI_PROPRE\TLI_ARCHI_PROPRE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da75ed0e88831_34778054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceaa84c394115094d645521fd856b5ebc71a9209' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI_ARCHI_PROPRE\\TLI_ARCHI_PROPRE\\templates\\login.tpl',
      1 => 1571066543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5da75ed0e88831_34778054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="form">

    <h2>Identification</h2>

<form action="?action=logUser" name="login" method="post" accept-charset="utf-8" required autofocus>

      <input type="text" name="login" placeholder="Utilisateur" required/>
      <input type="password" name="password" placeholder="Mot de passe" required />
      <input class="button" type="submit" value="Connexion" method="post"/>

	  <p>Pas encore inscrit ? <a href="?action=register"><u>Cliquez ici !</u></a></p>
    </form>
  </div>









</body>



</html>
<?php }
}
