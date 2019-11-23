<?php include 'nav_admin.php';
$results = $mysqli->query("SELECT nom,prenom,adresse,codePostal FROM commandes INNER JOIN clients ON commandes.client_id = clients.id INNER JOIN produits ON commandes.produit_id = produits.id");






?>

<div style="min-height:620px;"></div>



<?php include 'footer_admin.php' ?>