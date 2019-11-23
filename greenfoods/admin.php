<?php 
include_once 'nav_admin.php';
if(!isset($_SESSION['admin'])){
	header('Location: index.php');
}
$msg = '';
if ( (isset($_GET['result'])) && (isset($_GET['action'])) )
{
    
	$result = $_GET['result'] ;
	$action = $_GET['action'] ;

	$alert_text['delete'] = 'suppression';
	$alert_text['update'] = 'mise à jour';
	$alert_text['create'] = 'création';	
	$alert_display = $alert_text[$action] ;



	if( $result == 'ok' )
	{

		 $msg =  '<div class="alert alert-success msgTemp" role="alert">La '. $alert_display .' a bien été effectuée.</div>';

	}
	else
	{
	    $msg =  '<div class="alert alert-danger msgTemp" role="alert">La '. $alert_display .' n\'a pas été effectuée.</div>';
	}
	echo $msg ;
}



$types = ["Fruits", "Legumes", "Jus", "Graines"];

?><br><br>
<div style="text-align:center" class="container">
	<h2>Ajout d'un produit :</h2>
<form class="form" action="bdd/ajoutProduit.php" method="post">
  <div class="form-group">
    <label for="nom">Nom du produit</label>
    <input type="text" class="form-control" name="nom" placeholder="nom">
  </div>
  <div class="form-group">
    <label for="type">Type de produit</label>
    <select class="form-control" id="type" name="type">
    <?php 
            foreach ($types as $currentType) {
            echo '<option value="'.$currentType.'">'.$currentType.'</option>'; }?>
    </select>
  </div>
  <div class="form-group">
    <label for="prix">Prix</label>
    <input type="number" step="0.01" class="form-control" id="prix" name="prix" placeholder="prix">
  </div>
  <div class="form-group">
    <label for="url">Url de l'image</label>
    <textarea class="form-control" id="url" name="url" rows="3"></textarea>
  </div>
  <input class="btn btn-success" type="submit" value="Valider">
</form>
</div>

<br>
<div class="container">
<h2>Liste des produits en ligne :</h2>
<br>
<br>
    <div class="row">
<?php 
$results = $mysqli->query('SELECT * FROM produits');
 foreach ($results as $row): ?>

    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/<?php echo $row['url'] ?>.jpg"></a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="product-single.php?id='.$row['id'].'"><?php echo $row['nom']?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale"><?php echo $row['prix']?> €/kg</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="bdd/modifProduitForm.php?id='<?php echo $row['id'] ?>'" class="build d-flex justify-content-center align-items-center text-center">
	    								<span><i style="font-size:30px" class="ion-ios-build" title="modifier"></i></span>
	    							</a>
	    							<a href="bdd/deleteProduit.php?id='<?php echo $row['id'] ?>'" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i style="font-size:49px" class="ion-ios-close" title="Supprimer"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
			<?php endforeach; ?>
    </div>
</div>
<?php include 'footer_admin.php'?>


