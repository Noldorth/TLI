<?php
//ceci est la page envoi 
// Partie 1 : Récupération des données
// Partie 2 : Connexion à la BD en PDO
// Partie 3 : Insertion des données

//Partie 1 *************************************************

$recup_nom=$_POST['login'];
$recup_Mdp=$_POST['password'];


//Partie 2 **************************************************
include('connect.php');
//$bdd= getbdd ();

//Partie 3 ************************************************

$sql="SELECT * FROM session WHERE login='$recup_nom'";
$trouve=0;
$reponse=$bdd->query($sql);
while($donnees = $reponse->fetch()){
if (($donnees['login']==$recup_nom) AND ($donnees['password']==$recup_Mdp)){
	$trouve=1;
    $reponse2=$donnees['droit'];
	$id=$donnees['id_utilisateur'];
}
}
if ($trouve==1)
{

		session_start();
		$_SESSION['name']=$recup_nom;
		$_SESSION['password']=$recup_Mdp;
		$_SESSION['id']=$id;
		header('Location:../success.php');

}
else
	header('Location:../fail.php');
$bdd=NULL;
$reponse->closeCursor();
?>
