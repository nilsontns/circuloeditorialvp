

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">



    <div class="row shadow-lg p-3 mb-5 bg-white rounded" >
		<div class="col-sm-6" >
			<?php echo get_the_post_thumbnail( $post->ID, 'large rounded' ); ?>

			<br>
			<br>	
			<?php echo get_the_term_list ($post->ID, 'escritor-recomendado', '<ul class="list-group">
			<h6> Escritores: </h6> <li class="list-group-item" > ' , ', <li class="list-group-item" >', '</ li> </ ul>'); ?>
		</div>

		<div class="col-sm-6" >
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <?php the_title( '<h1 class="display-4 entry-title">', '</h1>' ); ?>
                    <p class="lead"><?php the_content(); ?></p>
                </div>
            </div>
		
		</div><!-- .entry-content -->

    </div>

<br>
<br>

</article><!-- #post-## -->