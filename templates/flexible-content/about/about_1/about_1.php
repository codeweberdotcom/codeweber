<?php

/**
 * Hero 12
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Who Are We?',
      'patternTitle' => ' <h2 class="display-4 mb-3">%s</h2>',

      'paragraph' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.',
      'patternParagraph' => ' <p class="mb-6">%s</p>',

      'subtitle' => 'We are a digital and branding company that believes in the power of creative strategy and along with great design.',
      'patternSubtitle' => '<p class="lead fs-lg">%s</p>',

      // 'buttons' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
      //  <span><a class="btn btn-primary rounded me-2">See Projects</a></span><span><a class="btn btn-yellow rounded">Learn More</a></span></div>',
      //'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',
      //'background_data_default' => '/dist/img/photos/bg16.png',
      //'background_video_preview' => '/dist/img/photos/movie2.jpg',
      //'background_video_url' => '/dist/media/movie2.mp4',
      //'background_pattern_url' => '/dist/img/pattern.png',

      'divider' => true,
      //'divider_angles' => 'upper-start',
      //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

      // 'image_pattern' => '<figure %5$s><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
      // 'image_link' => '/dist/img/illustrations/i6.png',
      // 'image_thumb_size' => 'sandbox_hero_1',
      // 'image_big_size' => 'project_1',

      'swiper' => array(
         'swiper_container_class' => 'overflow-hidden',
         'image_class' => '',
         'data_thumbs' => NULL,
         'wrapper_image_class' => '',
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_hero_11',
         'image_demo' => '<figure class="rounded"><img src="' . get_template_directory_uri() . '/dist/img/photos/about7.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about7@2x.jpg 2x" alt=""></figure>',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/photos/about7.jpg',
         'image_shape' => 'rounded',
         'data_margin' => '30',
         'nav' => 'true',
         'nav_color' => 'nav-light',
         'nav_position' => 'nav-start',
         'dots' => 'true',
         'dots_color' => 'dots-light',
         'dots_position' => 'dots-over',
         'swiper_effect' => 'slide',
         'base_items' => '1',
         'items_xs' => '1',
         'items_sm' => '1',
         'items_md' => '1',
         'items_lg' => '1',
         'items_xl' => '1',
         'items_xxl' => '1',
         'autoplay' => 'false',
         'autoplay_time' => '1500',
         'loop' => 'false',
         'autoheight' => 'false',

         'label_demo' => '<div class="card shadow-lg" style="bottom: 5rem; right: 5rem;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',

         'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->'
      ),

      'shapes' => array('<div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>'),

      'column_class_1' => 'order-lg-2',
      'column_class_2' => '',

      'features' => '<div class="col-md-6"><div class="d-flex flex-row"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" /></div><div><h4 class="mb-1">Our Mission</h4><p class="mb-0">Dapibus eu leo quam ornare curabitur blandit tempus.</p></div></div></div><!--/column -->',

      'features_pattern' => '<div class="col-md-6"><div class="d-flex flex-row %6$s"><div>%2$s</div><div><h4 class="mb-1">%3$s</h4><p class="mb-0">%4$s</p></div></div></div><!--/column -->',

      'features_style_icon' => 'me-4'
   )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <?php if ($block->background_video_bool == true) { ?>
      <video poster="<?php echo $block->background_video_preview; ?>" src="<?php echo $block->background_video_url; ?>" autoplay loop playsinline muted></video>
      <div class="video-content">
      <?php } ?>
      <!-- /video background -->
      <div class="container py-14 py-md-16">
         <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-md-8 col-lg-6 col-xl-5  position-relative <?php echo $block->column_class_1; ?>">
               <?php echo $block->shapes; ?>
               <!--/shapes -->
               <?php echo $block->swiper_final; ?>
               <!--/swiper -->
            </div>
            <!--/column -->
            <div class="col-lg-6 <?php echo $block->column_class_2; ?>">
               <?php echo $block->title; ?>
               <!--/title -->
               <?php echo $block->subtitle; ?>
               <!--/title -->
               <?php echo $block->paragraph; ?>
               <!--/pargraph -->
               <div class="row gx-xl-10 gy-6">
                  <?php echo $block->features; ?>
               </div>
               <!--/.row -->
            </div>
            <!--/column -->
         </div>
         <!--/.row -->
      </div>
      <!-- /.container -->
      <?php if ($block->background_video_bool == true) { ?>
      </div>
      </video>
   <?php } ?>
   <!-- /video background -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->