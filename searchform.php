<?php
/**
 * The default template for displaying serach form.
 *
 * @package WordPress
 * @subpackage wbruno
 * @since wbruno 0.0.1
 */
?>
		<form method="get" class="searchform" action="<?php echo home_url(); ?>/" role="form">
			<input type="text" value="<?php echo get_search_query(); ?>" name="s" size="20" class="text" placeholder="Buscar" />
			<input type="image" alt="buscar" src="<?php echo get_template_directory_uri(); ?>/images/btn_busca.png" class="searchsubmit submit" />
		</form>