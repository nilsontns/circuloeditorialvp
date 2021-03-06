<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		

		<div class="entry-meta">

			<?php // understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->
	<div class="row" >
		<div class="col-sm-6" >
			<?php echo get_the_post_thumbnail( $post->ID, 'large rounded' ); ?>

			<br>
			<br>	
			<?php echo get_the_term_list ($post->ID, 'escritor', '<ul class="list-group">
			<h6> Escritores: </h6> <li class="list-group-item" > ' , ', <li class="list-group-item" >', '</ li> </ ul>'); ?>
		</div>
		<div class="col-sm-6" >
			<div class="jumbotron jumbotron-fluid">
				<div class="container">
					<?php the_title( '<h1 class="display-4 entry-title">', '</h1>' ); ?>
					<p class="lead"><?php the_content(); ?></p>
				</div>
			</div>
			<div>
		
				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">'.__( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				) );
				?>

			</div>

		</div>
	</div>
	<hr style="
							margin-bottom: 50px;
							border: 1px solid;
							color: #00000059;" >

	

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
