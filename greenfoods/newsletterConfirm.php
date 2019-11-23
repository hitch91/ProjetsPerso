<?php
require 'bdd/connexionBdd.php';
 $mail = $_POST['mail'];
   $result =  $mysqli->query("SELECT email FROM newsletter");
    foreach ($result as $row) {
        if($row['email'] == $mail){
            header('Location: index.php?newsletter=nok');
            die();
        }
    }
   

   
    $mysqli->query("INSERT INTO newsletter (email) VALUE ('$mail')");
 
    ini_set( 'display_errors', 1 );
 
    error_reporting( E_ALL );
 
    $from = "contact@greenfoods.fr";
 
    $to = $mail;
 
    $subject = "Inscription newsletter Greenfoods";
 
    $message = "Félicitation, vous recevrez doreanavant toutes nos promos et tous nos bons plans !! ";
 
    $headers = "From:" . $from;
 
    mail($to,$subject,$message, $headers);
 
    header('Location: index.php?newsletter=ok');
?>