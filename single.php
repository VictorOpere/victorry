<?php get_header();?>

<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12">
							<div class="hero-nav-area">
								<h1 class="text-white">Read On</h1>
                                <p class="text-white link-nav"><a href="<?php echo esc_url( home_url('/') );?>">Home </a>  <span class="lnr lnr-arrow-right"></span> <?php the_title();?></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->

        <!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start single-post Area -->
							<div class="single-post-wrap">
							

		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
				
		<?php get_template_part( '/inc/template-parts/content-single', get_post_format());?>

			<?php if (comments_open()):?>
				
				<div class="comment-sec-area">
									<div class="container">
										<div class="row flex-column">
				<?php comments_template();?>

						</div>
					</div>
				</div>
				

				</div>

				
			

			<?php endif; ?>


		<?php endwhile; ?>
		<?php endif; ?>

		</div>
		</div>
					<div class="col-lg-4">
						<div class="sidebars-area">
							<?php get_sidebar('primary');?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End latest-post Area -->
	</div>


<?php get_footer();?>

