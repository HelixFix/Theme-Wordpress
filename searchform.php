<form action="index.php" method="get">

	<label for="search">Recherche</label>

	<input type="hidden" name="cat" value="10"> <!-- La value correspond a l'id de la catégorie auquel ont souhaite cibler notre recherche ici c'est 'Blog'-->
	<input type="text" name="s" id="search" value="<?php the_search_query();?>" required>

	<button type="submit">Recherche!</button>

</form> 