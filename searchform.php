<form action="index.php" method="get">

	<label for="search">Recherche</label>
	<input type="text" name="s" id="search" value="<?php the_search_query();?>" required>

	<button type="submit">Recherche!</button>

</form>