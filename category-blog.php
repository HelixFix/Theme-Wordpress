<?php get_header();?>

<!--Template général-->
<section class="page-wrap"><!--Ajoute de l'espace en haut et en bas-->
    <div class="container">
    <h1><?php echo single_cat_title();?></h1><!--Affiche le nom de la catégorie sur la page-->
        <!--<h1><?php the_title();?></h1>--> <!-- Amettre dans la boucle-->

        <?php get_template_part('includes/section','archive');?> <!-- ceci==includes/section-content.php-->
        
        <?php previous_posts_link();?> <!--Affiche lien suivant, ne pas oublier de definir le nombre d'article par page dans wordpress-->
        <?php next_posts_link();?>

        <!-- <?php // 2- Appel de la fonction paginate_links
            global $wp_query;

            $big = 999999999; 

            echo paginate_links( array( // Plus d'info sur les arguments possibles  : https://codex.wordpress.org/Function_Reference/paginate_links
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages
            ) );
					
        ?> -->
    </div>
</section> 



<?php get_footer();?>