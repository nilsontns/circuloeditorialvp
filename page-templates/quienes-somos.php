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
<div class="text-white">
  <img class="img-fluid" style="max-height: 410px; width: 100%;" src="<?php echo get_template_directory_uri(); ?>/img/cropped-bannernuevo.jpg" alt="Card image">
  <div  class="card-img-overlay" 
        style="margin-top: 105px; margin-left: 30px;" >

  </div>
</div>
<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">


        <div class="container">
            <div class="row">

                <div class="col align-self-center">
                    <div class="jumbotron jumbotron-fluid shadow-lg p-3 mb-5 bg-white rounded">
                        
                        <div class="container">
                            <h1 class="display-4 text-uppercase text-center" style="color: #f18e00; letter-spacing: -3px;" > ¿Quiénes Somos? </h1>
                            <br>
                            <br>
                            <p class="lead text-justify ">
                                
                                Somos un grupo de generación de ideas y de difusión de las mismas a través de
                                productos editoriales destinados a la formación de valores ciudadanos en el marco de
                                una Democracia que busca la realización del ser humano tanto individualmente como
                                en el marco de la sociedad por medio de la explosión de sus capacidades, del
                                mejoramiento de sus condiciones de vida y de sus oportunidades, para con ello forjar
                                una Sociedad de Paz, Bienestar y Progreso, donde “Todos los Derechos sean para
                                todas las personas”.

                            </p>
                        </div>

                        <div class="accordion" id="accordionExample">

                            <div class="card ">
                                <div class="card-header bg-white" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-block bg-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <p class="text-monospace font-weight-light font-italic text-uppercase" > Nuestra Visión </p>
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body font-italic">

                                        <p>
                                            Deseamos desde el Círculo Editorial “Visión Progresista” ayudar a
                                            forjar una “Mejor Venezuela” desde el plano de las ideas y de su proyección desde la
                                            perspectiva del pensamiento progresista, democrático, plural, social y de vanguardia,
                                            comprometido en la conquista de Todos los Derechos para todas las personas, para con
                                            ello, alcanzar un país libre de pobreza, de pobreza, de exclusión, de miedo y cualquier
                                            otra forma de dominación; donde hayan ciudadanos libres, solidarios y capaces de
                                            realizarse en el marco de un Estado Democrático, transparente, de instituciones
                                            fuertes, eficiente, soberano y federal.
                                        </p>
                                        <br>
                                        <p>
                                            Nuestra visión es convertirnos en una editorial al servicio de la democracia, ser un
                                            referente en donde nuestros autores y escritores puedan ejercer libremente su libertad
                                            de expresión, generando soluciones a los problemas de la sociedad democrática
                                            moderna y donde nuestros lectores puedan tener una visión más amplia de la realidad
                                            social en el contexto global.
                                        </p>


                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header bg-white" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-block collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <p class="text-monospace font-weight-light font-italic text-uppercase" > Nuestra Misión </p>
                                    </button>
                                </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body font-italic">
                                        
                                        <p>
                                            El Círculo Editorial “Visión Progresista” es un espacio donde se congrega
                                            en el marco de la pluralidad un conjunto de pensadores progresistas y de vanguardia,
                                            venezolanos y del mundo, dedicados a reflexionar y a generar productos editoriales
                                            diversos (libros, blogs, publicaciones digitales, foros, conferencias, entre otros), a los
                                            fines de aportar ideas en los diversos ámbitos de la realidad política, económica, social
                                            y filosófica para la construcción de una Mejor Venezuela guiada por los valores de la
                                            democracia, la libertad, la equidad, la pluralidad y la justicia social.
                                        </p>
                                        <br>
                                        <p>
                                            Nuestra misión es impulsar la libertad expresión de autores y escritores, generar
                                            conocimientos que fortalezcan la democracia, los Derechos Humanos, la pluralidad de
                                            pensamiento, el desarrollo social, político y económico, a través de publicaciones
                                            digitales e impresas, que además de presentar un diagnostico lleven consigo una
                                            solución.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header bg-white" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-block collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <p class="text-monospace font-weight-light font-italic text-uppercase" > Nuestros Valores </p>
                                    </button>
                                </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body font-italic ">
                                        
                                        <ul>
                                            <li> La Democracia en pensamiento y acción </li>
                                            <li> El Respeto </li>
                                            <li> El Pluralismo </li>
                                            <li> La Diversidad </li>
                                            <li> La Tolerancia </li>
                                            <li> La Justicia Social </li>
                                            <li> La Equidad </li>
                                            <li> El Progreso </li>
                                            <li> La Paz </li>
                                            <li>  </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-block text-uppercase shadow p-3 mb-5 rounded" style=" border: solid 2px #f18e00; font-size: 22px; color: #f2fefe; letter-spacing: 6px; padding-left: 13px; margin-right: 394px; background: #f18e00;"  data-toggle="modal" data-target="#exampleModalCenter">
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
                            <p style="font-style: oblique;letter-spacing: -1px;font-size: 20px;color: #f8f9fa;background: #f18e00" >
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
