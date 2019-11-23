<?php
	require_once 'nav.php';
	if(isset($_GET['newsletter']) && $_GET['newsletter'] == 'ok'){
        echo '<div style="text-align:center;" class="alert alert-success" role="alert">Inscription à la newsletter reussie !!</div>';
	}
	if(isset($_GET['newsletter']) && $_GET['newsletter'] == 'nok'){
        echo '<div style="text-align:center;" class="alert alert-danger" role="alert">Vous êtes déja inscrit à la newsletter !!</div>';
    }
?>
    <!-- END nav -->

    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(images/bg_1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2">Issu des productions Françaises</h1>
	              <h2 class="subheading mb-4">Nous livrons des fruits et legumes issus de l'agriculture biologique</h2>
	              <p><a href="shop.php" class="btn btn-primary">Découvrir</a></p>
	            </div>

	          </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">100% Bio &amp; Frais</h1>
	              <h2 class="subheading mb-4">Nous livrons des fruits et legumes issus de l'agriculture biologique</h2>
	              <p><a href="shop.php" class="btn btn-primary">Découvrir</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Livraison Gratuite</h3>
                <span>Pour toute commande superieure à 50€</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Fraicheur garantie</h3>
                <span>Produit bien emballé</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Excellente Qualité</h3>
                <span>Producteur Français</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Service Client</h3>
                <span>6j/7 8h-20h</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex" style="min-height:524px">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(images/category.jpg);">
									<div class="text text-center">
										<h2>Produits Frais</h2>
										<p>Bon pour votre santé et celle de vos proches</p>
										<p><a href="shop.php" class="btn btn-primary">Commander</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-1.jpg);" alt="Legumes">
									<div class="text px-3 py-1">
										<h2 class="mb-0" style="color:white;">Legumes</h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-2.jpg);" alt="Fruits">
									<div class="text px-3 py-1">
										<h2 class="mb-0" style="color:white;">Fruits</h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-3.jpg);" alt="bouteille de jus">
							<div class="text px-3 py-1">
								<h2 class="mb-0" style="color:white;">Jus</h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-4.jpg);" alt="Fruits Secs">
							<div class="text px-3 py-1">
								<h2 class="mb-0" style="color:white;">Fruits secs et graines</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Produits populaires</span>
            <h2 class="mb-4">Nos Produits</h2>
            <p>"La nature a voulu que nos besoins fussent la source de nos plaisirs."</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
    			
				<?php
$result = $mysqli->query('SELECT * FROM produits LIMIT 4');
foreach ($result as $row):
$url = $row['url'];
$type = $row['type'];
$nom = $row['nom'];
$prix = $row['prix'];
$id = $row['id'];
?>

<div class="col-md-6 col-lg-3">
	<div class="product">
		<a href="fiche-produit.php?id=<?php echo $id ?>" class="img-prod"><img class="img-fluid" src="images/<?php echo $url ?>.jpg" alt="<?php echo $type ?>_<?php echo $nom ?>"></a>
		<div class="text py-3 pb-4 px-3 text-center">
			<h3><?php echo $nom?></h3>
			<div class="d-flex">
				<div class="pricing">
					<p class="price"><span class="price-sale"><?php echo $prix?> €/kg</span></p>
				</div>
			</div>
			<div class="bottom-area d-flex px-3">
				<div class="m-auto d-flex">
				    <a href="panier/addPanier.php?id=<?php echo $id?> " class="buy-now d-flex justify-content-center align-items-center mx-1 addPanier">
						<span><i style="font-size:30px" class="ion-ios-cart"></i></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endforeach; 
?>
    			
    		</div>
    	</div>
	</section>
	
		
	<?php
	include_once 'newsletter.php';
	include_once 'footer.php' ?>

  </body>
</html>