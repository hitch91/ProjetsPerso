<? 
include '_nav.php';
if(isset($_POST)){

    $mdp = $_POST['password'];
    $email = $_POST['email'];

    $result = $mysqli->query("SELECT * FROM clients WHERE email = '$email' ");
    $resultAdmin = $mysqli->query("SELECT * FROM admin");

    foreach ($resultAdmin as $admin) {
        if(password_verify($mdp,$admin['mdp'])&&($email == $admin['email'])){
           $_SESSION['admin'] = 'ADMIN';
        header('Location: admin.php');
        die();
        }
    }
    

    foreach ($result as $row) {
        if(password_verify($mdp,$row['password'])){
        
        $_SESSION['id'] = $row['id'];   
        $_SESSION['nom'] = $row['nom'];
        $_SESSION['prenom'] = $row['prenom'];
        $_SESSION['adresse'] = $row['adresse'];
        $_SESSION['ville'] = $row['ville'];
        $_SESSION['codePostal'] = $row['codePostal'];
        $_SESSION['telephone'] = $row['telephone'];
        $_SESSION['email'] = $row['email'];

     } else {
        header('Location: connexion.php?mdp=false');
        }
    }

    header('Location: index.php');
    
}
