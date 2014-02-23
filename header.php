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

    <link rel="dns-prefetch" href="http://google-analytics.com" />

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/src/javascript/html5-shiv.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> role="document">
<div id="wrap">
<header id="header" class="fleft" role="banner">
	<div id="author-blog">
        <?php if (is_category() || is_tag() || is_month() || is_paged() || is_page() || is_single()): ?>
            <a href="<?php echo home_url(); ?>" id="blog-name"><?php bloginfo('name'); ?></a>
        <?php else: ?>
            <h1 id="blog-name"><?php bloginfo('name'); ?></h1>
        <?php endif; ?>

		<img src="http://wbruno.com.br/wp-content/uploads/2014/02/67d0e7b8c79946ef6ab00c8c36b00efc.jpg" alt="<?php bloginfo('name'); ?>" width="200" />
		<p><?php bloginfo( 'description' ); ?></p>

		<span id="switch">black theme</span>
	</div><!-- #author-blog -->

	<ul id="header-sidebar">
		<?php dynamic_sidebar('header-sidebar'); ?>
	</ul><!-- #header-sidebar -->
</header><!-- #header -->
