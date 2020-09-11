<?php 
/**
 * Header file for Victorry WordPress theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package victorry
 * @subpackage victorry
 * @since 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php  bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="theme-color" content="#04091e">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
  
    <?php if ( is_singular() && pings_open( get_queried_object(  ) )): ?>

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php endif; ?>

    <?php if ( is_singular() && get_option( 'thread_comments' ) )               wp_enqueue_script( 'comment-reply' ); ?>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">



    <?php wp_head( ); ?>
</head>
<body <?php body_class( );?> >


<?php 

  /**
   * For compability with WordPress 5.2.0 onwards
   */

  if( !function_exists('wp_body_open')){

     wp_body_open();

  }

?>

<header>
	
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
							<ul>
								<li><a href="<?php echo get_theme_mod('facebook_page_link');?>"><i class="fa fa-facebook"></i></a></li>
								<li><a href="<?php echo get_theme_mod('twitter_page_link');?>"><i class="fa fa-twitter"></i></a></li>
								<li><a href="<?php echo get_theme_mod('instagram_page_link');?>"><i class="fa fa-instagram"></i></a></li>
								<li><a href="<?php echo get_theme_mod('youtube_page_link');?>"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
							<ul>
								<li><a href="tel:<?php echo esc_attr( get_theme_mod('telephone_number_settings') );?>"><span class="lnr lnr-phone-handset"></span><span><?php echo get_theme_mod('telephone_number_settings');?></span></a></li>
								<li><a href="mailto:<?php echo esc_attr( get_theme_mod('website_email_settings') );?>"><span class="lnr lnr-envelope"></span><span><?php echo get_theme_mod('website_email_settings');?></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="logo-wrap">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
						
								<!-- <img class="img-fluid" src="" alt=""> -->
                <?php 

                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                  }

	              ?>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
							<img class="img-fluid" src="<?php echo wp_get_attachment_url( get_theme_mod( 'advertisement_top_banner_settings' ) );?>" alt="Banner Ad">
						</div>
					</div>
				</div>
			</div>
			<div class="container main-menu" id="main-menu">
				<div class="row align-items-center justify-content-between">
					<nav id="nav-menu-container">

          <?php
                    wp_nav_menu([
                        'menu'            => 'primary_menu',
                        'theme_location'  => 'primary_menu',
                        'container'       => '',
                        'container_id'    => '',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_id'         => false,
                        'menu_class'      => 'nav-menu',
                        'depth'           => 4,
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ]);
          ?>
          
					</nav><!-- #nav-menu-container -->
					<div class="navbar-right">
						<form class="Search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<input type="text" class="form-control Search-box" name="s" id="Search-box" placeholder="Search">
							<label for="Search-box" class="Search-box-label">
								<span class="lnr lnr-magnifier"></span>
							</label>
							<span class="Search-close">
								<span class="lnr lnr-cross"></span>
							</span>
						</form>
					</div>
				</div>
			</div>
		</header>

