<?php
/* Smarty version 3.1.33, created on 2019-10-16 18:17:50
  from 'C:\wamp64\www\TLI_ARCHI_PROPRE\TLI_ARCHI_PROPRE\templates\defaut.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da75ecee1fc84_48096072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8365aef270d31a4153c61e6768fa075ffa3996f' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI_ARCHI_PROPRE\\TLI_ARCHI_PROPRE\\templates\\defaut.tpl',
      1 => 1571248835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5da75ecee1fc84_48096072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="form_recherche">
<form method="GET" action="./recherche.php">
  <label for="id_category">Catégorie :</label>
  <select id="id_category">
    <option>...</option>


  </select>

  <label for="id_meridien">Méridien :</label>
  <select id="id_meridien">
    <option>...</option>
  </select>

  <div>
    Type pathologie :
    <input type="checkbox" name="meridien" value="Méridien">Méridien</input>
    <input type="checkbox" name="organe" value="Organe/Viscère">Organe/Viscère</input>
    <input type="checkbox" name="tendino-musculaires" value="Tendino-musculaire">Tendino-musculaire</input>
    <input type="checkbox" name="branches" value="branches">Branches (voies lu)</input>
    <input type="checkbox" name="merveilleux" value="merveilleux">Merveilleux vaisceaux</input>
  </div>

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
</id>
</body>
</html>
<?php }
}
