<?php
/**
 * Template Name: Director General Template
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
<div class="card bg-dark text-white"  >
  <img class="card-img img-fluid" style="height: 400px; max-height: 400px;" src="<?php echo get_template_directory_uri(); ?>/img/Carlos-Tablante.jpg" alt="Card image">
  <div  class="card-img-overlay" 
        style="margin-top: 105px; margin-left: 30px;" >

    <h1 class="card-title" 
        style="color: #fffcf5; letter-spacing: -3px;" >
        DIRECTOR GENERAL
    </h1>

    <p  class="card-text" 
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
                    
                    <div class="jumbotron jumbotron-fluid bg-white rounded ">
                        <div class="container ">
                            <h1 class="display-4 text-uppercase" style="color: #f44c27; letter-spacing: -3px;" >Carlos Tablante</h1>
                            <br>
                            <br>
                            <p class="lead  text-justify ">
                                Carlos Humberto Tablante Hidalgo (Maracay, Venezuela; 29 de octubre de 1954) es un político venezolano. <br><br>
                                Fue uno de los fundadores y más conocidos dirigentes del Movimiento al Socialismo (MAS), entrando a esa organización política cuando todavía era un adolescente. <br><br>
                                Fue diputado y senador en el extinto Congreso de la República de Venezuela, primer Gobernador Electo y Reelecto del Estado de Aragua, Ministro de Estado y   Presidente de la Comisión Nacional Antidrogas. <br><br>
                                En 1999 formó parte de la Asamblea Nacional Constituyente, por lo que es uno de los firmantes de la Constitución de Venezuela Vigente.​ En la actualidad, forma parte del movimiento político Voluntad Popular.
                            </p>
                        </div>
                    </div>
                    

                    <div class="accordion shadow-lg p-3 mb-5 bg-white rounded" id="accordionExample">

                        <div class="card ">
                            <div class="card-header bg-white" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-block bg-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <p class="text-monospace font-weight-light font-italic text-uppercase" > RESUMEN CURRICULAR </p>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body font-italic">
                                    <ul>
                                        <li>Fue fundador y máximo líder del MAS, en el estado Aragua.</li>
                                        <li>Concejal en el antiguo Distrito Ricaurte (hoy Municipios Ribas, Tovar, Revenga, Bolívar y Santos Michelena) del estado Aragua (1974-79).</li>
                                        <li>Presidente de la Comisión de Ambiente y Recursos Naturales en el Concejo del Distrito Ricaurte.</li>
                                        <li>Diputado a la Asamblea Legislativa de Aragua (1979-84).</li>
                                        <li>Diputado al Congreso de la República, durante dos períodos Constitucionales (1984-1989y 1989-1994.)</li>
                                        <li>Se desempeñó como primer vicepresidente de la Cámara de Diputados del Congreso de la República (1989).</li>
                                        <li>Participa en la Comisión Especial que redactó la Ley Orgánica sobre Sustancias Estupefacientes y Psicotrópicas (1984).</li>
                                        <li>Miembro de la Comisión Parlamentaria redactora del Proyecto de Ley contra el Crimen Organizado.</li>
                                        <li>Fue presidente de la Comisión Permanente de Juventud y Deporte contra las Drogas, de la Cámara de Diputados (1984).</li>
                                        <li>Promotor de la Ley de Turismo y Deporte.</li>
                                        <li>Promovió la creación y fue presidente de Fundavida, organización no gubernamental dedicada al fomento del deporte y la cultura, como vías contra el uso de las drogas</li>
                                        <li>Denuncia hechos de corrupción en el Poder Judicial, cuya investigación concluye con la destitución de jueces incursos en hechos de corrupción (1985).</li>
                                        <li>Formula denuncias sobre irregularidades ocurridas en la Oficina de Régimen de Cambio Diferencial (Recadi), durante la administración 1984-1988. Estas investigaciones dan inicio al debate sobre corrupción administrativa y llevan a la designación de la Comisión Especial investigadora del Caso Recadi, de la cual formó parte.</li>
                                        <li>Siempre del lado de los trabajadores, contribuyó a la solución del conflicto de la empresa Yukery Venezolana de Alimentos, que afectaba a más de 7.000 empleados.</li>
                                        <li>Acompañado del Padre Amigo, Impulsa el movimiento dirigido a sacar de Venezuela la carne importada contaminada, depositada en Cagua. Denuncia igualmente los “Pipotes de la Muerte”, instalados en el sector La Ganadera de Maracay.</li>
                                        <li>Fue el primer Gobernador del Estado Aragua electo por el voto popular, en diciembre de 1989. Fue reelecto en diciembre de 1992. Así cumple una gestión de seis años (1990-93y 1993-96)</li>
                                        <li>Fue cofundador de la Asociación de Gobernadores de Venezuela, la cual presidió en el lapso 1995-96</li>
                                    </ul>    

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header bg-white" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-block collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <p class="text-monospace font-weight-light font-italic text-uppercase" > Logros como Gobernador </p>
                                </button>
                            </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body font-italic">
                                    
                                    En su desempeño como Gobernador, crea y ejecuta más de 50 programas sociales, enmarcados dentro del Proyecto Solidaridad, entre los cuales destacan:
                                    
                                    <br>
                                    <br>
                                    <ul>
                                        <li>Fondo de Apoyo Juvenil y Estudiantil (FAJES), institución dedicada a reconocer los méritos de jóvenes estudiantes, investigadores y artistas. Idea y pone en funcionamiento el Centro Juvenil de Maracay y el Centro de Información Digital de La Victoria (inaugurado en 1995, pionero de los infocentros y de las llamadas “bibliotecas virtuales”), instituciones totalmente computarizadas, dedicadas a facilitar el acceso de la juventud a las nuevas tecnologías como herramientas de superación y de búsqueda del bienestar colectivo</li>
                                        <li>Establece los programas de Compensación Social Alimentaria con la figura de ”MamArepa”, Centro de Atención al Niño “A Cielo Abierto”, Centros Comunitario de Atención Nutricional, Fundación Aragüeña de Crédito Popular (Fundacrepo),Centro de Atención al Trabajador Discapacitado, Centros de Lactancia Materna, Programa Itinerante de Salud de Aragua (Pisa), Centro de Atención al Embarazo Precoz.</li>
                                        <li>Crea el servicio autónomo “Aragua Territorio Antidrogas” (ATAD), dirigido a realizar actividades preventivas frente al problema del tráfico y consumo de drogas.</li>
                                        <li>Organiza la Comisión Regional Contra el Uso Ilícito de las Drogas del Estado Aragua.</li>
                                        <li>Crea el Instituto de Integración Social Aragua INISA, cuyos programas se inspiranen la búsqueda de la inclusión social, buscando la igualdad en la superación.</li>
                                        <li>Con la Asociación “Aragua Primero”, presidida por su esposa, crea la Casa de lMenor Trabajador de la Calle en Maracay, La Victoria y Villa de Cura, formando, junto al maestro José Antonio Abreu, la primera Banda Sinfónica de los Niños de laCalle.</li>
                                        <li>Durante su gestión como gobernador, se construyen más de 50 edificaciones educativas en el estado Aragua. El ingreso y ascenso de docentes se realiza mediante concurso deméritos y oposición.</li>
                                        <li>Más de 45 mil soluciones habitacionales se ejecutaron en Aragua durante su labor de gobierno. Así mismo se consolidan más de 100 barrios del estado. Todo ello a través del Instituto de la Vivienda de Aragua, INVIVAR.</li>
                                        <li>En salud, su gestión se concentró en fortalecer la atención primaria, aumentar la cobertura médico asistencial. Pone en ejecución un nuevo modelo de atención hospitalaria, representada en el Hospital Los Samanes y en el Centro Clínico de La Morita. Con la participación del sector privado, crea la Unidad de Diagnósticos Computarizados en Salud (Asodiam) y el Cardiológico de Aragua, poniendo en marcha el Plan de Mantenimiento y Rescate del Hospital Central de Maracay y el José María Benítez de La Victoria, realizado exitosamente con el apoyo de la sociedad civil y las Fuerzas Armadas de Venezuela.</li>
                                        <li>Para aliviar la crisis de abastecimiento de agua, inicia un plan de emergencia que logra la perforación de 147 pozos y la recuperación de otros 128, mientras se concluye la II Etapa del Acueducto Regional del Centro, que pone en funcionamiento a comienzo de 1996.</li>
                                        <li>En materia de seguridad, dota a la Policía de Aragua de una nueva sede, en la que funcionan modernos equipos, como el Sistema de Rastreo Vehicular (GPS) , el Sistema de Atención de Emergencias 171, con modernas ambulancias.</li>
                                        <li>Es uno de los promotores de la descentralización en Venezuela en materia vial. Sus logros en este sentido están reflejados en el rescate de la Autopista Regional del Centro y en la consolidación y mantenimiento de la estructura vial del estado Aragua, a través de INVIALTA.</li>
                                        <li>En su gestión, Aragua se convirtió en el primer estado en descentralizar los servicios de atención al menor (INAM), de la tercera edad (INAGER), y en los servicios de salud y educación (Escuelas Solidarias).</li>
                                        <li>Fortalece a las microempresas para el mantenimiento de la Autopista Regional del Centro y otras obras urbanas y comunales.</li>
                                        <li>Crea la Transferencia Estado-Municipio (TEM) y la Transferencia Estado-Sociedad(TES). Con el primer programa fortalece las gestiones municipales, otorgándole recursos adicionales al Situado Constitucional. Con la TES asigna responsabilidades de gestión pública a grupos organizados de la sociedad (Sociedad Anticancerosa, Cardiológico, Hogares Crea, Asodiam, Aragua Primero).</li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header bg-white" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-block collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <p class="text-monospace font-weight-light font-italic text-uppercase" > Otras labores desempeñadas </p>
                                </button>
                            </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body font-italic ">
                                    
                                    <br>
                                    <br>
                                    <ul>
                                        <li>Crea y preside la Fundación EnCambio, organización no gubernamental que trabaja sobre cuatro áreas fundamentales: Reforma del Estado, Formación del Nuevo Liderazgo, Servicio Teleinformático y Publicaciones, entre las cuales se encuentran: “La Descentralización, la Inversión Rentable para el Futuro”, “Narco-financiamiento Político” y el folleto “Una Verdadera Democracia”, además de la revista EnCambio dedicada a la Reforma del Poder Judicial.</li>
                                        <li>Promueve y participa en la redacción del Proyecto de Ley de Emergencia para la Reforma del Poder Judicial en Venezuela, cuya concepción parte de la iniciativa popular. Este proyecto fue presentado al Congreso de la República, donde nunca fue debatido.</li>
                                        <li>Fue Ministro de Estado, designado por el Presidente Rafael Caldera. Presidente de la Comisión Nacional contra el Uso Ilícito de las Drogas (CONACUID) en el período 1996-1998.</li>
                                    </ul>
                                    <br>

                                    Logros en la Comisión Nacional Antidrogas
                                    <br>
                                    <br>

                                    <ul>
                                        <li>Con el apoyo del sector privado y bancario, logra una nueva sede para la Comisión Nacional Antidrogas, donde funcionan centros especializados:</li>
                                    </ul>
                                    <br>

                                    SIN DROGAS
                                    <br>
                                    (Servicio de Información sobre el Uso Ilícito de las Drogas, dotado de computadoras con servicio de internet, biblioteca tradicional y virtual, personal de psicólogos y orientadores).
                                    <br>
                                    <br>
                                    Centro de Información y Coordinación Conjunta, conectado internacionalmente para obtener informaciones de inteligencia policial.
                                    <br>
                                    <br>
                                    Centro de Investigación Financiera, abocado al estudio y análisis de casos de legitimación de capitales
                                    <br>
                                    <br>

                                    <ul>
                                        <li>Con el apoyo de la industria publicitaria y los medios de comunicación social del país, se difunde la exitosa campaña preventiva “Cuerpo a Cuerpo contra las Drogas”.</li>
                                        <li>Se suscriben con gobernadores de Estado, creando las Alianzas Regionales Antidrogas.</li>
                                        <li>Entra en vigencia la Resolución para la Prevención, Control y Fiscalización de la Legitimación de Capitales, en cuya redacción interviene la Comisión Nacional Antidrogas.</li>
                                        <li>La Comisión Nacional Antidrogas formula aportes para la redacción del Proyecto de Ley sobre Regulación de las Finanzas de Partidos Políticos y Campañas Electorales.</li>
                                    </ul>
                                    Senador de Aragua
                                    <br>
                                    <br>


                                    En las elecciones de noviembre de 1998 es electo Senador por el Estado Aragua, con la más alta votación.
                                    <br>
                                    <br>

                                    Constituyente
                                    <br>
                                    <br>

                                    En 1999 es electo Constituyente. Presenta, conjuntamente con Ricardo Combellas, “Bases para la Constitución Ciudadana Un nuevo proyecto de país para el III milenio”, donde están contenidas los principios, procesos y organización del Estado federal y descentralizado, que caracteriza a la Constitución de 1999.
                                    <br>
                                    <br>

                                    Diputado por Aragua a la Asamblea Nacional
                                    <br>
                                    <br>


                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header bg-white" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-block collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapsefor" aria-expanded="false" aria-controls="collapsefor">
                                <p class="text-monospace font-weight-light font-italic text-uppercase" > Presenta varios proyectos de Ley </p>
                                </button>
                            </h5>
                            </div>
                            <div id="collapsefor" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body font-italic">
                                    <ul>
                                        <li>Ley Especial para la Ratificación o Designación de los Funcionarios y Funcionarias del Poder Ciudadano y Magistrados y Magistradas del Tribunal Supremo de Justicia, Sancionada el 7 de julio de 2000, Gaceta Oficial N° 37.077 de fecha 14 de noviembre de 2000</li>
                                        <li>Ley Especial de Regulación del Comité de Postulaciones Electorales. (Texto incluido en la Ley del Poder Electoral), sancionada y publicada en la Gaceta Oficial el 24 de septiembre de 2002.</li>
                                        <li>Ley sobre Delitos Informáticos, Sancionada el 27 de septiembre de 2001 y publicada en Gaceta Oficial N° 37.313 de fecha 30 de octubre de 2002.</li>
                                        <li>Ley para el Desarme, Sancionada el 02 de agosto de 2002 y publicada en Gaceta Oficial N° 37.509 de fecha 20 de agosto de 2002.</li>
                                        <li>Ley Especial sobre Actos de Naturaleza Terrorista, aprobada en primera discusión por unanimidad el 29 de noviembre de 2001.</li>
                                        <li>Ley contra la Delincuencia Organizada, Publicada en la Gaceta Oficial Nº del 27 de septiembre de 2005.</li>
                                        <li>Ley que crea el Fondo para la Prevención del Delito.</li>
                                        <li>Otros proyectos presentados por Carlos Tablante fueron: Ley de Convivencia Ciudadana y Solución de Conflictos de las Comunidades, Ley de Hacienda Pública Estadal, Ley Orgánica del Tribunal Supremo de Justicia, Ley de Programación de Radio y Televisión (El oficialismo impuso su propuesta de ley mordaza a pesar de la resistencia de la oposición), Ley de Reforma Parcial del Código Orgánico Procesal Penal, Código de Ética y Disciplina del Juez Venezolano o Jueza Venezolana, Consejo Federal de Gobierno (el gobierno logró la aprobación de otro proyecto, distinto a los postulados constitucionales).</li>
                                    </ul>
                                    <br>
                                    <br>
                                    En materia de seguridad ciudadana:
                                    <br>
                                    <br>
                                    <ul>
                                        <li>25 de enero de 2001 presenta su propuesta de URGENCIA LEGISLATIVA. En sesión de la Asamblea Nacional presentó una propuesta de acuerdo en materia de seguridad ciudadana, aprobada por unanimidad.</li>
                                        <li>El 26 de julio de 2001: RECHAZO A LA VIOLENCIA. Planteó el cumplimiento del acuerdo aprobado en el mes de enero.</li>
                                        <li>El 7 de agosto de 2001: PACTO DE LOS PODERES. Promueve y da inicio con su intervención a la Sesión Especial sobre “La Inseguridad y la Violencia en Venezuela”, en la Asamblea Nacional.</li>
                                        <li>El 8 de abril de 2004: Insistió sobre el cumplimiento del Pacto de los Poderes Público por la Vida. Investiga los hechos de 11, 12, 13 y 14 de abril de 2010</li>
                                    </ul>
                                    <br>
                                    <br>

                                    Como miembro de la Comisión Política que se encargó de investigar los sucesos del 11, 12,13 y 14 de abril de 2002, insistió siempre en la creación de la Comisión de la Verdad. Presentó el informe que fue suscrito por los diputados de la mayoría de la oposición y que incluyó en el libro de su autoría “Venezuela Herida”, editado por El Nacional. En este informe establece responsabilidades del Presidente Chávez en estos hechos.
                                    <br>
                                    <br>

                                    En defensa de la descentralización
                                    <br>
                                    <br>

                                    <ul>
                                        <li>Asume la defensa del Fondo Intergubernamental para la Descentralización (Fides).</li>
                                        <li>Presenta el proyecto de Ley de Hacienda Pública Estadal, el cual fue aprobado el 11de marzo de 2004 y devuelto por el Ejecutivo el 21 de abril de 2004.</li>
                                        <li>Presenta el proyecto de Ley del Consejo Federal de Gobierno, aprobado Sancionado el 30-06-2005 y devuelto por Observaciones del Ejecutivo Nacional.</li>
                                    </ul>
                                    <br>
                                    <br>

                                    En defensa de la Libertad de expresión y de información
                                    <br>
                                    <br>

                                    <ul>
                                        <li>Enero del 2002: Denuncia ante el país la elaboración por parte de CONATEL de un proyecto de Contenidos o Ley Mordaza. Una y otra vez, voceros del gobierno niegan la revelación, pero el tiempo se encargó de otorgarle la razón.</li>
                                        <li>Es célebre una de sus intervenciones en la Asamblea Nacional, cuando los diputados oficiales respondieron “Sí”, al control absoluto: “Las pruebas están a la vista. A confesión de partes relevo de pruebas. ¿Desean el imperio de una sola ideología, de un solo líder, de un solo partido, de un pensamiento único, una sola televisora, una sola radio, un solo periódico?”</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        
                        <div class="card">
                            <div class="card-header bg-white" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-block collapsed bg-white" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                    <p class="text-monospace font-weight-light font-italic text-uppercase" > PUBLICACIONES </p>
                                </button>
                            </h5>
                            </div>
                            <div id="collapsefive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body font-italic">
                                    <ul>
                                        <li>
                                            El Sindicato del Crimen, 1973.
                                        </li>
                                        <li>Coordina el libro “La Descentralización: Inversión Rentable para el Futuro”, patrocinado por la Fundación EnCambio, conjuntamente con la periodista Argelia Ríos y el Doctor Allan Brewer Carías, 1998</li>  
                                        <li>Coautor del libro “Narcofinanciamiento Político: Una Visión Integral sobre Prevención y Control”, patrocinado por la Fundación En Cambio, 1998.</li>
                                        <li>Delitos Informáticos- Publicado por la Fundación EnCambio. 2001</li>
                                        <li>Venezuela Herida. Pacto de la Democracia del futuro. Los Libros de El Nacional. 2003.</li>
                                        <li>Coordinador, junto a Mariela Morales Antoniazzi, del Anuario 2008-2009 Descentralización vs. Caudillismo, donde escribe el artículo “Descentralización vs. Retrocentralismo Militarista”. Publicaciones Fundación En Cambio,</li>
                                        <li>Coordinador, junto con Mariela Morales Antoniazzi, del Anuario 2010-2011 Descentralización, Autonomía e Inclusión Social: El Desafío actual de la Democracia. Publicaciones Fundación EnCambio</li>
                                        <li>Fue articulista del Diario El Siglo (Maracay). Ha escrito artículos de opinión para los Diarios El Universal, El Nacional.</li>
                                        <li>Desde 2007 hasta 2009 presidió el Centro de Formación Política y Ciudadana del movimiento político Un Nuevo Tiempo</li>
                                        <li>Coordinó la Comisión de Descentralización de la Mesa de la Unidad Democrática, promoviendo el Pacto Federal en defensa del modelo de Democracia Participativa y Protagónica previsto en la Constitución vigente desde 1999, de la cual fue uno de sus principales redactores.</li>
                                        <li>En la actualidad, escribe artículos de opinión para diversos medios nacionales, regionales y digitales.</li>
                                        <li>Es fundador y co-editor del portal de Internet Cuentas Claras Digital.org, especializado en los temas de prevención del  tráfico y consumo de drogas, lavado de dinero, financiamiento del terrorismo y corrupción.</li>
                                        <li>Escribió, junto con Marcos Tarre, Estado Delincuente: Cómo actúa la delincuencia organizada en Venezuela, con prólogo de Baltasar Garzón Editorial Hoja del Norte, 2013.</li>
                                        <li>Escribió, junto con Marcos Tarre, El Gran Saqueo: Quiénes y cómo se robaron el dinero de los venezolanos, Editorial Hoja del Norte (2015).</li>
                                        <li>Co-editor y co-autor junto a Mariela Morales Antoniazzi, del libro Libro “Impacto de la Corrupción en los Derechos Humanos” publicado online gratis por el Instituto de Estudios Constitucionales de Querétaro.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
