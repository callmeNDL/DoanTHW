<!doctype html>
<html lang="zxx">

<?php include './layouts/headerpage.php' ?>

<body>
    <!--::header part start::-->
    <?php include './layouts/menu-header.php' ?>
    <!-- Header part end-->

    <!-- breadcrumb part start-->
    <?php include './layouts/breadcrumb.php' ?>
    <!-- breadcrumb part end-->
    
    <!-- product list part start-->
    <section class="about_us padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="about_us_content">
                        <h5>Our Mission</h5>
                        <h3>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.</h3>
                        <div class="about_us_video">
                            <img src="img/about_us_video.png" alt="#" class="img-fluid">
                            <a class="about_video_icon popup-youtube" href="https://www.youtube.com/watch?v=DWHB6nTyKDI"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list part end-->

    <!-- feature part here -->
    <?php include './layouts/feature_part.php'?>
    <!-- feature part end -->
    
    <!-- client review part here -->
    <?php include './layouts/client_part.php' ?>
    <!-- client review part end -->

    <!-- subscribe part here -->
    <?php include './layouts/subscribe.php' ?>
    <!-- subscribe part end -->

    <!--::footer_part start::-->
    <!-- subscribe part end -->

    <!--::footer_part start::-->
    <?php include './layouts/footerpage.php' ?>
    <!--::footer_part end::-->
    <!-- jquery plugins here-->
    <?php include './layouts/script.php' ?>
</body>

</html>