<?php if( have_posts() ): while( have_posts() ): the_post();?> <!--La boucle WordPress-->

<div class="card mb-3"> <!--Ajoute une bordure et un margin bottom de 3-->
    <div class="card-body">
        
        <?php if(has_post_thumbnail):?><!--Si possède une image-->

        <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail"><!--Affiche l'image-->

        <?php endif;?>   

        <h3><?php the_title();?></h3>
        
        <?php the_excerpt();?>

        <a href="<?php the_permalink();?>"class="btn btn-success">Lire plus</a> <!--Ajoute un lien-->
    </div>
</div>

<?php endwhile; else: endif;?>