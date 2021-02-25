<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./vendor/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
     media query -->
    <link rel="stylesheet" href="./assets/css/_media.css"> -->
    <?php wp_head(); ?>
</head>
<body>
    <!--Header Area-->

    <header class="header-area">
        <div class="container">
            <nav class="nav">
                <a href="#" class="link nav-brand text-light">
                    <!-- <img src="./assets/images/logo.png" alt="logo"> -->
                </a>

                <!--toggle menu-->
                <!-- <button class="toggle-button">
                    <span> <i class="fas fa-bars"></i></span>
                </button> -->

                <!--navigation items-->
                <div class="collapse" id="toggle-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-link">
                            <a href="#" class="link text-dark">Home</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="link text-dark">People</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="link text-dark">Design</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="link text-dark">Travel</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="link text-dark">AboutAs</a>
                        </li>
                    </ul>
                    <div class="search">
                        <form class="form-group">
                            <input type="search" class="input-control mr-sm-2" placeholder="Search">
                            <button class="btn btn-submit" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!--End Header Area-->

    <!--Main Site Area-->

    <main class="main-area">