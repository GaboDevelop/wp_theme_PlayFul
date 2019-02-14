<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package playful
 */

get_header();
?>
		<div class="row primarySection">
			<div class="jumbotron col-md-12">
				<div class="row contentJumbo"> 
					<h1 class="offset-md-4 col-md-4">Some sort of heading goes her</h1>
					
					<p class="offset-md-3 col-md-6">What? I have no idea what to add here... just place some text..too lazy to lipsum it.
					Did you know frogs have 2 legs?</p>
					<hr class="my-4">
				</div>
				<div class="row">
					<p class="lead col-md-6 offset-md-3">
						<a class="btn btn-lg" href="#" role="button">Click me to find out more</a>
					</p>
				</div>
				
			</div>	
		</div>
	
	<div class="container testimonials">
		<div class="row">
			<h1>testimonials</h1>
			<div class="container testimonialsInfo">
				<div class="row">
					<div class="col-md-4 container-fluid">
						<div class="row">
							<img class="offset-md-4" src="wp-content/themes/wp_theme_PlayFul/img1definitiva.png" alt="">
						</div>
						<div class="row">
							<p>
							orem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ullamcorper massa a leo pretium, 
							sed vehicula nisl bibendum. Sed scelerisque, 
							velit eget convallis vestibulum, felis nulla placerat eros, volutpat mattis nunc tellus vitae magna.
							</p>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="row">
							<img class="offset-md-4" src="wp-content/themes/wp_theme_PlayFul/img2.png" alt="">
						</div>
						<div class="row">
							<p>
							Etiam at felis sed lorem auctor euismod. Nullam nec sollicitudin lectus, ut sollicitudin felis. 
							Nullam at leo et quam commodo bibendum ut ac arcu. In erat nulla, convallis vel adipiscing in,
							 iaculis ac risus. Nullam tincidunt dui nisi, id mattis orci tincidunt id
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="row">
							<img class="offset-md-4" src="wp-content/themes/wp_theme_PlayFul/img1.png" alt="">
						</div>
						<div class="row">
							<p>
							Fusce congue augue est, in mattis odio consectetur eu. 
							Aliquam eget justo vitae diam dignissim posuere. 
							Phasellus tincidunt tellus eu sollicitudin mattis.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--testimonial-->
	<div class="container featured">
		<div class="row">
			<div class="col-md-2 divider divider-purple"></div>
			<div class="col-md-3 divider divider-blue"></div>
			<div class="col-md-2 divider divider-green"></div>
			<div class="col-md-3 divider divider-yellow"></div>
			<div class="col-md-2 divider divider-orange"></div>
		</div>
		<div class="row featured-blog">
			<h3></h3>
			<!-- AQUI ES DONDE HAY QUE COLOCAR EL FEATURED POST-->
		</div>
		<div class="row blog">
		<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;
					?>
				<div class="offset-md-1 col-md-8 tituloBlog">
					<h3>Blog</h3>
				</div>
				
					<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					?>
					<div class="col-md-12">
						<!--titulo-->
						<div class="row">
							<div class=" offset-md-1 col-md-10 tituloEntrada">
								<h1><?php the_title(); ?></h1>
							</div>
						</div>
						<!-- extracto de parrafo-->
						<div class="row">
							<div class="offset-md-1 col-md-8">	
								<div class="extractoEntrada"><?php the_excerpt();?></div>
							</div>
							<div class="col-md-3 redireccionEntrada">
								<a class="botonRedireccionarEntrada" href="<?php the_permalink(); ?>">See more</a>
							</div>
						</div>
						<!--usuario: ¿periodista? ¿escritor? y categoría-->
						<div class="row">
							<!-- foto -->
							<div class="offset-md-1 col-md-1 avatarAutor">
								<div class="row">
									<div class="offset-md-4">
									<?php echo get_avatar('', 50, '', '', null ) ?>
									</div>
								</div>
								
								
							</div>
							
							<div class="col-md-8">
								<!--nombre-->
								<div class="nombreAutor">
									<?php the_author();?>
								</div>
								<!-- categoria  -->
								<div class="categoriaBlog">
									<div class="row">
										<div class="col-md-1 in">
											in
										</div>
										<div class="col-md-10 margenCategoria">
											<?php the_category()?>
										</div>
										
										
									</div>
									
								</div>
								
							</div>
							
						</div>
					</div>
						
					
						
						
					<?php
					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		</div>
			

<?php
/*get_sidebar();*/
get_footer();
