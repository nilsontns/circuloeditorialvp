<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer" style="background:#f44c27;">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row"  >

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info text-center" style="color:white"  >
							<p>Copyright © 2018 · Circulo Editorial Visión Progrecista (CEVP) </p>
							<p> Desarrollado por <b>Nilson Toro</b> &middot;  Desarrollador Web Full Stack &middot; nilsontns@gmail.com &middot; Caracas , Venezuela   </p>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

