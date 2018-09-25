<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom pagination for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

// La función no será utilizada antes del 'init'.
add_action( 'init', 'my_custom_init' );
/* Here's how to create your customized labels */
function my_custom_init() {
	$labels = array(
	'name' => _x( 'Libros', 'post type general name' ),
        'singular_name' => _x( 'libro', 'post type singular name' ),
        'add_new' => _x( 'Añadir nuevo', 'book' ),
        'add_new_item' => __( 'Añadir nuevo Libro' ),
        'edit_item' => __( 'Editar Libro' ),
        'new_item' => __( 'Nuevo Libro' ),
        'view_item' => __( 'Ver Libro' ),
        'search_items' => __( 'Buscar Libros' ),
        'not_found' =>  __( 'No se han encontrado Libros' ),
        'not_found_in_trash' => __( 'No se han encontrado Libros en la papelera' ),
        'parent_item_colon' => ''
    );
 
    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'libro' ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
 
    register_post_type( 'libro', $args ); /* Registramos y a funcionar */
}

// Lo enganchamos en la acción init y llamamos a la función create_book_taxonomies() cuando arranque
add_action( 'init', 'create_book_taxonomies', 0 );
 
// Creamos dos taxonomías, género y autor para el custom post type "libro"
function create_book_taxonomies() {
	// Añadimos nueva taxonomía y la hacemos jerárquica (como las categorías por defecto)
	$labels = array(
	'name' => _x( 'Géneros', 'taxonomy general name' ),
	'singular_name' => _x( 'Género', 'taxonomy singular name' ),
	'search_items' =>  __( 'Buscar por Género' ),
	'all_items' => __( 'Todos los Géneros' ),
	'parent_item' => __( 'Género padre' ),
	'parent_item_colon' => __( 'Género padre:' ),
	'edit_item' => __( 'Editar Género' ),
	'update_item' => __( 'Actualizar Género' ),
	'add_new_item' => __( 'Añadir nuevo Género' ),
	'new_item_name' => __( 'Nombre del nuevo Género' ),
);
register_taxonomy( 'genero', array( 'libro' ), array(
	'hierarchical' => true,
	'labels' => $labels, /* ADVERTENCIA: Aquí es donde se utiliza la variable $labels */
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'genero' ),
));

// Añado otra taxonomía, esta vez no es jerárquica, como las etiquetas.
$labels = array(
	'name' => _x( 'Escritores', 'taxonomy general name' ),
	'singular_name' => _x( 'Escritor', 'taxonomy singular name' ),
	'search_items' =>  __( 'Buscar Escritores' ),
	'popular_items' => __( 'Escritores populares' ),
	'all_items' => __( 'Todos los escritores' ),
	'parent_item' => null,
	'parent_item_colon' => null,
	'edit_item' => __( 'Editar Escritor' ),
	'update_item' => __( 'Actualizar Escritor' ),
	'add_new_item' => __( 'Añadir nuevo Escritor' ),
	'new_item_name' => __( 'Nombre del nuevo Escritor' ),
	'separate_items_with_commas' => __( 'Separar Escritores por comas' ),
	'add_or_remove_items' => __( 'Añadir o eliminar Escritores' ),
	'choose_from_most_used' => __( 'Escoger entre los Escritores más utilizados' )
);
 
register_taxonomy( 'escritor', 'libro', array(
	'hierarchical' => false,
	'labels' => $labels, /* ADVERTENCIA: Aquí es donde se utiliza la variable $labels */
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'escritor' ),
));
} // Fin de la función create_book_taxonomies().

function modify_read_more_link() {
    return '<a class="more-link btn btn-primary btn-block " href="'. get_permalink().'"> Leer Arcticulo Completo </a>';
}
add_filter ('the_content_more_link', 'modify_read_more_link');


