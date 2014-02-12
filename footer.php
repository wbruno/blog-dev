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

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/all.min.js"></script>
<script type="text/javascript">
    var _gaq = _gaq || [];
  
    _gaq.push(['_setAccount', 'UA-7671312-2']);
    _gaq.push(['_addDevId', 'i9k95']); // Google Analyticator App ID with Google
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
</body>
</html>
