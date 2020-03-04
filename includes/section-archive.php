<?php if( have_posts() ): while( have_posts() ): the_post();?> <!--La boucle WordPress-->

<div class="card mb-3"> <!--Ajoute une bordure et un margin bottom de 3-->
    <div class="card-body">
        <h3><?php the_title();?></h3>
        
        <?php the_excerpt();?>

        <a href="<?php the_permalink();?>"class="btn btn-success">Lire plus</a> <!--Ajoute un lien-->
    </div>
</div>

<?php endwhile; else: endif;?>