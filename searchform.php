<!-- <form action="index.php" method="get">

	<label for="search">Recherche</label>

	<input type="hidden" name="cat" value="5"> La value correspond a l'id de la catégorie auquel ont souhaite cibler notre recherche ici c'est 'Blog'
	<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" required>

	<button type="submit">Recherche!</button>

</form>  -->

<form class="form-inline my-2 my-lg-0" action="<?php esc_url(home_url('/')) ?>">

	<input class="form-control mr-sm-2" name="s" type="search" placeholder="Recherche" aria-label="Search" value="<?php get_search_query() ?>">

	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>

</form>