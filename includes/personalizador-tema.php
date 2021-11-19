<?php
/*Añadiendo opciones al personalizador del tema
*
* @package Gympro
* @subpackage Gympro
* @since 1.0
*/

function gympro_customize_register($wp_customize){

// Panel encabezado
$wp_customize->add_panel('gympro_encabezado', array(
    'title' => __('Footer', 'gympro'),
    'description' => __('Opciones del Footer', 'gympro'),
    'priority' => 35,
));
// Sección footer inferior

$wp_customize->add_section('gympro_footer', array(
    'title' => __('Footer', 'gympro'),
    'description' => __('Opciones del footer', 'gympro'),
    'priority' => 10,
    'panel' => 'gympro_encabezado',
));
$wp_customize->add_setting('gympro_settings[facebook_link]', array(
    'default' => '',
    'type' => 'theme_mod',
));
$wp_customize-> add_control('facebook_link',array(
    'label' => __('Enlace Facebook', 'gympro'),
    'description' => __('Escribe la URL de tu facebook', 'gympro'),
    'section' => 'gympro_footer',
    'settings' => 'gympro_settings[facebook_link]'));
$wp_customize->add_setting('gympro_settings[twitter_link]', array(
        'default' => '',
        'type' => 'theme_mod',
    ));
$wp_customize-> add_control('twitter_link',array(
        'label' => __('Enlace Twitter', 'gympro'),
        'description' => __('Escribe la URL de tu twitter', 'gympro'),
        'section' => 'gympro_footer',
        'settings' => 'gympro_settings[twitter_link]'));


        //Sección encabezado normal
        $wp_customize->add_section('gympro_header', array(
            'title' => __('Encabezado', 'gympro'),
            'description' => __('Opciones del encabezado normal', 'gympro'),
            'priority' => 20,
            'panel' => 'gympro_encabezado',
        ));
// Logo
$wp_customize->add_setting('gympro_settings[logo]', array(
    'default' => '',
    'type' => 'theme_mod',
));
$wp_customize-> add_control(new WP_customize_Image_Control($wp_customize,'logo',array(
    'label' => __('logo', 'gympro'),
    'description' => __('Selecciona tu logo ', 'gympro'),
    'section' => 'gympro_footer',
    'settings' => 'gympro_settings[logo]'

)));





}
//Enlace Facebook


add_action('customize_register','gympro_customize_register');