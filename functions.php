<?php
/*GymPro funciones y definiciones
*
* @package Gympro
* @subpackage Gympro
* @since 1.0
* Text Domain: gympro
*/
/*Definiendo constantes del tema
* @package Gympro
* @subpackage Gympro
* @since 1.0

*/
define('THEMEROOT',get_stylesheet_directory_uri());
define('IMAGES',THEMEROOT . '/img');
/*Definiendo características del tema
* @package Gympro
* @subpackage Gympro
* @since 1.0
*/
// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1116;

if ( ! function_exists('gympro_custom_theme_features') ) {

// Register Theme Features
function gympro_custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'video', 'audio' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => 'ffffff',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for Translation
	load_theme_textdomain( 'gympro', get_template_directory() . '/languages' );

    // Añadir tamaño de imágenes personalizados
    add_image_size('big_size_image',825,533,true);
}
add_action( 'after_setup_theme', 'gympro_custom_theme_features' );

}
/*Registrando y cargando hojas de estilos
*  
*/
require_once('includes/scripts-styles.php');

/*Registrando Zonas de menú
*  
*/
require_once('includes/menus.php');
/*Registrando Zonas de menú
*  
*/
require_once('includes/sidebars.php');
/*Registrando Zonas de Widgets
*  
*/