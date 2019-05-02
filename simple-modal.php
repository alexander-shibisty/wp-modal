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

function simplemodalInit() {
    include __DIR__ . '/templates/modal.php';
}

simplemodalInit();