<?php
/* Smarty version 3.1.33, created on 2019-11-14 14:51:30
  from 'C:\wamp64\www\TLI_ARCHI_PROPRE\TLI_ARCHI_PROPRE\templates\pathologies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcd69f283b2a9_51693127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c3a42cdf7bba590fa06bb09df04ecf02154ae4a' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI_ARCHI_PROPRE\\TLI_ARCHI_PROPRE\\templates\\pathologies.tpl',
      1 => 1573743088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5dcd69f283b2a9_51693127 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\TLI_ARCHI_PROPRE\\TLI_ARCHI_PROPRE\\lib\\smarty-3.1.33\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Accuponcture Chinoise</h1>



<div class="form_recherche">
<form method="GET" action="?action=recherche">
  <label for="id_category">Catégorie :</label>
  <select id="id_category">
    <option>...</option>


  </select>

  <label for="id_meridien">Méridien :
  <div>
    <?php echo smarty_function_html_options(array('name'=>'meridien','options'=>$_smarty_tpl->tpl_vars['meridiens']->value),$_smarty_tpl);?>
 
  </div>
  </label>




  <div>
    Caractéristiques :
    <input type="checkbox" name="plein" value="plein">plein</input>
    <input type="checkbox" name="chaud" value="chaud">chaud</input>
    <input type="checkbox" name="vide" value="vide">vide</input>
    <input type="checkbox" name="froid" value="froid">froid</input>
    <input type="checkbox" name="interne" value="interne">interne</input>
    <input type="checkbox" name="externe" value="externe">interne</input>
  </div>

  <input type="submit" value="Rechercher">
  
</form>
</div>

<div>
  <h2>Pathologies</h2>
  <ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['patho']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
      <li class="patho"><?php echo $_smarty_tpl->tpl_vars['item']->value['idP'];?>
 : <?php echo $_smarty_tpl->tpl_vars['item']->value['desc'];?>
</li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
  <div>
  

</body>
</html>
<?php }
}
