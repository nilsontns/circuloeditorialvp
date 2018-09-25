<?php
/**
 * Template Name: Recomendaciones Template
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

<div class="card bg-dark text-white">
  <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/img/maquina.jpg" alt="Card image">
  <div  class="card-img-overlay" 
        style="margin-top: 105px; margin-left: 30px;" >

    <h1 class="card-title text-uppercase" 
        style="color: #fffcf5; letter-spacing: -3px;" >
        Publicaciones recomendadas
    </h1>

    <p class="card-text" 
        style="    border: solid 2px #d02e00;
    font-size: 22px;
    color: #f2fefe;
    letter-spacing: 6px;
    padding-left: 13px;
    margin-right: 394px;
    background: #f44c27cc;" > 
        SOMOS UNA EDITORIAL AL SERVICIO DE LA DEMOCRACIA
    </p>

  </div>
</div>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		
		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php // get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
				
				
				<?php 
					query_posts(array( 
						'post_type' => 'recomendado', 
					) );  
        		?>


				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<div class="row" >
						<?php while ( have_posts() ) : the_post(); ?>
							
								<div class="col-sm-12" >

                                    <?php

                                        /*
                                        * Include the Post-Format-specific template for the content.
                                        * If you want to override this in a child theme, then include a file
                                        * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                        */
                                        get_template_part( 'loop-templates/content-recomendados', get_post_format() );
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

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>
		

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
