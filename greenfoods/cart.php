<?php include_once 'nav.php'; 
?>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Mon panier</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
						<form method='post' action="cart.php">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Produit</th>
						        <th>Prix</th>
						        <th>Quantité</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
								<?php 
								 $ids = array_keys($_SESSION['panier']);
								 if(empty($ids)){
									$products = array();
								 } else {
									$products = $mysqli->query('SELECT * FROM produits WHERE id IN ('.implode(',',$ids).')');

								 };
								 
								
								foreach ($products as $product):
								 ?>
						      <tr class="text-center">
						        <td class="product-remove"><a href="cart.php?delPanier=<?php echo $product['id']?>"><span class="ion-ios-close" style="font-size:33px;"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/<?php echo $product['url']?>.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3><?php echo $product['nom']; ?></h3>
						        </td>
						        
						        <td class="price"><?php echo $product['prix'];?>€</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input  type="number" name="panier[quantity][<?php echo $product['id']?>]" class="quantity form-control input-number" value="<?php echo $_SESSION['panier'][$product['id']] ?>" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total"><?php echo $product['prix']*$_SESSION['panier'][$product['id']] ?>€</td>
							  </tr><!-- END TR-->
								<?php endforeach; ?>
								
						    </tbody>
						  </table>
						  <?php 
						  	if(empty($ids)){
								echo '<p style="text-align:center;"> Votre panier est vide !</p>';
							}else{
								echo '<input style="margin:20px" class="btn btn-info" type="submit" value="Recalculer">';
							} ?>
						  
						</form> 
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    		
	            
    			<div class="col-lg-12 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Tarifs</h3>
    					<p class="d-flex">
    						<span>Sous-total</span>
    						<span><?php echo number_format($panier->total(),2,',',' ')?> €</span>
    					</p>
    					<p class="d-flex">
    						<span>Livraison</span>
							<span><?php
							 if($panier->total()>50){
								$livraison = 0;
								echo '<span style="color:green">Gratuite</span>';
							}elseif($panier->total()== 0){
								$livraison = 0;
								echo '0.00€';
							}else{
								$livraison = 8.50;
								echo '8,50€<span style="float:right; color:green">livraison gratuite à partir de 50€</span>';
							} ?></span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
							<span><?php 
							$prix = $livraison + $panier->total();
							echo number_format($prix,2,',',' ')?> €</span>
    					</p>
    				</div>
					<?php if($panier->total() != 0){ ?>
						<p><a href="checkout.php" class="btn btn-primary py-3 px-4">Passer au paiement</a></p>
					<?php } ?>
    				
    			</div>
    		</div>
			</div>
		</section>



	<?php 
	include_once 'newsletter.php';
	include_once 'footer.php' ?>
    
  </body>
</html>