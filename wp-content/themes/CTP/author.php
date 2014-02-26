<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>
<?php
// call the author info http://lorelle.wordpress.com/2006/05/06/using-author-template-tags-outside-of-the-wordpress-loop/
if(isset($_GET['author_name'])) :
$curauth = get_userdatabylogin(get_the_author_login());
else :
$curauth = get_userdata(intval($author));
endif;
?>
<div class="slider-bg">
    <div class="container">
    </div>
</div>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="secondary">
				<div class="top-cat-title">
                <h1>
<span> Articles by </span> <?php echo $curauth->display_name; ?>
			</h1>
		</div>
<div class="cities">
    <div id="authorinfo">
    <!-- <p><strong>Author Website:</strong> <a href="<?php // $curauth->user_url; ?>"><?php // echo $curauth->user_url; ?></a></p> -->
    <p><strong>Author Email:</strong> <a href="mailto:<?php echo antispambot($curauth->user_email); ?>">Contact Author</a></p><br />
    <p><strong>Author Bio:</strong> <?php echo $curauth->description; ?></p>
    </div>


                
<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = array(
	'posts_per_page' => 7,
	'paged' => $paged,
);

$the_query = new WP_Query( $args );
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<article class="all-cats">

 <?php if ( has_post_thumbnail() ) { ?>
	<div class="img-all-cats">
  	<?php the_post_thumbnail('category-cities'); ?>	
     </div>   				<?php }; ?>
	<div class="info-all-cats">
            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3> 
            <time class="jo_time"><?php the_time('F jS, Y'); ?></time>
        <div class="right-all-cat">
            <?php the_excerpt(); ?>
            <a class="moretag" href="<?php the_permalink() ?>"> read more</a>
        </div>
	</div>    
    
</article>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
    
    <div class="pagination-jo">

    <?php wp_pagenavi(); ?>

    </div>

</div><!-- cities-->


 <div class="calendarCTP">
 <?php get_sidebar(); ?>
 </div>  
 
			</div><!-- SECONDARY -->  
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
         
<?php get_footer(); ?>
