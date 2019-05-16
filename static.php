<?php if(!defined('FW')) die('Forbidden');

if (is_admin()) {
    return;
}

wp_enqueue_style( 'fw_ingredient_style', get_stylesheet_directory_uri() . '/css/ingredient.css', array(), '1.0.0' );