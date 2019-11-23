<?php include 'nav.php'; 
    if(isset($_GET['mdp'])){
       die('<div class="alert alert-danger" role="alert">L\'adresse email ou le mot de passe est incorrect!</div>');
      
    }
    if(isset($_GET['conn']) && $_GET['conn'] == true){
        echo '<div style="text-align:center;" class="alert alert-success" role="alert">Inscription reussie , veuillez vous connecter avec vos identifiants</div>';
    }
?>
<div style="text-align: center;padding: 10%;">

  <div class="container" style="padding: 30px;background-color:whitesmoke;border-radius: 15px;">
    <h1 style="font-weight: 300;">Inscription</h1>
    <form method="post" action="connexionClient.php">
      <div class="form-group">
        <label for="exampleInputEmail1">Adresse email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="Entrez votre email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
          placeholder="Mot de passe">
      </div>
      <button type="submit" class="btn btn-danger">Connexion</button>
    </form>
  </div>
</div>




<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
  </svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
<script src="js/addPanier.js"></script>
<script src="js/script.js"></script>