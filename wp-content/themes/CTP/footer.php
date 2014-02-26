<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the id=main div and all content after
*
* @package Mapi
* 
*/
?>
 
</div><!-- #main .site-main -->
 
  
<div class="contact_ctp">
		<div class="wrap_ctp_contact">
        
        <div class="new-wrap">

            <div class="number_ctp">
                <div id="footer-sidebar1">
                    <?php
                    if(is_active_sidebar('footer-sidebar-1')){
                    dynamic_sidebar('footer-sidebar-1');
                    }
                    ?>
                </div>
            </div><!-- /number_ctp -->
        
            <div class="register_chimp_ctp">
                <?php // get_template_part( 'inc/custom-login' );// custom form (nav.php)  CUSTOM FORM LOGIN ?>
                <?php get_template_part( 'inc/chimp-login' ); ?>
            </div><!-- /Registration -->
            
            </div>

	</div><!-- /wrap_ctp_contact -->
</div><!-- /contact_ctp -->
 
    
    <div id="footer-sidebar-bottom">
    	<div class="twolastfootersidebar">
            <div id="footer-sidebar3">
            <?php
            if(is_active_sidebar('footer-sidebar-3')){
            dynamic_sidebar('footer-sidebar-3');
            }
            ?>
            </div>            <div id="footer-sidebar2">
            <?php
            if(is_active_sidebar('footer-sidebar-2')){
            dynamic_sidebar('footer-sidebar-2');
            }
            ?>
            </div>

		</div>
    </div>   
 
<footer id="colophon" class="site-footer" role="contentinfo">



    <div class="site-info">
        <?php do_action( 'shape_credits' ); ?>
        <a href="http://josegavidia.com/" title="<?php esc_attr_e( 'ALL RIGHTS ARE RESERVED', 'shape' ); ?>" rel="generator">
        <?php printf( __( 'All Rights are Reserved', 'shape' ), 'Shape', '<a href="http://josegavidia.com/" rel="designer">ThemeShaper</a>' ); ?>
		<?php echo "&copy; " . date('Y'); ?>
        <span class="sep"> | </span>
		<?php printf( __( 'COME TO PERU %s', 'shape' ), '' ); ?></a>
    </div><!-- .site-info -->



</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->
 
<?php wp_footer(); ?>
 

</body>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/js/jquery.flexslider.js" ></script>
		<script type="text/javascript">
			// Can also be used with $(document).ready()
			jQuery(window).load(function() {
			  jQuery('.flexslider').flexslider({
				animation: "slide"
			  });
			});
		</script>
        
  
        
</html>