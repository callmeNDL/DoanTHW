<?php 
include_once '../model/Product.php';

class OrderController
{
    public function __construct($order_action)
    {
        switch ($order_action) {
            case 'product_create':
                $target_dir = "../../frontend/view/img/product/";
                $txt_name = $_POST["txt_name"];
                $txt_price = $_POST["txt_price"];
                $file_image = $_FILES["file_image"]["name"];
                $product_new = new Product(0,$txt_name,$file_image,$txt_price,0);
                    if(isset($file_image)){
                        echo $file_image;
                        $target_file = $target_dir . basename($_FILES["file_image"]["name"]);
                        if (file_exists($target_file)) {
                            echo "Sorry, file already exists.";
                            $uploadOk = 0;
                        } 
                        if(move_uploaded_file($_FILES["file_image"]["tmp_name"], $target_file)){
                            echo "done";
                        }else{
                            echo "failed";
                        }
                    }
               
                $product_new->insertProduct();
                header("Location:../controller/OrderController.php");// Nếu rồi thì chuyển qua trang List user


                break;
            case 'product_edit':
                $id=$_GET["id"];
                $product = new Product($id,'','','','',0);
                $data=$product->getProductByID();
                var_dump($data);
                include_once '../view/updateProduct.php';
                break; 
                
            case'product_delete':
                if($_SESSION["role"]==="Admin"){
                    $_SESSION["delete"]= true;
                    $id=$_GET["id"];
                    $product = new Product($id,'','','',0);
                    $product->deleteProduct();
                }else{
                    $_SESSION["delete"]= false;
                }
                header("Location:../controller/OrderController.php");// Nếu rồi thì chuyển qua trang List user
                break; 
            case 'product_update':
               
                $target_dir = "../../frontend/view/img/product/";
                $id=$_POST["txt_id"];
                $txt_name = $_POST["txt_name"];
                $txt_price = $_POST["txt_price"];
                $file_image = $_FILES["file_image"]["name"];
                    if(isset($file_image)){
                        echo $file_image;
                        $target_file = $target_dir . basename($_FILES["file_image"]["name"]);
                        if (file_exists($target_file)) {
                            echo "Sorry, file already exists.";
                            $uploadOk = 0;
                        } 
                        if(move_uploaded_file($_FILES["file_image"]["tmp_name"], $target_file)){
                            echo "done";
                        }else{
                            echo "failed";
                        }
                    }
                    $product = new Product($id,$txt_name,$file_image,$txt_price,0);
                   
                    $product->updateProduct();
                    header("Location:../controller/OrderController.php");
                break;
            default:
                $product = new Product('','','','','',0);
                $data["product"] = $this->getAllProduct($product);
                include_once '../view/product.php';
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