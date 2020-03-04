<?php

//Création d'un template spécifique qu'on liera depuis wordpress

/*
Template Name: Nous contacter
*/
?>

<?php get_header(); ?>

<!--Template général-->
<section class="page-wrap"> <!--Ajoute de l'espace en haut et en bas-->
    <div class="container">

        <h1><?php the_title(); ?></h1>


        <div class="row">

            <div class="col-lg-6">

                This is where the contact form goes

            </div>
            <div class="col-lg-6">

                <?php get_template_part('includes/section', 'content'); ?>
                <!-- ceci==includes/section-content.php-->


            </div>


        </div>

    </div>
</section> 



<?php get_footer(); ?>