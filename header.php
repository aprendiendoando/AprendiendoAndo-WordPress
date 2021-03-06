<!doctype html>
<html class="no-js" lang="es">
<head>
    <html <?php language_attributes(); ?>>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#FF5253">
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700|Raleway:300,400,500,500i,800" rel="stylesheet">

    <!-- Add CSS Slick Library -->
    <!-- https://cdnjs.com/libraries/slick-carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

    <?php wp_head(); ?>
    <!-- Scripts -->
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-26861579-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-26861579-1');
	</script>

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	     (adsbygoogle = window.adsbygoogle || []).push({
	          google_ad_client: "ca-pub-7099838184920040",
	          enable_page_level_ads: true
	     });
	</script>
</head>

<body <?php body_class(); ?>>
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
                    <?php get_template_part( 'parts/share', 'content' ); ?>
                </div>
            </div> <!-- End Header Top -->
            <div class="header__bottom">
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php the_field('header_logo', 'option'); ?>" alt="<?php bloginfo('name'); ?>">
                    </a>
                </div> <!-- End Logo -->
                <nav class="nav__main">
                    <div class="menuToggle">
                        <input type="checkbox" />
                        <span></span>
                        <span></span>
                        <span></span>
                       <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => 'list-none nav__top'
                                )
                            );
                        ?>
                    </div>
                </nav> <!-- End Nav Main -->
            </div> <!-- End Header Bottom -->
        </div>
    </header>