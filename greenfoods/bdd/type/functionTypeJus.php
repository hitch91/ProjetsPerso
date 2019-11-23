<?php


function trierType(){
    ?> <script src=js/addPanier.js></script><?php 
    require_once '../connexionBdd.php';
        $result = $mysqli->query("SELECT * FROM produits WHERE type = 'Jus' ");
        foreach ($result as $row):
            $url = $row['url'];
            $type = $row['type'];
            $nom = $row['nom'];
            $prix = $row['prix'];
            $id = $row['id'];
            ?>
            
            <div class="col-md-6 col-lg-3">
                <div class="product">
                    <a class="img-prod"><img class="img-fluid" src="images/<?php echo $url ?>.jpg" alt="<?php echo $type ?>_<?php echo $nom ?>"></a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><?php echo $nom?></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="price-sale"><?php echo $prix?> €/kg</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="panier/addPanier.php?id=<?php echo $id?> " class="buy-now d-flex justify-content-center align-items-center mx-1 addPanier">
                                    <span><i style="font-size:30px" class="ion-ios-cart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; 
    
};
trierType();