<?php
/*
    Plugin Name: Simple Modal
    Plugin URI: https://github.com/alexander-shibisty
    description: Не работает без WooCommerce.
    Version: 0.1
    Author: Alexander Shibisty
    Author URI: https://github.com/alexander-shibisty
    License: MIT
*/

require_once __DIR__ . '/settings.php';

function scripts_include()
{
    wp_register_script('simplemodal-plugin-scripts', plugins_url('/js/simplemodal.js', __FILE__));
    wp_enqueue_script('simplemodal-plugin-scripts');
}
add_action('wp_enqueue_scripts', 'scripts_include');

function styles_include()
{
    wp_register_style('simplemodal-plugin-styles', plugins_url('/css/simplemodal.css', __FILE__));
    wp_enqueue_style('simplemodal-plugin-styles');
}
add_action('wp_enqueue_scripts', 'styles_include');

function simplemodal_init() {
    include __DIR__ . '/templates/modal.php';
}

simplemodal_init();