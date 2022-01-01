<!doctype html>
<html lang="zxx">
<?php include './layouts/headerpage.php' ?>

<body>
    <!--::header part start::-->
    <?php include './layouts/menu-header.php' ?>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Best quality
                                pillow</h1>
                            <p>Seamlessly empower fully researched 
                                growth strategies and interoperable internal</p>
                            <a href="product_list.html" class="btn_1">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner_img">
            <img src="img/banner.png" alt="#" class="img-fluid">
            <img src="img/banner_pattern.png " alt="#" class="pattern_img img-fluid">
        </div>
    </section>
    <!-- banner part start-->

    <!-- product list start-->
    <section class="single_product_list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                    <img src="img/single_product_1.png" class="img-fluid" alt="#">
                                    <img src="img/product_overlay.png" alt="#" class="product_overlay img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single_product_content">
                                    <h5>Started from $10</h5>
                                    <h2> <a href="single-product.html">Printed memory foam 
                                        brief modern throw 
                                        pillow case</a> </h2>
                                    <a href="product_list.html" class="btn_3">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                    <img src="img/single_product_2.png" class="img-fluid" alt="#">
                                    <img src="img/product_overlay.png" alt="#" class="product_overlay img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single_product_content">
                                    <h5>Started from $10</h5>
                                    <h2> <a href="single-product.html">Printed memory foam 
                                        brief modern throw 
                                        pillow case</a> </h2>
                                    <a href="product_list.html" class="btn_3">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                    <img src="img/single_product_3.png" class="img-fluid" alt="#">
                                    <img src="img/product_overlay.png" alt="#" class="product_overlay img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single_product_content">
                                    <h5>Started from $10</h5>
                                    <h2> <a href="single-product.html">Printed memory foam 
                                            brief modern throw 
                                            pillow case</a> </h2>
                                    <a href="product_list.html" class="btn_3">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list end-->
  

    <!-- trending item start-->
    <section class="trending_items">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Trending Items</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php 
            include'./uti/converts.php';
            $arrTen=array("Cervical pillow for airplane car office nap pillow",
            "Cervical pillow for airplane car office nap pillow",
            "Foam filling cotton slow rebound pillows",
            "foam filling cotton Slow rebound pillows",
            "Memory foam filling cotton Slow rebound pillows",
            "Sleeping orthopedic sciatica Back Hip Joint Pain relief",
           
            );
            $arrGia=array(5,5,5,15,15,10);
            for($i=0;$i<count($arrTen);$i++){
               
                echo '<div class="col-lg-4 col-sm-6">';
                echo '<div class="single_product_item">';
                echo '<div class="single_product_item_thumb">';
                echo '<img src="img/tranding_item/tranding_item_'.($i+1).'.png" alt="#" class="img-fluid">';
                echo '</div>';
                echo ' <h3> <a href="single-product.html">'.$arrTen[$i].'</a> </h3>';
                echo '<p>'.USD2VND($arrGia[$i]).'</p>';
                echo '</div>';
                echo '</div>';

            }
            
            
            ?>
            
            
            </div>
        </div>
    </section>
    <!-- trending item end-->

    <!-- client review part here -->
    <?php include './layouts/client_part.php' ?>
    <!-- client review part end -->


    <!-- feature part here -->
    <?php include './layouts/feature_part.php'?>
    <!-- feature part end -->

    <!-- subscribe part here -->
    <?php include './layouts/subscribe.php' ?>
    <!-- subscribe part end -->

    <!--::footer_part start::-->
    <?php include'./layouts/footerpage.php' ?>
    <!--::footer_part end::-->
    <?php include './layouts/script.php' ?>
    
</body>

</html>