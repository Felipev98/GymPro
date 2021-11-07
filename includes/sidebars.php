<?php 
/**
 * Registro de sidebars
 *
 * @package Gympro
 * @subpackage Gympro
 * @since 1.0
 */
function gympro_sidebars(){
    register_sidebar(array(
        'name' => __('Pie de página zona izquierda', 'gympro'),
        'id' => 'sidebar-footer-izq',
        'description' => __('Widget en pie de página zona izquierda', 'gympro'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Pie de página zona central', 'gympro'),
        'id' => 'sidebar-footer-cent',
        'description' => __('Widget en pie de página zona central', 'gympro'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Pie de página zona izquierda', 'gympro'),
        'id' => 'sidebar-footer-der',
        'description' => __('Widget en pie de página zona derecha', 'gympro'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
}
add_action( 'widgets_init', 'gympro_sidebars' );


?>