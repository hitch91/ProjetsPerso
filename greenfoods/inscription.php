<?php include 'nav.php'; 
if(isset($_GET['mdp'])){
$msg =  '<div style="text-align:center;" class="alert alert-danger" role="alert">Les mots de passes sont differents !</div>';
echo $msg;
}
if(isset($_GET['email'])){
	$msg2 =  '<div style="text-align:center;" class="alert alert-danger" role="alert">Adresse email déja utilisée, veuillez vous connecter ou utiliser une autre adresse</div>';
	echo $msg2;
}
if(isset($_GET['empty'])){
	$msg3 =  '<div style="text-align:center;" class="alert alert-danger" role="alert">Veuillez remplir tous les champs demandés</div>';
	echo $msg2;
}


?>
<?php include 'formInscription.php' ?>
</div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
<?php include 'footer.php';?>