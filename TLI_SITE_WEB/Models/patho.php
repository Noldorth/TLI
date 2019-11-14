<?php 
require_once('lib/bd/database.php');
class patho
{
    private $idPatho;
    private $type;
    private $meridien;
    private $description;

    function __contruct($idPatho, $type, $meridien, $description)
    {
        $this->$idPatho = $idPatho;
        $this->$type = $type;
        $this->$meridien = $merdien;
        $this->$description = $description;
    }

    function getIdPatho()
    {
        return $idPatho;
    }
    function getType()
    {
        return $type;
    }
    function getMeridien()
    {
        return $meridien;
    }
    function getDescription()
    {
        return $description;
    }

    public static function affichageMeridien()
    {
        // récupération des différents méridiens
        $listMeridien = new BD();
        $meridiens = $listMeridien->requete('SELECT Nom from Meridien');
        return $meridiens;
    }

    public static function getPatho()
    {
        // Récupération de toutes les entrées de la table patho
      $maBD = new BD();
      $resultat = $maBD->exec("Select * from patho ");
      return $resultat;
    }
}


?>
