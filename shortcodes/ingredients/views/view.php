<?php if ( !defined('FW') ) die('Forbidden'); 

/**
 * @var $post_type
 * @var array $query_post
 */


$ingredients = fw()->extensions->get( 'ingredients' );
$categories = fw()->extensions->get('ingredients')->get_settings();
$query_post = new WP_Query( array( 
    'post_type' => $ingredients->get_post_type_name()
    ) );
?>

<h5><?php 
$terms = get_terms($categories['taxonomy_name']);
    // foreach($terms as $term) {
    //     echo $term->name;
    // }

$categories = fw_ext_extension_get_listing_categories( $categories['taxonomy_name'], 'ingredients' );

foreach ($categories as $key => $category) echo $key . $category->name;

var_dump($categories);

?>
</h5>