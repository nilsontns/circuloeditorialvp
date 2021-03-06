<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
		
	<div class="card bg-dark text-white">
			<img class="card-img" style="height: 570px; max-height: 570px;" src="<?php echo get_template_directory_uri(); ?>/img/bayardo-ley-mutilada (1).jpg" alt="Card image">
			<div  class="card-img-overlay" 
					style="margin-top: 105px; margin-left: 30px;" >

			</div>
		</div>
    </div>
    <div class="carousel-item">
		

		<div class="card bg-dark text-white">
			<img class="card-img" style="height: 570px; max-height: 570px;" src="<?php echo get_template_directory_uri(); ?>/img/impacto de la corrupcion en los  derechos humanos.jpg" alt="Card image">
			<div  class="card-img-overlay" 
					style="margin-top: 105px; margin-left: 30px;" >

				

			</div>
		</div>




    </div>
    <div class="carousel-item">
		

		<div class="card bg-dark text-white">
			<img class="card-img" style="height: 570px; max-height: 570px;" src="<?php echo get_template_directory_uri(); ?>/img/Libro_LL_041.jpg" alt="Card image">
			<div  class="card-img-overlay" 
					style="margin-top: 105px; margin-left: 30px;" >

				

			</div>
		</div>




    </div>
    <div class="carousel-item">
		

		<div class="card bg-dark text-white">
			<img class="card-img" style="height: 570px; max-height: 570px;" src="<?php echo get_template_directory_uri(); ?>/img/Libro-Leopoldo4 (1).jpg" alt="Card image">
			<div  class="card-img-overlay" 
					style="margin-top: 105px; margin-left: 30px;" >

				

			</div>
		</div>




    </div>
    <div class="carousel-item">
		

		<div class="card bg-dark text-white">
			<img class="card-img" style="height: 570px; max-height: 570px;" src="<?php echo get_template_directory_uri(); ?>/img/vecchio, sanchez y ct.jpg" alt="Card image">
			<div  class="card-img-overlay" 
					style="margin-top: 105px; margin-left: 30px;" >

				

			</div>
		</div>




    </div>
    <div class="carousel-item">
		

		<div class="card bg-dark text-white">
			<img class="card-img" style="height: 570px; max-height: 570px;" src="<?php echo get_template_directory_uri(); ?>/img/vecchio y camilo egaña.jpg" alt="Card image">
			<div  class="card-img-overlay" 
					style="margin-top: 105px; margin-left: 30px;" >

				

			</div>
		</div>




    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		
		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php // get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
				
				
				<?php 
					query_posts(array( 
						'post_type' => 'libro', 
					) );  
        		?>


				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<div class="row" >
						<?php while ( have_posts() ) : the_post(); ?>
							
								<div class="col-sm-4" >
									
								<?php

								/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								get_template_part( 'loop-templates/content', get_post_format() );
								?>
								</div>

						<?php endwhile; ?>
					
					</div>
				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

		

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
