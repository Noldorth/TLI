<?php

require_once('lib/bd/database.php');

// definition de la classe User
class User
{
  public $mail ;
  public $password;
  public $nom;
  public $prenom;

  function __construct($mail=null,$password=null,$nom=null,$prenom=null)
  {
	  // récupération des variables rentrées dans le formulaire d'inscription
		$this->mail=$mail;
		$this->password=$password;
	    $this->nom=$nom;
	    $this->prenom=$prenom;
  }

  function AddUser()
  {
	  // insertion d'un nouvel utilisateur dans la bdd
    $maBD = new BD();
    $resultat = $maBD->exec("insert into users(mail,password,nom,prenom) values('$this->mail','$this->password','$this->nom','$this->prenom')");
  }

  public static function login($email,$password)
  {
	  // authentification d'un utilisateur. Comparaison du login et du pwd, comparaison.
    $maBD = new BD();
    $passwordHash = $maBD->requete("select password from users where mail='$email'");
    $user=null;
    if (empty($passwordHash) ==false && password_verify($password,$passwordHash[0]['password']))
    {
        $user=$maBD->requete("SELECT mail,password,nom,prenom FROM users where mail='$email';","User");      
    }
    return isset($user[0])?$user[0]:null;
  }

}

 ?>
