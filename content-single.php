<?php
/**
 * The template for displaying single content. Used for single.
 *
 * @package WordPress
 * @subpackage wbruno
 * @since wbruno 0.0.1
 */
?>

<article <?php post_class() ?> id="post-<?php the_ID(); ?>" role="article">

	<header role="heading">
		<h1 class="entry-title" title="<?php the_title(); ?>">
			<?php the_title(); ?></h1>

		<?php echo lw_date(); ?>
		<small class="fleft vcard author">por <span class="fn"><?php the_author_link(); ?></span> em <?php the_category(', ') ?></small>
		<small class="fright"><?php comments_popup_link('Nenhum coment&aacute;rio', '(1) coment&aacute;rio', '(%) coment&aacute;rios', 'comments'); ?></small>
	</header>
	<div class="post-content entry-content">

		<?php the_content('<p>Leia o restante deste post &raquo;</p>'); ?>

	</div><!-- .post-content -->
	<footer role="complementary">
		<p><?php the_tags(); ?></p>
		<?php wp_link_pages(); ?>
		<?php edit_post_link(__('Editar', 'wbruno')); ?>
	</footer>
</article><!-- .post -->