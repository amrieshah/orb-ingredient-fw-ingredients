<?php if ( !defined('FW') ) die('Forbidden'); 

/**
 * @var $post_type
 * @var array $query_post
 */


$post_type = 'ingredient';
$query_post = new WP_Query( array( 
    'post_type' => $post_type ) );

?>

<?php
if ( $query_post->have_posts() ) :
    while ( $query_post->have_posts() ) : $query_post->the_post();
        $post_id = get_the_ID();
        if ( $atts['size'] === 'h2' ) : ?>
            <section style="border: 1px solid yellow">
                <img src="<?php echo get_the_post_thumbnail_url($post_id, array('100', '100')) ?>" alt="">
                <h2><?php the_title(); ?></h2>
                <p><?php echo fw_get_db_post_option($post_id, 'main_function') ?></p>
                <a href="<?php echo get_permalink($post_id); ?>">Click</a>
            </section>
        <?php endif; ?>
<?php endwhile;
wp_reset_postdata();
endif; ?>