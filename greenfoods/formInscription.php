<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
						<form action="client.php" method="post" class="billing-form">
							<h3 class="mb-4 billing-heading">Fiche client</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="nom">Nom</label>
	                  <input type="text" name="nom" class="form-control" pattern="[a-zA-Z]{2,20}" required>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="prenom">Prénom</label>
	                  <input type="text" name="prenom" class="form-control" pattern="[a-zA-Z]{2,20}"required>
	                </div>
                </div>
                <div class="w-100"></div>
		            
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="adresse">Adresse</label>
	                  <input type="text" name="adresse" class="form-control" required>
	                </div>
		            </div>
		            <div class="col-md-6">
                        <div class="form-group">
		            	<div class="appartement">
	                  <input type="text" name="appartement" class="form-control" placeholder="Numéro d'appartement (optionnel)" pattern="[1-9]{1,3}">
                    </div>
                    </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="ville">Ville</label>
	                  <input type="text" name="ville" class="form-control" pattern="[a-zA-Z]{1,30}"required>
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="codePostal">Code postal</label>
	                  <input type="number" name="codePostal" class="form-control" pattern=" \^[0-9]{5,5}$\ " required>
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="telephone">Numero de téléphone</label>
	                  <input type="text" name="telephone" class="form-control" pattern=" \^(\d\d\s){4}(\d\d)$\ " required>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="email">Email</label>
	                  <input type="email" name='email' class="form-control" pattern=" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group" style="margin-bottom:0px">
	                	<label for="mdp">Mot de passe</label>
	                  <input type="password" name='password' class="form-control" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{6,15})$" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group" style="margin-bottom:0px">
	                	<label for="mdpRepeat">Repeter mot de passe</label>
	                  <input type="password" name='password2' class="form-control" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{6,15})$" required>
	                </div>
                </div>
				<div class="col-md-12" style="font-size: 11px;">
			   <span>Le mot de passe doit contenir au moins :</span>	
					  <ul>
						  <li>1 lettre majuscule</li>
						  <li>1 lettre minuscule</li>
						  <li>1 chiffre</li>
						  <li>1 caractère spécial</li>
					  </ul>
				</div>
				<input class="btn btn-info col-md-3" style="margin:auto;" type="submit" value="S'inscrire">
				
            </form>
 