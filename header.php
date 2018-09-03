<!doctype html>
<html class="no-js" lang="es">
<head>
    <html <?php language_attributes(); ?>>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700|Raleway:300,400,500,500i,800" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <header class="header">
        <div class="box">
            <div class="header__top">
                <div class="header__mail">
                    <i class="aprendiendoando-correo"></i>
                    <a class="decoration-none" href="mailto:<?php the_field('header_correo_principal', 'option'); ?>?subject=<?php bloginfo('name'); ?>"><?php the_field('header_correo_principal', 'option'); ?></a>
                </div>
                <div class="header__rs">
                    <?php 
                        $header_redes_sociales = get_field('header_redes_sociales','option');
                    ?>
                    <?php 
                        if($header_redes_sociales){
                    ?>
                            <ul class="list-none">
                                <li>
                                    <a class="decoration-none" href="<?php echo $header_redes_sociales['twitter_url']; ?>" title="Twitter <?php bloginfo('name'); ?>" target="_blank">
                                        <i class="aprendiendoando-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="decoration-none" href="<?php echo $header_redes_sociales['facebook_url']; ?>" title="Facebook <?php bloginfo('name'); ?>" target="_blank">
                                        <i class="aprendiendoando-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="decoration-none" href="<?php echo $header_redes_sociales['youtube_url']; ?>" title="Youtube <?php bloginfo('name'); ?>" target="_blank">
                                        <i class="aprendiendoando-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="decoration-none" href="<?php echo $header_redes_sociales['rss_url']; ?>" title="RSS <?php bloginfo('name'); ?>" target="_blank">
                                        <i class="aprendiendoando-rss"></i>
                                    </a>
                                </li>
                            </ul>
                    <?php
                        }
                    ?>
                </div>
            </div> <!-- End Header Top -->
            <div class="header__bottom">
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php the_field('header_logo', 'option'); ?>" alt="<?php bloginfo('name'); ?>">
                    </a>
                </div> <!-- End Logo -->
                <nav class="nav__main">
                   <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'list-none nav__top'
                            )
                        );
                    ?>
                </nav> <!-- End Nav Main -->
            </div> <!-- End Header Bottom -->
        </div>
    </header>