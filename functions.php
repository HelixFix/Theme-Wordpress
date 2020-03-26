<?php

function montheme_supports () {
	add_theme_support('title-tag');
}

function montheme_title ($title) {
	return 'The〈div〉vision 68' . $title;
}

function montheme_title_separator () {
	return '/><';
}


// add_theme_support('title-tag'); //Ajoute un title automatiquement
add_action('after_setup_theme', 'montheme_supports');
add_filter('wp_title', 'montheme_title'); // Filtre - title
add_filter('document_title_separator', 'montheme_title_separator'); // Change le séparateur dans le title



// Load Stylesheets
function load_css()
{
	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all'); //<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	wp_enqueue_style('bootstrap'); // insére dans l'en-tête et le pied de page auxquels elles appartiennent de façon automatique, en les chargeant sans avoir à les saisir sur chaque page séparément.

	wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all'); //css local
	wp_enqueue_style('main'); // insére dans l'en-tête et le pied de page auxquels elles appartiennent de façon automatique, en les chargeant sans avoir à les saisir sur chaque page séparément.
}
add_action('wp_enqueue_scripts', 'load_css');

// Load Javascript
function load_js()
{
	wp_enqueue_script('jquery'); //<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true); //<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('menus'); // Ajoute l'option "Menus" dans Wordpress -> Apparence
add_theme_support('post-thumbnails'); // Ajoute l'option "Image mise en avant" lors de l'édition d'un article
add_theme_support('widgets'); // Ajoute l'option "Widgets" dans Wordpress -> Apparence

// Menus
register_nav_menus(

	array(

		'top-menu'  => 'Top Menu Location', // Ajoute l'option "Top Menu Location" dans Wordpress -> Apparence -> Menus
		'mobile-menu'  => 'Mobile Menu Location', // Ajoute l'option "Mobile Menu Location" dans Wordpress -> Apparence -> Menus
		'footer-menu'  => 'Footer Menu Location', // Ajoute l'option "Footer Menu Location" dans Wordpress -> Apparence -> Menus
	)
);

// Custom Image Sizes
add_image_size('blog-large', 800, 400, false); // Forcer la dimension d'une image en gardants les proportions "scale"
add_image_size('blog-small', 300, 200, true); // Forcer la dimension par recadrage d'une image  “hard crop”

// Register Sidebars créations des options
function my_sidebars(){

	register_sidebar(

		array(

			'name' => 'Page Sidebar',
			'id' => 'page-sidebar',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	register_sidebar(

		array(

			'name' => 'Blog  Sidebar',
			'id' => 'blog-sidebar',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
}

add_action('widgets_init', 'my_sidebars');


function my_first_post_type(){

    $args = array(

        'labels' => array(

            'name' => 'Cars',
            'singular_name' => 'Car',
        ),// Ajoute un nouveau menu 'Cars' dans wordpress

        'hierarchical' => true, // Si true considérer comme une page=statique, si false considérer comme un article
        'public' => true, // Si il est public
        'has_archive' => true, // Si il à une archive
        'menu_icon' => 'dashicons-cart', // Wordpress dashicons
        'supports' => array ('title', 'editor', 'thumbnail'), //Ajoute la possibilité d'édit le titre et le contenu depuis wordpress
        //'rewrite' => array ('slug' => 'cars'),

    );

    register_post_type('cars', $args);

}

add_action('init', 'my_first_post_type');

function my_first_taxonomy(){

    $args = array(

        'labels' => array(

            'name' => 'Brands',
            'singular_name' => 'Brand',
        ),// Ajoute un nouveau menu 'Cars' dans wordpress

        'public' => true,
        'hierarchical' => false, // Si true considérer comme une page=statique, si false considérer comme un article
    );

    register_taxonomy('brands', array('cars'), $args);
}// Création d'un Tag 'Brands'

add_action('init', 'my_first_taxonomy'); 

