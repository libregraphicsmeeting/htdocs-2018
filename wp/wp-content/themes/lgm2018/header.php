<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <header id="masthead" class="site-header" role="banner">
                <?php get_template_part('blocks/branding'); ?>
                <?php get_template_part('blocks/navigation'); ?>
            </header>
            
            <?php
            /*
             * If a regular post or page, and not the front page, show the featured image.
             * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
            */ 
            if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) : ?>
              <div class="single-featured-image-header">
                  <div class="featured-bg" style="background: url('<?php echo the_post_thumbnail_url() ?>') repeat-x;"></div>
                  <?php echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' ); ?>
              </div><!-- .single-featured-image-header -->
            <?php endif ?>

            <div class="site-content-contain">
              <div id="content" class="site-content">
