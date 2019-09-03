<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jglp-zuerich
 */

?>

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
        <?php echo get_theme_mod('candidate-name-setting') ?>
    </title>
    <meta name="description" content="jglp template" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="styles/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <style>
    body {
        font-family: 'Oswald', serif;
    }
    </style>

</head>

<div id="page" class="site">
    <header>
        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="#"><strong>
                        <?php echo get_theme_mod('candidate-name-setting') ?>
                    </strong></a>
                <span class="text-white" style="margin-left: 10px;"><?php echo get_theme_mod('candidate-listinfo-setting') ?></span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active font-bold" href="#about">Über</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-bold" href="#positions">Positionen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-bold" href="#smartspider">Smartspider</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-bold" href="#contact">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Full Page Intro -->
        <div class="view" style="background-image: url(<?php echo get_theme_mod('candidate-background-setting') ?>); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-md-6 text-center text-md-left mt-xl-5 mb-5">
                            <div class="text">
                                <div>
                                    <h1 class="h1-responsive font-bold mt-sm-5" style="color: #599acf;">
                                        <?php echo get_theme_mod('candidate-name-setting') ?>
                                    </h1>
                                    <div class="h4-responsive" style="color: #599acf;">
                                        <?php echo get_theme_mod('candidate-description-setting') ?>
                                    </div>
                                </div>
                                <br />
                            </div>
                        </div>
                        <!--Grid column-->
                        <!--Grid column-->
                        <div class="col-md-6 col-xl-5 mt-xl-5">
                            <img class="img-fluid" src="<?php echo get_theme_mod('candidate-image-setting') ?>" />
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
        </div>
    </header>
</div>