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