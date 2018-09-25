<?php
/**
 * Template Name: Quienes Somos Template
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
  <img class="card-img" style="max-height: 410px;" src="<?php echo get_template_directory_uri(); ?>/img/cropped-bannernuevo.jpg" alt="Card image">
  <div  class="card-img-overlay" 
        style="margin-top: 105px; margin-left: 30px;" >

    <h1 class="card-title" 
        style="color: #fffcf500; letter-spacing: -3px;" >
        CÍRCULO EDITORIAL VISIÓN PROGRESISTA
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


        <div class="container">
            <div class="row">
                <div class="col align-self-center">
                    <div class="jumbotron jumbotron-fluid shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="container">
                            <h1 class="display-4 text-uppercase text-center" style="color: #f44c27; letter-spacing: -3px;" > ¿Quiénes Somos? </h1>
                            <br>
                            <br>
                            <p class="lead text-justify ">
                                
                                Somos una editorial al servicio de la democracia, promoviendo como filosofía el progresismo, la defensa de los Derechos Humanos, la igualdad, los valores democráticos, asumimos un compromiso moral con la sociedad, apoyamos a los autores y escritores independientes, que abordan  con sus investigaciones y trabajos una visión fresca y moderna de los problemas que afectan a la región, siempre con una propuesta de cambio, con miras a un futuro mejor.
                                <br>
                                <br>
                                Nosotros somos el resultado del esfuerzo por mantener y fortalecer la libertad de expresión en Venezuela, abrimos un espacio para la opinión de expertos en temas políticos, económicos y sociales, que son el reflejo de un país en crisis.
                                <br>
                                <br>
                                El Círculo Editorial Visión Progresista tiene como objeto el diseño, impresión, distribución y creación de libros, revistas, periódicos, catálogos, boletines y toda clase de material audiovisual en formato digital o impreso, que contribuyan al fortalecimiento de la democracia, aportando ideas para el progreso, respetando la pluralidad y diversidad de las ideas expresadas por nuestros autores y escritores.
                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-block text-uppercase shadow p-3 mb-5 rounded" style=" border: solid 2px #d02e00; font-size: 22px; color: #f2fefe; letter-spacing: 6px; padding-left: 13px; margin-right: 394px; background: #f44c27eb;"  data-toggle="modal" data-target="#exampleModalCenter">
                Adquiere nuestras publicaciones 
            </button>
            

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title text-center text-uppercase" style="letter-spacing: 5px;color: #d02e00;font-size: 25px;" id="exampleModalCenterTitle"> adquiérelos en: </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <p style="font-style: oblique;letter-spacing: -1px;font-size: 20px;color: #f8f9fa;background: #f44c27d4" >
                                <br>
                                <br>
                                -    Editorial Sergio Dahbar (0212)-730 9873
                                <br>
                                <br>
                                -    Distribuidora Bestseller (0212)-824 1794
                                <br>
                                <br>
                                -    Distribuidora El Pasillo (0212)-662 3580/ 661 9123
                                <br>
                                <br>
                                -    Entre Libros, Altamira
                                <br>
                                <br> 
                                -    Librerías Tecniciencias a nivel nacional.
                                <br>
                                <br>
                                -    Círculo Editorial Visión Progresista (0212)-435 7051
                                <br>
                                <br>
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>


	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
