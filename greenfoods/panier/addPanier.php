<? 	require '../_nav.php';

$json = array('error' => true);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $product  =  $mysqli->query("SELECT id FROM produits WHERE id = $id");
    if(empty($product)){
        $json['message'] = "Ce produit n'existe pas !";
    }
    foreach ($product as $key) {
        $currentId = $key['id'];
    }
    $panier->add($currentId); 
    $json = array('error' => false);
    $json['total'] = number_format($panier->total(),2,',',' ');
    $json['count'] = $panier->count();
    $json['message'] = 'Le produit a bien été ajouté au panier'; 
    
   
}else {
    $json['message'] = "Vous n'avez pas selectionner de produit";
}

echo json_encode($json);