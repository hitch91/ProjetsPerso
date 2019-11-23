<?
require_once 'connexionBdd.php';
$id = $_GET['id'];
$requete="DELETE FROM produits WHERE id = $id";
        $resultat = $mysqli->query($requete);
        if($resultat) // true
        {
        $location = 'action=delete&result=ok';
        }
        else // false
        {
        $location = 'action=delete&result=nok';
        }
        header('Location: ../admin.php?'.$location);  
        