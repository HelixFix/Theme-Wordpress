<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!--Début boucle WordPress-->

        <p><?php echo get_the_date('l j F, Y'); ?></p>
        <!--Date de création ('d/m/Y h:i:s')-->

        <?php the_content(); ?>
        <!--Le contenu-->

        <!--L'auteur==admin-->
        <!--<?php the_author() ?>-->

        <?php
        $fname = get_the_author_meta('first_name'); //Prénom auteur
        $lname = get_the_author_meta('last_name'); //Nom auteur
        //echo $fname . ' ' . $lname; <!--Nom+Prénom-->
        ?>

        <p>&#201;cris par <?php echo $fname; ?> <?php echo $lname; ?>
            <!--Nom+Prénom-->
        </p>

        <?php
        $tags = get_the_tags();
        foreach ($tags as $tag) : ?>
            <!--Pour chaque contenu qui possède un tag-->

            <?php echo get_tag_link($tag->term_id); //Récupérer le lien du tag

            ?>

        <?php endforeach; ?>

<?php endwhile;
else : endif; ?>
<!--Fin boucle WordPress-->