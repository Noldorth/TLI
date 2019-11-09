<?php
/* Smarty version 3.1.33, created on 2019-10-17 15:18:31
  from 'C:\wamp64\www\TLI_ARCHI_PROPRE\templates\pathologies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da886479c4191_82761146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab0b111771e7155e396608d26a02fcead1b9231a' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI_ARCHI_PROPRE\\templates\\pathologies.tpl',
      1 => 1571325508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5da886479c4191_82761146 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\TLI_ARCHI_PROPRE\\lib\\smarty-3.1.33\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="form_recherche">
<form method="POST" action="?action=recherche">
  <!--<label for="id_category">Catégorie :</label>
  <select id="id_category">
    <option>...</option>


  </select>

  <label for="id_meridien">Méridien :</label>
  <select id="id_meridien">
    <option>...</option>
  </select>

  -->

  <div>
    <?php echo smarty_function_html_options(array('name'=>'meridien','options'=>$_smarty_tpl->tpl_vars['meridiens']->value),$_smarty_tpl);?>

  
  </div>
  <div>
    <?php echo smarty_function_html_options(array('name'=>'typePat','options'=>$_smarty_tpl->tpl_vars['typePatho']->value),$_smarty_tpl);?>

    
  </div>
  <div>
    <?php echo smarty_function_html_options(array('name'=>'caracteristique','options'=>$_smarty_tpl->tpl_vars['caracteristique']->value),$_smarty_tpl);?>

    
  </div>
  <input type="submit" value="Rechercher">
  <div>
  <!--<?php
$__section_customer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['recherche']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_customer_0_total = $__section_customer_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_customer'] = new Smarty_Variable(array());
if ($__section_customer_0_total !== 0) {
for ($__section_customer_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] = 0; $__section_customer_0_iteration <= $__section_customer_0_total; $__section_customer_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']++){
?>
  id: <?php echo $_smarty_tpl->tpl_vars['recherche']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_type']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_type']->value['index'] : null)];?>
<br />
<?php
}
}
?>-->
  </div>

</form>
</id>
</body>
</html>
<?php }
}
