<?php
/**
* The Sidebar containing the main widget areas.
*
* @package Mapi
* 
*/
?>
<div id="secondary" class="widget-area" role="complementary">
    <?php do_action( 'before_sidebar' ); ?>
    
<h2><?php
$cat=20;
$yourcat = get_category($cat);
if ($yourcat) {
echo $yourcat->name;
}
?>	</h2>	
            <div class="calendar-wrap">
        <?php 
        $cat = 20;
        $args = array(
          'orderby' => 'date',
          'order' => 'ASC',
          'post_type' => 'post',
          'numberposts' => 3,
		  'post_status' => 'future',
          'category__in' => array($cat)
          );
        $posts=get_posts($args);
        if ($posts) {
          foreach($posts as $post) {
            setup_postdata($post);
            ?>
			<div class="ctpcalendar">
                    <div class="bordercalendar">
                        <div class="dateCalendar">
                            <span class="day"><?php the_time('d'); ?>
                            </span>
                            <span class="month"><?php the_time('M'); ?>
                            </span>
                        </div>
                            <span class="exc-calen"><?php echo excerpt(10); ?></span>
                            <div class="read-calen">
                            <span class="readmorecal"><a href="<?php the_permalink();?>">Find out more</a></span>
                    		</div>
                    </div> 
			</div>
            <?php }
          }
          
        ?>
            </div><!-- calendar-wrap -->

</div><!-- #secondary .widget-area -->

<div id="tertiary" class="widget-area" role="supplementary">
     <?php dynamic_sidebar( 'sidebar-2' ); ?>
</div><!-- #tertiary .widget-area -->