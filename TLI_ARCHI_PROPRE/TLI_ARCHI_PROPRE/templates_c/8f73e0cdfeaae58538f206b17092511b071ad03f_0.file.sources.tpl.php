<?php
/* Smarty version 3.1.33, created on 2019-10-16 17:58:41
  from 'C:\wamp64\www\TLI_ARCHI_PROPRE\templates\sources.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da75a51c30a39_76621970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f73e0cdfeaae58538f206b17092511b071ad03f' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI_ARCHI_PROPRE\\templates\\sources.tpl',
      1 => 1571053473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5da75a51c30a39_76621970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Accuponcture Chinoise</h1>

<h2>Sources</h2>

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
