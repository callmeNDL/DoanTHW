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
                        <h2>Product List</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->
    
    <!-- product list part start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="product_sidebar">
                        <div class="single_sedebar">
                            <form action="#">
                                <input type="text" name="#" placeholder="Search keyword">
                                <i class="ti-search"></i>
                            </form>
                        </div>
                        <div class="single_sedebar">
                            <div class="select_option">
                                <div class="select_option_list">Category <i class="right fas fa-caret-down"></i> </div>
                                <div class="select_option_dropdown">
                                    <p><a href="#">Category 1</a></p>
                                    <p><a href="#">Category 2</a></p>
                                    <p><a href="#">Category 3</a></p>
                                    <p><a href="#">Category 4</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_sedebar">
                            <div class="select_option">
                                <div class="select_option_list">Type <i class="right fas fa-caret-down"></i> </div>
                                <div class="select_option_dropdown">
                                    <p><a href="#">Type 1</a></p>
                                    <p><a href="#">Type 2</a></p>
                                    <p><a href="#">Type 3</a></p>
                                    <p><a href="#">Type 4</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="product_list">
                        <div class="row">
                            <?php
                                    include '../view/uti/converts.php';
                                   
                                    for ($i=0; $i < count($data["product"]); $i++) { 
                                        
                                        echo '<div class="col-lg-6 col-sm-6">';
                                            echo '<form action="../controller/OrderController.php"  method="post" enctype="multipart/form-data">';
                                                echo '<div class="single_product_item">';
                                                    echo '<img src="../view/img/product/'.$data["product"][$i]["image"].'" alt="#" class="img-fluid">';
                                                    echo '<h3> <a href="single-product.html">'.$data["product"][$i]["name"].'</a></h3>';
                                                    echo '<p style="color:red">'.USD2VND($data["product"][$i]["price"]).'</p>';
                                                echo '</div>';
                                                echo ' <div><input hidden type="text" id="product_id" name="product_id" value="'.$data["product"][$i]["id"].'"></div>';
                                                echo ' <div><input hidden type="text" id="product_id" name="product_name" value="'.$data["product"][$i]["name"].'"></div>';
                                                echo ' <div><input hidden type="text" id="product_id" name="product_image" value="'.$data["product"][$i]["image"].'"></div>';
                                                echo ' <div><input hidden type="text" id="product_id" name="product_price" value="'.$data["product"][$i]["price"].'"></div>';
                                                echo '<button name="order_action" value="order_add" type="submit" class="btn_3">Add cart</button>';

                                            echo '</form>';
                                        echo '</div>';

                                }
                                ?>
                              
                            
                        <!-- <div class="load_more_btn text-center">
                            <a href="#" class="btn_3">Load More</a>
                        </div> -->
                    </div>
                </div> 
                
            </div>
        </div>
    </section>
    <!-- product list part end-->
    
    <!-- client review part here -->
    <?php include '../view/layouts/client_part.php' ?>
    <!-- client review part end -->

    <!-- feature part here -->
    <?php include '../view/layouts/feature_part.php'?>
    <!-- feature part end -->

    <!-- subscribe part here -->
    <?php include '../view/layouts/subscribe.php' ?>
    <!-- subscribe part end -->

    <!--::footer_part start::-->
    <?php include '../view/layouts/footerpage.php' ?>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <?php include '../view/layouts/script.php' ?>
</body>

</html>