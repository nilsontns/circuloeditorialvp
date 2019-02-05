<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row shadow-sm p-3 mb-5 bg-white rounded">


			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
					<div class="jumbotron jumbotron-fluid shadow-lg p-3 mb-5 bg-white rounded ">
						<div class="container archive-description">
							<?php
							the_archive_title( '<h1 class="display-4 text-uppercase">', '</h1>' );
							the_archive_description( );
							?>
						</div>
					</div>
					<br>
					<h1 style=" 
							text-align: center;
							left: 500px;
							letter-spacing: -3px;
							padding: 0px 10px 0px 10px;
							background: #fefefe;
							color: #00000059;
							display: inline-block; "> Publicaciones
					</h1>
					
					<hr style="
							margin-bottom: 50px;
							border: 1px solid;
							color: #00000059;" >
					</header><!-- .page-header -->
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content-single-recomendados', get_post_format() );
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>


	</div> <!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

<script>
	(function($) {
	
	// $ Works! You can test it with next line if you like
	// console.log($);
	
	$( ".archive-description p" ).addClass( " lead text-justify" );
	
	})( jQuery );
</script>
