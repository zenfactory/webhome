<!-- #header -->
<div id="header">
	<!-- #header-inside -->
    <div id="header-inside" class="container_12 clearfix">
    	<!-- #header-inside-left -->
        <div id="header-inside-left" class="grid_8">
            
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
            </div>
            <?php endif; ?>
            
        </div><!-- EOF: #header-inside-left -->
        
        <!-- #header-inside-right -->    
        <div id="header-inside-right" class="grid_4">

			<?php print render($page['search_area']); ?>

        </div><!-- EOF: #header-inside-right -->
    
    </div><!-- EOF: #header-inside -->

</div><!-- EOF: #header -->

<!-- #header-menu -->
<div id="header-menu">
	<!-- #header-menu-inside -->
    <div id="header-menu-inside" class="container_12 clearfix">
    
    	<div class="grid_12">
            <div id="navigation" class="clearfix">
            <?php if ($page['navigation']) :?>
            <?php print drupal_render($page['navigation']); ?>
            <?php else :
            if (module_exists('i18n_menu')) {
            $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
            } else {
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
            }
            print drupal_render($main_menu_tree);
            endif; ?>
            </div>
        </div>
        
    </div><!-- EOF: #header-menu-inside -->

</div><!-- EOF: #header-menu -->

<!-- #banner -->
<div id="banner">

	<?php print render($page['banner']); ?>
	
    <?php if (theme_get_setting('slideshow_display','corporateclean')): ?>
    
    <?php if ($is_front): ?>
    
    <!-- #slideshow -->
    <div id="slideshow">
    
        <!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
                <div style="float:right; padding:0 0 0 30px;">
					<iframe width="420" height="315" src="http://www.youtube.com/embed/0zDu0d5ScXM" frameborder="0" allowfullscreen></iframe>
                </div>
                <h2>Home For Artists</h2>
                <strong>Mashups</strong><br/>
                <em>Zenfactory</em><br/>
                <br/>
                <div style="display:block; padding:30px 0 10px 0;"><a class="more" href="http://www.zenfactory.org">Tell me more</a></div>
                <!--EOF:slider-item content-->
                
				</div>
            </div>
        </div>
        <!--EOF:slider-item-->

        <!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <div style="float:right; padding:0 0 0 30px;">
					<img style="height: 300px; width: 500px;" src="http://www.zenfactory.org/MARTYRCOVER.jpg" />
					<br />
 					<audio controls>
  						<source src="http://www.zenfactory.org/theMartyr.ogg" type="audio/ogg">
  						Your browser does not support the audio tag.
					</audio> 
                </div>
                <h2>Home For Better Artists</h2>
                <strong>Music</strong><br/>
                <em>Immortal Technique</em><br/>
                <br/>
                <div style="display:block; padding:30px 0 10px 0;"><a class="more" href="http://en.wikipedia.org/wiki/Immortal_Technique">Tell me more</a></div>
                
				</div>
            </div>
        </div>
        <!--EOF:slider-item-->

        <!--slider-item-->
		<!--
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                	<div style="float:right; padding:0 0 0 30px;">
                	<img class="masked" style="height: 300px; width: 500px;" src="http://76.74.157.43/images/veda.png"/>
                </div>
                <h2>Custom Software</h2>
                <strong>SaaS</strong><br/>
                <em>The Veda Project Inc.</em><br/>
                <br/>
				The Veda Project Inc is a 501c3 non profit organization providing free health worker training to the global health worker community.
                <div style="display:block; padding:30px 0 10px 0;"><a class="more" href="http://mvp.vedaproject.org">Tell me more</a></div>
                
				</div>
            </div>
        </div>
		-->
        <!--EOF:slider-item-->

        <!--slider-item-->
		<!--
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                <div style="float:right; padding:0 0 0 30px;">
                	<img class="masked" style="height: 300px; width: 500px;" src="http://76.74.157.43/images/veda.png"/>
                </div>
                <h2>Custom Software</h2>
                <strong>SaaS</strong><br/>
                <em>The Veda Project Inc.</em><br/>
                <br/>
				The Veda Project Inc is a 501c3 non profit organization providing free health worker training to the global health worker community.
                <div style="display:block; padding:30px 0 10px 0;"><a class="more" href="http://mvp.vedaproject.org">Tell me more</a></div>
                
				</div>
            </div>
        </div>
		-->
        <!--EOF:slider-item-->

        <!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                <div style="float:right; padding:0 0 0 30px;">
					<iframe width="300" height="100" style="position: relative; display: block; width: 300px; height: 100px;" src="http://bandcamp.com/EmbeddedPlayer/v=2/track=2177019595/size=grande/bgcol=FFFFFF/linkcol=4285BB/" allowtransparency="true" frameborder="0"><a href="http://thedelargecolections.bandcamp.com/track/cirocxcodeinexflow">CiRocxCodeinexFlow by Piff Mayne Payne</a></iframe>
                </div>
                <h2>Local Music</h2>
                <strong>Pif</strong><br/>
                <em>CiRocxCodeinexFlow</em><br/>
                <br/>
                <div style="display:block; padding:30px 0 10px 0;"><a class="more" href="http://http://thedelargecolections.bandcamp.com/">Tell me more</a></div>
                
				</div>
            </div>
        </div>
        <!--EOF:slider-item-->

        <!--slider-item-->
		<!--
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <div style="float:right; padding:0 0 0 30px;">
                <img class="masked" style="height: 300px; width: 500px;" src="http://76.74.157.43/hs.png"/>
                </div>
                <h2>Web Development</h2>
                <strong>SaaS</strong><br/>
                <em>Howell and Sabrin Law Firm</em><br/>
                <br/>
				Howell and Sabrin is a San Antonio, TX based law firm. 
                <div style="display:block; padding:30px 0 10px 0;"><a class="more" href="http://www.howellandsabrin.com">Tell me more</a></div>
				</div>
            </div>
        </div>
		-->
        <!--EOF:slider-item-->
    
    </div>
    <!-- EOF: #slideshow -->
    
    <!-- #slider-controls-wrapper -->
    <div id="slider-controls-wrapper">
        <div id="slider-controls" class="container_12">
            <ul id="slider-navigation">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
    </div>
    <!-- EOF: #slider-controls-wrapper -->
    
    <?php endif; ?>
    
	<?php endif; ?>  

