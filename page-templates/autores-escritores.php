<?php
/**
 * Template Name: Autores/Escritores Template
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
<div class="bg-dark text-white">
  <img class="img-fluid" style="width: 100%; height: 420px; max-height: 420px;" src="<?php echo get_template_directory_uri(); ?>/img/maquina.jpg" alt="Card image">
  <div  class="card-img-overlay" 
        style="margin-top: 190px; margin-left: 30px;" >

    <h1 class="card-title" 
        style="    
        margin-top: 57px;
        padding-left: 13px;
        margin-right: 394px;
        color: #fffcf5;
        letter-spacing: 4px;" >
        AUTORES / ESCRITORES
    </h1>
  </div>
</div>

<div class="wrapper" id="index-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
    
    

    <div class="shadow-lg p-3 mb-5 bg-white rounded " >
      <div> 
        <?php // get_template_part( 'searchform' ); ?> 
      </div>
      <div class="row">
          <?php //start by fetching the terms for the animal_cat taxonomy
              $terms = get_terms( 'escritor', array(
                'orderby'    => 'count',
                'hide_empty' => 0
              ) );
            ?>
            <?php
              // now run a query for each animal family
              foreach( $terms as $term ) {
              
                // Define the query
                $args = array(
                  'post_type' => 'libro',
                  'escritor	' => $term->slug
                );
                $query = new WP_Query( $args );
                echo'<div class="col-sm-3" ><a class="btn btn-block" href="' . get_home_url() . '/escritor/' . $term->slug . '"><h2 style="white-space: normal;" >' . $term->name . '</h2></a></div>';
                echo'<div class="col-sm-9" ><p class=" text-justify " >' . $term->description . '</p><br><br><hr style="border 1px solid black" ></div><br><br>';
                // output the post titles in a list
      
                // use reset postdata to restore orginal query
                wp_reset_postdata();
              
              }  
              ?>
      </div>

    </div>
    

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
