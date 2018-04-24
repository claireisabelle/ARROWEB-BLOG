<?php

/* ------------------------------------------------- *|
	SOMMAIRE
|* ------------------------------------------------- */
/**
 * CSS AND JS SCRIPTS................ Déclaration des fichiers .css et .js
 * WIDGETS .......................... Espace widget pour le formulaire de recherche
 * SET UP THEME ..................... Taille des images et thumbnails
 * CUSTOMISATION PAGE WP-LOGIN.PHP .. Espace de connexion personnalisé
 */





/*
 ***********************************************
 * $CSS AND JS SCRIPTS
 ***********************************************
 */

function arroweb_blog_styles(){

	// CSS FILES
	wp_register_style('font-roboto', 'https://fonts.googleapis.com/css?family=Roboto+Condensed', array(), '1.0.0');
	wp_register_style('font-kalam', 'https://fonts.googleapis.com/css?family=Kalam', array(), '1.0.0');
	wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', array(), '4.0.0' );
	wp_register_style('arroweb', 'https://arroweb.net/css/style.css', array(), '1.0.0');
	wp_register_style('blog', get_template_directory_uri().'/style.css', array('bootstrap', 'arroweb'), '1.0.0');

	wp_enqueue_style('font-roboto');
	wp_enqueue_style('font-kalam');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('arroweb');
	wp_enqueue_style('blog');


	// JS SCRIPTS
	wp_register_script('jquery3', 'https://code.jquery.com/jquery-3.1.1.slim.min.js', array(), '', true);
	wp_register_script('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array(), '', true);
	wp_register_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array(), '', true);
	wp_register_script('fontawesome', 'https://use.fontawesome.com/7798b6d3d8.js', array(), '', true);

	wp_enqueue_script('jquery3');
	wp_enqueue_script('tether');
	wp_enqueue_script('bootstrapjs');
	wp_enqueue_script('fontawesome');

}

add_action('wp_enqueue_scripts', 'arroweb_blog_styles');





/*
 ***********************************************
 * $WIDGETS
 ***********************************************
 */

function arroweb_blog_widgets($id){
     register_sidebar(array(
          'name' => 'Search',
          'id' => 'search',
          'before_widget' => '<div class="blog-search">',
          'after_widget' => '</div>', 
          'before_title' =>'<span class="title-search">',
          'after_title'	=> '</span>'
     ));
}

add_action('widgets_init', 'arroweb_blog_widgets');





/*
 ***********************************************
 * $SET UP THEME
 ***********************************************
 */

function arroweb_blog_setup(){
	add_theme_support('post-thumbnails');

	add_image_size('thumbnail-home', 300, 140, true);
	add_image_size('thumbnail-single', 650, 9999);

}
add_action('after_setup_theme', 'arroweb_blog_setup');





/*
 ***********************************************
	CUSTOMISATION PAGE WP-LOGIN.PHP
 ***********************************************
 */

function arroweb_blog_custom_login_css()  {
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('template_directory') . '/css/style-login.css" />';
}
add_action('login_head', 'arroweb_blog_custom_login_css');

// Filtre qui permet de changer l'url du logo
function arroweb_blog_custom_url_login()  {
    return get_bloginfo( 'siteurl' ); // On retourne l'index du site
}
add_filter('login_headerurl', 'arroweb_blog_custom_url_login');

// Filtre qui permet de changer l'attribut title du logo
function arroweb_blog_custom_title_login($message) {
	$title = 'Arroweb - Création de site Internet';
    return $title; 
}
add_filter('login_headertitle', 'arroweb_blog_custom_title_login');





