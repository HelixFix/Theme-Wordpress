<?php get_header();?>

<!--Template général-->
<section class="page-wrap"><!--Ajoute de l'espace en haut et en bas-->
    <div class="container">
        THIS IS THE CATEGORY BLOG TEMPLATE
        <!--<h1><?php the_title();?></h1>--> <!-- Amettre dans la boucle-->

        <?php get_template_part('includes/section','archive');?> <!-- ceci==includes/section-content.php-->
        
        <?php previous_posts_link();?> <!--Affiche lien suivant, ne pas oublier de definir le nombre d'article par page dans wordpress-->
        <?php next_posts_link();?>
    </div>
</section> 



<?php get_footer();?>