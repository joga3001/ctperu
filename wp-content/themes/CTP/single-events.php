<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Mapi
 * 
 */
 
get_header(); ?>
 
        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
 <?php $args = array(
    'post_status' => array('publish', 'future'),
    );
query_posts( $args ); ?>
 
 
 
 
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

 <?php endwhile; ?>

            </div><!-- #content .site-content -->
        </div><!-- #primary .content-area -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>