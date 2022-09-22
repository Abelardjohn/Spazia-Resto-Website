<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">



    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />



    <style>
        /* font */

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap');



        body {
            background-color: #FFD8A9;
            font-family: 'Poppins', sans-serif;
        }


        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 600;
            color: #222;
        }

        a {
            color: #222;
            text-decoration: none;
            transition: all 0.4s;
        }

        a:hover {
            color: #F1A661;
        }

        img {
            width: 100%;
        }


        /* navbar */

        #nav-3 {
            background: rgba(0, 0, 0, 0.4);
        }

        .link-3 {
            transition: 0.4s;
            text-decoration: none;
            padding: 0 10px;
            margin: 0 10px;
        }

        .link-3:hover {
            background-color: #E38B29;
            color: #EEA200;
            padding: 5px 10px;
            border-radius: 10px;
        }




        /* end of navbar */

        section {
            padding-top: 120px;
            padding-bottom: 120px;
        }

        .shadow-on-hover {
            transition: all 0.3s;
        }

        .shadow-on-hover:hover {
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        /* Btn */
        .btn {
            border-radius: 0;
            padding: 14px 38px;
        }

        .btn-brand {
            color: #fff;
            font-weight: 500;
            border-color: #F58d17;
            background-color: #F58d17;
        }

        .btn-brand:hover {
            border-color: #d37810;
            background-color: #d37810;
            color: #fff;
        }

        .bg-cover {
            background-position: center !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
        }

        /* Slider */
        .slide-1 {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo base_url('/assets/images/cover1.jpg') ?>);
        }

        .slide-2 {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo base_url('/assets/images/cover2.jpg') ?>);
        }

        #heroSlider h6::after,
        #heroSlider h6::before {
            content: " ";
            width: 40px;
            height: 4px;
            background-color: #ffffff;
            display: inline-block;
            margin: 10px;
            vertical-align: middle;
        }

        .carousel-control-prev,
        .carousel-control-next {
            background-color: rgba(0, 0, 0, 0.6);
            width: 40px;
            height: 70px;
            margin: auto;
        }


        /* Navbar */
        .navbar-nav .nav-link.active {
            color: #F58d17;
        }

        /* About */
        #about .divider {
            width: 60px;
            height: 2px;
            display: block;
            background-color: #F58d17;
        }

        /* Intro text */
        .intro-text {
            margin-bottom: 40px;
            text-align: center;
        }

        .intro-text p {
            max-width: 500px;
            margin: 16px auto 0 auto;
        }

        /* Menu */
        /* #menu .nav-pills .nav-link {
            background-color: #fff;
            margin-left: 8px;
            margin-right: 8px;
            color: #222;
            border-radius: 100px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        #menu .nav-pills .nav-link.active {
            background-color: #F58d17;
            color: #ffffff;
        }

        .menu-item .stars {
            color: #F58d17;
        } */

        /*--------------------------------------------------------------
# Menu 
--------------------------------------------------------------*/
        .menu .nav-tabs {
            border: 0;
        }

        .menu .nav-link {
            margin: 0 10px;
            padding: 10px 5px;
            transition: 0.3s;
            color: #F1A661;
            border-radius: 0;
            cursor: pointer;
            height: 100%;
            border: 0;
            border-radius: 10px;
            /* border-bottom: 2px solid #F1A661; */
        }

        .menu .nav-item a:hover {
            background-color: #F1A661;
            border-radius: 10px;
        }

        .menu .nav-item h4:hover {
            color: white;
        }

        @media (max-width: 575px) {
            .menu .nav-link {
                margin: 0 10px;
                padding: 10px 0;
            }
        }

        .menu .nav-link i {
            padding-right: 15px;
            font-size: 48px;
        }

        .menu .nav-link h4 {
            font-size: 18px;
            font-weight: 400;
            margin: 0;
            font-family: 'poppins';
        }

        @media (max-width: 575px) {
            .menu .nav-link h4 {
                font-size: 16px;
            }
        }

        .menu .nav-link:hover {
            color: #F1A661;
        }

        .menu .nav-link.active {
            color: #F1A661;
            border-color: #F1A661;
        }

        .menu .tab-content .tab-header {
            padding: 30px 0;
        }

        .menu .tab-content .tab-header p {
            font-size: 14px;
            text-transform: uppercase;
            color: #676775;
            margin-bottom: 0;
        }

        .menu .tab-content .tab-header h3 {
            font-size: 36px;
            font-weight: 600;
            color: var(--color-primary);
        }

        .menu .tab-content .menu-item {
            -moz-text-align-last: center;
            text-align-last: center;
        }

        .menu .tab-content .menu-item .menu-img {
            padding: 0 60px;
            margin-bottom: 15px;
        }

        .menu .tab-content .menu-item h4 {
            font-size: 22px;
            font-weight: 500;
            color: var(--color-secondary);
            font-family: var(--font-secondary);
            font-weight: 30px;
            margin-bottom: 5px;
        }

        .menu .tab-content .menu-item .ingredients {
            font-family: var(--font-secondary);
            color: #8d8d9b;
            margin-bottom: 5px;
        }

        .menu .tab-content .menu-item .price {
            font-size: 24px;
            font-weight: 700;
            color: var(--color-primary);
        }

        /* .menu h4 {
            align-items: center;
            text-align: center;
        }

        .menu p {
            align-items: center;
            text-align: center;
        } */

        /* Features */
        #features {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/cover2.jpg);
        }

        .feature {
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .feature .feature-icon {
            width: 80px;
            height: 80px;
            background-color: #F58d17;
            color: #fff;
            font-size: 28px;
            display: inline-grid;
            align-content: center;
            text-align: center;
        }

        /* Team */
        .team-member img {
            max-width: 140px;
            box-shadow: -10px -10px 0 #F58d17;
            border-radius: 100px;
        }

        /* Reviews */
        #reviews {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/cover3.jpg);
        }

        .review img {
            width: 75px;
            height: 75px;
            object-fit: cover;
        }

        .review .quote-icon {
            font-size: 74px;
            color: #F58d17;
            line-height: 1;
        }

        .review .stars {
            color: #F58d17;
        }

        #reviews .carousel-indicators {
            margin-bottom: -3rem;
        }

        /* reservation */
        #reservation .form-control {
            border-radius: 0;
        }

        #reservation .form-control:focus {
            box-shadow: none;
            border-color: #F58d17;
        }

        #reservation input.form-control {
            height: 47px;
        }

        /* Insta Posts */
        .insta-post {
            position: relative;
            overflow: hidden;
        }

        .insta-post .insta-btn {
            width: 90px;
            height: 90px;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 50%;
            left: 50%;
            font-size: 26px;
            transform: translate(-50%, -50%);
            opacity: 0;
        }

        .insta-post img {
            transition: all 0.4s;
        }

        .insta-post:hover img {
            transform: scale(1.2);
        }

        .insta-post:hover .insta-btn {
            opacity: 1;
        }

        /* Blog post */
        .blog-post img {
            width: 40%;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .blog-post {
                flex-direction: column;
            }

            .blog-post img {
                width: 100%;
            }
        }

        /* Footer */
        footer {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(../images/cover3.jpg);
            padding-top: 120px;
            padding-bottom: 30px;
        }

        .footer-top {
            margin-bottom: 30px;
        }

        footer p,
        footer a {
            color: rgba(255, 255, 255, 0.75);
        }

        footer .social-links a {
            font-size: 24px;
            margin-right: 10px;
        }

        footer img {
            max-width: 175px;
        }

        .footer-bottom {
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.4);
        }
    </style>




    <title>Document</title>
</head>

<body>
    <div class="pages">

        <nav id="nav-3" class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
            <div class="container">
                <a class="navbar-brand" href="#">Web Zone</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link link-3 text-white" href="<?= base_url('Company_Profile/index') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-3 text-white" href="<?= base_url('Company_Profile/about') ?>">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-3 text-white" href="<?= base_url('Company_Profile/menu') ?>">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-3 text-white" href="<?= base_url('Company_Profile/contact') ?>">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- <nav id="nav-3">
            <a class="link-3" href="#">Home</a>
            <a class="link-3" href="#">About</a>
            <a class="link-3" href="#">Contact</a>
            <a class="link-3" href="#">Shop</a>
        </nav> -->