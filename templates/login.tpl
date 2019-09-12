<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/cssprincipal.css">
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print">
	<title>Connexion</title>
</head>

<body>

<nav>
    <ul>
      <li> <a href="?action=defaut">Accueil</a></li>
    </ul>
</nav>	


  <div class="form">
  
    <h2>Identification</h2>
	
	<form action="lib/login/index.php?action=register" name="login" method="post" accept-charset="utf-8" required autofocus>

      <input type="text" name="login" placeholder="Utilisateur"/>
      <input type="password" name="password" placeholder="Mot de passe"/>
      <input class="button" type="submit" value="Connexion" method="post"/>
	  
	  <p>Pas encore inscrit ? <a href="?action=register"><u>Cliquez ici !</u></a></p>
    </form>
  </div>









</body>



</html>
