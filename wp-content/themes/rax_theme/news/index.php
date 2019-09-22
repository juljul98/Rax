<?php 
/** Template Name: News */
get_header();
?>
      <div class="content-block">
         <div class="container-bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="page-item-title">
                        <h1>News</h1>
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
                              <span property="name">News</span>
                              <meta property="position" content="2">
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-9">
			   <?php 
                        $args = array( 
                           'post_type' => 'post'
                        );
                        $the_query = new WP_Query( $args );
                        if($the_query->have_posts()) {
							while($the_query->have_posts()) { 
								$the_query->the_post();   
                ?>
                  <div class="content-block blog-post clearfix">
                     <article id="post-2479" class="post-2479 post type-post status-publish format-standard has-post-thumbnail hentry category-construction-consultant tag-architecture tag-best tag-building tag-construction tag-house tag-interior tag-renovation">
                        <div class="post-content-wrapper">
                           <div class="blog-post-thumb text-center">
                              <a href="<?php the_permalink(); ?>" rel="bookmark">
							  	<img width="1170" height="660" src="<?php the_post_thumbnail_url()?>" class="attachment-thebuilt-blog-thumb size-thebuilt-blog-thumb wp-post-image" alt="<?php the_title(); ?>" />
							  </a>
							  <?php 
                                $category = get_the_category(); 
                                foreach($category as $item) {
							  ?>
							  	<div class="post-categories"><a href="<?php echo site_url().'/category/'.$item->slug; ?>" rel="category tag"><?php echo  $item->name ?></a></div>
                              <?php 
                                }
                              ?>
                           </div>
                           <div class="post-content">
                              <h2 class="entry-title post-header-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                              <!-- .entry-content -->
                              <div class="entry-content">
							    <?php get_excerpt(the_content(), 20)?>
                                 <p><a class="btn more-link mgt-button mgt-style-solid-invert mgt-size-small" href="<?php the_permalink(); ?>">Read more</a></p>
                              </div>
                              <!-- // .entry-content -->
                           </div>
                        </div>
                     </article>
				  </div>
				  <?php
							}
                            wp_reset_postdata();
                        }
                   ?>

                  <nav role="navigation" id="nav-below" class="navigation-paging">
                     <div class="row">
                        <div class="col-md-12">
                           
                        </div>
                     </div>
                  </nav>
                  <!-- #nav-below -->
               </div>
               <div class="col-md-3 main-sidebar sidebar">
                  <ul id="main-sidebar">

                     <li id="nav_menu-8" class="widget widget_nav_menu">
                        <h2 class="widgettitle">Categories</h2>
                        <div class="menu-blog-menu-container">
                           <ul id="menu-blog-menu" class="menu">
						   <?php
								   $categories = get_categories();
								   foreach($categories as $item) {
						   ?>
                              <li class="menu-item menu-item-type-taxonomy"><a href="<?php echo site_url(). '/category/'. $item->slug; ?>"><?php echo $item->name; ?></a></li>
							<?php
							}
							?>
                           </ul>
                        </div>
                     </li>
                    
                     <li id="text-15" class="widget widget_text">
                        <div class="textwidget">
                           <style scoped='scoped'>.mgt-promo-block-79292028663.mgt-promo-block.darken .mgt-promo-block-content {background-color: rgba(255,255,255,0.73)!important;}.mgt-promo-block-79292028663.mgt-promo-block.animated:hover .mgt-promo-block-content {background-color: rgba(255,255,255,0.73)!important;}</style>
                           <div class="mgt-promo-block animated black-text cover-image text-size-normal darken mgt-promo-block-79292028663 wpb_content_element" data-style="background-image: url(http://wp.magnium-themes.com/thebuilt/thebuilt-1/wp-content/uploads/2016/03/photodune-5445260-engineer-at-a-construction-site-m-1.jpg);background-repeat: no-repeat;width: 100%; height: 200px;">
                              <div class="mgt-promo-block-content va-top">
                                 <div class="mgt-promo-block-content-inside">
                                    <h3>Do you have any
                                       questions?
                                    </h3>
                                    <div class="mgt-button-wrapper mgt-button-wrapper-align-left mgt-button-wrapper-display-newline mgt-button-top-margin-enable"><a class="btn hvr-bounce-to-right mgt-button mgt-style-solid-invert mgt-size-normal mgt-align-left mgt-display-newline mgt-text-size-small mgt-button-icon-position-left mgt-text-transform-uppercase " href="<?php echo get_post(18)->post_name; ?>">Contact us</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li id="text-13" class="widget widget_text">
                        <h2 class="widgettitle">Our Brochures</h2>
                        <div class="textwidget">
						<?php
								$brochure = get_field('field_5d8558c612c59', 8);
								foreach($brochure as $item) {
							?>
                           <div class="widget-download-link-wrapper">
                              <div class="widget-download-icon"><i class="fa fa-file-pdf-o"></i></div>
                              <div class="widget-download-details">
                                 <div class="widget-download-title"><a href="<?php echo $item['brochure_file']; ?>"><?php echo $item['brochure_title']; ?></a></div>
                                 <div class="widget-download-subtitle"><?php echo $item['brochure_sub_title']; ?></div>
                              </div>
						   </div>
						   <?php
								}
							?>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
 <?php get_footer(); ?>