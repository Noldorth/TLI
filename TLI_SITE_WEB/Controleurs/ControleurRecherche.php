<?php
  require_once('Models/patho.php');
  require_once('Models/recherche.php');
  
class ControleurRecherche
{

  public static Function recherche($smarty)
  {
    $meridi=$_POST['meridien'];
    $typePath = $_POST['typePat'];
    $caracteristi =$_POST['caracteristique']; 
    
    
	//var_dump($_POST);

  $recherche = new recherche($meridi, $typePath, $caracteristi);
  return $recherche->getresultatRecherche();
    
    
  }
    public static function affichMeridienController()
    {
        $meridien = recherche::affichageMeridien();
        return $meridien;
    }
	/*
    public static function affichTypePathoController()
    {
        $typePatho = recherche::affichageTypePatho();
        return $typePatho;
    }
    public static function affichCaractController()
    {
        $caract = recherche::caracteristiquePatho();
        return $caract;
    }
    public static function resultatRecherche()
    {
        $recher = recherche::recupererPatho();
        return $recher;
    }*/
	
	// Lancement de la fonction modele pour récupérer la liste des pathologies
    public static function affichPatho()
    {
        $patho = patho::getPatho();
        return $patho;
    }

}
?>
