<?php 
include_once '../util/MySQLUtils.php';
?>
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <?php include '../view/layouts/headeradmin.php'; ?>
    </head>
    <body>
        <!-- Left Panel -->
        <?php include '../view/layouts/menuadmin.php'; ?>

        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <?php include '../view/layouts/navmenuadmin.php'; ?>
            <!-- Header-->

            <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <button class="btn btn-primary"><i class="fa fa-plus" ></i><a href="../view/createProduct.php"> New Product</a></button>
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
                                <div class="card-header">
                                    <strong class="card-title">Product Table</strong>
                                </div>
                                <div class="table-stats order-table ov-h">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>
                                                <th class="avatar">Image</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Status</th>                             
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                for($i=0;$i<count($data["product"]);$i++){
                                                    echo '<tr>';
                                                    echo '<td class="serial">'.($i+1).'</td>';
                                                    echo '<td class="avatar">';
                                                    echo '<div class="round-img">';
                                                    echo '<a href="#"><img class="rounded-circle" src="../../frontend/view/img/product/'.$data["product"][$i]["image"].'" alt=""></a>';
                                                    echo '</div>';
                                                    echo '</td>';
                                                    echo '<td>'.$data["product"][$i]["name"].'</td>';
                                                    echo '<td>  <span >'.$data["product"][$i]["price"].'</span> </td>';
                                                    //echo '<td> '.$listUsers[$i]["email"].'</td>';

                                                    echo '<td>';
                                                    echo ' <span class="badge badge-complete">Active</span>';
                                                    echo ' </td>';

                                                    echo ' <td>';
                                                    echo '    <button class="btn btn-success"><i class="fa fa-edit"></i> <a href="../controller/OrderController.php?action=product_edit&id='.($data["product"][$i]["id"]).'">Edit</a></button>';
                                                    echo '   <button class="btn btn-danger" ><i class="fa fa-trash-o"></i><a href="../controller/OrderController.php?action=product_delete&id='.($data["product"][$i]["id"]).'">Delete</button>';
                                                        
                                                    echo '</td>';
                                                    echo '</tr>';
                                                }
                                                
                                                
                                            ?>
                                            <?php
                                            if($_SESSION["delete"]===false){
                                                $message = "Quyền này chỉ sử dụng cho Admin";
                                                echo "<script type='text/javascript'>alert('$message');</script>";
                                                $_SESSION["delete"]=true;
                                            }
                                            ?>
                                            


                                        </tbody>
                                    </table>
                                </div> <!-- /.table-stats -->
                            </div>
                        </div>


                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="clearfix"></div>

        <?php include '../view/layouts/footeradmin.php'; ?>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <?php include '../view/layouts/scriptsadmin.php'; ?>

</body>
</html>
