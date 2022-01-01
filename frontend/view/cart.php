<!doctype html>
<html lang="zxx">

<?php include '../view/layouts/headerpage.php' ?>


<body>
    <!--::header part start::-->
    <?php include '../view/layouts/menu-header.php' ?>
    <!-- Header part end-->

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>Shopping cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part start-->
    
    <!-- breadcrumb part end-->

  <!--================Cart Area =================-->
  <section class="cart_area section_padding">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Remove</th>
              </tr>
            </thead>
            <tbody>

             <?php 
             include '../view/uti/converts.php';
             if(empty($data_cart)){
                $data_cart=0;
                
               
             }else{
              foreach($data_cart as $product){
                  echo'<tr>';
                    echo'<td>';
                      echo'<div class="media">';
                        echo'<div class="d-flex">';
                          echo'<img src="../view/img/product/'.$product->getImage().'" alt="" />';
                        echo'</div>';
                        echo'<div class="media-body">';
                          echo'<p>'.$product->getName().'</p>';
                        echo'</div>';
                      echo'</div>';
                    echo'</td>';
                    echo'<td>';
                      echo'<h5>'.USD2VND($product->getPrice()).'</h5>';
                    echo'</td>';
                    echo'<td>';
                      echo'<div class="product_count">';
                        
                          echo'<input class="input-number" type="text" value="'.$product->getNumber().'" min="0" max="10">';
                        
                      echo'</div>';
                    echo'</td>';
                    echo'<td>';
                    $tongtien= $product->getPrice()*$product->getNumber();
                      echo'<h5>'.USD2VND($tongtien).'</h5>';
                    echo'</td>';
                    echo'<td>';
                    echo'<a type="button" href="../controller/OrderController.php?action=delete_cart&id_delete_cart='.$product->getId().'" class="btn btn-secondary btn-sm"><i class="material-icons">delete</i></a>';
                    echo'</td>';
                  echo'</tr>'; 
                  echo' <script>';
                  
                  echo'</script>';
                  
              }
            }
            echo'<tr class="bottom_button">';
                  echo'<td>';
                    echo'<a class="btn_1" href="../controller/OrderController.php">Continue Shopping</a>';
                  echo'</td>';
                  echo'<td></td>';
                  echo'<td></td>';
                  echo'<td>';
                    echo'<div class="cupon_text float-right">';
                      echo'<a class="btn_1" href="../controller/OrderController.php?action=clear_cart">Clean Cart</a>';
                    echo'</div>';
                  echo'</td>';
                echo'</tr>';
             ?>
             
              
              <!-- <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Subtotal</h5>
                </td>
                <td>
                  <h5>$2160.00</h5>
                </td>
              </tr> -->
              
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            
            <a class="btn_1 checkout_btn_1" href="#">Proceed to checkout</a>
          </div>
        </div>
      </div>
  </section>
  <!--================End Cart Area =================-->

    <!--::footer_part start::-->
    <?php include '../view/layouts/footerpage.php' ?>
    <!--::footer_part end::-->
    <!-- jquery plugins here-->
    <?php include '../view/layouts/script.php' ?>
</body>

</html>

   