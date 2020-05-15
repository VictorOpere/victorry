
								<div class="content-wrap">
									<ul class="tags">
										<?php the_category();?>
									</ul>
									<?php the_title( '<h3>', '</h3>',);?>
									<ul class="meta pb-20">
										<li><a href=""><span class="lnr lnr-user"></span><?php the_author();?></a></li>
										<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo esc_html(human_time_diff( get_the_time('U'), current_time('timestamp') )) . ' ago'; ?></a></li>
										<li><a href="#"><span class="lnr lnr-bubble"></span><?php echo esc_html(get_comments_number($post->ID));?></a></li>
									</ul>
									
									<?php the_content();?>
								
								<div class="navigation-wrap justify-content-between d-flex">
								<?php $prevPost = get_previous_post(true);
									if($prevPost) {
										$args = array(
											'posts_per_page' => 1,
											'include' => $prevPost->ID
										);
										$prevPost = get_posts($args);
										foreach ($prevPost as $post) {
											setup_postdata($post);
                       			?>
									<a class="prev" href="<?php echo esc_url( get_permalink() );?>"><span class="lnr lnr-arrow-left"></span>Prev Post</a>

									<?php
                                		wp_reset_postdata();
                           			 		} //end foreach
                       			 } // end if
                        
										$nextPost = get_next_post(true);
										if($nextPost) {
											$args = array(
												'posts_per_page' => 1,
												'include' => $nextPost->ID
											);
											$nextPost = get_posts($args);
											foreach ($nextPost as $post) {
												setup_postdata($post);
									?>

									<a class="next" href="<?php echo esc_url( get_permalink() );?>">Next Post<span class="lnr lnr-arrow-right"></span></a>

									<?php
											wp_reset_postdata();
										} //end foreach
									} // end if

                  				   ?>		
								</div>
								
						</div>
						<!-- End single-post Area -->
				