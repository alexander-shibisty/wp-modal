<?php

define('SIMPLEMODAL_PREFIX', 'simplemodal');
define('SIMPLEMODAL_OPTION', 'simplemodal_text');

// settings
function mod_text_register_settings()
{
    add_option(SIMPLEMODAL_OPTION, 'Hello World!');
    register_setting('simplemodal_options_group', SIMPLEMODAL_OPTION, 'mod_text_callback');
}
add_action('admin_init', 'mod_text_register_settings');

// option page init
function simplemodal_register_options_page()
{
    add_options_page('Simple Modal', 'Simple Modal', 'manage_options', 'simplemodal', 'simplemodal_options_page');
}
add_action('admin_menu', 'simplemodal_register_options_page');

function simplemodal_options_page()
{
    include __DIR__.'/templates/admin/modal_settings.php';
}
