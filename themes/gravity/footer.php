<?php
/*
 * The footer template
 *
 * @since 1.0
 * @package firewood
 * @subpackage Template
 */
?>
	</div><!-- / .main -->
	</div><!-- / .top -->
	<div class="bottom">
	<?php do_atomic( 'before_footer' ); // firewood_before_footer ?>

		<div class="contentinfo" role="contentinfo">

			<?php do_atomic( 'open_footer' ); // firewood_open_footer ?>

			<?php do_atomic( 'footer' ); // firewood_footer ?>
			<h3>Nicole Martinez, Copyright 2014</h3>
			<h1 class="footer-site-title">Gravity Studies</h1>

			<?php do_atomic( 'close_footer' ); // firewood_close_footer ?>

		</div><!-- / .contentinfo -->

	<?php do_atomic( 'after_footer' ); // firewood_after_footer ?>
	

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri() . '/js/jquery-1.7.2.min.js'?>"><\/script>')</script>
	
	<script src="<?php echo get_stylesheet_directory_uri() . '/js/plugins.js'?>"></script>
	<script src="<?php echo get_stylesheet_directory_uri() . '/js/functions.js'?>"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39726679-1', 'gravitystudies.com');
  ga('send', 'pageview');

</script>
	
	<?php wp_footer(); // wp_footer ?>
	</div><!-- / .bottom -->
</body>
</html>