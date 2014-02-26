<?php
/**
 * The template for displaying Category Archive Gastronomy pages.
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

<div class="cities-cat">                


<?php
//for each category, show 1 post
$cat_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'posts_per_page' => 6
   );
   ?> <?php
$categories=get_categories($cat_args);
  foreach($categories as $category) {
    $args=array(
      'showposts' => 1,
      'category__in' => array($category->term_id),
      'caller_get_posts'=>1,
	  'category_name' => 'gastronomy'
    );
    $posts=get_posts($args);

?>
  <?php    if ($posts) { ?>
   
<?php        foreach($posts as $post) {
          setup_postdata($post); ?>

          <article class="city-cat" >

<?php echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "See all pots on %s" ), $category->name ) . '" ' . '>'; ?>

			<?php the_post_thumbnail('category-cities'); ?>	
            <div class="title_cities-cat">
                <h2>
				<?php echo $category->name . ' >' ; ?>
                </h2>
            </div>
        </a>

		  <?php the_excerpt(); ?>
          </article>
          <?php
        } // foreach($posts
      } // if ($posts
    } // foreach($categories
?>

</div><!-- cities-->

 <div class="calendarCTP">
 <?php get_sidebar(); ?>
 </div>  
 
			</div><!-- SECONDARY -->  
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
         
<?php get_footer(); ?>
