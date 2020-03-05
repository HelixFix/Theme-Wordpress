<?php get_header();?>

<!--Template général-->
<section class="page-wrap"><!--Ajoute de l'espace en haut et en bas-->
    <div class="container">

        <h1><?php the_title();?></h1>

        <?php get_template_part('includes/section', 'blogcontent');?> <!-- ceci==includes/section-blogcontent.php-->

        <?php wp_link_pages();?><!--Ajoute la pagination lorsque qu'un article possède un ou des "pages break"-->

    </div>
</section> 



<?php get_footer();?>