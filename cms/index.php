<?php 
session_start();

if (empty($_SESSION['status'])) {
    header("location:form-login.php");
}

?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CMS - SIGLI</title>
    <meta name="description" content="Zulfa Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">


    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/DataTables/datatables.css"> -->
    <!-- <link rel="stylesheet" href="assets/datatables.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/jquery.dataTables.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <style type="text/css">
        .row{
            width: 100%;
        }
    </style>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">KOPI SIGLI</a>
                <!-- <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a> -->
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    <li>
                        <a href="index.php?page=daftar-meja"><i class="menu-icon fa fa-list-alt"></i>Daftar Meja</a>
                    </li>
                    <li>
                        <a href="index.php?page=daftar-user"><i class="menu-icon fa fa-users"></i>Daftar User</a>
                    </li>
                    <!-- <li>
                        <a href="index.php?page=kategori"><i class="menu-icon fa fa-file-text"></i>Kategori</a>
                    </li> -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Menu</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="index.php?page=daftar-menu">Daftar Menu</a></li>
                            <li><i class="fa fa-table"></i><a href="index.php?page=input-menu">Input Menu</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?page=transaksi"><i class="menu-icon fa fa-table"></i>Transaksi</a>
                    </li>


<!--                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                        </ul>
                    </li> -->

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar"> -->
                            Account
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="index.php?page=profile"><i class="fa fa-user"></i> My Profile</a>
                            <a class="nav-link" href="index.php?page=manage-admin"><i class="fa fa-user"></i> Manage Admin </a>
                            <!-- <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a> -->
                            <a class="nav-link" href="process/logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
         <?php 
         if (isset($_GET['page'])) {
             # code...
            // ===============================================================
            // MEJA
            // ===============================================================
            /*
            
            */
            if ($_GET['page'] == 'daftar-meja') 
            {
                $act = 'view';
                include 'process/meja.php';
                include 'view/daftar-meja.php';
            }
            elseif ($_GET['page'] == 'input-meja') 
            {
                include('view/input-meja.php');
            }
            elseif ($_GET['page'] == 'edit-meja') 
            {
                $act = 'edit';
                $id = $_GET['id'];
                include 'process/meja.php';
                include('view/edit-meja.php');
            }
            elseif ($_GET['page'] == 'hapus-meja') 
            {
                $act = 'hapus';
                $id = $_GET['id'];
                include 'process/meja.php';
                $act = 'view';
                include 'process/meja.php';
                include 'view/daftar-meja.php';
            }
            // ===============================================================
            // USER
            // ===============================================================
            elseif ($_GET['page'] == 'daftar-user') 
            {
                $act = 'view';
                include 'process/user.php';
                include('view/daftar-user.php');
            }
            elseif ($_GET['page'] == 'input-user') 
            {
                include('view/input-user.php');
            }
            elseif ($_GET['page'] == 'edit-user') 
            {
                $act = 'edit';
                $id = $_GET['id'];
                include 'process/user.php';
                include('view/edit-user.php');
            }
            elseif ($_GET['page'] == 'hapus-user') 
            {
                $act = 'hapus';
                $id = $_GET['id'];
                include 'process/user.php';
                $act = 'view';
                include 'process/user.php';
                include 'view/daftar-user.php';
            }
            // ===============================================================
            // ADMIN
            // ===============================================================

            elseif ($_GET['page'] == 'profile') 
            {
                $act = 'get-profile';
                include 'process/admin.php';
            }
            elseif ($_GET['page'] == 'manage-admin') 
            {
                $act = 'manage-admin';
                include 'process/admin.php';
            }
            elseif ($_GET['page'] == 'edit-admin') 
            {
                $id = $_GET['id'];
                $act = 'edit-admin';
                include 'process/admin.php';
            }
            elseif ($_GET['page'] == 'tambah-admin') 
            {
                $act = 'input-admin';
                include 'process/admin.php';
            }

            // ===============================================================
            // TRANSAKSI
            // ===============================================================
            elseif ($_GET['page'] == 'transaksi') 
            {
                $act = 'get-transaksi';
                include 'process/transaksi.php';
            }
            elseif ($_GET['page'] == 'view-transaksi') 
            {
                $act = 'view-transaksi';
                $id = $_GET['id'];
                include 'process/transaksi.php';
            }
            // ===============================================================
            // MENU
            // ===============================================================
             elseif ($_GET['page'] == 'daftar-menu') 
            {
                $act = 'get-menu';
                include 'process/menu/menu.php';
            }
            elseif ($_GET['page'] == 'input-menu') 
            {
                include('view/input-menu.php');
            }
            elseif ($_GET['page'] == 'edit-menu') 
            {
                $act = 'edit';
                $id = $_GET['id'];
                include 'process/menu/menu.php';
            }
            elseif ($_GET['page'] == 'hapus-menu') 
            {
                $act = 'hapus';
                $id = $_GET['id'];
                include 'process/menu.php';
                $act = 'view';
                include 'process/menu.php';
                include 'view/daftar-menu.php';
            }

        // ===============================================================
        // Dashboard
        // ===============================================================
         }
         else
         {
            include 'view/dashboard.php';
         }
         ?>


 <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="assets/DataTables/Media/js/jquery.dataTables.js"></script> -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- <script src="assets/datatables.js"></script> -->

    <!-- <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script> -->
    <!-- <script src="assets/js/dashboard.js"></script> -->
    <!-- <script src="assets/js/widgets.js"></script> -->
    <!-- <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script> -->
    <!-- <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script> -->
    <!-- <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script> -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>
    <script>
        
        // (function($) {
        //     "use strict";

        //     jQuery('#vmap').vectorMap({
        //         map: 'world_en',
        //         backgroundColor: null,
        //         color: '#ffffff',
        //         hoverOpacity: 0.7,
        //         selectedColor: '#1de9b6',
        //         enableZoom: true,
        //         showTooltip: true,
        //         values: sample_data,
        //         scaleColors: ['#1de9b6', '#03a9f5'],
        //         normalizeFunction: 'polynomial'
        //     });
        // })(jQuery);
    </script>

</body>

</html>
