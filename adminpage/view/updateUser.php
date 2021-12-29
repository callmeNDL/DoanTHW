
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
                                    <button class="btn btn-primary"><i class="fa fa-caret-square-o-left"></i><a href="../view/users.php"> Back</a> </button>
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
                                <strong>USER INFORMATION</strong>
                            </div>
              
                            <div class="card-body card-block">
                                <form action="../controller/UserController.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                                        <div class="col-12 col-md-9"><input type="text" value="<?php echo $data[0]["userName"]; ?>" name="text-username" class="form-control"></div>
                                    </div>
                                    <div class="row form-group"> 
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="email" value="<?php echo $data[0]["email"]; ?>" name="txt_email" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-9"><input disabled type="password" has value="<?php echo md5($data[0]["passWord"]); ?>" id="txt_password" name="txt_password" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Role</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="cbm_role" id="cbm_role" class="form-control-sm form-control">
                                                <option value="0">Please select</option>
                                                <option value="1">User</option>
                                                <option value="2">Admin</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Rex</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check-inline form-check">
                                                <label for="inline-radio1" class="form-check-label ">
                                                    <input type="radio" id="inline-radio1" name="rdg_sex" value="option1" class="lbsRadio">Male
                                                </label>
                                                <label for="inline-radio2" class="form-check-label ">
                                                    <input type="radio" id="inline-radio2" name="rdg_sex" value="option2" class="lbsRadio">Female
                                                </label>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Interests</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="checkbox">
                                                    <label for="checkbox1" class="form-check-label ">
                                                        <input type="checkbox" id="chk_football" name="chk_football" value="option1" class="lbsCheckBox"> Football
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="checkbox2" class="form-check-label ">
                                                        <input type="checkbox" id="chk_tennis" name="chk_tennis" value="option2" class="lbsCheckBox"> Tennis
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="checkbox3" class="form-check-label ">
                                                        <input type="checkbox" id="chk_gym" name="chk_gym" value="option3" class="lbsCheckBox"> Gym
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Avatart</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-avatar" name="file-avatar" class="form-control-file"></div>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary" name="user_action"  value="user_update"><i class="fa fa-check-square"></i> Update</button>
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
