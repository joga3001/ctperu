<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
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
                <h1><?php
					printf( single_cat_title( '', false ) . '' );
				?></h1>
                </div>


<div class="cities">
                
<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = array(
	'posts_per_page' => 7,
	'paged' => $paged,
);

$the_query = new WP_Query( $args );
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article>
 
        <div class="quote-others-cat"><h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3> 
        <time class="othercatstime"><?php the_time('F jS, Y'); ?></time></div>
 <?php if ( has_post_thumbnail() ) { ?>
	<div class="left-others-cat">
    
  	<?php the_post_thumbnail('category-cities'); ?>	
    
     </div>   				<?php }; ?>
    

    <div class="right-others-cat">
        <?php the_excerpt(); ?>
    </div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

    
</article>

</div><!-- cities-->


 <div class="calendarCTP">
 <?php get_sidebar(); ?>
 </div>  
 
			</div><!-- SECONDARY -->  
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
         
<?php get_footer(); ?>
