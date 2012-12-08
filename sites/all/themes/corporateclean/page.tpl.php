<!-- Header. -->
<div id="header">

    <div id="header-inside">
    
        <div id="header-inside-left">
            
            <?php if ($logo): ?>
            <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
            <?php endif; ?>
     
            <?php if ($site_name || $site_slogan): ?>
            <div class="clearfix">
            <?php if ($site_name): ?>
            <span id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></span>
            <?php endif; ?>
            <?php if ($site_slogan): ?>
            <span id="slogan"><?php print $site_slogan; ?></span>
            <?php endif; ?>
            </div><!-- /site-name-wrapper -->
            <?php endif; ?>
            
        </div>
            
        <div id="header-inside-right">
		<?php print render($page['search_area']); ?>    
        </div>
    
    </div><!-- EOF: #header-inside -->

</div><!-- EOF: #header -->

<!-- Header Menu. -->
<div id="header-menu">

<div id="header-menu-inside">
    <?php 
	if (module_exists('i18n_menu')) {
	$main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
	} else {
	$main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
	}
	print drupal_render($main_menu_tree);
	?>
</div><!-- EOF: #header-menu-inside -->

</div><!-- EOF: #header-menu -->

<!-- Banner. -->
<div id="banner">

	<?php print render($page['banner']); ?>
	
    <?php if (theme_get_setting('slideshow_display','corporateclean')): ?>
    
    <?php if ($is_front): ?>
    
    <!--slideshow-->
    <div id="slideshow">
    
        <!--slider-item-->
        <div class="slider-item">
            <div class="content">
                
                <!--slider-item content-->
                <div style="float:left; padding:0 30px 0 0;">
                <img height="250px" class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/images/portfolio/incarexperts.jpg"/>
                </div>
                <h2>Incar Experts</h2><br/>
                <b>Technology Used : </b><em>PHP, Mysql, Html, Jquery</em>
                <br/>
                <b>Description : </b>It’s a service, which is used to search the location in db on the basis of zipcode entered, and miles selected. Used Google Map for displaying the locations, directions from the zipcode entered to the selected location from the results. 
                <div style="display:block; padding:30px 0 10px 0;"><a class="more" target="_blank" href="http://www.incarexperts.com/">View Website</a></div>
                <!--EOF:slider-item content-->
                
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content">
            
                <!--slider-item content-->
                <div style="float:right; padding:0 0 0 30px;">
                <img height="250px" class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/images/portfolio/sendwordnow.jpg"/>
                </div>
                <h2>Send Word Now</h2>
                <br/>
				<b>Technology Used : </b><em>Drupal / Php / Mysql / Javascript / Paypal / Jquery</em><br/>
				
                <b>Description : </b>Website has integrated with a message sending gateway to send the sms. The website has the segments where owner of the website can manage the case studies, white papers webinars etc. It's full flashed content management system with sms gateway.
                <div style="display:block; padding:30px 0 10px 0;"><a class="more" target="_blank" href="http://www.sendwordnow.com">View Website</a></div>
                <!--EOF:slider-item content-->
            
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content">
                
                <!--slider-item content-->
                <div style="float:left; padding:0 30px 0 0;">
                <img height="250px" class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/images/portfolio/aryanflorist.jpg"/>
                </div>
                <h2>Ironflorist</h2><br/>
                <b>Technology Used : </b><em>Magento / PHP / Jquery / Web services to convert currency</em>
                <br/>
                <b>Description : </b>Website sells flowers and choclate hampres. All shopping cart functionality and currency converter is managed using Magento. 
                <div style="display:block; padding:30px 0 10px 0;"><a class="more" target="_blank" href="http://aryanflorist.com">View Website</a></div>
                <!--EOF:slider-item content-->
                
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content">
            
                <!--slider-item content-->
                <div style="float:right; padding:0 0 0 30px;">
                <img height="250px" class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/images/portfolio/kitd.jpg"/>
                </div>
                <h2>Kit Digital</h2>
                <br/>
				<b>Technology Used : </b><em>Flex / Php / Flash Media Server / Mysql / Jquery</em><br/>
				
                <b>Description : </b>Website have functionality for multimedia content distribution. for example One can share the videos with different other users of website.Flash multimedia server is used for live streaming of videos
                <div style="display:block; padding:30px 0 10px 0;"><a class="more" target="_blank" href="http://www.kitd.com/">View Website</a></div>
                <!--EOF:slider-item content-->
            
            </div>
        </div>
        <!--EOF:slider-item-->
    
    </div>
    <!--EOF:slideshow-->
    
    <!--slider-controls-wrapper-->
    <div id="slider-controls-wrapper">
        <div id="slider-controls">
            <ul id="slider-navigation">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
    </div>
    <!--EOF:slider-controls-wrapper-->
    
    <?php endif; ?>
    
	<?php endif; ?>  

</div><!-- EOF: #banner -->


<!-- Content. -->
<div id="content">

    <div id="content-inside" class="inside">
    
        <div id="main">
            
            <?php if (theme_get_setting('breadcrumb_display','corporateclean')): print $breadcrumb; endif; ?>
            
            <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
       
            <?php if ($messages): ?>
            <div id="console" class="clearfix">
            <?php print $messages; ?>
            </div>
            <?php endif; ?>
     
            <?php if ($page['help']): ?>
            <div id="help">
            <?php print render($page['help']); ?>
            </div>
            <?php endif; ?>
            
            <?php if ($action_links): ?>
            <ul class="action-links">
            <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
            
			<?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1><?php print $title ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            
            <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
            
            <?php print render($page['content']); ?>
            
            <?php print $feed_icons; ?>
            
        </div><!-- EOF: #main -->
        
        <div id="sidebar">
             
            <?php print render($page['sidebar_first']); ?>

        </div><!-- EOF: #sidebar -->

    </div><!-- EOF: #content-inside -->

</div><!-- EOF: #content -->

<!-- Footer -->    
<div id="footer">

    <div id="footer-inside">
    
        <div class="footer-area first">
        <?php print render($page['footer_first']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area second">
        <?php print render($page['footer_second']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area third">
        <?php print render($page['footer_third']); ?>
        </div><!-- EOF: .footer-area -->
       
    </div><!-- EOF: #footer-inside -->

</div><!-- EOF: #footer -->

<!-- Footer -->    
<div id="footer-bottom">

    <div id="footer-bottom-inside">
    
    	<div id="footer-bottom-left">
        
            <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('secondary-menu', 'links', 'clearfix')))); ?>
            
            <?php print render($page['footer']); ?>
            
        </div>
        
        <div id="footer-bottom-right">
        
        	<?php print render($page['footer_bottom_right']); ?>
        
        </div><!-- EOF: #footer-bottom-right -->
       
    </div><!-- EOF: #footer-bottom-inside -->

</div><!-- EOF: #footer -->