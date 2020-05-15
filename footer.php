		<!-- start footer Area -->
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 single-footer-widget">
						<?php get_sidebar( 'footer-one' );?>
					</div>
					<div class="col-lg-2 col-md-6 single-footer-widget">
						<?php get_sidebar( 'footer-two' );?>
					</div>
					<div class="col-lg-2 col-md-6 single-footer-widget">
						<?php get_sidebar( 'footer-three' );?>
					</div>
					<div class="col-lg-2 col-md-6 single-footer-widget">
						<?php get_sidebar( 'footer-four' );?>
					</div>
					<div class="col-lg-3 col-md-6 single-footer-widget">
						<?php get_sidebar( 'footer-five' );?>
					</div>
				</div>
				<div class="footer-bottom row align-items-center">
					<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; <?php bloginfo( 'name' );?> All rights reserved | Developed By <a href="https://www.facebook.com/victor.deluna.58">Certified Vic</a> | Frontend made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					<div class="col-lg-4 col-md-12 footer-social">
							<a href="<?php echo get_theme_mod('facebook_page_link');?>"><i class="fa fa-facebook"></i></a>
							<a href="<?php echo get_theme_mod('twitter_page_link');?>"><i class="fa fa-twitter"></i></a>
							<a href="<?php echo get_theme_mod('instagram_page_link');?>"><i class="fa fa-instagram"></i></a>
							<a href="<?php echo get_theme_mod('youtube_page_link');?>"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer Area -->


<?php wp_footer();?>


    </body>
</html>