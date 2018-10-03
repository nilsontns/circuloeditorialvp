<?php
/**
 * Template Name: Contact Template
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
  <img class="img-fluid" style="width: 100%; height: 420px; max-height: 420px;"  src="<?php echo get_template_directory_uri(); ?>/img/maquina.jpg" alt="Card image">
  <div  class="card-img-overlay" 
        style="margin-top: 190px; margin-left: 30px;" >

    <h1 class="card-title text-uppercase" 
        style="color: #fffcf5; letter-spacing: -3px;" >
        Contáctanos
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
    
         <div class="row shadow-lg p-3 mb-5 bg-white rounded ">

            <div class="col-sm-6">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h4 class="display-4  text-center" style="color:#f44c27;" >CÍRCULO EDITORIAL VISIÓN PROGRESISTA</h4> <br><br>
                        <p class="lead"> <b>Telefonos de oficinas</b>: <br><br> +58 (212) 435.70.51 <br> +58 (414) 456.00.87 </p>
                        <p class="lead" > <b>Correo electronico</b>: <br>circuloeditorialvp@gmail.com</p>
                        <p class="lead" > <b>Desarrollador web</b>: <br>Nilson Toro<br> +58 (412) 603.01.32<br>nilsontns@gmail.com </p>
                    </div>
                </div>
            </div>


            

            <div class="col-sm-6">
                <br>
                <br>
                <form name="contenidoColaboradores" id="contenidoColaboradores" method="post">
                <?php
                    if (isset( $_POST['btn-submit'] )) {
                        //Creamos una variable para almacenar los errores
                        global $reg_errors;
                        $reg_errors = new WP_Error;
        
                        $f_name = sanitize_text_field($_POST['f_name']);
                        $f_email = sanitize_email($_POST['f_email']);
                        $f_message = sanitize_text_field($_POST['f_message']);
        
                        //El campo Nombre es obligatorio, comprobamos que no esté vacío y en caso contrario creamos un registro de error
                        if ( empty( $f_name ) ) {
                        $reg_errors->add("empty-name", "El campo nombre es obligatorio");
                        }
                        //El campo Email es obligatorio, comprobamos que no esté vacío y en caso contrario creamos un registro de error
                        if ( empty( $f_email ) ) {
                        $reg_errors->add("empty-email", "El campo e-mail es obligatorio");
                        }
                        //Comprobamos que el dato tenga formato de e-mail con la función de WordPress "is_email" y en caso contrario creamos un registro de error
                        if ( !is_email( $f_email ) ) {
                        $reg_errors->add( "invalid-email", "El e-mail no tiene un formato válido" );
                        }
                        //El campo Mensaje es obligatorio, comprobamos que no esté vacío y en caso contrario creamos un registro de error
                        if ( empty( $f_message ) ) {
                        $reg_errors->add("empty-message", "El campo consulta es obligatorio");
                        }
        
                        //Si no hay errores enviamos el formulario
                        if (count($reg_errors->get_error_messages()) == 0) {
                        //Nuestro correo en el que recibiremos los mensajes
                        $recipient = "pcsolucionweb@gmail.com";
        
                        //Asunto del email
                        $subject = 'Formulario de contacto ' . get_bloginfo( 'name' );
        
                        //La dirección de envio del email es la de nuestro blog por lo que agregando este header podremos responder al remitente original
                        $headers = "Reply-to: " . $f_name . " <" . $f_email . ">\r\n";
        
                        //Montamos el cuerpo de nuestro e-mail
                        $message = "Nombre: " . $f_name . "<br>";
                        $message .= "E-mail: " . $f_email . "<br>";
                        $message .= "Mensaje: " . nl2br($f_message) . "<br>";
                                        
                        add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
                                            
                        $envio = wp_mail( $recipient, $subject, $message, $headers, $attachments);
        
                        
                        if ($envio) {
                            unset($f_name);
                            unset($f_email);
                            unset($f_phone);
                            unset($f_message);?>
                            <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            El formulario ha sido enviado correctamente.
                            </div>
                        <?php }else {?>
                            <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Se ha producido un error enviando el formulario. Puede intentarlo más tarde o ponerse en contacto con nosotros escribiendo un mail a "destinatario@email.com"
                            </div>
                        <?php }
                        }
                    }?>
        
                    <div class="form-group">
                        <label for="f_name">Nombre <span class="asterisk">*</span></label>
                        <input type="text" id="f_name" name="f_name" class="form-control" value="<?php echo $f_name;?>" placeholder="Introduce tu nombre" required aria-required="true">
        
                        <?php //Comprobamos si hay errores en la validación del campo Nombre
                        if ( is_wp_error( $reg_errors ) ) {
                        if ($reg_errors->get_error_message("empty-name")) {?>
                        <br class="clearfix" />
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p><?php echo $reg_errors->get_error_message("empty-name");?></p>
                        </div>
                        <?php }
                        }?>
                    </div>
        
                    <div class="form-group">
                        <label for="f_email">E-mail <span class="asterisk">*</span></label>
                        <input type="email" id="f_email" name="f_email" class="form-control" value="<?php echo $f_email;?>" placeholder="Introduce tu e-mail" required aria-required="true">
        
                        <?php //Comprobamos si hay errores en la validación del campo E-mail
                        if ( is_wp_error( $reg_errors ) ) {
                        if ($reg_errors->get_error_message("empty-email")) {?>
                        <br class="clearfix" />
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p><?php echo $reg_errors->get_error_message("empty-email");?></p>
                        </div>
                        <?php }
                        }
        
                        //Comprobamos si hay errores en el formato del campo E-mail
                        if ( is_wp_error( $reg_errors ) ) {
                        if ($reg_errors->get_error_message("invalid-email")) {?>
                        <br class="clearfix" />
                        <div class="alert alert-warning alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p><?php echo $reg_errors->get_error_message("invalid-email");?></p>
                        </div>
                        <?php }
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="f_message"></label>
                        <textarea id="f_message" name="f_message" rows="7" style="resize: none" class="form-control" placeholder="Escribenos tu inquietud.." required aria-required="true"><?php echo $f_message;?></textarea>
        
                        <?php //Comprobamos si hay errores en la validación del campo Mensaje
                        if ( is_wp_error( $reg_errors ) ) {
                        if ($reg_errors->get_error_message("empty-message")) {?>
                        <br class="clearfix" />
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p><?php echo $reg_errors->get_error_message("empty-message");?></p>
                        </div>
                        <?php }
                        }?>
                    </div>
        
                    <button type="submit" id="btn-submit" name="btn-submit" class="btn btn-block">Enviar Consulta!</button>
                    </form>


            
            
            </div>

        </div>
    </div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
