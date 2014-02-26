<?php
/**
 * The Template for displaying all single posts.
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

<div class="sing-post-top">   
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="top-sing-title"><h1><?php the_title(); ?></h1></div>
                    <div class="entry-meta jo_time">
        <time> Post on: <?php the_time('F jS, Y'); ?></time>
         <?php echo ' / ' . ' Written by: ' ?>
         <?php the_author_posts_link(); ?>
					</div><!-- .entry-meta -->
                      	<div class="single-img">
                        <div class="img-alone">	
                        <?php the_post_thumbnail('single-post-thumbnail'); ?>
                        </div>
    			         <div class="capt-photo-sing"><p><?php the_field('caption_photo'); ?></p></div>
                        <div class="photo-by"><p><?php the_field('photo_by'); ?></p></div>
						</div>
					<div class="entry-content">
                       <div class="conten-sing-jo"> <?php the_content(); ?></div>
					</div><!-- .entry-content -->
<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
					<footer id="entry-author-info">
						<?php //echo get_avatar( get_the_author_meta( 'name' ), apply_filters( 'boilerplate_author_bio_avatar_size', 60 ) ); ?>
						<h2><?php //printf( esc_attr__( 'About %s', 'boilerplate' ), get_the_author() ); ?></h2>
						<?php //the_author_meta( 'description' ); ?>
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
							<?php printf( __( 'View all posts by %s >', 'boilerplate' ), get_the_author() ); ?>
						</a> 
					</footer><!-- #entry-author-info -->
<?php endif; ?>
					<footer class="entry-utility">
		<p>Posted in: <?php the_category(', '); ?></p>
			<p><?php the_tags('Tagged As: ','  '); ?></p>
					</footer><!-- .entry-utility -->
                
                
<!-- AddThis Button BEGIN -->
<div class="share-ctp">
<div class="jo-channels addthis_toolbox addthis_default_style addthis_32x32_style">
<a class="addthis_button_facebook"></a>
<a class="addthis_button_twitter"></a>
<a class="addthis_button_email"></a>
<a class="addthis_button_compact"></a>
</div>
</div>
<!-- AddThis Button END -->   

         
				</article><!-- #post-## -->

				<?php comments_template( '', true ); ?>

				<nav id="nav-below" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . 'Previous post: </span>  %title', TRUE ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '<span class="meta-nav">' . 'Next post: </span>  %title', TRUE ); ?></div>
				</nav><!-- #nav-below -->                




</div><!-- cities-->

 <div class="calendarCTP">
 <?php get_sidebar(); ?>
 </div> 
 
			</div><!-- SECONDARY -->  
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php endwhile; ?>
 

<?php get_footer(); ?>
