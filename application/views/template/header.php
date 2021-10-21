<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>#TelyuCurhat</title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url('assets/') ?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url('assets/') ?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url('assets/') ?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('assets/') ?>css/theme.css" rel="stylesheet" media="all">

</head>
<style type="text/css">
    .icon-telkom {
        width: 55px;
    }

    .jarak-tulisan-login {
        margin-top: 7%;
        margin-bottom: 3%;
        font-size: 25px;
    }

    .text-move-right {
        text-align: right;
    }
</style>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR UNTUK DEKSTOP-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="<?= base_url('assets/') ?>images/icon/logo_telyucurhat.png" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="<?= base_url('assets/') ?>images/icon/user_gray.png" />
                    </div>
                    <h4 class="name"><?= $this->session->userdata('nama'); ?></h4>
                    <a href="#"><?= $this->session->userdata('nim'); ?></a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="<?= base_url('index.php/user/viewCreatePost') ?>">
                                <i class="fas fa-plus"></i>Create New Post</a>
                        </li>

                        <li>
                            <a href="<?= base_url('index.php/user') ?>">
                                <i class="fas fa-home"></i>Home</a>
                        </li>

                        <li>
                            <a href="<?= base_url('index.php/user/viewProfile/') . $this->session->userdata('nim'); ?>">
                                <i class="fas fa-user"></i>Profile</a>
                        </li>

                        <li>
                            <a href="<?= base_url('auth/logout'); ?> ">
                                <i class="fas fa-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER NAVBAR UNTUK DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="<?= base_url('assets/') ?>images/icon/logo_telyucurhat.png" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">

                                </div>
                                 
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="<?= base_url('assets/') ?>images/icon/logo_telyucurhat.png" />

                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="<?= base_url('assets/') ?>images/icon/user_gray.png" />
                        </div>
                        <h4 class="name"><?= $this->session->userdata('nama'); ?></h4>
                        <a href="#"><?= $this->session->userdata('nim'); ?></a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li>
                                <a href="<?= base_url('index.php/user/viewCreatePost') ?>">
                                    <i class="fas fa-plus"></i>Create New Post</a>
                            </li>

                            <li>
                                <a href="<?= base_url('index.php/user') ?>">
                                    <i class="fas fa-home"></i>Home</a>
                            </li>

                            <li>
                                <a href="<?= base_url('index.php/user/viewProfile/') . $this->session->userdata('nim'); ?>">
                                    <i class="fas fa-user"></i>Profile</a>
                            </li>

                            <li>
                                <a href="<?= base_url('auth/logout'); ?> ">
                                    <i class="fas fa-power-off"></i>Logout</a>
                            </li>



                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">

                    </div>
                </div>
            </div>
            </section>
            <div style="margin-bottom: 5%;"></div>
            <!-- END BREADCRUMB-->