<?php get_header();?>

<!--Template général-->
<section class="page-wrap"><!--Ajoute de l'espace en haut et en bas-->
    <div class="container">

        <h1><?php the_title();?></h1>

        <?php if(has_post_thumbnail):?><!--Si possède une image-->

        <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail"><!--Affiche l'image-->

        <?php endif;?>   

        <?php get_template_part('includes/section', 'content');?> <!-- ceci==includes/section-content.php-->
    </div>
</section> 



<?php get_footer();?>