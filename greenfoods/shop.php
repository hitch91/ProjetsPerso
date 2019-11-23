<?php include_once 'nav.php';
	  require_once 'bdd/connexionBdd.php'; 
	 $buttons = ['tous','fruits','legumes','jus','graines']; 
	  ?>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Nos Produits</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<div class="btn-group" role="group" aria-label="Basic example">
						<?php foreach ($buttons as $button){
							echo '<button type="button" class="button1 '.$button.' ">'.strtoupper($button).'</button>';} ?>					
    				</div>
    			</div>
			</div>
			<br>
    		<div class="row typeProduit">
				
    			
    		</div>
    		<!-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
    	</div>
    </section>


	<?php 
	include_once 'newsletter.php';
	include_once 'footer.php' ?>
  </body>
</html>