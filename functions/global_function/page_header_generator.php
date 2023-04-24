<?php

/**
 * Blog Pageheader Generator
 */


function codeweber_pageheader_generator($title, $subtitle, $type, $background_url, $bg_color, $paralax, $breadcrumbs, $text_color, $class_container, $class_content, $angle_class)
{
   global $codeweber;
   if ($title == NULL) {
      $title =  codeweber_page_title();
   }
   if ($type == 'type_5' || $type == 'Disable') {
      $codeweber['page_settings']['container_class'] = ' pb-23 pb-md-25';
      $codeweber['page_settings']['content_class'] = ' mt-n18 mt-md-n20 mt-lg-n21 position-relative';
   } elseif ($type == 'type_7' || $type == 'Disable') {
      $codeweber['page_settings']['container_class'] = ' pb-14 pb-md-16';
      $codeweber['page_settings']['content_class'] = ' mt-n20';
   } else {
      $codeweber['page_settings']['container_class'] = ' pt-14 pb-12 pt-md-14 pb-md-14';
      $codeweber['page_settings']['content_class'] = NULL;
   }
   if ($background_url) {
      $section_open = '<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay overflow-hidden" data-image-src="' . $background_url . '">';
   } else {
      $section_open = '<section class="wrapper ' . $bg_color . '">';
   }

   $header_style = $codeweber['page_settings']['header_style'];

   if ($type == 'type_1') { ?>
      <?php echo $section_open; ?>
      <div class="container py-10 py-md-14">
         <div class="row">
            <div class="col-md-8 col-lg-7 col-xl-8 col-xxl-8">
               <h1 class="display-1 mb-3 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
               <p class="lead fs-lg pe-lg-15 pe-xxl-12 <?php echo $text_color; ?>"><?php echo $subtitle; ?></p>
               <?php
               if ($breadcrumbs == 'true') {
                  codeweber_breadcrumbs(NULL, $text_color);
               }
               codeweber_meta_blog(); // Blog Meta Data
               ?>
            </div>
            <!-- /column -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
      </section>
   <?php
   } elseif ($type == 'type_2') { ?>
      <?php echo $section_open; ?>
      <div class="container py-13 py-md-17 text-center">
         <div class="row">
            <div class="col-lg-10 col-xxl-8 mx-auto">
               <h1 class="display-1 mb-1  <?php echo $text_color; ?>"><?php echo $title; ?></h1>
               <?php
               if ($breadcrumbs == 'true') {
                  codeweber_breadcrumbs(NULL, $text_color);
               }
               codeweber_meta_blog(); // Blog Meta Data
               ?>
            </div>
            <!-- /column -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
      </section>
   <?php
   } elseif ($type == 'type_3') { ?>
      <?php echo $section_open; ?>
      <div class="container py-10 py-md-14 text-center">
         <div class="row">
            <div class="col-md-8 col-lg-7 col-xl-7 col-xxl-8 mx-auto">
               <h1 class="display-1 mb-3 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
               <p class="lead fs-lg px-lg-10 px-xxl-8 <?php echo $text_color; ?>"><?php echo $subtitle; ?></p>
               <?php
               if ($breadcrumbs == 'true') {
                  codeweber_breadcrumbs(NULL, $text_color);
               }
               codeweber_meta_blog(); // Blog Meta Data
               ?>
            </div>
            <!-- /column -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
      </section>
   <?php
   } elseif ($type == 'type_4') { ?>
      <?php echo $section_open; ?>
      <div class="container py-10 py-md-14">
         <div class="row">
            <div class="col-lg-10 col-xxl-8">
               <h1 class="display-1 mb-0 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
               <?php
               if ($breadcrumbs == 'true') {
                  codeweber_breadcrumbs(NULL, $text_color);
               }
               codeweber_meta_blog(); // Blog Meta Data
               ?>
            </div>
            <!-- /column -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
      </section>
   <?php
   } elseif ($type == 'type_5') { ?>
      <?php echo $section_open; ?>
      <?php if ($header_style == 'transparent') { ?>
         <div class=" container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
         <?php
      } else { ?>
            <div class="container pt-10 pb-18 pb-md-20 pt-md-14 pb-lg-21 text-center">
            <?php } ?>
            <div class="row">
               <div class="col-lg-8 mx-auto mb-11">
                  <div class="h1 fs-15 text-uppercase mb-3 <?php echo $text_color; ?>"><?php echo $subtitle; ?></div>
                  <h1 class="display-1 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
                  <?php
                  if ($breadcrumbs == 'true') {
                     codeweber_breadcrumbs(NULL, $text_color);
                  }
                  codeweber_meta_blog(); // Blog Meta Data
                  ?>
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
            </div>
            <!-- /.container -->
            </section>
         <?php
      } elseif ($type == 'type_6') {
         ?>
            <?php echo $section_open; ?>
            <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
               <div class="row">
                  <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                     <h1 class="display-1 mb-3 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
                     <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10 <?php echo $text_color; ?>"><?php echo $subtitle; ?></p>
                     <?php
                     if ($breadcrumbs == 'true') {
                        codeweber_breadcrumbs(NULL, $text_color);
                     }
                     codeweber_meta_blog(); // Blog Meta Data 
                     ?>
                  </div>
                  <!-- /column -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container -->
            </section>
         <?php
      } elseif ($type == 'type_7') { ?>
            <?php echo $section_open; ?>
            <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
               <div class="row">
                  <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-5 mx-auto mb-11">
                     <h1 class="display-1 mb-3 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
                     <p class="lead px-lg-7 px-xl-7 px-xxl-6 <?php echo $text_color; ?>"><?php echo $subtitle; ?></p>
                     <?php
                     if ($breadcrumbs == 'true') {
                        codeweber_breadcrumbs(NULL, $text_color);
                     }
                     codeweber_meta_blog(); // Blog Meta Data
                     ?>
                  </div>
                  <!-- /column -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container -->
            </section>
         <?php
      } elseif ($type == 'type_8') { ?>
            <section class="wrapper bg-gray">
               <div class="container py-3 py-md-5">
                  <?php codeweber_breadcrumbs(NULL, $text_color); ?>
               </div>
               <!-- /.container -->
            </section>
            <section class="wrapper">
               <div class="container text-left pt-9 pb-0">
                  <div class="row">
                     <div class="col-md-7 col-lg-6 col-xl-6">
                        <h1 class="display-3 mb-3 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
                        <p class="lead <?php echo $text_color; ?>"><?php echo $subtitle; ?></p>
                     </div>
                     <!-- /column -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.container -->
            </section>
      <?php
      }
   }
