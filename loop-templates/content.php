<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="card shadow-lg p-3 mb-5 bg-white rounded" style="max-height: 800px; height: 800px; overflow-y: hidden;">
		<?php  echo get_the_post_thumbnail( $post->ID, 'large card-img-top' ); ?>
		<div class="card-body">
			<?php  the_title( sprintf( '<h5 class="card-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' ); ?>		
			<p class=" card-text " >
				<?php echo wp_trim_words( get_the_content(), 15, '... <br><br> <a class="more-link btn btn-primary btn-block " href="'. get_permalink().'"> Leer Arcticulo Completo </a>' ); ?> 
			</p>
		</div>
	</div>

	<br>

	<?php 
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
			) 
		);
	?>
</article><!-- #post-## -->
