
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
        <?php include_once '../view/layouts/headeradmin.php'; ?>
</head>
    <body>
        <!-- Left Panel -->
        <?php include_once '../view/layouts/menuadmin.php'; ?>

        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <?php include_once '../view/layouts/navmenuadmin.php'; ?>
            <!-- Header-->

            <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <button class="btn btn-primary"><i class="fa fa-caret-square-o-left"></i><a href="../controller/UserController.php"> Back</a> </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
         
            <div class="content">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-success">
                                <strong>PRODUCT INFORMATION</strong>
                            </div>
                            <?php 
                              
                            ?>
                            <div class="card-body card-block">
                                <form action="../controller/OrderController.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">ID</label></div>
                                        <div class="col-12 col-md-9"><input  type="text"  name="txt_id" class="form-control" value="<?php echo $data[0]["id"]; ?>"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_email" name="txt_name" class="form-control" value="<?php echo $data[0]["name"]; ?>"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Price</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="txt_password" name="txt_price" class="form-control" value="<?php echo $data[0]["price"]; ?>"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                                        <div class="col-12 col-md-9"><input type="file"  name="file_image" class="form-control-file"></div>
                                        <img style="width: 300px; margin:auto" class="rounded-circle update" src="../../frontend/view/img/product/<?php echo $data[0]["image"]; ?>" alt="">
                                    </div>
                                    <div>
                                        <button class="btn btn-primary" name="order_action"  value="product_update"><i class="fa fa-check-square"></i> Update</button>
                                        <button class="btn btn-danger" name="btn_reset"><i class="fa fa-refresh"></i> Reset</button>
                                    </div>
                                    
                                </form>
                            </div>
                            
                        </div> 
                        
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="clearfix"></div>

        <?php include_once '../view/layouts/footeradmin.php'; ?>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <?php include_once '../view/layouts/scriptsadmin.php'; ?>

</body>
</html>
