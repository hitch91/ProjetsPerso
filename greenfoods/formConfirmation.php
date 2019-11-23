 <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
						<form action="commande.php" method="post" class="billing-form">
							<h3 class="mb-4 billing-heading">Informations de livraison</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="nom">Nom</label>
	                  <input type="text" name="nom" class="form-control" value="<?php echo $_SESSION['nom'] ?>" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="prenom">Prénom</label>
	                  <input type="text" name="prenom" class="form-control" value="<?php echo $_SESSION['prenom'] ?>" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
		            
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="adresse">Adresse</label>
	                  <input type="text" name="adresse" value="<?php echo $_SESSION['adresse'] ?>" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                  <input type="text" name="appartement" value="<?php if(isset($_SESSION['appartement'])){ echo $_SESSION['appartement'];} ; ?>" class="form-control" placeholder="Numéro d'appartement (optionnel)">
                    </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="ville">Ville</label>
	                  <input type="text" name="ville" value="<?php echo $_SESSION['ville'] ?>" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="codePostal">Code postal</label>
	                  <input type="number" name="codePostal" value="<?php echo $_SESSION['codePostal'] ?>" class="form-control" min="00000" max="99999" minlength="5">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="telephone">Numero de téléphone</label>
	                  <input type="text" name="telephone" value="<?php echo $_SESSION['telephone'] ?>" class="form-control" maxlength="20">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="email">Email</label>
	                  <input type="email" name='email' value="<?php echo $_SESSION['email'] ?>" class="form-control" placeholder="">
	                </div>
                </div>