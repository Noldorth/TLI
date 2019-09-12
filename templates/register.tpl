<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/cssprincipal.css">
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print">
	<title>Inscription</title>
</head>


<body>

<nav>
    <ul>
      <li> <a href="?action=defaut">Accueil</a></li>
    </ul>
</nav>	




<form class="form" action="php/creation.php" method="POST">
  <h2>Inscription</h2>
  
		<div>
			<label for="nom" class="floatLabel">Nom</label>
			<input id="nom" name="nom" required type="text" method="POST">
		</div>
  
		 <div>
			<label for="prenom" class="floatLabel">Prénom</label>
			<input id="prenom" name="prenom" required type="text" method="POST">
		 </div>
  
		<div>
			<label for="Email" class="floatLabel">Identifiant</label>
			<input id="Email" name="id" type="text" required placeholder="prénom.nom">
		</div>
		<div>
			<label for="password" class="floatLabel">Mot de passe</label>
			<input id="password" name="password" type="password" required>
		
		</div>
		<div>
			<label for="confirm_password" class="floatLabel">Confirmer le mot de passse</label>
			<input id="confirm_password" name="confirm_password" type="password" required >
		</div>
		<div>
			
			<div class="boutoninscrip">
			<button type="submit" class="btn btn-success" method="POST">Créer mon compte</button>
			</div>
		</div>
</form>


 



</body>

</html>