$mi_entrada = array(
	'post_title' => wp_strip_all_tags($_POST['f_email']),
	'post_content' => $_POST['f_message'],
	'post_type' => 'post',
	'post_status' => 'pending',
	'post_author' => $_POST['f_name'],
);

$nuevo_post = wp_insert_post($mi_entrada);











// La función no será utilizada antes del 'init'.
add_action( 'init', 'my_custom_init_2' );
/* Here's how to create your customized labels */
function my_custom_init_2() {
	$labels = array(
	'name' => _x( 'Libros Recomendados', 'post type general name' ),
        'singular_name' => _x( 'recomendado', 'post type singular name' ),
        'add_new' => _x( 'Añadir nuevo', 'libro recomendado' ),
        'add_new_item' => __( 'Añadir nuevo Libro Recomendado' ),
        'edit_item' => __( 'Editar Libro Recomendado' ),
        'new_item' => __( 'Nuevo Libro Recomendado' ),
        'view_item' => __( 'Ver Libro Recomendado' ),
        'search_items' => __( 'Buscar Recomendado' ),
        'not_found' =>  __( 'No se han encontrado Recomendado' ),
        'not_found_in_trash' => __( 'No se han encontrado Recomendado en la papelera' ),
        'parent_item_colon' => ''
    );
 
    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'recomendado' ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
 
    register_post_type( 'recomendado', $args ); /* Registramos y a funcionar */
}

// Lo enganchamos en la acción init y llamamos a la función create_recomendado_taxonomies() cuando arranque
add_action( 'init', 'create_recommended_taxonomies', 0 );
 
// Creamos dos taxonomías, género y autor para el custom post type "recomendado"
function create_recommended_taxonomies() {
	// Añadimos nueva taxonomía y la hacemos jerárquica (como las categorías por defecto)
	$labels = array(
	'name' => _x( 'Géneros', 'taxonomy general name' ),
	'singular_name' => _x( 'Género', 'taxonomy singular name' ),
	'search_items' =>  __( 'Buscar por Género' ),
	'all_items' => __( 'Todos los Géneros' ),
	'parent_item' => __( 'Género padre' ),
	'parent_item_colon' => __( 'Género padre:' ),
	'edit_item' => __( 'Editar Género' ),
	'update_item' => __( 'Actualizar Género' ),
	'add_new_item' => __( 'Añadir nuevo Género' ),
	'new_item_name' => __( 'Nombre del nuevo Género' ),
);
register_taxonomy( 'genero-recomendado', array( 'recomendado' ), array(
	'hierarchical' => true,
	'labels' => $labels, /* ADVERTENCIA: Aquí es donde se utiliza la variable $labels */
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'genero-recomendado' ),
));

// Añado otra taxonomía, esta vez no es jerárquica, como las etiquetas.
$labels = array(
	'name' => _x( 'Escritores', 'taxonomy general name' ),
	'singular_name' => _x( 'Escritor', 'taxonomy singular name' ),
	'search_items' =>  __( 'Buscar Escritores' ),
	'popular_items' => __( 'Escritores populares' ),
	'all_items' => __( 'Todos los escritores' ),
	'parent_item' => null,
	'parent_item_colon' => null,
	'edit_item' => __( 'Editar Escritor' ),
	'update_item' => __( 'Actualizar Escritor' ),
	'add_new_item' => __( 'Añadir nuevo Escritor' ),
	'new_item_name' => __( 'Nombre del nuevo Escritor' ),
	'separate_items_with_commas' => __( 'Separar Escritores por comas' ),
	'add_or_remove_items' => __( 'Añadir o eliminar Escritores' ),
	'choose_from_most_used' => __( 'Escoger entre los Escritores más utilizados' )
);
 
register_taxonomy( 'escritor-recomendado', 'recomendado', array(
	'hierarchical' => false,
	'labels' => $labels, /* ADVERTENCIA: Aquí es donde se utiliza la variable $labels */
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'escritor-recomendado' ),
));
} // Fin de la función create_book_taxonomies().
