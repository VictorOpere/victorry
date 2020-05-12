<?php 
/**
 * @package victorry
 * 
 * This is the Single post template of our theme
 * 
 */
?>

<?php get_header(); ?>

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>
                      
                <?php get_template_part( '/inc/template-parts/content-page', get_post_format());?>

            <?php endwhile; ?>
        <?php endif; ?>

<?php get_footer( ); ?>