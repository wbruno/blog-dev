<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage wbruno
 * @since wbruno 0.0.1
 */

get_header(); ?>

	<section id="content" class="fleft archive" role="main">
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

	</section><!-- #content -->
<?php get_footer(); ?>