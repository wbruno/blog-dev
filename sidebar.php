<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage wbruno
 * @since wbruno 1.0
 */
?>
	<aside id="sidebar" class="fright">
		<ul>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			<li>
				<h2>Categories</h2>
				<ul>
				<?php wp_list_categories('sort_column=name&title_li='); ?>
				</ul>
			</li>
			<?php endif; ?>
		</ul>
	</aside><!-- /sidebar -->