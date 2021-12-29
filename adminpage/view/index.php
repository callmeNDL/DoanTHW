
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <?php include 'layouts/headeradmin.php'; ?>
    </head>
    <body>
        <!-- Left Panel -->
        <?php include 'layouts/menuadmin.php'; ?>

        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <?php include 'layouts/navmenuadmin.php'; ?>
            <!-- Header-->
            <div><h2>Vui lòng đăng nhập vào hệ thống quản lý User</h2></div>
            <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                    
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <button class="btn btn-primary"><i class="fa fa-plus" ></i><a href="createUser.php"> New User</a></button>
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
                                    <strong class="card-title">Users Table</strong>
                                </div>
                                <div class="table-stats order-table ov-h">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>
                                                <th class="avatar">Avatar</th>
                                                <th>ID</th>
                                                <th>UserName</th>
                                                <th>Email</th>                             
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                for($i=0;$i<1;$i++){
                                                    echo '<tr>';
                                                    echo '<td class="serial">'.($i+1).'.</td>';
                                                    echo '<td class="avatar">';
                                                    echo '<div class="round-img">';
                                                    echo '<a href="#"><img class="rounded-circle" src="images/avatar/me.jpeg" alt=""></a>';
                                                    echo '</div>';
                                                    echo '</td>';
                                                    echo '<td> #'.($i+100).' </td>';
                                                    echo '<td>  <span >Nguyen Duc Long </span> </td>';
                                                    echo '<td> nguyenduclong@gmail.com</td>';

                                                    echo '<td>';
                                                    echo ' <span class="badge badge-complete">Active</span>';
                                                    echo ' </td>';

                                                    echo ' <td>';
                                                    echo '    <button class="btn btn-success"><i class="fa fa-edit"></i> <a href="updateUser.php?id='.($i+1).'">Edit</a></button>';
                                                    echo '   <button class="btn btn-danger">  <i class="fa fa-trash-o"></i> Delete</button>';
                                                        
                                                    echo '</td>';
                                                    echo '</tr>';
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

        <?php include 'layouts/footeradmin.php'; ?>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <?php include 'layouts/scriptsadmin.php'; ?>

</body>
</html>
