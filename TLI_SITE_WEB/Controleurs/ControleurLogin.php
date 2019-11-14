<?php

class ControleurLogin
{
    public static Function login()
    {
        // Set des variables php avec les informations reçue venant du formulaire html
      $mail=$_POST['login'];
      $password=$_POST['password'];
        
        // Lancement de la fonction modele login 
      $user=User::login($mail,$password);
        
        //Création de la session avec le résultat de la fonction modele
      $_SESSION['user']=$user;
        
        // Si la session est initialisée, on appel l'index. Sinon, mauvais mdp.
      if(isset($_SESSION['user']))
      {
        header("Location:index.php");        
      }
      else
      {
        return "mauvais mdp";
      }
    }
    
    // Deconnexion (suppression session)
    public static Function logout()
      {
  			session_unset();
  			session_destroy();
  			header("Location:index.php");
      }
  }

?>
