<!DOCTYPE html>
<html lang="nl" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="{description}">
    <meta name="keywords" content="{keywords}">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
</head>
<body>
<header class="row" id="top">
    <div class="header-top-bar col-xs-12">
        <h1 class="header-top-bar-h1"><a href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a></h1>
    </div>


    <div class="headwrap">
        <div class="header-logo">
            <img src="<?php echo get_bloginfo('url') . '/wp-content/themes/Armaniimus-portfolio/images/logo/logo.png'?>" alt="" class="header-logo-img">
            <div class="header-logo-icon">
                <i class="fas fa-bars"></i>
            </div>
        </div>

        <!-- main nav -->
        <nav class="header-main">
            <?php
            $defaults = array (
                'container' => false,
                'theme_location' => 'primary-menu',
                'menu_class' => 'float-l primary-menu header-main-ul mobile_display_none'
            );

            wp_nav_menu($defaults);
            ?>
            <!-- <ul class="float-l header-main-ul mobile_display_none">
                <li class="float-l header-li">
                    <a href="" class="float-l">Home<i class="fas fa-home"></i></a>
                </li>

                <ul class="float-l dropdown-ul">
                    <li class="dropdown-title">Cv en etc.<i class="fas fa-caret-down"></i></li>
                    <ul class="dropdown-content">
                        <li><a href="cv" class="float-l">CV</a></li>
                        <li><a href="overmij" class="float-l">Over mij</a></li>
                        <li><a href="bewijsstukken" class="float-l">Bewijsstukken</a></li>
                    </ul>
                </ul>

                <ul class="float-l dropdown-ul">
                    <li class="dropdown-title">Projecten<i class="fas fa-caret-down"></i></li>
                    <ul class="dropdown-content">
                        <li><a href="projecten-metvid" class="float-l">Projecten met video</a></li>
                        <li><a href="projecten-zondervid" class="float-l">Projecten zonder video</a></li>
                    </ul>
                </ul>

                <li class="float-l header-li">
                    <a href="contact" class="float-l">Contact</i></a>
                </li> -->
            </ul>
        </nav>
    </div>
</header>
