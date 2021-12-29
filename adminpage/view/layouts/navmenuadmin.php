<?php
session_start();
?>
<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="./"><img src="../view/images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="../view/images/admin.jpg" alt="User Avatar">
                </a>
                <?php
                if (isset($_SESSION["userName"])) {
                    echo '<div class = "user-menu dropdown-menu">';

                    echo '<a class = "nav-link" href = "#"><i class = "fa fa-user"></i>' . $_SESSION["userName"] . '</a>';

                    echo '<a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>';

                    echo '<a class="nav-link" href="../view/logoutpage.php"><i class="fa fa-power-off"></i>Logout</a>';
                    echo ' </div>';
                } else {
                    echo '<div class = "user-menu dropdown-menu">';
                    echo '<a class="nav-link" href="../view/userloginpage.php"><i class="fa fa-cog"></i>Login</a>';
                    echo ' </div>';
                }
                ?>
            </div>
        </div>
    </div>
</header>