<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <!-- <title>
    <?php 
        if( is_404() ) { // if it's 404 page

            echo 'Error 404 - Page Not Found | '; // or Whatever you want

            bloginfo('name');

        } else if( is_single() ) { // if it's single (post)

            echo '&raquo;';   

            wp_title();            

        } else { 

            wp_title( '|', true, 'right'); 

        }
    ?>
</title> -->


    <?php wp_head();?>


   
</head>
<body>
    
<header>

    <div class="container">
        <?php
            wp_nav_menu(
                array(
                    'theme_location'  => 'top-menu',
                    //'menu'  => 'Top Bar',
                    'menu_class' => 'top-bar' // Attribue une classe
                )
            );
        ?>
    </div>
</header>