</div><!-- EOF: #banner -->


<!-- #content -->
<div id="content">
	<!-- #content-inside -->
    <div id="content-inside" class="container_12 clearfix">
    
        <?php if ($page['sidebar_first']) :?>
        <!-- #sidebar-first -->
        <div id="sidebar-first" class="grid_4">
        	<?php print render($page['sidebar_first']); ?>
        </div><!-- EOF: #sidebar-first -->
        <?php endif; ?>
        
        <?php if ($page['sidebar_first'] && $page['sidebar_second']) { ?>
        <div class="grid_4">
        <?php } elseif ($page['sidebar_first'] || $page['sidebar_second']) { ?>
        <div id="main" class="grid_8">
		<?php } else { ?>
        <div id="main" class="grid_12">    
        <?php } ?>
            
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
        
        <?php if ($page['sidebar_second']) :?>
        <!-- #sidebar-second -->
        <div id="sidebar-second" class="grid_4">
        	<?php print render($page['sidebar_second']); ?>
        </div><!-- EOF: #sidebar-second -->
        <?php endif; ?>  

    </div><!-- EOF: #content-inside -->

</div><!-- EOF: #content -->

<!-- #footer -->    
<div id="footer">
	<!-- #footer-inside -->
    <div id="footer-inside" class="container_12 clearfix">
    
        <div class="footer-area grid_4">
        <?php print render($page['footer_first']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area grid_4">
        <?php print render($page['footer_second']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area grid_4">
        <?php print render($page['footer_third']); ?>
        </div><!-- EOF: .footer-area -->
       
    </div><!-- EOF: #footer-inside -->

</div><!-- EOF: #footer -->

<!-- #footer-bottom -->    
<div id="footer-bottom">

	<!-- #footer-bottom-inside --> 
    <div id="footer-bottom-inside" class="container_12 clearfix">
    	<!-- #footer-bottom-left --> 
    	<div id="footer-bottom-left" class="grid_8">
        
            <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('secondary-menu', 'links', 'clearfix')))); ?>
            
            <?php print render($page['footer']); ?>
            
        </div>
    	<!-- #footer-bottom-right --> 
        <div id="footer-bottom-right" class="grid_4">
        
        	<?php print render($page['footer_bottom_right']); ?>
        
        </div><!-- EOF: #footer-bottom-right -->
       
    </div><!-- EOF: #footer-bottom-inside -->
    
    <!-- #credits -->   
    <div id="credits" class="container_12 clearfix">
        <div class="grid_12">
        <p></p>
        </div>
    </div>
    <!-- EOF: #credits -->

</div><!-- EOF: #footer -->
