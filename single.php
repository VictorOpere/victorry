<?php get_header();?>

		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
				
		<?php get_template_part( '/inc/template-parts/content-single', get_post_format());?>

			<?php if (comments_open()):?>
			
				<?php comments_template();?>
			

			<?php endif; ?>


		<?php endwhile; ?>
		<?php endif; ?>


<?php get_footer();?>

