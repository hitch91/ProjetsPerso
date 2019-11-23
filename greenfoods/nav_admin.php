<?php
    require '_nav.php';
    $result = $mysqli->query('SELECT id FROM messages');
    $totalMsg = array();
    foreach ($result as $key) {
        $totalMsg[]=$key;
    }
    
	?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Greenfoods</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Kassou Hicham" />
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
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
		
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container" style="height:75px">
	      <a class="navbar-brand" href="admin.php">Greenfoods <span style='color:red'>ADMIN</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span>
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="admin.php" class="nav-link">Home Admin</a></li>
	          <li class="nav-item"><a href="message.php" class="nav-link">Message[<span style="color:darkred;"><?php echo count($totalMsg) ?></span>]</a></li>
            <li class="nav-item"><a href="commandes_admin.php" class="nav-link">Commandes</a></li>
            <li class="nav-item"><a style="color:darkred;" href="deconnection.php" class="nav-link">Deconnection</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>