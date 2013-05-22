<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage wbruno
 * @since wbruno 0.0.1
 */
?>

<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

	<header role="heading">
		<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
			<?php the_title(); ?></a></h2>

		<?php echo lw_date(); ?>
		<small class="fleft vcard author">por <span class="fn"><?php the_author_link(); ?></span> em <?php the_category(', ') ?></small>
		<small class="fright"><?php comments_popup_link('Nenhum coment&aacute;rio', '(1) coment&aacute;rio', '(%) coment&aacute;rios', 'comments'); ?></small>
	</header>
	<div class="post-content entry-content">

		<?php the_post_thumbnail(); ?>
		<?php the_content('Leia &raquo; ' . get_the_title() ); ?>

	</div><!-- .post-content -->
	<footer role="complementary">
		<?php wp_link_pages(); ?>
		<?php edit_post_link(__('Editar', 'wbruno')); ?>
	</footer>
</article><!-- .post -->