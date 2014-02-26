<?php
/**
 * Template Name: Home Page CTP, no sidebar
 *
 * A custom page template without sidebar. *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Mapi
 * 
 */
 get_header(); ?>

<div class="slider-bg">
    <div class="container">
    <?php get_template_part( 'slider' ); ?>
    </div>
</div>

<div id="main" class="site-main">
 
        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
 				<div class="secondary">
	
<div class="cities">  

	<?php
	//get all posts for children of category $cata
	$cata = 2;
	$taxonomy = 'category';
	$cata_children = get_term_children( $cata, $taxonomy );

	$args=array(
	  'category__in' => $cata_children,
	  'post_status' => 'publish',
	  'posts_per_page' => -1,
	  'showposts'=>3,
	  'orderby'=>'ASC',
	  'caller_get_posts'=> 1
	  
	);
	$my_query = null;
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) { ?>
		
	 <?php // echo 'List of Posts belonging to This Category';
	  while ($my_query->have_posts()) : $my_query->the_post(); ?>
<article class="city" >

		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail('home-page'); ?>	
            <div class="title_cities">
                <h2><?php the_title(); ?></h2>
            </div>
        </a>

</article>

	<?php endwhile; }
		wp_reset_query();  // Restore global post data stomped by the_post().
	?>

<?php $recent = new WP_Query("cat=7&showposts=1"); while($recent->have_posts()) : $recent->the_post();?>

<article class="city" >

		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail('home-page'); ?>	
            <div class="title_cities">
                <h2><?php the_title(); ?></h2>
            </div>
        </a>

</article>

<?php endwhile; ?>

    
</div><!-- CITIES --> 

 <div class="calendarCTP">
 <?php get_sidebar(); ?>
 </div>  

 				</div><!-- SECONDARY -->  
            </div><!-- #content .site-content -->
        </div><!-- #primary .content-area -->
        
<?php get_footer(); ?>
