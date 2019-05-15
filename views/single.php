<?php if (!defined('FW')) die('Forbidden'); 

get_header();
$pID = get_the_ID();

$column_classes = fw_ext_extension_get_columns_classes( true );

$ext_ingredients_settings = fw()->extensions->get( 'ingredients' )->get_settings();

$taxonomy_name = $ext_ingredients_settings['taxonomy_name'];
?>
<div id="content" class="<?php echo esc_attr($column_classes['main_column_class'])?>">
    <article id="post-<?php echo $pID; ?>" <?php post_class(); ?>>

        <div class="vertical-item content-padding with_background">
            <?php the_post_thumbnail(); ?>
            <div class="item-content entry-content">
                <header class="entry-header">
                    <?php the_title( '<h3 class="entry-title"><strong>', '</strong></h3>' ); ?>
                    <div class="categories-links bottommargin_30 theme_buttons small_buttons color1">
                        <?php
                        echo get_the_term_list( $pID, $taxonomy_name, '', ' ', '' );
                        ?>
                    </div>
                </header>
                <?php    
                echo fw_get_db_post_option($pID, 'benefits');    
                ?>
            </div>
        </div>

    </article>
    

</div>




<?php get_footer() ?>