<?php
require_once('lib/bd/database.php');
class recherche
{
    private $meridien;
    private $TypePatho;
    private $Caracteristique;
    private $resultatRecherche;

    function __contruct($meridien, $TypePatho, $Caracteristique)
    {
        $this->$meridien = $meridien;
        $this->$TypePatho = $TypePatho;
        $this->$Caracteristique = $Caracteristique;
    }
  

    public static function affichageMeridien()
    {
        $listMeridien = new BD();
        $meridiens = $listMeridien->requete('SELECT Nom from Meridien');
        return $meridiens;
    }
    
    /*public static function affichageTypePatho()
    {
        $typePatho = new BD();
        $listTypePatho = $typePatho->requete('SELECT Nom from Meridien');
        return $listTypePatho;
    }
    public static function caracteristiquePatho()
    {
        $caractPatho = new BD();
        $listCaractPatho = $caractPatho->requete('SELECT Nom from Meridien');
        return $listCaractPatho;
    }
    public static function recupererPatho()
    {
        $listPatho = new BD();
        //$resultatRecherche = $listPatho->requete('SELECT Nom from patho');
        //return $resultatRecherche;

    }
    /*public static function getResultatRecherche()
    {
        return $this->$resultatRecherche;
    }*/
    



}



?>