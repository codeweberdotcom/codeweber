<?php

/**
 * Hero 22
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Grow your business with our marketing solutions',
      'patternTitle' => '<h1 class="h3 display-1 fs-54 text-white mb-7">%s</h1>',

      // 'paragraph' => 'We carefully consider our solutions to support each and every stage of your growth.',
      // 'patternParagraph' => '<p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15">%s</p>',

      'subtitle' => 'Hello! We are Sandbox',
      'patternSubtitle' => '<p class="h6 text-uppercase ls-xl text-white mb-5">%s</p>',

      'buttons_pattern' => '<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',
      'buttons' => ' <a href="' . get_template_directory_uri() . '/dist/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto" data-glightbox><i class="icn-caret-right"></i></a>',

      'background_class_default' => 'wrapper image-wrapper bg-cover bg-image bg-overlay bg-overlay-500',
      'background_data_default' => '/dist/img/photos/bg26.jpg',
      //'background_video_preview' => '/dist/img/photos/movie2.jpg',
      //'background_video_url' => '/dist/media/movie2.mp4',
      //'background_pattern_url' => '/dist/img/pattern.png',

      'divider' => 'true',
      //'divider_angles' => 'upper-start',
      'divider_wave' => '<div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" /></svg></div></div><!-- /.overflow-hidden -->',



      //'image_pattern' => '<figure class="rounded shadow-lg"><img src="%1$s" srcset="%2$s" alt="%3$s""></figure>',
      //'image_link' => '/dist/img/photos/about13.jpg',
      //'image_thumb_size' => 'sandbox_hero_3',
      //'image_big_size' => 'project_1',


      // 'swiper' => array(
      //    'swiper_container_class' => 'rounded overflow-hidden',
      //    'image_class' => '',
      //    'wrapper_image_class' => '',
      //    'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
      //    'image_thumb_size' => 'sandbox_hero_14',
      //    'image_demo' => '<figure class="rounded"><img src="' . get_template_directory_uri() . '/dist/img/photos/about5.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about5@2x.jpg 2x" alt="" /></figure>',
      //    'image_big_size' => 'project_1',
      //    'img_link' => '/dist/img/photos/about5.jpg',
      //    'data_margin' => '30',
      //    'nav' => 'false',
      //    'nav_color' => 'nav-light',
      //    'nav_position' => 'nav-start',
      //    'dots' => 'true',
      //    'dots_color' => 'nav-start',
      //    'dots_position' => 'dots-over',
      //    'swiper_effect' => 'slide',
      //    'base_items' => '1',
      //    'items_xs' => '1',
      //    'items_sm' => '1',
      //    'items_md' => '1',
      //    'items_lg' => '1',
      //    'items_xl' => '1',
      //    'items_xxl' => '1',
      //    'autoplay' => 'true',
      //    'autoplay_time' => '3000',
      //    'loop' => 'loop',
      //    'autoheight' => 'false',
      //    'image_shape' => 'rounded',

      // ),

      // 'features' => '<div class="col-6 col-lg-3"><h3 class="counter counter-lg text-white">7518</h3><p>Completed Projects</p></div><!--/column -->',
      // 'features_pattern' => '<div class="col-6 col-lg-3 %1$s"><h3 class="counter counter-lg text-white">%3$s</h3><p>%4$s</p></div><!--/column -->',

      //'column_class_1' => '',
      //'column_class_2' => 'offset-lg-1  order-lg-2',
   )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="section-frame br-fix overflow-hidden">
   <div class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
      <?php if ($block->background_video_bool == true) { ?>
         <video poster="<?php echo $block->background_video_preview; ?>" src="<?php echo $block->background_video_url; ?>" autoplay loop playsinline muted></video>
         <div class="video-content">
         <?php } ?>
         <!-- /video background -->
         <div class="container pt-18 pt-lg-21 pb-17 pb-lg-19 text-center">
            <div class="row">
               <div class="col-md-9 col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="zoomIn" data-group="page-title" data-interval="-200" data-delay="500">
                  <?php echo $block->subtitle; ?>
                  <!--/subtitle -->
                  <?php echo $block->title; ?>
                  <!--/title -->
                  <?php echo $block->buttons; ?>
                  <!--/buttons group -->
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
         <?php if ($block->divider_wave) {
            echo $block->divider_wave;
         } ?>
         <!-- /divider -->
         </div>
         <!-- /.wrapper -->
</section>
<!--/section -->