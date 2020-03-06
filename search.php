<?php get_header(); ?>

<!--Template général-->
<section class="page-wrap"><!--Ajoute de l'espace en haut et en bas-->

	<div class="container">

		<section class="row">

			<div class="col-lg-9">

				<h1><?php echo single_cat_title(); ?></h1><!--Affiche le nom de la catégorie sur la page-->
				<!--<h1><?php the_title(); ?></h1>--><!-- A mettre dans la boucle-->

				<?php get_template_part('includes/section', 'archive'); ?><!-- ceci==includes/section-content.php-->

				<?php previous_posts_link(); ?><!--Affiche lien suivant, ne pas oublier de definir le nombre d'article par page dans wordpress-->

				<?php next_posts_link(); ?>

			</div>

		</section>

	</div>

</section>

<?php get_footer(); ?>