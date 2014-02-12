<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage wbruno
 * @since wbruno 0.0.1
 */

get_header(); ?>

	<main id="content" class="fleft" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'content' ); ?>

		<?php endwhile; else: ?>

			<article class="not-found">
				<p><?php _e('Desculpe, nenhum post corresponde aos seus crit&eacute;rios.', 'wbruno'); ?></p>
			</article>

		<?php endif; ?>

		<div class="fright">
			<?php posts_nav_link(' &#8212; ', __('&laquo; Anterior', 'wbruno'), __('Pr&oacute;xima &raquo;', 'wbruno')); ?>
		</div>

	</main><!-- /content -->

<?php get_footer(); ?>
