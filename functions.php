<?php

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




// Menus
register_nav_menus(

        array(
            'top-menu'  => 'Top Menu Location', //Ajoute l'option "Top Menu Location" dans Wordpress -> Apparence -> Menus
            'mobile-menu'  => 'Mobile Menu Location', //Ajoute l'option "Mobile Menu Location" dans Wordpress -> Apparence -> Menus
            'footer-menu'  => 'Footer Menu Location', //Ajoute l'option "Footer Menu Location" dans Wordpress -> Apparence -> Menus

        )


        );


// Custom Image Sizes
add_image_size('blog-large', 800, 400, false); // Forcer la dimenssion d'une image en gardants les proportions "scale"
add_image_size('blog-small', 300, 200, true); // Forcer la dimenssion par recadrage d'une image  “hard crop”