<?php

/**
 * Blog Pageheader Generator
 */

function codeweber_pageheader_generator($title, $subtitle, $type, $background_url, $color, $paralax, $breadcrumb, $theme_color, $header_style)
{
   if ($color !== NULL) {
      $bg_color = ' bg-' . $color;
   } else {
      $bg_color = ' bg-light';
   }

   if ($theme_color !== NULL && $theme_color == 'dark') {
      $text_color = 'text-white';
   } else {
      $text_color = NULL;
   }

   if ($type == 'type_1') { ?>
      <section class="wrapper<?php echo $bg_color; ?>">
         <div class="container pt-10 pt-md-14">
            <div class="row">
               <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-5">
                  <h1 class="display-1 mb-3 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
                  <p class="lead fs-lg pe-lg-15 pe-xxl-12 <?php echo $text_color; ?>"><?php echo $subtitle; ?></p>
                  <?php if ($breadcrumb == true) {
                     codeweber_breadcrumbs(NULL, $text_color);
                  } ?>
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
      </section>
   <?php
   } elseif ($type == 'type_2') { ?>
      <section class="wrapper<?php echo $bg_color; ?>">
         <div class="container py-13 py-md-17 text-center">
            <div class="row">
               <div class="col-lg-10 col-xxl-8 mx-auto">
                  <h1 class="display-1 mb-1 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
                  <?php if ($breadcrumb == true) {
                     codeweber_breadcrumbs(NULL, $text_color);
                  } ?>
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
      </section>
   <?php
   } elseif ($type == 'type_3') { ?>
      <section class="wrapper<?php echo $bg_color; ?>">
         <div class="container pt-10 pt-md-14 text-center">
            <div class="row">
               <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-5 mx-auto">
                  <h1 class="display-1 mb-3 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
                  <p class="lead fs-lg px-lg-10 px-xxl-8 <?php echo $text_color; ?>"><?php echo $subtitle; ?></p>
                  <?php if ($breadcrumb == true) {
                     codeweber_breadcrumbs(NULL, $text_color);
                  } ?>
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
      </section>
   <?php
   } elseif ($type == 'type_4') { ?>
      <section class="wrapper<?php echo $bg_color; ?>">
         <div class="container pt-10 pt-md-14">
            <div class="row">
               <div class="col-lg-10 col-xxl-8">
                  <h1 class="display-1 mb-0 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
                  <?php if ($breadcrumb == true) {
                     codeweber_breadcrumbs(NULL, $text_color);
                  } ?>
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
      </section>
   <?php
   } elseif ($type == 'type_5') { ?>
      <section class="wrapper<?php echo $bg_color; ?>">
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
