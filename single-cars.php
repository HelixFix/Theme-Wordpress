<?php get_header(); ?>

<!--Template général-->
<section class="page-wrap"><!--Ajoute de l'espace en haut et en bas-->

	<div class="container">

		<h1><?php the_title(); ?></h1>

		<?php if (has_post_thumbnail()) : ?><!--Si possède une image-->

			<img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail"><!--Affiche l'image-->

		<?php endif; ?>

	<div class="row">
	
		<div class="col-lg-6">

			<?php get_template_part('includes/section', 'cars'); ?><!-- ceci==includes/section-blogcontent.php-->

			<?php wp_link_pages(); ?><!--Ajoute la pagination lorsque qu'un article possède un ou des "pages break"-->

        </div>
        
        <div class="col-lg-6">



        </div>
	
	</div>

	</div>

</section>

<?php get_footer(); ?>