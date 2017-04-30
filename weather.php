<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
/*
Plugin Name: Vremenska prognoza
Plugin URI: https://github.com/srkis
Description:  Plugin koji prikazuje vremensku prognozu. Plugin je napravljen za prikazivanje trenutne vremenske prognoze u sidebar-u. Prilikom ucitavanja strane plugin ce prepoznati trenutnu lokaciju korisnika i prikazece vremenske prilike za tu lokaciju.
Author: Srdjan Stojanovic
Version: 1.0
Author URI: http://www.srdjan.icodes.rocks/

*/


function widget_install()
{

global $wpdb;
return true;
}


function widget_style()
{

    /*   Ukljucivanje CSS-a za plugin */

    wp_register_style('css',plugin_dir_url(__FILE__).'style/style.css');
    wp_enqueue_style('css');

    /*Uklucivanje JS fajla i jQuery-a*/

    wp_enqueue_script( 'script1', plugins_url('scripts/jquery-3.2.1.min.js', __FILE__), array('jquery'));

    wp_enqueue_script( 'script', plugins_url('scripts/js.js', __FILE__), array('jquery'));


}



function Widget_plugin()
{

    ob_start();
    $data = include_once('show_weather_widget.php');
    return ob_get_clean();
}



/*Iskljucivanje plugina */
function widget_uninstall()
{
    global $wpdb;
    echo "Uninstall";
}


add_filter('widget_text','do_shortcode');

add_shortcode('weather_widget','Widget_plugin');

register_activation_hook(__FILE__, 'widget_install');

register_deactivation_hook(__FILE__, 'widget_uninstall');

//add_action('admin_menu','menu');

add_action( 'wp_enqueue_scripts', 'widget_style');


?>