<?php 
include 'nav.php'; 
$id = $_GET['id'];
$result = $mysqli->query("SELECT nom,prenom,numero FROM clients WHERE id = '$id' ");
foreach ($result as $row):
?>
<div>
    <h1>Merci pour votre commande <?php echo $row['nom'].' '.$row['prenom'] ?></h1>
    <p>Nous vous tiendrons informé au <?php echo $row['numero']; ?> lorsque la commande quittera nos locaux </p>
    <button class="btn btn-info"><a href="index.php"></a>Revenir à l'accueil</button>
</div>
<?php 
endforeach;
include 'footer.php'; ?>