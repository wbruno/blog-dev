<?php
/**
 * The template for displaying page content. Used for page.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<article <?php post_class() ?> id="post-<?php the_ID(); ?>" role="article">

	<header role="banner">
		<h1 class="entry-title" title="<?php the_title(); ?>" role="heading" aria-level="1">
			<?php the_title(); ?>
		</h1>
		<small class="fright"><?php comments_popup_link('Nenhum coment&aacute;rio', '(1) coment&aacute;rio', '(%) coment&aacute;rios', 'comments'); ?></small>
	</header>
	<div class="post-content entry-content">

		<?php the_content('<p>Leia o restante deste post &raquo;</p>'); ?>

	</div><!-- .post-content -->
	<footer role="contentinfo">
		<?php wp_link_pages(); ?>
		<?php edit_post_link(__('Editar', 'wbruno')); ?>
	</footer>

</article><!-- .post -->