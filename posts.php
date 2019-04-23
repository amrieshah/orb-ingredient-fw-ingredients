<?php if ( !defined('FW') ) die('Forbidden');

$labels = array(
    'name' => _x( 'Ingredients', 'ingredient' ),
    'singular_name' => _x( 'Ingredient', 'ingredient' ),
    'add_new' => _x( 'Add New', 'ingredient', 'ingredients' ),
    'menu_name' => _x( 'Ingredient', 'admin menu', 'ingredients' ),
    'add_new_item' => _x( 'Add New Ingredient', 'ingredients' ),
    'edit_item' => _x( 'Edit Ingredient', 'ingredients' ),
    'new_item' => _x( 'New Ingredient', 'ingredients' ),
    'edit_item' => _x( 'Edit Ingredient', 'ingredients' )
);

$args = array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'publicly_queryable' => true,
    'rewrite' => array( 'slug' => 'fw-ingredient' ),
    'show_in_rest' => true,
    'supports' => array('title', 'thumbnail',)
);
register_post_type( 'fw-ingredient', $args  );

?>