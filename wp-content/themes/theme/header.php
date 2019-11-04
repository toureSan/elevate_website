<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Stellar</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <?php wp_head();?>

 
    <!-- script
    ================================================== -->


    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">

</head>


<body id="top">
    
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-jump">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="row">

            <div class="header-logo">
             
                <a class="site-logo" href="index.html"><img src="<?php bloginfo('template_directory');?>/images/logo_blanc.png" alt="Homepage"></a>
            </div>
            
            <nav class="header-nav-wrap">
                <ul class="header-nav">
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll"  href="#about" title="about">Elevate</a></li>
                    <li><a class="smoothscroll"  href="#services" title="services">Services</a></li>
                    <li><a class="smoothscroll"  href="#works" title="works">Works</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li>
                </ul>
            </nav> <!-- end header-nav-wrap -->
            
            <a class="header-menu-toggle" href="#0">
                <span class="header-menu-icon"></span>
            </a>

        </div> <!-- end row -->

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory');?>/images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h1>
                Nous fournissons des <br>
                solutions créatives pour transformer vos 
                <br>idées en réalité numérique
            
                
                </h1>

                <div class="home-content__button">
                    <a href="#about" class="smoothscroll btn btn-animatedbg">
                        plus sur nous
                    </a>
                </div>

                <div class="home-content__video">
                    <a class="video-link" href="https://youtu.be/nXqZy_A0ugo" data-lity>
                        <span class="video-icon"></span>
                        <span class="video-text">Réalisation</span>
                    </a>
                </div>

            </div> <!-- end home-content__main -->

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    Scroll
                </a>
            </div>

        </div> <!-- end home-content -->

        <ul class="home-social">
            <li>
                <a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="https://github.com/"><i class="fab fa-behance" aria-hidden="true"></i><span>Behance</span></a>
            </li>
            <li>
                <a href="https://www.behance.net/nicolasbula"><i class="fab fa-github" aria-hidden="true"></i><span>Behance</span></a>
            </li>
            <li>
                <a href="https://www.behance.net/Isma290?tracking_source=search%7Ctoure%20"><i class="fab fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a>
            </li>
        </ul> <!-- end home-social -->

    </section> <!-- end s-home -->
