<?php get_header(); ?>

<!--Template général-->
<section class="page-wrap"><!--Ajoute de l'espace en haut et en bas-->

	<div class="container">

		<section class="row">

			<div class="col-lg-3">

				<?php if (is_active_sidebar('page-sidebar')) : ?><!--Si une sidebar est active-->

					<?php dynamic_sidebar('page-sidebar'); ?><!--Affiche la sidebar-->

				<?php endif; ?>

			</div>

			<div class="col-lg-9">

				<h1><?php the_title(); ?></h1>

				<?php if (has_post_thumbnail) : ?><!--Si l'article possède une image-->

					<img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail"><!--Affiche l'image-->

				<?php endif; ?>

				<?php get_template_part('includes/section', 'content'); ?><!-- ceci==includes/section-content.php-->

			</div>

		</section>

	</div>

</section>

<?php get_footer(); ?> 