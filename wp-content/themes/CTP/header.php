<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="main">
 * @package Shape
 * @since Shape 2.0

 */
?>

<!DOCTYPE html>

<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title>
<?php
/*
* Print the <title> tag based on what is being viewed.
*/

global $page, $paged;

wp_title( '|', true, 'right' );
 
// Add the blog name.
bloginfo( 'name' );

// Add the blog description for the home/front page.
$site_description = get_bloginfo( 'description', 'display' );

if ( $site_description && ( is_home() || is_front_page() ) )

echo " | $site_description";

// Add a page number if necessary:
if ( $paged >= 2 || $page >= 2 )

echo ' | ' . sprintf( __( 'Page %s', 'shape' ), max( $paged, $page ) );

?>
</title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/skeleton.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/flexslider.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/style.css">
<link href='http://fonts.googleapis.com/css?family=Karla:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>


<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5302a64231904cfd"></script>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

</head>
 <body <?php body_class(); ?>>

<div id="page" class="hfeed site">
<div class="totalHeader">

	<header class="site-header" role="banner">

		<hgroup>
		<div id="site_logo">
        <h1  class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', '' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory');?>/images/ctp_logo.png" /></a></h1>
         <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

                <div class="ctp-search-chanels">
                <!-- AddThis Follow BEGIN -->
                    <div class="addthis_toolbox addthis_32x32_style addthis_default_style">
                        <a class="addthis_button_facebook_follow" addthis:userid="cometoperu"><img src="http://cometoperu.info/wp-content/themes/CTP/images/fab_icon.png" border="0" alt="F" /></a>
                        <a class="addthis_button_twitter_follow" addthis:userid="Come_toPeru" href="http://www.twitter.com/Come_toPeru"><img src="http://cometoperu.info/wp-content/themes/CTP/images/twi_icon.png" border="0" alt="F" /></a>
                        <a class="addthis_button_instagram_follow" addthis:userid="cometoperu"><img src="http://cometoperu.info/wp-content/themes/CTP/images/ig_icon.png" border="0" alt="F" /></a>
                        <div id="search" class="widget widget_search">
                              <?php get_search_form(); ?>
                        </div>
                    </div>

                <!-- AddThis Follow END -->
                </div><!-- .ctp-search-chanels -->
            
		</hgroup>
	</header><!-- .site-header -->

<div id="masthead">
        <nav role="navigation" class="site-navigation main-navigation">
             <h1 class="assistive-text"><?php _e( 'Menu', 'shape' ); ?></h1>

             <div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'shape' ); ?>"><?php _e( 'Skip to content', 'shape' ); ?></a></div>

             <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav><!-- .site-navigation .main-navigation -->
</div> <!-- #masthead  -->
</div><!-- .totalHeader -->
