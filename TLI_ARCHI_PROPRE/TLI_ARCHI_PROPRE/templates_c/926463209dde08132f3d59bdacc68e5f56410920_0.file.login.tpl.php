<?php
/* Smarty version 3.1.33, created on 2019-10-14 11:36:56
  from 'C:\wamp64\www\projet_TLI\TLI\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da45dd84c7d34_60152191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '926463209dde08132f3d59bdacc68e5f56410920' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_TLI\\TLI\\templates\\login.tpl',
      1 => 1570123277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5da45dd84c7d34_60152191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="form">

    <h2>Identification</h2>

<form action="lib/login/index.php?action=logUser" name="login" method="post" accept-charset="utf-8" required autofocus>

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
