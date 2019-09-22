<?php
   /** 
    * Template Name: Contact Us
   */
   get_header();
?>
      <div class="content-block ">
         <div class="container-bg with-bgcolor" data-style="background-color: #F4F4F4">
            <div class="container-bg-overlay">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-item-title">
                           <h1>Contact us</h1>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="breadcrumbs-container-wrapper">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                           <!-- Breadcrumb NavXT 5.4.0 -->
                           <span property="itemListElement" typeof="ListItem">
                              <a property="item" typeof="WebPage" title="Go to TheBuilt." href="http://wp.magnium-themes.com/thebuilt/thebuilt-1" class="home"><span property="name">Home</span></a>
                              <meta property="position" content="1">
                           </span>
                           &gt; 
                           <span property="itemListElement" typeof="ListItem">
                              <span property="name">Contact us</span>
                              <meta property="position" content="2">
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="page-container container">
            <div class="row">
               <div class="col-md-12 entry-content">
                  <article>
                     <div class="vc_row wpb_row vc_row-fluid vc_custom_1464180624950">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                           <div class="vc_column-inner ">
                              <div class="wpb_wrapper">
                                 <div class="wpb_gmaps_widget wpb_content_element">
                                    <div class="wpb_wrapper">
                                       <div class="wpb_map_wraper" style="text-align: center;">
                                          <img src="<?php echo get_field('contact_map'); ?>" alt="">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-6">
                           <div class="vc_column-inner ">
                              <div class="wpb_wrapper">
                                 <div class="mgt-header-block clearfix text-left text-black wpb_content_element  mgt-header-block-style-1 mgt-header-texttransform-subheader  vc_custom_1464103235021">
                                    <h3 class="mgt-header-block-title">Contact With Us</h3>

                                    <div class="mgt-header-line"></div>
                                 </div>
                                 <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_left-to-right">
                                    <div class="wpb_wrapper">
                                       <p>If you’d like a free consultation, please start by completing the form:</p>
                                    </div>
                                 </div>
                                 <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
                              </div>
                           </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-6">
                           <div class="vc_column-inner ">
                              <div class="wpb_wrapper">
                                 <div class="mgt-header-block clearfix text-left text-black wpb_content_element  mgt-header-block-style-1 mgt-header-texttransform-subheader  vc_custom_1464169100638">
                                    <h3 class="mgt-header-block-title">Contact Information</h3>
                                    <div class="mgt-header-line"></div>
                                 </div>
                                 <div class="contact-details">
                                 <?php echo get_field('field_5d8560ea5caac', 8); ?>
                                 <?php echo get_field('field_5d85611c5caae', 8); ?>       
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </article>
               </div>
            </div>
         </div>
      </div>
<?php get_footer(); ?>