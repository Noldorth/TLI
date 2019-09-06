<?php

$host=;
$dbname=;
$user=;
$password=;

try
{
        $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.', '.$user.', '.$password.')';
}
catch(Exception $e)
{
            die('Erreur : '.$e->getMessage());
}

$reponse_1=mysql_query("SELECT * FROM `".$table."` ");

?>