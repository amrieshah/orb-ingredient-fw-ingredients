<?php if ( !defined('FW') ) die('Forbidden'); 

$query = new WP_Query( array( 'post_type' => 'ingredient' ) );

?>

<?php
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post(); 
        if ( $atts['size'] === 'h2' ) : ?>

            <h2><?php the_title(); ?></h2>

        <?php endif; ?>
<?php endwhile;
wp_reset_postdata();
endif; ?>