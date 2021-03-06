<?php
include_once  $baseUrl . '../db/database.php';
include_once $baseUrl . '../utils/utility.php';
$db = new Database();
$user = Utility::getUserToken();
if ($user == null) {
    header("Location:./authen/login.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="<?= $baseUrl ?>plugins/fontawesome-free/css/all.min.css"> -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= $baseUrl ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= $baseUrl ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= $baseUrl ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= $baseUrl ?>dist/css/adminlte.min.css">
    <!-- My css -->
    <link rel="stylesheet" href="<?= $baseUrl ?>dist/css/styles.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= $baseUrl ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= $baseUrl ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= $baseUrl ?>plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>plugins/ckeditor/">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= $baseUrl ?>./index.php" class="nav-link">Trang ch???</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Li??n h???</a>
                </li>
            </ul>

            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= $baseUrl ?>./index.php" class="brand-link">
                <img src="<?= $baseUrl ?>dist/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">SportStore</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <!-- <img src="<?= $baseUrl ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
                        <img src="<?= fixUrl($user['avatar'], '../')  ?>" class="img-circle elevation-2">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= $user['fullname'] ?></a>
                        <a href="<?= $baseUrl ?>./authen/logout.php" onclick="return confirm('B???n c?? mu???n ????ng xu???t kh??ng?')" class="d-block btn-logout">????ng xu???t</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-list-alt"></i>
                                <p>
                                    Qu???n l?? danh m???c
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= $baseUrl ?>./category/editor.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Th??m danh m???c</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $baseUrl ?>./category/index.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh s??ch danh m???c</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fab fa-product-hunt"></i>
                                <p>
                                    Qu???n l?? s???n ph???m
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= $baseUrl ?>./product/editor.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Th??m s???n ph???m</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $baseUrl ?>./product/index.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh s??ch s???n ph???m</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Qu???n l?? ng?????i d??ng
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= $baseUrl ?>./user/editor.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Th??m ng?????i d??ng</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $baseUrl ?>./user/index.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh s??ch ng?????i d??ng</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-shopping-cart"></i>
                                <p>
                                    Qu???n l?? ????n ?????t h??ng
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= $baseUrl ?>./order/editor.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Th??m ????n </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $baseUrl ?>./order/index.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh s??ch ????n h??ng</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-user-tag"></i>
                                <p>
                                    Qu???n l?? quy???n
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= $baseUrl ?>./roles/editor.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Th??m quy???n</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $baseUrl ?>./roles/index.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh s??ch quy???n</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-comments"></i>
                                <p>
                                    Qu???n l?? ph???n h???i
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= $baseUrl ?>./feedback/index.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p> Danh s??ch ph???n h???i</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-sliders-h"></i>
                                <p>
                                    Qu???n L?? Slider
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= $baseUrl ?>./slider/editor.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Th??m Slider</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $baseUrl ?>./slider/index.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh s??ch Slider</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-copyright"></i>
                                <p>
                                    Qu???n L?? Th????ng Hi???u
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= $baseUrl ?>./brands/editor.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Th??m Th????ng Hi???u</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $baseUrl ?>./brands/index.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh s??ch Th????ng Hi???u</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-chart-bar"></i>
                                <p>
                                    Qu???n L?? Th???ng k??
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= $baseUrl ?>./statistics/index.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh s??ch Th???ng k??</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>