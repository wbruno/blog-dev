<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage wbruno
 * @since wbruno 0.0.1
 */

 get_header(); ?>

	<section id="content" class="single fleft">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php comments_template('', true); ?>

		<?php endwhile; else: ?>

			<article class="not-found">
				<p><?php _e('Desculpe, nenhum post corresponde aos seus crit&eacute;rios.', 'wbruno'); ?></p>
			</article>

		<?php endif; ?>
	</section><!-- #content -->

<?php get_footer(); ?>