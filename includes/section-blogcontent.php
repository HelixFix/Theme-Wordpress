<?php if( have_posts() ): while( have_posts() ): the_post();?> <!--La boucle WordPress-->


    <?php the_content();?> <!--Le contenu-->


    <?php the_author()?><!--L'auteur-->

<?php endwhile; else: endif;?>