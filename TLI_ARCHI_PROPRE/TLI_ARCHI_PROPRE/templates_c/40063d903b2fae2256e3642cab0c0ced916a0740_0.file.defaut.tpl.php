<?php
/* Smarty version 3.1.33, created on 2019-10-03 16:36:14
  from 'C:\wamp64\www\TLI-dev\TLI-dev\templates\defaut.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d96237ed32ef3_98691236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40063d903b2fae2256e3642cab0c0ced916a0740' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI-dev\\TLI-dev\\templates\\defaut.tpl',
      1 => 1568302057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d96237ed32ef3_98691236 (Smarty_Internal_Template $_smarty_tpl) {
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
      <li> <a href="./index.html">Accueil</a></li>
	  <li> <a href="./pathologies.html">Pathologies</a></li>
      <li> <a href="./sources.html">Sources</a></li>
	  <li> <a href="?action=login">Connexion</a></li>
    </ul>

</nav>	

<h1>Accuponcture Chinoise</h1>

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
