<?php

require_once('Models/recherche.php');
class ControleurRegister
{

  public static Function recherche($smarty)
  {
    $meridien=$_POST['nom'];
    $
    
	var_dump($_POST);
	var_dump($Mail);
    $User = new User($Mail,$Password,$Nom,$Prenom);
    $User->AddUser();
    return $smarty;
  }
  public static function affichMeridienController()
  {
    recherche::affichageMeridien();
  }

}

?>