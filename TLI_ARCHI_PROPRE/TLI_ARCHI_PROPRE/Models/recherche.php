<?php
require_once('lib/bd/database.php');

$maBDPatho = new BD();
$resultat = $maBDPatho->requete('SELECT * from patho');

while($donnees = $resultat->fetch())
            {
            
                $pathologie = new patho($donnees['idP'], $donnees['type'], $donnees['desc']);
                $pathos[$donnees['idP']] = $pathologie;
                
                
                
            }

            $resultat->closeCursor();
            $dbh = null;




?>