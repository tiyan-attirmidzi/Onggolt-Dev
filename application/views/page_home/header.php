<!DOCTYPE html>
<html>
<head>

    <!--------- Title --------->
    <title><?php echo $page; ?> | <?php echo $company[0]->name; ?></title>

    <!--------- Meta --------->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="description" content="Web Portofolio">
    <meta name="keywords" content="Software, Applications, Technology">
    <meta name="author" content="Tiyan Attirmidzi">

    <!---------- Favicon --------->
    <link rel="icon" href="<?php echo base_url(); ?>tamplate/landing-page/img/core-img/fav-white.png" type="image/x-icon">

    <!--------- CSS --------->   
    <link href="<?php echo base_url(); ?>tamplate/landing-page/style.css" rel="stylesheet">
    
    <style>
        @media only screen and (max-width: 767px){
            .classy-nav-container .classy-navbar .nav-brand {
                max-width: 200px;
                margin-right: 15px;
            }
            .header-area .main-header-area {
                border-top: 10px solid #e6f2fd;
            }
        }
        @media only screen and (max-width: 991px) and (min-width: 768px) {
            .header-area .main-header-area {
                border-top: 10px solid #e6f2fd;
            }
        }
    </style>

</head>
<body>

    <!--------------------------------- Beginning Preloader --------------------------------->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>
    <!--------------------------------- End Preloader --------------------------------->

    <!--------------------------------- Beginning Top Search Area --------------------------------->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------- End Top Search Area --------------------------------->

    <!--------------------------------- Beginning Header Area --------------------------------->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>uploads/company/<?php echo $company[0]->image; ?>" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="<?php if ($page == "Home") echo 'current-item';?>">
                                    <a href="<?php echo base_url(); ?>">Home</a>
                                </li>
                                <li class="<?php if ($page == "Portfolio") echo 'current-item';?>">
                                    <a href="<?php echo base_url().'portfolio'; ?>">Portfolio</a>
                                </li>
                                <li class="<?php if ($page == "About") echo 'current-item';?>">
                                    <a href="<?php echo base_url().'about'; ?>">About</a>
                                </li>
                                <li class="<?php if ($page == "Blog") echo 'current-item';?>">
                                    <a href="<?php echo base_url().'blog'; ?>">Blog</a>
                                </li>
                                <li class="<?php if ($page == "Contact") echo 'current-item';?>">
                                    <a href="<?php echo base_url().'contact'; ?>">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--------------------------------- End Header Area --------------------------------->