<?php 
include_once '../model/Product.php';

class OrderController
{
    public function __construct($order_action)
    {
        switch ($order_action) {
            case 'order_add':
                $product_id = $_POST["product_id"];
                $product_name = $_POST["product_name"];
                $product_image = $_POST["product_image"];
                $product_price = $_POST["product_price"];
                $product = new Product($product_id,$product_name,$product_image,$product_price,"1");
                if(!empty($_SESSION["card_item"])){
                    if(array_key_exists($product_id,$_SESSION["card_item"])){
                        $num = $_SESSION["card_item"][$product_id]->getNumber();
                        $_SESSION["card_item"][$product_id]->setNumber($num+1);
                    }else{
                        $_SESSION["card_item"][$product_id]= $product; 
                    }
                }else{
                    $_SESSION["card_item"][$product_id]= $product; 
                }
                header("Location:../controller/OrderController.php");

                break;
            case 'checkout':
                if(!empty($_SESSION["card_item"])){
                    $data_cart = $_SESSION["card_item"];
                    include_once '../view/cart.php';
                }else{
                    $data_cart = 0;
                    include_once '../view/cart.php';
                }
                
                
                break;
            case 'clear_cart':
                unset($_SESSION["card_item"]);
                session_destroy();
                header("Location:../controller/OrderController.php");

                break;
            case 'delete_cart':
                $id=$_GET["id_delete_cart"];
                if(!empty($_SESSION["card_item"])){
                    unset($_SESSION["card_item"][$id]);
                }else{
                    header("Location:../controller/OrderController.php");
                }
                header("Location:../controller/OrderController.php");
                
                
                break;
            default:
                $product = new Product('','','','','',0);
                $data["product"] = $this->getAllProduct($product);
                include_once '../view/product_list.php';
                break;
        }
        
    }
    
    public function getAllProduct($product){
        return $product->getAllProduct();
    }
    
}

session_start();
$order_action = "";
if(count($_POST)>0){
    $order_action = $_POST["order_action"];
}else if(count($_GET)>0){
    $order_action = $_GET["action"];
    
    
}
$orderControl = new OrderController($order_action );
?>