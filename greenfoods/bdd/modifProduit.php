<? 
require_once 'connexionBdd.php';
$id = $_GET['id'];
$nom = $_POST['nom'];
$type = $_POST['type'];
$prix = $_POST['prix'];
$url = $_POST['url'];

$requete="UPDATE produits SET nom = '$nom' , type = '$type', prix = '$prix', url = '$url' WHERE id = $id ";
        $resultat = $mysqli->query($requete);
        if($resultat) // true
        {
        $location = 'action=update&result=ok';
        }
        else // false
        {
        $location = 'action=update&result=nok';
        };
        header('Location: ../admin.php?'.$location);  
