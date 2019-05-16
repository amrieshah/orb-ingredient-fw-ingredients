<?php if (!defined('FW')) die('Forbidden'); 

get_header();
$pID = get_the_ID();

$column_classes = fw_ext_extension_get_columns_classes( true );

$ext_ingredients_settings = fw()->extensions->get( 'ingredients' )->get_settings();

$taxonomy_name = $ext_ingredients_settings['taxonomy_name'];

$main_function_options = fw_get_db_post_option( $pID, 'main_function' );
$origin_options = fw_get_db_post_option( $pID, 'origin' );
$what_is_it_options = fw_get_db_post_option( $pID, 'what_is_it' );
$benefits_options = fw_get_db_post_option( $pID, 'benefits' );

$image_alt = get_post_meta( get_post_thumbnail_id($pID), '_wp_attachment_image_alt', true );

?>
	<div id="content" class="<?php echo esc_attr( $column_classes['main_column_class'] ); ?>">
		<?php
		// Start the Loop.
		while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( "toppadding_5" ); ?>>

                <?php if ( has_post_thumbnail()) { ?>
                    <img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="<?php echo esc_html( $image_alt ); ?>" class="alignleft big-margin" />
                <?php } ?>

                <h2 class="section_header">
                    <?php the_title(); ?>
                </h2>
                <?php echo $main_function_options,$benefits_options, $origin_options, $what_is_it_options; ?>

			</article><!-- #post-## -->
		<?php endwhile; ?>
	</div><!--eof #content -->

<?php get_footer() ?>