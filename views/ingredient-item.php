<?php if(!defined('FW')) die('Forbidden'); ?>

<?php

$ext_ingredients_settings = fw()->extensions
                            ->get('ingredients')
                            ->get_settings();
$taxonomy_name = $ext_ingredients_settings['taxonomy_name'];

?>

<?php if ( has_post_thumbnail() ) : ?>
    <div class="item-media">
        <?php 
        $full_image_src = wp_get_attachment_url(
        get_post_thumbnail_id( get_the_ID() ) );
        the_post_thumbnail();
        ?>
        <div class="media-links">
            <a class="abs-link" href="<?php the_permalink(); ?>"></a>
        </div>
    </div>
<?php endif; ?>
