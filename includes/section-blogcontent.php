<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!--Début boucle WordPress-->

        <p><?php echo get_the_date('l j F, Y'); ?></p>
        <!--Date de création ('d/m/Y h:i:s')-->

        <?php the_content(); ?><!--Le contenu-->

        
        <!--<?php the_author() ?>--><!--L'auteur==admin-->

        <?php
        $fname = get_the_author_meta('first_name'); //Prénom auteur
        $lname = get_the_author_meta('last_name'); //Nom auteur
        //echo $fname . ' ' . $lname; <!--Nom+Prénom-->
        ?>

        <p>&#201;cris par <?php echo $fname; ?> <?php echo $lname; ?><!--Nom+Prénom-->
        </p>

        <?php
        $tags = get_the_tags();
        foreach ($tags as $tag) : ?><!--Boucle pour chaque contenu qui possède un tag-->


            <!--<?php echo get_tag_link($tag->term_id);?>--> <!--Récupérer le lien du tag-->
            <a href="<?php echo get_tag_link($tag->term_id);?>"class="badge badge-success"> <!--Lien clickable + mise en forme bouton tag-->
                <?php echo $tag->name;?><!--Faire apparaitre nom du tag-->
            </a>

            

        <?php endforeach; ?>


        <?php
        $categories = get_the_category();
        foreach($categories as $cat) : ?><!--Boucle pour chaque contenu qui possède une catégorie-->
                <a href="<?php echo get_category_link($cat->term_id);?>"> <!--Lien clickable + mise en forme bouton catégorie-->
                <?php echo $cat->name;?><!--Faire apparaitre nom de la catégorie-->
                </a>
        <?php endforeach; ?>

        

<?php endwhile;else : endif; ?><!--Fin boucle WordPress-->