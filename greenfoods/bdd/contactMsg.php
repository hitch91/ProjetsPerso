<? require 'connexionBdd.php';

if(isset($_POST)){
    $name = htmlspecialchars(ucfirst(strtolower($_POST['nom']))) ;
    $email = htmlspecialchars(strtolower($_POST['email'])) ;
    $sujet = htmlspecialchars(ucfirst(strtolower($_POST['sujet']))) ;
    $msg = htmlspecialchars(trim(ucfirst(strtolower($_POST['msg'])))) ;
    
    $result = $mysqli->query("INSERT INTO messages (nom,email,sujet,message) VALUES ('$name','$email','$sujet','$msg')");

    if($result) // true
        {
        $location = 'action=send&result=ok';
        }
        else // false
        {
        $location = 'action=send&result=nok';
        }
        header('Location: ../contact.php?'.$location);  

}