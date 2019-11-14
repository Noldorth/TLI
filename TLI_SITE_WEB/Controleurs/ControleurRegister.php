<?php

require_once('Models/User.php');
class ControleurRegister
{
  public static Function register()
  {
	  // Set des variables php avec les éléments reçus du formulaire html
    $Nom=$_POST['nom'];
    $Prenom=$_POST['prenom'];
    $Mail = $_POST['email'];
    $Password = $_POST['password'];
    $Confirm_password=$_POST['confirm_password'];
	  if($Password==$Confirm_password)
      {
		  // hashage du password
        $Password=password_hash($Password, PASSWORD_BCRYPT);
		  
		  // Création de l'utilisateur dans la bdd
        $User = new User($Mail,$Password,$Nom,$Prenom);
			  $User->AddUser();
      }
    else
      {
	    // Resultat si les mdp renseignés dans le formulaire ne sont pas identiques
			return "mots de passe pas identiques";
			//echo 'mot de passe pas identique';
			 //$smarty->assign("ErrorMessage","Les deux mots de passe ne sont identiques");
      }
  }
}

?>
