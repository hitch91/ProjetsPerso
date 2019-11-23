<?
require_once 'connexionBdd.php';
$nom = $_POST['nom'];
$type = $_POST['type'];
$prix = $_POST['prix'];
$url = $_POST['url'];

$requete='INSERT INTO produits (nom, type, prix,url)
        VALUES ('.mysqli_real_escape_string($nom).', '.mysqli_real_escape_string($type).', '.mysqli_real_escape_string($prix).','.mysqli_real_escape_string($url).')';
        $resultat = $mysqli->query($requete);
        if($resultat) // true
        {
        $location = 'action=create&result=ok';
        }
        else // false
        {
        $location = 'action=create&result=nok';
        }
        header('Location: ../admin.php?'.$location);  

