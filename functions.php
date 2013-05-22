<?php
/**
 * wbruno functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage wbruno
 * @since wbruno 1.0
 */



if ( function_exists('register_sidebar') ) register_sidebar(array(
  'name' => __( 'Header Sidebar' ),
  'id' => 'header-sidebar',
  'description' => __( 'Widgets in this area will be shown on the header.' )
));
if ( ! isset( $content_width ) ) $content_width = 1100;
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_editor_style();
add_theme_support( 'custom-background', array(
	'default-color' => 'e6e6e6',
) );
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );


require( get_template_directory() . '/inc/custom-header.php' );

/**
 * lw_date
 */
function lw_date() {
	global $post;
	$ts = strtotime( $post->post_date );
	return '<time datetime="'.get_the_time('Y-m-d').'" class="updated">'.get_the_time('d').' <span>'.get_the_time('M').' '.get_the_time('Y').'</span></time>'.PHP_EOL;
}
/**
 * overwrite comments_popup_link
 */
function add_nofollow_to_comments_popup_link() {
    return ' rel="nofollow" ';
}
add_filter( 'comments_popup_link_attributes', 'add_nofollow_to_comments_popup_link' );

/**
 * overwrite wp_list_categories
 */
function new_wp_list_categories($more) {
	$args=array(
		'orderby' => 'name',
		'order' => 'ASC'
	);
	$categories=get_categories($args);
	$li = '';
	foreach($categories as $category)
	{
		$li.= '<li><a href="'.get_category_link( $category->term_id ).'" title="'.$category->name.' '.$category->description.'">'.$category->name.'</a> ( '.$category->count.' )</li> ';
	}
	return $li;
}
add_filter('wp_list_categories', 'new_wp_list_categories');

add_filter( 'the_category', 'replace_cat_tag' );
function replace_cat_tag ( $text ) {
	$text = str_replace('rel="category tag"', "", $text); return $text;
}


/**
 * overwrite wp_list_categories
 */
add_filter('next_posts_link_attributes', 'get_next_posts_link_attributes');
add_filter('previous_posts_link_attributes', 'get_previous_posts_link_attributes');

if (!function_exists('get_next_posts_link_attributes')){
	function get_next_posts_link_attributes($attr){
		$attr = 'rel="next" title="Posts mais antigos"';
		return $attr;
	}
}
if (!function_exists('get_previous_posts_link_attributes')){
	function get_previous_posts_link_attributes($attr){
		$attr = 'rel="prev" title="Posts mais recentes"';
		return $attr;
	}
}



if ( ! function_exists( 'parent_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyten_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since wbruno 0.0.1
 */
function parent_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
		<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>"> <?php echo get_avatar( $comment, 32 ); ?>

			<cite><?php comment_text() ?></cite>

			<?php _e('por', 'wbruno'); ?>
			<?php comment_author_link() ?>
			&#8212;

			<time datetime="<?php echo $comment->comment_date; ?>">
				<?php comment_date() ?>
				@ <a href="#comment-<?php comment_ID() ?>">
				<?php comment_time() ?>
				</a>
			</time>
			<?php edit_comment_link(__('Editar', 'wbruno'), ' | '); ?>

			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em class="comment-awaiting-moderation"><?php _e( 'Seu coment&aacute;rio est&aacute; aguardando revis&atilde;o', 'wbruno' ); ?></em>
			<?php endif; ?>

			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</li>

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'wbruno' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Editar)', 'wbruno' ), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;
?>