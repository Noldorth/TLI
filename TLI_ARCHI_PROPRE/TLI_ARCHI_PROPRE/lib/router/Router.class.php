<?php
/*
	Routeur de base
	Mettre à jour la map mapTpl pour l'ajout d'une nouvelle vue
	Vous pouvez également créer d'autres classes spécifiant chaque routage particulier
	ou plus simplement mais moins proprement commencer par gérer ici toutes les routes
*/

require ('lib/checkers/checkers.php');
require_once ('Controleurs/ControleurRegister.php');
require_once ('Controleurs/ControleurLogin.php');

class Router
{
	private $smarty = null;
	private $action = "";
	const mapTpl = array(
		"register" => "templates/register.tpl",
		"login" => "templates/login.tpl",
		"logout" => "templates/defaut.tpl",
		"pathologies" => "templates/pathologies.tpl",
		"sources" => "templates/sources.tpl",
		"AddUser" => "templates/login.tpl",
		"logUser" => "templates/login.tpl"
	);

	function __construct($smarty,$action )
	{
		$this->smarty = $smarty;
		if(isset(Router::mapTpl[$action]))
		{
				$this->action = $action;
		}
	}

	function processAction()
	{
		$ret = "templates/defaut.tpl";
		$error = null;
		if($this->action!="")
		{
			$ret = Router::mapTpl[$this->action];
		}

		if(	$this->action == "AddUser")
		{
			 $error=ControleurRegister::register();
		}
		if(	$this->action == "logout")
		{
				ControleurLogin::logout();
		}
		if(	$this->action == "logUser")
		{
			$error=ControleurLogin::login();
		}
		$this->smarty->assign("UtilisateurConnecte",isset($_SESSION['user'])?$_SESSION['user']:null);
		$this->smarty->assign("errorMessage",$error);
		return $ret;
	}


	}
?>
