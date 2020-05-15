<?php
/**
 * Victorry functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package victorry
 * @subpackage victorry
 * @since 1.0.0
 */
/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */


function victorry_theme_support()
{
    # code...
    // lets add theme support for the various post formats 
    add_theme_support('post-formats', 
                
                array( 'gallery',
                       'image',
                       'video',
                       'audio',
                       
                    ) 
            
            
            
    );
    
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			// 'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
    );
    
    /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
    add_theme_support( 'post-thumbnails' );
    
    // Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => '#EBEAEB',
		)
    );
    
    // lets add theme support title tag option
    add_theme_support( 'title-tag');
    // lets add theme support for customize select refresh
    add_theme_support( 'customize-selective-refresh-widgets' );
    // lets add custom theme support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );
    // lets add theme support for custom headers
    $defaults = array(
        'default-image'          => '',
        'random-default'         => false,
        'width'                  => 0,
        'height'                 => 0,
        'flex-height'            => false,
        'flex-width'             => false,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
        'video'                  => false,
        'video-active-callback'  => 'is_front_page',
    );
    add_theme_support( 'custom-header', $defaults );
    // Enabling theme support for align full and align wide option for the block editor
    add_theme_support( 'align-wide' );
    // lets add theme support for menus
    add_theme_support( 'menus' );
    
}
add_action( 'init', 'victorry_theme_support');


/***
 * The Theme JS and CSS files needed for our theme to work properly
 * 
 * 
 */

 function victorry_theme_scripts()
 {
     # code...

    //  css

    wp_enqueue_style( 'mylinearicons', get_template_directory_uri().'/css/linearicons.css' , array(),'1.0.0', 'all');
    wp_enqueue_style( 'myfont', get_template_directory_uri().'/css/font-awesome.min.css' , array(),'1.0.0', 'all');
    wp_enqueue_style( 'mybs', get_template_directory_uri().'/css/bootstrap.css' , array(),'1.0.0', 'all');
    wp_enqueue_style( 'mymagnific', get_template_directory_uri().'/css/magnific-popup.css' , array(),'1.0.0', 'all');
    wp_enqueue_style( 'mynice', get_template_directory_uri().'/css/nice-select.css' , array(),'1.0.0', 'all');
    wp_enqueue_style( 'myanimate', get_template_directory_uri().'/css/animate.min.css' , array(),'1.0.0', 'all');
    wp_enqueue_style( 'myowl', get_template_directory_uri().'/css/owl.carousel.css' , array(),'1.0.0', 'all');
    wp_enqueue_style( 'myjqui', get_template_directory_uri().'/css/jquery-ui.css' , array(),'1.0.0', 'all');
    wp_enqueue_style( 'mymain', get_template_directory_uri().'/css/main.css' , array(),'1.0.0', 'all');


    // lets register our javascript here

    wp_enqueue_script( 'jquery');
    
    wp_enqueue_script( 'myboot', get_template_directory_uri().'/js/vendor/bootstrap.min.js', array('jquery'), '1.0.0', True );
    wp_enqueue_script( 'mypopper', get_template_directory_uri().'/js/popper.min.js', array('jquery'), '1.0.0', True );
    wp_enqueue_script( 'mymap', "https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA", array(), '1.0.0', True );
    wp_enqueue_script( 'myeasing', get_template_directory_uri().'/js/easing.min.js', array('jquery'), '1.0.0', True );
    wp_enqueue_script( 'myhover', get_template_directory_uri().'/js/hoverIntent.js', array('jquery'), '1.0.0', True );
    wp_enqueue_script( 'mysuperfish', get_template_directory_uri().'/js/superfish.min.js', array('jquery'), '1.0.0', True );
    wp_enqueue_script( 'myajchimp', get_template_directory_uri().'/js/jquery.ajaxchimp.min.js', array('jquery'), '1.0.0', True );
    wp_enqueue_script( 'mymagnificpop', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', True );
    wp_enqueue_script( 'mymnaccordion', get_template_directory_uri().'/js/mn-accordion.js', array('jquery'), '1.0.0', True );
    wp_enqueue_script( 'myjquijs', get_template_directory_uri().'/js/jquery-ui.js', array('jquery'), '1.0.0', True );
    wp_enqueue_script( 'myjqnice', get_template_directory_uri().'/js/jquery.nice-select.min.js', array('jquery'), '1.0.0', True );
    wp_enqueue_script( 'myjsowl', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), '1.0.0', True );
    wp_enqueue_script( 'myjsmail', get_template_directory_uri().'/js/mail-script.js', array('jquery'), '1.0.0', True );
    wp_enqueue_script( 'myjmain', get_template_directory_uri().'/js/main.js', array('jquery'), '1.0.0', True );




 }

 add_action( 'wp_enqueue_scripts', 'victorry_theme_scripts');


 /*
	 * Placing the required files needed for our theme to work
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     *****
     
     
*/

