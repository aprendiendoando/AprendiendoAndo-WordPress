<?php

	// Activando el soporte para las image_size_names_choose
	if ( function_exists( 'add_theme_support' ) ) {
	    add_theme_support( 'post-thumbnails' );
	    set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)
	    // additional image sizes
	    // delete the next line if you do not need additional image sizes
	    add_image_size( 'course-full', 800, 400, true );
	    add_image_size( 'category-full', 783, 290, true );
	}

	/**
     * Agregamos los scripts y los css que vamos a utilizar en  nuestro sitio web.
     *
     * @param string $handle Script name
     * @param string $src Script url
     * @param array $deps (optional) Array of script names on which this script depends
     * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
     * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
     */
    function misRecursos() {
        wp_enqueue_style ('normalize', get_template_directory_uri().'/css/normalize.css', array('style'), '3.0.3');
        wp_enqueue_style("style",get_stylesheet_uri());
        // wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0.0', true);
    }
    add_action( 'wp_enqueue_scripts', 'misRecursos' );


    /*
	==========================================
	 Activate menus
	==========================================
*/
function aprendiendoando_theme_setup() {

	add_theme_support('menus');
	register_nav_menu('primary', 'Navegación Primaria Header');
	register_nav_menu('secondary', 'Navegación Footer');

}
add_action('init', 'aprendiendoando_theme_setup');

/*
	==========================================
	 Page Options
	==========================================
*/

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Configuración general del tema',
		'menu_title'	=> 'Aprendiendoando',
		'menu_slug' 	=> 'ajustes-tema',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}


/*
	==========================================
	 Youtube API
	==========================================
*/

// Funcionalidad sacada de esta URL, logicamente por razones de seguridad no puedo subir los parametros solicitados en la funcion que se utilizo para mostrar la cantidad de suscriptores del canal aprendiendoando
// https://gist.github.com/nonsintetic/9adb5c4a07b43e098473bdc76ff259a6#gistcomment-2266176


require_once(get_template_directory().'/functions/youtube.php');



?>