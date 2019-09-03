<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jglp-zuerich
 */
?>


<html class="full-height" lang="de-CH">

<head>
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

<body id="top">
    <?php get_header() ?>

    <div id="content">
        <section class="text-center py-5 lighten-4 bluebg" id="about">
            <div class="">
                <div class="">
                    <h2 class="h1 pt-5 pb-3">Über mich</h2>
                    <p class="px-5 mb-5 pb-3 lead">
                        <?php echo get_theme_mod('about-first-setting') ?>
                    </p>
                    <h2 class="h4">Engagement</h2>
                    <p class="px-5 mb-5 pb-3 lead">
                        <?php echo get_theme_mod('about-engagement-setting') ?>
                    </p>
                </div>
            </div>
        </section>
        <section class="py-5" id="positions">
            <div class="container">
                <div>
                    <h2 class="text-center h1 my-4">Positionen</h2>
                    <p class="px-5 mb-5 pb-3 lead blue-grey-text text-center">
                        <?php echo get_theme_mod('positions-first-setting') ?>
                    </p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6 col-sm-12 green lighten-1 text-white">
                    <div class="p-5 text-center">
                        <i class="fa fa-leaf fa-2x"></i>
                        <div class="h5 mt-3">
                            <?php echo get_theme_mod('positions-umwelt-title-setting') ?>
                        </div>
                        <p class="mt-5">
                            <?php echo get_theme_mod('positions-umwelt-setting') ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 cyan lighten-1 text-white">
                    <div class="p-5 text-center">
                        <i class="fa fa-money fa-2x"></i>
                        <div class="h5 mt-3">
                            <?php echo get_theme_mod('positions-finanzen-title-setting') ?>
                        </div>
                        <p class="mt-5">
                            <?php echo get_theme_mod('positions-finanzen-setting') ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 indigo lighten-1 text-white">
                    <div class="p-5 text-center">
                        <i class="fa fa-flag fa-2x"></i>
                        <div class="h5 mt-3">
                            <?php echo get_theme_mod('positions-international-title-setting') ?>
                        </div>
                        <p class="mt-5">
                            <?php echo get_theme_mod('positions-international-setting') ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 blue-grey lighten-1 text-white">
                    <div class="p-5 text-center">
                        <i class="fa fa-train fa-2x"></i>
                        <div class="h5 mt-3">
                            <?php echo get_theme_mod('positions-verkehr-title-setting') ?>
                        </div>
                        <p class="mt-5">
                            <?php echo get_theme_mod('positions-verkehr-setting') ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5" id="smartspider">
            <h2 class="text-center h1 my-4">Smartspider</h2>
            <div class="text-center">
                <img class="img-fluid" src="<?php echo get_theme_mod('spider-setting') ?>" />
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-lg btn-elegant"
                    onclick=" window.open('<?php echo get_theme_mod('smartvote-setting') ?>','_blank')">
                    <!-- TODO -->
                    Zum Smartvote-Profil
                </button>
            </div>
        </section>
        <section class="text-center py-5 grey lighten-4" id="contact">
            <h2 class="text-center h1 my-4">Kontakt</h2>
            <div class="text-center">
                <div class="social">
                    <a href="<?php echo get_theme_mod('facebook-setting') ?>" class="link facebook" target="_parent"><span
                            class="fa fa-facebook-square"></span></a>
                    <a href="<?php echo get_theme_mod('twitter-setting') ?>" class="link twitter" target="_parent"><span
                            class="fa fa-twitter"></span></a>
                    <!--
                    <a href="https://twitter.com/benzumbrunn" class="link instagram" target="_parent"><span
                            class="fa fa-instagram"></span></a>
                    -->
                </div>
            </div>
        </section>
    </div>
    <?php get_footer() ?>
</body>

</html>
