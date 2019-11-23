<?php
	require '_nav.php';
	?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151879178-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-151879178-1');
	</script>

	<title>Greenfoods</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="images/favicon.png">
	<meta name="description"
		content="Site web permettant la vente de fruits,legumes,boissons, fruits secs et graines issue de l'agriculture biologique et produits sur le territoire Français" />
	<meta name="author" content="Kassou Hicham" />


	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="goto-here">
	<div class="py-1" style="background-color:black;">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-12 d-block">
					<div class="row d-flex">
						<div class="col-md pr-2 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span
									class="icon-phone2"></span></div>
							<span class="text">+331 23 45 67 89</span>
						</div>
						<div class="col-md pr-3 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span
									class="icon-paper-plane"></span></div>
							<span class="text">contact@greenfoods.com</span>
						</div>
						<div class="col-md-4 pr-4 d-flex topper align-items-center text-lg-right">
							<span class="text">Livraison en moins de 45 minutes</span>
						</div>
						<?php if(isset($_SESSION['prenom'])){
							echo '<div class="col-md-3 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">Bonjour <span style = "color:yellow;">'.$_SESSION['prenom'].'</span></span>
						</div>';
							
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container" style="height:75px">
			<a class="navbar-brand" href="index.php"><span class="txtColor">Greenfoods</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav" style="background-color: white; text-align: center;">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.php" class="nav-link" style="color:#82ae46">Home</a></li>
					<li class="nav-item"><a href="shop.php" class="nav-link">Boutique</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					<?php if(isset($_SESSION['prenom'])){
				  echo '<li class="nav-item"><a href="mesCommandes.php" class="nav-link">Mes commandes</a></li><li class="nav-item"><a style="color:darkred;" href="deconnection.php" class="nav-link">Deconnection</a></li>';
			  }else {
				echo '<li class="nav-item"><a href="inscription.php" class="nav-link">Inscription</a></li><li class="nav-item"><a href="connexion.php" class="nav-link">Connexion</a></li>';
			  }
			  
			  ?>
					<li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span
								class="icon-shopping_cart"></span><span
								id='total'><?php echo number_format($panier->total(),2,',',' ')?></span>€</a></li>

				</ul>
			</div>
		</div>
	</nav>
