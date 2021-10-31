<?php
/*Archivo de regisro y carga de scripts y estilos
*
* @package Gympro
* @subpackage Gympro
* @since 1.0
*/
/*Registrando y cargando estilos
*
*
* @since 1.0

*/
    //Registrar los estilos
function gympro_theme_styles(){
    wp_register_style('gympro',get_stylesheet_uri(),'1.0','all');

    //Cargar estilos
    wp_enqueue_style('gympro');
}
add_action('wp_enqueue_scripts','gympro_theme_styles');
/*Registrando y cargando scripts
*
*
* @since 1.0

*/
function gympro_theme_scripts(){
    wp_register_script('parallax',THEMEROOT . './js/parallax.min.js',array('jquery'),'1.5.0',true);
    wp_register_script('gympro-scripts',THEMEROOT . './js/main.js',array('jquery','parallax'),'1.0',true);
    wp_enqueue_script('gympro-scripts');
}
add_action('wp_enqueue_scripts','gympro_theme_scripts');