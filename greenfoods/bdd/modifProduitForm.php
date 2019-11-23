
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>GreenBurger</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1" style ="background-color:black;">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+331 23 45 67 89</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">contact@greenfoods.com</span>
					    </div>
					    <div class="col-md-4 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">Livraison en moins de 45 minutes</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container" style="height:75px">
	      <a class="navbar-brand" href="../index.php">Green<span class="txtColor">foods</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="../index.php" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="../shop.php">Boutique</a>
                <a class="dropdown-item" href="../product-single.php">Produit</a>
                <a class="dropdown-item" href="../cart.php">Panier</a>
                <a class="dropdown-item" href="../checkout.php">Paiement</a>
              </div>
            </li>
	          <li class="nav-item"><a href="../about.php" class="nav-link">A propos</a></li>
	          <li class="nav-item"><a href="../contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item cta cta-colored"><a href="../cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
<?php 
require_once 'connexionBdd.php';
if(!isset($_GET['id']))
{
  echo '<div class="alert alert-danger" role="alert"><b>Erreur</b>. Aucun identifiant de produit  n\'est fourni</div>';
  include('inc_footer.php'); 
  exit;
}

$id = $_GET['id'];

$results = $mysqli->query("SELECT * FROM produits WHERE id = $id");
$types = ["Fruits", "Legumes", "Jus", "Graines"];

 foreach ($results as $result) {
     $nom   =   $result['nom'];
     $type  =   $result['type'];
     $prix  =   $result['prix'];
     $url   =   $result['url'];
 }   
 ?>
 <div class="container">
<form class="form" action="modifProduit.php?id=<?php echo $id ?>" method="post">
  <div class="form-group">
    <label for="nom">Nom du produit</label>
    <input type="text" class="form-control" name="nom" value="<?php echo $nom ?>">
  </div>
  <div class="form-group">
    <label for="type">Type de produit</label>
    <select class="form-control" id="type" name="type">
        <?php
        foreach ($types as $currentType) {
            echo '<option value="'.$currentType.'"'; if($type == $currentType) { echo "selected"; } echo '>'.$currentType.'</option>'; }?>
    </select>
  </div>
  <div class="form-group">
    <label for="prix">Prix</label>
    <input type="number" step="0.01" class="form-control" id="prix" name="prix" value="<?php echo $prix ?>">
  </div>
  <div class="form-group">
    <label for="url">Url de l'image</label>
    <textarea class="form-control" id="url" name="url" rows="3"><?php echo $url ?></textarea>
  </div>
  <input class="btn btn-success" type="submit" value="Valider">
  <a href="../admin.php" class="btn btn-danger">Annuler</a>
</form>


</div>
