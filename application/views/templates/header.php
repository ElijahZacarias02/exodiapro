<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EXODiA PRO</title>

    <!-- 
    - favicon
  -->

    <link rel="shortcut icon" href="<?php echo base_url('public/assets/images/Logo_White-01.png');?>"
        type="image/x-icon" />


    <!-- 
    - custom css link
  -->


    <!-- 
    - google font link
  -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Oxanium:wght@600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/5f0991fcd5.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <!-- 
    - preload images
  -->
</head>

<body id="top">
    <div class="loader"></div>
    <!-- 
    - #HEADER
  -->

    <header class="header">
        <div class="header-bottom" data-header>
            <div class="container">
                <a href="<?php echo base_url();?>" class="logo">EXODiA PRO</a>

                <nav class="navbar" data-navbar>
                    <ul class="navbar-list">
                        <li class="navbar-item">
                            <a href="<?php echo base_url();?>" class="navbar-link skewBg" data-nav-link>Home</a>
                        </li>

                        <li class="navbar-item">
                            <a href="<?php echo base_url('about');?>" class="navbar-link skewBg" data-nav-link>About</a>
                        </li>

                        <li class="navbar-item">
                            <a href="<?php echo base_url('talents');?>" class="navbar-link skewBg"
                                data-nav-link>Talents</a>
                        </li>

                        <li class="navbar-item">
                            <a href="<?php echo base_url('sponsors');?>" class="navbar-link skewBg"
                                data-nav-link>Sponsors</a>
                        </li>

                        <li class="navbar-item" ule>
                            <a href="<?php echo base_url('schedules');?>" class="navbar-link skewBg"
                                data-nav-link>Schedules</a>
                        </li>

                        <!-- <li class="navbar-item">
                <a href="blogs.html" class="navbar-link skewBg" data-nav-link
                  >Blogs</a
                >
              </li> -->

                        <li class="navbar-item">
                            <a href="<?php echo base_url('contact');?>" class="navbar-link skewBg" data-nav-link>Contact
                                Us</a>
                        </li>
                    </ul>
                </nav>

                <div class="header-actions">
                    <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
                        <ion-icon name="menu-outline" class="menu"></ion-icon>
                        <ion-icon name="close-outline" class="close"></ion-icon>
                    </button>
                </div>
            </div>
        </div>
    </header>