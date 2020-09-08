<?php get_header();?>

<div class="site-main-container">

			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row small-gutters">
						<div class="col-lg-8 top-post-left">

						<?php
							$args = array( 'numberposts' => 1, 'order'=> 'DESC', 'orderby' => 'date' );
							$postslist = get_posts( $args );
                			foreach ($postslist as $post) :  setup_postdata($post); ?>

							<div class="feature-image-thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="">
							</div>
							<div class="top-post-details">
								<ul class="tags">
									<?php the_category()?>
								</ul>
								<a href="<?php the_permalink();?>">
									<?php the_title( '<h3>', '</h3>');?>
								</a>
								<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span><?php the_author();?></a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo esc_html(human_time_diff( get_the_time('U'), current_time('timestamp') )) . ' ago'; ?></a></li>
											<li><a href="#"><span class="lnr lnr-bubble"></span><?php echo esc_html(get_comments_number($post->ID));?></a></li>
								</ul>
							</div>

							<?php endforeach; ?>

						</div>
						<div class="col-lg-4 top-post-right">
							<?php
								$args = array( 'numberposts' => 1, 'order'=> 'DESC', 'orderby' => 'date','offset' => 1);
								$postslist = get_posts( $args );
								foreach ($postslist as $post) :  setup_postdata($post); ?>

							<div class="single-top-post">
								<div class="feature-image-thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="">
								</div>
								<div class="top-post-details">
									<ul class="tags">
										<?php the_category()?>
									</ul>
									<a href="<?php the_permalink();?>">
										<?php the_title( '<h4>', '</h4>');?>
									</a>
									<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span><?php the_author();?></a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo esc_html(human_time_diff( get_the_time('U'), current_time('timestamp') )) . ' ago'; ?></a></li>
											<li><a href="#"><span class="lnr lnr-bubble"></span><?php echo esc_html(get_comments_number($post->ID));?></a></li>
									</ul>
								</div>
							</div>

							<?php endforeach; ?>


							<div class="single-top-post mt-10">

							<?php
								$args = array( 'numberposts' => 1, 'order'=> 'DESC', 'orderby' => 'date','offset' => 2);
								$postslist = get_posts( $args );
								foreach ($postslist as $post) :  setup_postdata($post); ?>

								<div class="feature-image-thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="">
								</div>
								<div class="top-post-details">
									<ul class="tags">
										<?php the_category()?>
									</ul>
									<a href="<?php the_permalink();?>">
										<?php the_title( '<h4>', '</h4>');?>
									</a>
									<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span><?php the_author();?></a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo esc_html(human_time_diff( get_the_time('U'), current_time('timestamp') )) . ' ago'; ?></a></li>
											<li><a href="#"><span class="lnr lnr-bubble"></span><?php echo esc_html(get_comments_number($post->ID));?></a></li>
									</ul>
								</div>

								<?php endforeach; ?>

							</div>
						</div>
						<div class="col-lg-12">
							<div class="news-tracker-wrap">

							<?php
								$args = array( 'numberposts' => 1, 'order'=> 'DESC', 'orderby' => 'date');
								$postslist = get_posts( $args );
								foreach ($postslist as $post) :  setup_postdata($post); ?>

								<h6><span>Breaking News:</span>   <a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
							
							<?php endforeach; ?>
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
								<?php
									$args = array( 'numberposts' => 10, 'order'=> 'DESC', 'orderby' => 'date' );
									$postslist = get_posts( $args );
									foreach ($postslist as $post) :  setup_postdata($post); ?> 

								<div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
										</div>
										<ul class="tags">
											<?php the_category()?>
										</ul>
									</div>
									<div class="col-lg-7 post-right">
										<a href="<?php the_permalink();?>">
											<?php the_title( '<h4>', '</h4>');?>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span><?php the_author();?></a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo esc_html(human_time_diff( get_the_time('U'), current_time('timestamp') )) . ' ago'; ?></a></li>
											<li><a href="#"><span class="lnr lnr-bubble"></span><?php echo esc_html(get_comments_number($post->ID));?></a></li>
										</ul>
										<p>
											<?php the_excerpt();?>
										</p>
									</div>
								</div>

          					    <?php endforeach; ?>

					
							</div>
					<!-- End latest-post Area -->

							<!-- Start banner-ads Area -->
							<div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
								<img class="img-fluid" src="<?php echo wp_get_attachment_url( get_theme_mod( 'advertisement_middlepage_banner_settings' ) );?>" alt="middle page ad">
							</div>
							<!-- End banner-ads Area -->

							<!-- End banner-ads Area -->

							<!-- Start popular-post Area -->
							<div class="popular-post-wrap">
								<h4 class="title">Popular Posts</h4>
								
								<div class="row mt-20 medium-gutters">
								<?php
									$args = array( 'numberposts' => 8,'order'=> 'ASC', 'orderby' => 'meta_value_num', );
									$postslist = get_posts( $args );
									foreach ($postslist as $post) :  setup_postdata($post); ?> 

									<div class="col-lg-6 single-popular-post">
										<div class="feature-img-wrap relative">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
												<img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
											</div>
											<ul class="tags">
												<?php the_category()?>
											</ul>
										</div>
										<div class="details">
											<a href="<?php the_permalink();?>">
												<?php the_title( '<h4>', '</h4>');?>
											</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span><?php the_author();?></a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo esc_html(human_time_diff( get_the_time('U'), current_time('timestamp') )) . ' ago'; ?></a></li>
											<li><a href="#"><span class="lnr lnr-bubble"></span><?php echo esc_html(get_comments_number($post->ID));?></a></li>
										</ul>
										<p>
											<?php the_excerpt();?>
										</p>
										</div>
									</div>

          					    <?php endforeach; ?>

									
								</div>
							</div>
							<!-- End popular-post Area -->
							<!-- Start relavent-story-post Area -->
							<div class="relavent-story-post-wrap mt-30">
								<h4 class="title">Relavent Stories</h4>
								<div class="relavent-story-list-wrap">

								<?php
									$args = array( 'numberposts' => 10, 'order'=> 'DESC', 'orderby' => 'rand' );
									$postslist = get_posts( $args );
									foreach ($postslist as $post) :  setup_postdata($post); ?> 

									<div class="single-relavent-post row align-items-center">
										<div class="col-lg-5 post-left">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
												<img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
											</div>
											<ul class="tags">
												<?php the_category()?>
											</ul>
										</div>
										<div class="col-lg-7 post-right">
											<a href="<?php the_permalink();?>">
												<?php the_title( '<h4>', '</h4>');?>
											</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span><?php the_author();?></a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo esc_html(human_time_diff( get_the_time('U'), current_time('timestamp') )) . ' ago'; ?></a></li>
											<li><a href="#"><span class="lnr lnr-bubble"></span><?php echo esc_html(get_comments_number($post->ID));?></a></li>
										</ul>
										<p>
											<?php the_excerpt();?>
										</p>
										
										</div>
									</div>

          					    <?php endforeach; ?>

								</div>
							</div>
							<!-- End relavent-story-post Area -->
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


