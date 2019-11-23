<?php require 'nav.php'; 

    $client_id = $_SESSION['id']; 
    $date = date('d/m/y');
    $pan = $_SESSION['panier'];
    $prix = strval(number_format($panier->total(),2,',',' '));  
    foreach ($pan as $produit_id => $quantite) {
        $req = ("INSERT INTO commandes (date,quantite,prix,produit_id,client_id) VALUES (NOW(),'$quantite','$prix','$produit_id','$client_id')");
        $result = $mysqli->query($req);
    }
    
if($result){
  echo '<div class="container" style="text-align:center;padding:5%">
        <h1 style="color:green">Commande validée !</h1>
        <h2>Derniere étape avant envoi de vos achats</h2>';

}else{
    echo '<h1>Probleme technique, veuiller reessayer ulterieurement<h1>';
}


 if(isset($_POST['paiement']) && $_POST['paiement'] == 'paypal'){

    echo '
        <form style="padding:5%" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="8LQT5TEMXN4FG">
        <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" width= "250px";
        name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
        <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
        </form>
        ';
}elseif(isset($_POST['paiement']) && $_POST['paiement'] == 'virement'){
    echo '<h3 style="padding:5%">Vous allez prochainement recevoir notre RIB sur votre boite mail, l\'envoi sera confirmé apres récéption du virement.</h3>';
}else{
    echo '<h3 style="padding:5%">La commande sera éxpédiée apres reception de votre chèque bancaire à notre adresse :</h3>
          <p><strong>Greenfoods, 39 rue Michel Ange, 91080 Courcouronnes</strong></p>';
}
echo '</div><br><br><br>';
include 'footer.php';
?>
<style>
    .basDePage
    {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
    }
</style>
</div>