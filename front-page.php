<?php get_header(''); ?>

<section class="page-wrap"><!--Ajoute de l'espace en haut et en bas-->

	<!--Template général-->
	<div class="container">

		<!-- <h1><?php the_title(); ?></h1> -->
		<h1>Bienvenue sur le blog de la promo : <?php wp_title(); ?></h1> <!--Titre du site -->

		<?php get_template_part('includes/section', 'content'); ?><!-- ceci==includes/section-content.php-->

		<!-- <php get_search_form();?> -->

	</div>

</section>

<?php get_footer(); ?>  