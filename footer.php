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
			<div class="site-info offset-md-1 col-md-3">
				<h6>2014 Your Company</h6>
			</div>
			<div class="offset-md-4 col-md-4">
				<nav id="site-navigation" class="footer-menu">
				<button class="menu-toggle" aria-controls="secundary-menu" aria-expanded="false"><?php esc_html_e( 'Secundary Menu', 'menu-footer' ); ?></button>
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
