<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>New Web Project</title>
    </head>
    <body>
    <!--page-wrapper ermöglichen leichte horizontale Zentralisierung-->
    <div id="page-wrapper" class="wrapper">
      <!--inner page-wrapper ermöglichen grafische rahmen-->
      <div id="page-wrapper-inner" class="wrapper inner">
      
       <!--First content-zone-----------------------------------------> 
        <div id="last-top-zone" class="zone clearfix">
          <div id="last-top-zone-inner" class="zone-inner inner">
            <!--Branding -->
            <?php if($branding_extra || $logo || $site_name || $site_slogan): ?>
            <div id="branding" class="last-top branding">
              <div id="branding-inner" class="branding-inner inner">
                <?php if($site_name):?>
                <h1><?php print $site_name;?></h1>
                <?php endif;//site_name ?>
                
                <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
                <?php endif;//logo ?>
                
                <?php if($site_slogan): ?>
                <div id="site-slogan" class="branding last-top">
                  <div id="site-slogan-inner" class="branding-inner last-top-inner inner">
                    <?php print $site_slogan; ?>
                  </div><!--Fin site-slogan-inner-->
                </div><!--Fin site-slogan-->
                <?php endif;//site_slogan ?>

                <?php if($branding_extra):?>
                <div id="branding-extra-block" class="branding last-top region-0 block-region">
                  <div id="branding-extra-block-inner" class="branding-inner last-top-inner region-0 block-inner inner">
                    <?php print $branding_extra;?>
                  </div><!--Fin branding-extra-block-inner-->
                </div><!--Fin branding-extra-block-->
                <?php endif;//branding_extra ?>
                
                <?php if($mission): ?>
                <div id="mission" class="branding last-top">
                  <div id="mission-inner" class="branding-inner last-top-inner inner">
                    <?php print($mission): ?>
                  </div><!--Fin mission-inner-->
                </div><!--Fin mission-->
                <?php endif;//mission ?>
                
              </div><!--Fin branding-inner-->
            </div><!--Fin branding-->
            <?php endif;//branding_extra logo site_name site_slogan?>            
          </div><!--Fin last-top-zone-inner-->                    
        </div><!--Fin last-top-zone-->
       <!--Finish first content-zone------------------------------------>
        
      
       <!--Main content-zone-------------------------------------------->
        <div id="main-zone" class="zone clearfix">
          <div id="main-zone-inner" class="zone-inner inner">
                    
            <div id="main-content" class="main content">
              <div id="main-content-inner" class="inner content-inner">
              
                <?php if($content_top):?>
                <div id="content-top" class="content block-region region-0">
                  <div id="content-top-inner" class="content-inner block-inner region-0-inner inner">
                    <?php print $content_top;?>
                  </div><!--Fin content-top-inner-->
                </div><!--Fin content-top-->
                <?php endif;//content-top ?>
                
                <div id="content">
                  <div id="content-inner">
                    <?php print $content; ?>
                  </div><!--Fin content-inner-->
                </div><!--Fin content-->
                
                <?php if($content_bottom): ?>
                <div id="content-bottom" class="content block-region region-100">
                   <div id="content-bottom-inner" class="content-inner block-inner region-100-inner inner">
                     <?php print $content_bottom; ?>
                   </div><!--content-bottom--inner-->
                </div><!--content-bottom-->
                <?php endif;//content_bottom ?>
              
              </div><!--Fin main-content-inner-->
            </div><!--Fin main-content-->
          
          <?php if($main_block_1 || $main_block2: ?>
              
              <?php if($main_block_1): ?>
              <div id="main-block-1" class="main block-region region-1">
                <div id="main-block-1-inner" class="block-inner region-1-inner inner main-inner">
                  <?php print $main_block_1;?>
                </div><!--main-block-1-inner-->
              </div><!--main-block-1-->
              <?php endif;//left ?>
              
              <?php if($main_block_2): ?>
              <div id="main-block-2" class="main block-region region-2">
                <div id="main-block-2-inner" class="block-inner region-2-inner inner main-inner">
                  <?php print $main_block_2;?>
                </div><!--main-block-2-inner-->
             </div><!--main-block-2-->
             <?php endif;//right ?>
             
          <?php endif;//left right ?>
          
           
         </div><!--Fin main-zone-inner-->
       </div><!--Fin main-zone-->
       <!--Finish main content-zone--------------------------------------->
      
      <!--Navigation-----------------------------------------------------> 
       <?php if($navigation || $primary_links): ?>
       <div id="navbar-1" class="navigation primary-links clearfix">
        <div id="navbar-1-inner" class="navigation-inner primary-links-inner">
              
          <?php if($navigation): ?>
          <div id="navigation-region" class="navigation block-region nav-region">
            <div id="navigation-region-inner" class="navigation-inner inner block-inner nav-region-inner">
              <?php print $navigation; ?>
            </div><!--Fin navigation-innerS-->
          </div><!--Fin navigation-->
          <?php endif;//navigation ?>
              
          <?php if($primary_links): ?>
          <div id="primary-links" class="navigation primary-links">
            <div id="primary-links-inner" class="navigation-inner primary-links-inner inner">
              <?php print theme(array('links__system_main_menu', 'links'), $primary_links,
                array(
                  'id' => 'main-menu',
                  'class' => 'links clearfix',
                ),
            
               array(
                  'text' => t('Main menu'),
                  'level' => 'h2',
                  'class' => 'element-invisible',
                ));
              ?>
            </div><!--Fin primary-links-inner-->
          </div><!--Fin primary-links-->
          <?php endif;//primary-links ?>
          
        </div><!--navbar-1-inner-->
      </div><!--navbar-1-->
      <?php endif;//navigation primary_links ?>        
      
      <?php if($sec_navigation || $secondary_links): ?>
        
        <?php if($sec_navigation): ?>
        <div id="sec-navigation-region" class="navigation secondary-links clearfix">
          <div id="sec-navigation-inner" class="navigation-inner secondary-links-inner block-inner inner">
            <?php print $sec_navigation; ?>
          </div><!--sec-navigation-inner-->
         </div><!--sec-navigation-->
         <?php endif;//sec_navigation ?>
         
         <?php if(secondary_links): ?>
         <div id="secondary-links" class="navigation secondary-links">
           <div id="secondary-links-inner" class="navigation-inner secondary-links-inner">
             
            <?php print theme(array('links__system_secondary_menu', 'links'), $secondary_links,
              array(
              'id' => 'secondary-menu',
              'class' => 'links clearfix',
             ),
             array(
               'text' => t('Secondary menu'),
               'level' => 'h2',
               'class' => 'element-invisible',
             ));
            ?>
           </div><!--secondary-links-inner-->
         </div><!--secondary-links-->
         <?php endif;//secondary_links ?>
         
       <?php endif;//sec_navigation secondary-links ?>
       <!--Finish Navigation---------------------------------------------------------->
          
       <!--Last content-zone---------------------------------------------->
       <?php if($last_bottom_1): ?>
       <div id="last-bottom-zone" class="zone clearfix">
         <div id="last-bottom-zone-inner" class="zone-inner inner">
           <div id="last-bottom-block-1" class="last-bottom block-region region-1">
             <div id="last-bottom-block-1-inner" class="block-inner region-1-inner inner last-bottom-inner">
               <?php print $last_bottom_1; ?>
             </div><!--Fin last-bottom-block-1-inner-->
           </div><!--Fin last-bottom-block-1-->
         </div><!--Fin last-bottom-zone-inner-->
       </div><!--Fin last-bottom-zone-->
       <?php endif; ?>
       <!--Finish last content-zone-------------------------------------->
      
      </div><!--Fin page-wrapper-inner-->
    </div><!--Fin page-wrapper-->
    
    <?php print $closure; ?>

    </body>
</html>
