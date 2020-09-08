<div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="<?php esc_url(the_post_thumbnail_url());?>" alt="<?php the_title();?>">
										</div>
										<ul class="tags">
											<?php the_category();?>
										</ul>
									</div>
									<div class="col-lg-7 post-right">
										<a href="<?php the_permalink();?>">
											<?php the_title( '<h4>', '</h4>');?>
										</a>
										<ul class="meta">
											<li><span class="lnr lnr-user"></span><?php the_author_posts_link(); ?></li>
											<li><span class="lnr lnr-calendar-full"></span><?php echo esc_html(human_time_diff( get_the_time('U'), current_time('timestamp') )) . ' ago'; ?></li>
											<li><span class="lnr lnr-bubble"></span><?php echo esc_html(get_comments_number($post->ID));?></li>
										</ul>
										<p class="excert">
											<?php the_excerpt();?>
										</p>
									</div>
</div>
				
		