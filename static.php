<?php if(!defined('FW')) die('Forbidden');

if (is_admin()) {
    return;
}

wp_enqueue_style( 'fw-ingredient-style', get_stylesheet_directory_uri() . '/framework-customizations/extensions/ingredients/static/css/ingredient.css', array(), '1.0.0' );