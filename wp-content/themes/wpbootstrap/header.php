  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>

  <div class="navbar navbar-inverse navbar-fixed-top">
  
		<hgroup>
		<div id="site_logo"  class="eight columns row">
        <h1  class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', '' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory');?>/images/ctp_logo.png" /></a></h1>
         <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

		</div>

                <div class="ctp-search-chanels">
                    
                <!-- AddThis Follow BEGIN -->
                    <div class="addthis_toolbox addthis_32x32_style addthis_default_style">
                        <a class="addthis_button_facebook_follow" addthis:userid="cometoperu"><img src="http://cometoperu.info/wp-content/themes/CTP/images/fab_icon.png" border="0" alt="F" /></a>
                        <a class="addthis_button_twitter_follow" addthis:userid="come_toperu"><img src="http://cometoperu.info/wp-content/themes/CTP/images/twi_icon.png" border="0" alt="F" /></a>
                        <a class="addthis_button_instagram_follow" addthis:userid="cometoperu"><img src="http://cometoperu.info/wp-content/themes/CTP/images/ig_icon.png" border="0" alt="F" /></a>
                    </div>
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5269a2a46b80bc5a"></script>
                <!-- AddThis Follow END -->
            
                    <div id="search" class="widget widget_search">
                        <?php get_search_form(); ?>
                    </div>
                
                </div><!-- .ctp-search-chanels -->
            
		</hgroup>  
  
  
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="nav-collapse collapse">
          <ul class="nav">

              <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <div class="container">