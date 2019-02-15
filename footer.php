<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package playful
 */

?>

	</div><!-- #content .container-->
	<div class="container">
		<footer id="colophon" class="site-footer row">
			<div class="site-info offset-md-1 col-md-3 col-sm-12">
				<h6>2014 Your Company</h6>
			</div>
			<div class="offset-md-4 col-md-4 col-sm-12">
				<nav id="site-navigation" class="footer-menu">
					<?php wp_nav_menu(
						array(
							'menu_id'=> 'secundary-menu',
							'theme_location'=>'menu-footer'	
						));
					?>
				</nav>
				
			</div>
		</footer><!-- #colophon -->
	</div>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
