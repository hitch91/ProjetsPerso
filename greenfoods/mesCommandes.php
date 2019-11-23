<?php include 'nav.php'; 
$id = $_SESSION['id']; 
$results = $mysqli->query("SELECT * FROM commandes WHERE client_id = '$id'");
?><div class="container" style="min-height: 250px;padding:5%">
<?php
foreach ($results as $result){
    $produits[]=$result['produit_id'];
    $quantites[]=$result['quantite'];
    $date = $result['date'];
    $prix = $result['prix'];
};
if(isset($date)){
    echo ' <div style= "border: 1px solid grey ; padding:5px 0px 10px 15px" ><strong>Commandé le : </strong>'.$date;

        for($i=0;$i<count($produits);$i++) {
            $req = $mysqli->query("SELECT nom,url FROM produits WHERE id = '$produits[$i]'");
            foreach ($req as $row):?>
            <img style="width:50px; height:50px;" src="images/<?php echo $row['url']?>.jpg">
            <span><?php echo $row['nom']?> <strong>X</strong> <?php echo $quantites[$i]?></span>
            <?php endforeach ?>
            
          <?php  };
    ?>
    <p style = "float:right;line-height:50px;padding-right:20px" ><strong>prix :</strong>  <?php echo $prix ?> €</p>
       

  
  

    <?php }else{
        echo "<h2 style='text-align:center'>Vous n'avez aucune commande dans votre historique</h2>";
    };?>
</div>

</div> 


<?php include 'footer.php'?>

<style>
    .basDePage
    {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
    }
</style>