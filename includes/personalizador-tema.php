<?php
/*Añadiendo opciones al personalizador del tema
*
* @package Gympro
* @subpackage Gympro
* @since 1.0
*/

function gympro_customize_register($_wp_customize){

// Panel encabezado
$_wp_customize->add_panel('gympro_encabezado', array(
    'title' => __('Encabezado', 'gympro'),
    'description' => __('Opciones del encabezado', 'gympro'),
    'priority' => 35,
));
// Sección footer inferior

$_wp_customize->add_section('gympro_footer', array(
    'title' => __('Footer', 'gympro'),
    'description' => __('Opciones del footer', 'gympro'),
    'priority' => 10,
    'panel' => 'gympro_encabezado',
));
}
//Enlace Facebook
// $_wp_customize->add_setting('gympro_settings[facebook_link]', array(
//     'default' => '',
//     'type' => 'theme_mod',
// ));
// $_wp_customize -> add_control('heder_facebook_link')

// }
// add_action('customize_register','gympro_customize_register');