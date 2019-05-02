<?php if (!defined('FW')) die('Forbidden'); 

get_header();
?>



<?php
$post_id = get_the_ID();
$ext_ingredients_settings = fw()->extensions->get( 'ingredients' )->get_settings();
?>




<?php get_footer() ?>