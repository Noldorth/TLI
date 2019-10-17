<?php

require_once('Models/User.php');
class ControleurRegister
{
  public static Function register()
  {
    $Nom=$_POST['nom'];
    $Prenom=$_POST['prenom'];
    $Mail = $_POST['email'];
    $Password = $_POST['password'];
    $Confirm_password=$_POST['confirm_password'];
	  if($Password==$Confirm_password)
      {
        $Password=password_hash($Password, PASSWORD_BCRYPT);
        $User = new User($Mail,$Password,$Nom,$Prenom);
			  $User->AddUser();
      }
    else
      {
			return "mots de passe pas identiques";
			//echo 'mot de passe pas identique';
			 //$smarty->assign("ErrorMessage","Les deux mots de passe ne sont identiques");
      }
  }
}

?>
