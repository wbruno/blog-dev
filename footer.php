<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #wrap element.
 *
 * @package WordPress
 * @subpackage wbruno
 * @since wbruno 0.0.1
 */
?>

	<div class="clear"></div>
</div><!-- #wrap -->
<div id="wrap-footer">
	<footer id="footer" class="content" role="contentinfo">

		<p id="copyright" class="fleft">Copyright &copy; 2012 - <?php echo date('Y'); ?></p>

		<a href="#header" class="topo fright" title="ir para o topo">ir para o topo</a>
	</footer><!-- /footer -->
</div><!-- /wrap_footer -->
<?php wp_footer(); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/all.js?ver=3.4.1"></script>
</body>
</html>