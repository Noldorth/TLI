<?php

require_once('lib/bd/database.php');
class User
{
  public $mail ;
  public $password;
  public $nom;
  public $prenom;

  function __construct($mail=null,$password=null,$nom=null,$prenom=null)
  {
		$this->mail=$mail;
		$this->password=$password;
	    $this->nom=$nom;
	    $this->prenom=$prenom;
  }

  function AddUser()
  {
    $maBD = new BD();
    $resultat = $maBD->exec("insert into users(mail,password,nom,prenom) values('$this->mail','$this->password','$this->nom','$this->prenom')");
  }

  public static function login($email,$password)
  {
    $maBD = new BD();
    $passwordHash = $maBD->requete("select password from users where mail='$email'");
    $user=null;
    if (password_verify($password,$passwordHash[0]['password']))
    {
        $user=$maBD->requete("SELECT mail,password,nom,prenom FROM users where mail='$email';","User");      
    }
    return isset($user[0])?$user[0]:null;
  }

}

 ?>
