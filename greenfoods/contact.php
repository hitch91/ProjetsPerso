<?php include_once 'nav.php';
$msg = '';
if ( (isset($_GET['result'])) && (isset($_GET['action'])) )
{
    
	$result = $_GET['result'] ;
	$action = $_GET['action'] ;

	$alert_text['delete'] = 'La suppression';
	$alert_text['update'] = 'La mise à jour';
	$alert_text['create'] = 'La création';	
	$alert_text['send'] = "L'envoi de votre message";	
	$alert_display = $alert_text[$action] ;

	if( $result == 'ok' )
	{

		 $msg =  '<div style="text-align:center" class="alert alert-success msgTemp" role="alert">'. $alert_display .' a bien été effectuée.</div>';

	}
	else
	{
	  $msg =  '<div style="text-align:center" class="alert alert-danger msgTemp" role="alert">'. $alert_display .' n\'a pas été effectuée.</div>';
	}
	echo $msg ;
} ?>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Nous contacter</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Adresse: </span><span style="color:black;">39 rue Michel Ange 91080 Courcouronnes</span> </p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Phone:</span> <a href="tel://1234567920">+ 0123456789</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">contact@greenfoods.fr</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Notre site :</span> <a href="#">greenfoods.fr</a></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="bdd/contactMsg.php" method="post" class="bg-white p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" name="nom" placeholder="Votre Nom" required pattern="^[A-Za-z '-]+$" maxlength='32'>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Votre email" pattern=" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="sujet" placeholder="Sujet" required pattern="^[A-Za-z  ]+$" maxlength="32">
              </div>
              <div class="form-group">
                <textarea name="msg" id="" cols="30" rows="7" class="form-control" placeholder="Votre message" required pattern="^[A-Za-z '-().]+$" maxlength='255'></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Envoyer votre message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div  class="bg-white carte2">
            <iframe class="carte2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2637.2315888969033!2d2.4208612153896283!3d48.62455022509743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5de11d2206443%3A0x78099792b8978187!2s39%20Rue%20Michel%20Ange%2C%2091080%20Courcouronnes!5e0!3m2!1sfr!2sfr!4v1571417382956!5m2!1sfr!2sfr" height="550" frameborder="0"  allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include_once 'footer.php' ?>

    
  </body>
</html>