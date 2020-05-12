<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12">
							<div class="hero-nav-area">
								<h1 class="text-white"><?php the_title();?></h1>
                                <p class="text-white link-nav"><a href="<?php echo esc_url( home_url('') );?>">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
							</div>
						</div>
					</div>
				</div>
			</section>
	<!-- End top-post Area -->
    <!-- Start contact-page Area -->
    <section class="contact-page-area pt-50 pb-120">
				<div class="container">
					<div class="row contact-wrap">
					
                        <?php the_content();?>

				</div>
			</section>
			<!-- End contact-page Area -->
</div>