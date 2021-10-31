<?php
/*Registrando zonas de menú
*
* @package Gympro
* @subpackage Gympro
* @since 1.0
*/
function gympro_menu(){
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'gympro'),
        // 'menu-footer' => __('Menu Footer', 'gympro'),
        // 'menu-social' => __('Menu Social', 'gympro'),
    ));
}
add_action('init','gympro_menu');