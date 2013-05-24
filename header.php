<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till </header>
 *
 * @package WordPress
 * @subpackage wbruno
 * @since wbruno 0.0.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php if (is_home()) {
			echo bloginfo('name');
		} elseif (is_404()) {
			echo '404 Not Found';
		} elseif (is_category()) {
		 	echo 'Category:'; wp_title('');
		 } elseif (is_search()) {
		 	echo 'Search Results';
		 } elseif ( is_day() || is_month() || is_year() ) {
		 	echo 'Archives:'; wp_title('');
		 } else {
		 	echo wp_title('');
		 } 			?></title>

	<meta charset="<?php bloginfo('charset') ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="author" content="William Bruno" />


	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />


	<?php if (is_category() || is_tag() || is_month() || is_paged() || is_404()) { ?>
		<link rel="canonical" href= "<?php echo home_url(); ?>"/>
		<meta name="robots" content="noindex, follow" />
	<?php } ?>

	<?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" />
	<?php }?>
	<?php if ( is_singular() ) { ?>
		<link rel="canonical" href="<?php the_permalink(); ?>" />
	<?php } ?>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />

	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/prettify.css" />
	<script src="<?php echo get_template_directory_uri(); ?>/javascript/prettify.js"></script>

</head>
<body <?php body_class(); ?>>
<div id="wrap">
<header id="header" class="fleft" role="banner">
	<div id="author-blog">
		<h1><a href="<?php echo home_url(); ?>" id="blog_locaweb"><?php bloginfo('name'); ?></a></h1>


		<img src="http://www.gravatar.com/avatar/<?php echo md5(trim(get_bloginfo('admin_email'))); ?>?s=200" alt="<?php bloginfo('name'); ?>" width="200" />
		<p><?php bloginfo( 'description' ); ?></p>

		<span id="switch">black theme</span>
	</div><!-- #author-blog -->

	<ul id="header-sidebar">
		<?php dynamic_sidebar('header-sidebar'); ?>
	</ul><!-- #header-sidebar -->
</header><!-- #header -->