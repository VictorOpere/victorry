<?php get_header();?>

<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12">
							<div class="hero-nav-area">
								<h1 class="text-white"><?php the_author();?></h1>
								<p class="text-white link-nav"><a href="<?php echo esc_url( home_url('/') );?>">Home </a>  <span class="lnr lnr-arrow-right"></span> <?php the_author();?></p>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="news-tracker-wrap">
								<h6><span>Breaking News:</span>   <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
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
							<!-- Start latest-post Area -->
							<div class="latest-post-wrap">
								<h4 class="cat-title">Latest News</h4>
								
			<?php if ( have_posts() ) :;?> 
                    <?php while ( have_posts() ) : the_post(); ?>
                         <?php get_template_part( 'inc/template-parts/content-author', get_post_format());?> 
                    <?php endwhile; ?>
            <?php endif; ?>

								<div class="load-more">
									<a href="#" class="primary-btn">Load More Posts</a>
								</div>
								
							</div>
							<!-- End latest-post Area -->
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