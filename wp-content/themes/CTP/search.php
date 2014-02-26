<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Mapi
 * 
 */
 
get_header(); ?>

<div class="slider-bg">
    <div class="container">
    </div>
</div>
 
 
 	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="secondary">
            
 				<div class="top-cat-title">
                <h1><?php printf( '<span>' . __( 'Search Results for: %s', 'shape' ),  '</span>' . get_search_query()  ); ?></h1>
                </div>
 
 <div class="cities">

            <?php if ( have_posts() ) : ?>
  
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
 
	<div class="info-all-cats">
            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3> 
            <time class="jo_time"><?php the_time('F jS, Y'); ?></time>
        <div class="right-all-cat">
            <?php the_excerpt(); ?>
        </div>
	</div>  
 
                <?php endwhile; ?>
 
    <div class="pagination-jo">

    <?php wp_pagenavi(); ?>

    </div> 
            <?php else : ?>
 
                <?php get_template_part( 'no-results', 'search' ); ?>
 
            <?php endif; ?>
 
</div> 
			</div><!-- SECONDARY -->  
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
    
<?php get_footer(); ?>