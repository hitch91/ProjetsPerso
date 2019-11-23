<?php include_once 'nav.php' ?>


<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-0 bread">Fiche produit</h1>
			</div>
		</div>
	</div>
</div>
<?php if(isset($_GET['id'])){
	$id = $_GET['id'];
$result = $mysqli->query("SELECT * FROM produits WHERE id = '$id'");
foreach ($result as $row):
	$url = $row['url'];
	$nom = ucfirst($row['nom']);
	$type = $row['type'];
	$prix = $row['prix'];
	$texte = $row['texte'];
 ?>
<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mb-5 ftco-animate">
				<a class="image-popup"><img src="images/<?php echo $url ?>.jpg" class="img-fluid"
						alt="<?php echo $type ?>_<?php echo $nom ?>"></a>
			</div>
			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
				<h3><u><?php echo $nom?></u></h3>
				<p class="price"><span style="font-size:20px"><?php echo $prix?> € /kg</span></p>
				<p><?php echo $texte?></p>

				<div class="w-100"></div>
				<div class="w-100"></div>
			</div>
			<p style="margin:40px auto 0"><a href="panier/addPanier.php?id=<?php echo $id?> "
					class="btn btn-primary buy-now d-flex justify-content-center align-items-center mx-1 addPanier">Ajouter
					au panier</a></p>
		</div>
	</div>
	</div>
</section>
<?php
endforeach;}else{
	echo '<h1 style="text-align:center;padding:10%;">Aucun produit séléctionné !</h1>';
}; 
include 'newsletter.php';
include 'footer.php';
?>
</body>

</html>