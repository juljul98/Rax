<?php 
   /**
    * Template Name: Services
    */
get_header(); ?>
      <div class="content-block ">
         <div class="container-bg with-bg with-bgcolor" data-style="background-image: url(http://wp.magnium-themes.com/thebuilt/thebuilt-1/wp-content/uploads/2016/05/photodune-14200515-working-in-team-m.jpg);background-color: #F4F4F4">
            <div class="container-bg-overlay">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-item-title">
                           <h1>Our services</h1>
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
                              <a property="item" typeof="WebPage" title="" href="/" class="home"><span property="name">Home</span></a>
                              <meta property="position" content="1">
                           </span>
                           &gt;
                           <span property="itemListElement" typeof="ListItem">
                              <span property="name">Our services</span>
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
                     <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                           <div class="vc_column-inner ">
                              <div class="wpb_wrapper">
                                 <div class="mgt-header-block clearfix text-center text-black wpb_content_element  mgt-header-block-style-1 mgt-header-texttransform-none  vc_custom_1464268014585">
                                    <h2 class="mgt-header-block-title">What We Offer</h2>
                                    <p class="mgt-header-block-subtitle">SERVICES</p>
                                    <div class="mgt-header-line"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                           <div class="vc_column-inner ">
                              <div class="wpb_wrapper">
                                 <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey"><span class="vc_sep_holder vc_sep_holder_l"><span  class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span  class="vc_sep_line"></span></span></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="vc_row wpb_row vc_row-fluid vc_custom_1464268355532">
                        
                        <?php
                                      
                                       $services = get_field('field_5d857ebd932d1', 11);
                                       foreach($services as $item) {
                                          
                        ?>
                        <div class="wpb_column vc_column_container vc_col-sm-6" style="min-height: 260px;">
                           <div class="vc_column-inner ">
                              <div class="wpb_wrapper">
                                 <div class="mgt-icon-box wpb_content_element wpb_animate_when_almost_visible wpb_appear mgt-icon-box-centered mgt-icon-fa mgt-icon-background mgt-icon-background-normal text-black ">
                                    <div class="mgt-icon-box-content" style="text-align: left;">
                                       <h5><?php echo $item['services_list_title']; ?></h5>
                                       <?php echo $item['services_list_description']; ?>
                                    </div>
                                    <div class="clearfix"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php
                           }
                        ?>
                        
                     </div>
                  
                  </article>
               </div>
            </div>
         </div>
      </div>
<?php get_footer(); ?>