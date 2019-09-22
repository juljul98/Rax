    <div class="container-fluid container-fluid-footer">
         <div class="row">
            <div class="footer-sidebar-2-wrapper">
               <div class="footer-sidebar-2 sidebar container footer-container">
                  <ul id="footer-sidebar-2" class="clearfix">
                     <li id="text-2" class="widget widget_text">
                        <h2 class="widgettitle">About company</h2>
                        <div class="textwidget">
                           <p><a href="/"><img width="120" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt=""></a></p>
                           <p class="text-color-white"><?php echo get_field('field_5d855f7f5caaa', 8); ?></p>
                        </div>
                     </li>
                     <li id="nav_menu-2" class="widget widget_nav_menu">
                        <h2 class="widgettitle">Information</h2>
                        <div class="menu-footer-sidebar-menu-container">
                        <?php
                           wp_nav_menu($menu_args);
                        ?>
                        </div>
                     </li>
                     <li id="text-3" class="widget widget_text">
                        <h2 class="widgettitle">Contact info</h2>
                        <div class="textwidget">
                           <p class="text-color-white"><?php echo get_field('field_5d8560c85caab', 8); ?></p>
                           <?php echo get_field('field_5d8560ea5caac', 8); ?>
                        </div>
                     </li>
                     <li id="text-4" class="widget widget_text">
                        <h2 class="widgettitle">Company support</h2>
                        <div class="textwidget">
                           <p class="text-color-white"><?php echo get_field('field_5d85610a5caad', 8); ?></p>
                           <?php echo get_field('field_5d85611c5caae', 8); ?>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
            <footer>
               <div class="container">
                  <div class="row">
                     <div class="col-md-6 footer-copyright">
                        2019 &copy; RAX Engineering & Industrial Supply
                     </div>
                  </div>
               </div>
               <a id="top-link" href="#top"><span>Top</span></a>
            </footer>
         </div>
      </div>
      <nav id="offcanvas-sidebar-nav" class="st-sidebar-menu st-sidebar-effect-2">
         <div class="st-sidebar-menu-close-btn"><i class="fa fa-times"></i></div>
         <div class="offcanvas-sidebar sidebar">
         <br>
         <br>
            <h2 class="widgettitle">Our Brochures</h2>
            <ul id="offcanvas-sidebar" class="clearfix">
               <?php
                  $brochure = get_field('field_5d8558c612c59', 8);
                  foreach($brochure as $item) {
               ?>
                  <li class="widget widget_text">
                     <div class="textwidget">
                        <div class="widget-download-link-wrapper">
                           <div class="widget-download-icon"><i class="fa fa-file-pdf-o"></i></div>
                           <div class="widget-download-details">
                              <div class="widget-download-title"><a href="<?php echo $item['brochure_file']; ?>"><?php echo $item['brochure_title']; ?></a></div>
                              <div class="widget-download-subtitle"><?php echo $item['brochure_sub_title']; ?></div>
                           </div>
                        </div>
                     </div>
                  </li>
               <?php
                  }
               ?>
            </ul>
         </div>
      </nav>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/themes/thebuilt/js/bootstrap.minb12b.js?ver=3.1.1'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/themes/thebuilt/js/easing4e44.js?ver=1.3'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/themes/thebuilt/js/jquery.parallaxc358.js?ver=1.1.3'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/themes/thebuilt/js/select2/select2.min9d52.js?ver=3.5.1'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/themes/thebuilt/js/owl-carousel/owl.carousel.min3ba1.js?ver=1.3.3'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/themes/thebuilt/js/jquery.nanoscroller.min6b00.js?ver=3.4.0'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/themes/thebuilt/js/jquery.mixitup.mine7f3.js?ver=2.1.7'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/themes/thebuilt/js/TweenMax.min5152.js?ver=1.0'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/themes/thebuilt/js/jquery.superscrollorama5152.js?ver=1.0'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/themes/thebuilt/js/template62ea.js?ver=1.2'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min0147.js?ver=4.12'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.min0147.js?ver=4.12'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/plugins/js_composer/assets/lib/vc_accordion/vc-accordion.min0147.js?ver=4.12'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/plugins/js_composer/assets/lib/vc-tta-autoplay/vc-tta-autoplay.min0147.js?ver=4.12'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/plugins/js_composer/assets/lib/bower/chartjs/Chart.min0147.js?ver=4.12'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/plugins/js_composer/assets/lib/vc_line_chart/vc_line_chart.min0147.js?ver=4.12'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/themes/thebuilt/js/jquery.appear62d0.js?ver=4.5.3'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/themes/thebuilt/js/jquery.countTo62d0.js?ver=4.5.3'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/wp-content/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.min0147.js?ver=4.12'></script>
      <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/custom.js'></script>
      <?php wp_footer(); ?>
   </body>
</html>