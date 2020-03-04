<?php get_header('');?>


<section class="page-wrap"><!--Ajoute de l'espace en haut et en bas-->
    <!--Template général-->
    <div class="container">

        <h1><?php the_title();?></h1>

        <?php get_template_part('includes/section', 'content');?> <!-- ceci==includes/section-content.php-->
    </div>
</section>



<?php get_footer();?>