<?php

require_once('Models/User.php');
class ControleurLogin
{
    public static Function login()
    {
      $mail=$_POST['login'];
      $password=$_POST['password'];
      $user=User::login($mail,$password);
      $_SESSION['user']=$user;
      if(isset($_SESSION['user']))
      {
        header("Location: /");        
      }
      else
      {
        return "mauvais mdp";
      }
    }
    public static Function logout()
      {
        session_start();
  			session_unset();
  			session_destroy();
  			header("Location: /");
      }
  }

?>
