<?php

/*
Plugin Name: FJ Slider for WordPress
Plugin URI: https://github.com/fridrik-juliusson/fj-slider-wp
Description: A very light and easy to use slider plugin for WordPress.
Version: 1.0.1
Author: Fridrik Juliusson
Author URI: https://fridrikjuliusson.com/
*/

// Exit if not opened through WordPress.
if (!defined('ABSPATH')) {
    exit;
}

function fjs_on_activate() {
    // Only executed on plugin activation
    // Set default value for options if not set
    if (!get_option('fjs-add-menu-page')) {
        update_option('fjs-add-menu-page', 'no');
    }
    if (!get_option('fjs-show-mobile')) {
        update_option('fjs-show-mobile', 'no');
    }
    if (!get_option('fjs-load-amp-script')) {
        update_option('fjs-load-amp-script', 'no');
    }
    if (!get_option('fjs-image-width')) {
        update_option('fjs-image-width', '900');
    }
    if (!get_option('fjs-image-height')) {
        update_option('fjs-image-height', '338');
    }
    if (!get_option('fjs-use-custom-css')) {
        update_option('fjs-use-custom-css', 'no');
    }
    if (!get_option('fjs-slide-show-1')) {
        update_option('fjs-slide-show-1', 'no');
    }
    if (!get_option('fjs-slide-show-2')) {
        update_option('fjs-slide-show-2', 'no');
    }
    if (!get_option('fjs-slide-show-3')) {
        update_option('fjs-slide-show-3', 'no');
    }
    if (!get_option('fjs-slide-show-4')) {
        update_option('fjs-slide-show-4', 'no');
    }
    if (!get_option('fjs-slide-show-5')) {
        update_option('fjs-slide-show-5', 'no');
    }

}
register_activation_hook( __FILE__, 'fjs_on_activate' );


function fjs_add_slider() {

    require_once(plugin_dir_path(__FILE__).'/slider.php');

}


function fjs_add_amp_slider() {

    require_once(plugin_dir_path(__FILE__).'/amp-slider.php');
}


function fjs_script_and_styles() {

    wp_enqueue_script( 'fjs-script', plugin_dir_url( __FILE__ ) . 'slider.js', array(), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'fjs_script_and_styles' );


function fjs_settings_page() {

    require_once(plugin_dir_path(__FILE__).'settings.php');

}


function fjs_register_menu_page() {

    add_menu_page(
        'FJ slider',
        'FJ slider settings',
        'manage_options',
        'fjs/slider-settings.php',
        'fjs_settings_page',
        'dashicons-images-alt',
        50
    );

}


if (get_option('fjs-add-menu-page') === 'yes') {

    add_action( 'admin_menu', 'fjs_register_menu_page' );

}

function fjs_add_settings_menu() {

    add_options_page( 'FJ Slider', 'FJ Slider Settings', 'manage_options', 'fj_slider', 'fjs_settings_page');

}
add_action('admin_menu', 'fjs_add_settings_menu');



