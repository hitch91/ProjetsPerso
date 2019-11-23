<?  

class panier{

    private $mysqli;

    public function __construct($mysqli){
        
        if(!isset($_SESSION)){
            session_start();   
        }
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();
        }
        $this->mysqli = $mysqli;
        if(isset($_GET['delPanier'])){
            $this->del($_GET['delPanier']);
        }
        if(isset($_POST['panier']['quantity'])){
            $this->recalc();
        }
    }

    public function recalc(){
        foreach ($_SESSION['panier'] as $product_id => $quantity ) {
            $_SESSION['panier'][$product_id]= $_POST['panier']['quantity'][$product_id];
        }
         
    }

    public function total(){
        $total = 0;
        $ids = array_keys($_SESSION['panier']);
            if(empty($ids)){
            $products = array();
            } else {
            $products = $this->mysqli->query('SELECT id, prix FROM produits WHERE id IN ('.implode(',',$ids).')');
            }
       
        foreach ($products as $product) {
             $total += $product['prix'] * $_SESSION['panier'][$product['id']];
        }
        return $total;
    }

    public function add($product_id){
        if(isset($_SESSION['panier'][$product_id])){
            $_SESSION['panier'][$product_id]++;
        }else{
            $_SESSION['panier'][$product_id]=1;
        }
        
    }

    public function count(){
       $somme = array_sum($_SESSION['panier']);
       return $somme;
    }

    public function del($product_id){
        unset($_SESSION['panier'][$product_id]);
    }

}
   