require_once(get_template_directory( ).'/inc/class-wp-bootstrap-navwalker.php');


/*
	 * Lets register the menus for our theme
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     *****
     // Include custom navwalker
     
     
*/

function victorry_register_menus()
{
    # code...
    // lets add menus for our header and the other for footer
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'victorry' ),
     
    ) );
}

add_action( 'init', 'victorry_register_menus');


/*
	 * Lets register the sidebars for our theme
	 *
	 * @link 
     *****
     // Include custom sidebar widgets
     
     
*/


function victorry_register_sidebars() {

    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar', 'victorry' ),
            'description'   => __( 'This is the Primary Sidebar For The Theme.', 'victorry' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s single-sidebar-widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="title">',
            'after_title'   => '</h6>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */

    register_sidebar(
        array(
            'id'            => 'footer-one',
            'name'          => __( 'First Footer Sidebar', 'victorry' ),
            'description'   => __( 'This is the First Footer Sidebar.', 'victorry' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer-two',
            'name'          => __( 'Second Footer Sidebar', 'victorry' ),
            'description'   => __( 'This is the Second Footer Sidebar.', 'victorry' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer-three',
            'name'          => __( 'Third Footer Sidebar', 'victorry' ),
            'description'   => __( 'This is the Third Footer Sidebar', 'victorry' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer-four',
            'name'          => __( 'Fourth Footer Sidebar', 'victorry' ),
            'description'   => __( 'This is the Fourth Footer Sidebar', 'victorry' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s ">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer-five',
            'name'          => __( 'Fifth Footer Sidebar', 'victorry' ),
            'description'   => __( 'This is the Fifth Footer Sidebar', 'victorry' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s ">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        )
    );


}

add_action( 'widgets_init', 'victorry_register_sidebars' );



/*
	 * Placing the required files needed for our theme customizer to work
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     *****
     
     
*/

require_once(get_template_directory( ).'/inc/customizer.php');





/*
	 * Placing the required files needed for our theme Custom comment walker.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     *****
     
     
*/




require get_template_directory() . '/inc/class-victorry-walker-comment.php';


/*
	 * Lets add some custom classes to the reply link in comment template
	 *
	 * @link 
     *****  
*/


function victorry_custom_comment_reply_link($content) {
    $extra_classes = 'btn-reply text-uppercase';
    return preg_replace( '/comment-reply-link/', 'comment-reply-link ' . $extra_classes, $content);
}

add_filter('comment_reply_link', 'victorry_custom_comment_reply_link', 99);


/**
 * Comments
 */
/**
 * Check if the specified comment is written by the author of the post commented on.
 *
 * @param object $comment Comment data.
 *
 * @return bool
 */
function victorry_is_comment_by_post_author( $comment = null ) {

	if ( is_object( $comment ) && $comment->user_id > 0 ) {

		$user = get_userdata( $comment->user_id );
		$post = get_post( $comment->comment_post_ID );

		if ( ! empty( $user ) && ! empty( $post ) ) {

			return $comment->user_id === $post->post_author;

		}
	}
	return false;

}



/*
	 * Lets register the Block editor settings and styles for our theme
	 *
	 * @link 
     *****  
*/

function victorry_block_setup_theme_supported_features() {

    // lets add theme support for the editor color palette

    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'radiant pink', 'victorry' ),
            'slug' => 'radiant-pink',
            'color' => '#f6214b',
        ),
        array(
            'name' => __( 'dark blue', 'victorry' ),
            'slug' => 'dark-blue',
            'color' => '#04091e',
        ),
        array(
            'name' => __( 'light gray', 'victorry' ),
            'slug' => 'light-gray',
            'color' => '#6c757d',
        ),
    ) );

    // lets add theme support for align-wide for editor images

    add_theme_support( 'align-wide' );

    // lets add theme support for editor block font sizes

    add_theme_support( 'editor-font-sizes', array(
        array(
            'name' => __( 'Small', 'victorry' ),
            'size' => 12,
            'slug' => 'small'
        ),
        array(
            'name' => __( 'Regular', 'victorry' ),
            'size' => 16,
            'slug' => 'regular'
        ),
        array(
            'name' => __( 'Large', 'victorry' ),
            'size' => 36,
            'slug' => 'large'
        ),
        array(
            'name' => __( 'Huge', 'victorry' ),
            'size' => 50,
            'slug' => 'huge'
        )
    ) );

    // lets add theme support for editor responsive embedded edits

    add_theme_support( 'responsive-embeds' );

    // lets add the theme support for editor block styles
    
    add_theme_support( 'wp-block-styles' );
}
 
add_action( 'after_setup_theme', 'victorry_block_setup_theme_supported_features' );





