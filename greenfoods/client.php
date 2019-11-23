<? require '_nav.php';

if(isset($_POST['nom']) && !empty($_POST)){

    if($_POST['password'] != $_POST['password2']){
        header('Location: inscription.php?mdp=false');
    }

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    if($_POST['appartement'] == ""){
        $appartement = 'NULL';
    } else {
       $appartement = strval($_POST['appartement']); 
    }
    
    $ville = $_POST['ville'];
    $codePostal = $_POST['codePostal'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);


   $req = $mysqli->query("SELECT email FROM clients WHERE email = '$email' ");
    foreach ($req as $row) {
        if($email == $row['email']){
           $email2 = true; 
        break;
        }else{
            $email2 = false;
        }
    }
    var_dump($email2);
        if($email2){
           header('Location: inscription.php?email=false');
        }else{
            $result = $mysqli->query("INSERT INTO clients (nom,prenom,adresse,appartement,ville,codePostal,telephone,email,password) VALUES('$nom','$prenom','$adresse',$appartement,'$ville','$codePostal','$telephone','$email','$password')");

           header('Location: connexion.php?conn=true'); 
       }

} else {
    header('Location: inscription.php?empty=true'); 
}
  


