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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="page" class="site">
        <?php
        if ((is_single() || (is_page() && ! twentyseventeen_is_frontpage()))
        && has_post_thumbnail(get_queried_object_id())) :
            echo '<div class="single-featured-image-header">';
            echo get_the_post_thumbnail(get_queried_object_id(), 'twentyseventeen-featured-image');
            echo '</div><!-- .single-featured-image-header -->';
        endif;
        ?>

        <div class="site-content-contain">
            <div id="content" class="site-content">
