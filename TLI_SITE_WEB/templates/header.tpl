<!DOCTYPE html>
<html lang="fr">


<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/cssprincipal.css">
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print">
	<title>Accuponcture Chinoise</title>
</head>

<body>

<!-- Menu de navigation -->

<nav>
    <ul>
    	<li> <a href="?action=">Accueil</a></li>
	  	<li> <a href="?action=pathologies">Pathologies</a></li>
    	<li> <a href="?action=sources">Sources</a></li>
	
		<!-- Si un user est connecté, on affiche son nom et le bouton "Deconnexion". Sinon, on affiche le bouton "Connexion" -->
			{if (empty($UtilisateurConnecte))}
	  	<li> <a href="?action=login">Connexion</a></li>
			{else}
			 <label id="hello">Bonjour {$UtilisateurConnecte->nom}</label>
			<li> <a href="?action=logout">Deconnexion</a></li>
			{/if}
    </ul>
		

</nav>
