<?php

include('connect.php');
$login=$_POST['id'];
$mdp=$_POST['password'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$confirm_password=$_POST['confirm_password'];




if($_POST['password'] == $_POST['confirm_password']) {
	
if($bdd->exec("INSERT INTO session(login,password) VALUES ('$login','$mdp')"))
{
	header('Location:../success.php');
	
}
else
{
	header('Location:erreur.php');
	exit();
}
	
} else {
	echo "les mots de passes de ne correspondent pas";
}







?>