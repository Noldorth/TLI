<!DOCTYPE html>
<html lang="fr">

	<?php
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=acubd', 'root', '');
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
		
		?>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/cssprincipal.css">
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print">
	<title>Accuponcture Chinoise</title>
</head>

<body>

<nav>
    <ul>
      <li> <a href="./index.html">Accueil</a></li>
	  <li> <a href="./pathologies.html">Pathologies</a></li>
      <li> <a href="./sources.html">Sources</a></li>
	  <li> <a href="./pagedeco.html">Connexion</a></li>
    </ul>

</nav>	

<h1>Accuponcture Chinoise</h1>

<div class="form_recherche">
<form method="GET" action="./recherche.php">
  <label for="id_category">Catégorie :</label>
  <select id="id_category"> 
    <option>...</option>
	
		
		<?php
		$reponse = $bdd->query('SELECT DISTINCT type FROM patho');
		
		while ($data = $reponse->fetch()){
	
		echo '<option value="'.$data[type].'">'.$data[type].'</option>';
	
		}
	?>
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
