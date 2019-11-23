<?php include_once 'nav.php' ?>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Paiement</h1>
          </div>
        </div>
      </div>
    </div>
<?php if(isset($_SESSION['prenom'])){
	include 'formConfirmation.php';
	}else{
		include 'formInscription.php';
	} ?>
   
              
	            </div>
					</div>
					<div class="col-xl-5">
	          <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cart Total</h3>
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
							}else{
								$livraison = 8.50;
								echo '8,50€';
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
	          	</div>
	          	<div class="col-md-12">
	          		<div class="cart-detail p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Type de paiement</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="paiement" value="virement" class="mr-2">Virement bancaire</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="paiement" value="cheque" class="mr-2">Chèques</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="paiement" value="paypal" class="mr-2"> Paypal</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
											   <label><input type="checkbox" name="condition" class="mr-2" required>J'ai lu et accepté les conditions de ventes</label>
											</div>
										</div>
									</div>
									<?php 
									if(isset($_SESSION['prenom'])){
										echo '<input type="submit" class="btn btn-primary py-3 px-4" value="Commander">';
									}else{
										echo '<p style="color:darkred;">Veuillez vous inscrire afin de valider la commande</p></div>
										</form>';
									}
									?>
									
								
	          	</div>
	          </div>
			  </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->


	<?php 
	include_once 'newsletter.php';
	include_once 'footer.php' ?>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>