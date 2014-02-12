<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage wbruno
 * @since wbruno 0.0.1
 */

get_header(); ?>

	<main id="content" class="fleft" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'content' ); ?>

		<?php endwhile; ?>

		<div class="fright">
			<?php posts_nav_link(' &#8212; ', __('&laquo; Anterior', 'wbruno'), __('Pr&oacute;xima &raquo;', 'wbruno')); ?>
		</div>

		<?php else : ?>
			<article class="not-found">
				<h2 title="Not Found">N&atilde;o Encontrado</h2>

				<section>
					<p class="center">Sorry, but you are looking for something that isn't here.</p>
					<?php get_template_part('searchform') ; ?>
				</section>
			</article><!-- .post -->
		<?php endif; ?>

	</main><!-- #content -->

<?php get_footer(); ?>