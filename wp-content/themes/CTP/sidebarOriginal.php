<?php
/**
* The Sidebar containing the main widget areas.
*
* @package Mapi
* 
*/
?>
<div id="" class="widget-area" role="complementary">
    <?php do_action( 'before_sidebar' ); ?>
    

<?php while (have_posts()) : the_post(); ?>
<h2><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></h2>			
        <?php 
        $cat = 20;
        $args = array(
          'orderby' => 'date',
          'order' => 'ASC',
          'post_type' => 'post',
          'numberposts' => 3,
          'category__in' => array($cat)
          );
        $posts=get_posts($args);
        if ($posts) {
          foreach($posts as $post) {
            setup_postdata($post);
            ?><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            	
                <span class="day"><?php the_time('d'); ?></span>
                <span class="month"><?php the_time('M'); ?></span>
                
				<h3><?php the_title(); ?></h3></a>
            <?php }
          }
          
        ?>

<?php endwhile; ?>
 
</div><!-- #secondary .widget-area -->

<div id="tertiary" class="widget-area" role="supplementary">
     <?php dynamic_sidebar( 'sidebar-2' ); ?>
</div><!-- #tertiary .widget-area -->