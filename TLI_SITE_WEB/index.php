<?php

require_once('Models/User.php');
session_start();
require 'lib/smarty-3.1.33/libs/Smarty.class.php';
require 'lib/router/Router.class.php';

$smarty = new Smarty();
//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;//mettre à true pour la production; attention aux droits d'écriture sur le serveur pour le répertoire de cache!
$smarty->cache_lifetime = 0;//120

// Récupère l'action dans l'URL
$action = "";
if(isset($_GET["action"]) && check($_GET["action"],"chaineAlpha")==1){
	$action = $_GET['action'];
}

// Appel du routeur en envoyant les variables smarty et la valeur de action
$router = new Router($smarty,$action);

// Définition du template a afficher décidé par le routeur
$tpl = $router->processAction();

// Affichage du template par smarty
$smarty->display($tpl);
?>
