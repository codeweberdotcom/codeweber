<?php

/**
 * Process 1
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'How It Works?',
      'patternTitle' => '<h2 class="h1 mb-3">%s</h2>',

      'paragraph' => 'So here are three working steps why our valued customers choose us.',
      'patternParagraph' => '<p class="lead fs-lg mb-6">%s</p>',

      // 'subtitle' => 'Grow Your Business with Our Solutions.',
      // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

      // 'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',
      // 'buttons' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900"><span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span><span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Free Trial</a></span></div>',

      'background_class_default' => 'wrapper bg-light wrapper-border',
      //'background_data_default' => '/dist/img/photos/bg16.png',
      //'background_video_preview' => '/dist/img/photos/movie2.jpg',
      //'background_video_url' => '/dist/media/movie2.mp4',
      //'background_pattern_url' => '/dist/img/pattern.png',

      'divider' => 'true',
      //'divider_angles' => 'upper-start',
      //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

      'shapes' => array(
         '<div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.9rem;"></div>',
         '<div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>'
      ),

      // 'image_pattern' => '<figure class="rounded"><img src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
      // 'image_link' => '/dist/img/photos/about7.jpg',
      // 'image_thumb_size' => 'sandbox_hero_18',
      // 'image_big_size' => 'project_1',

      'swiper' => array(
         'swiper_container_class' => 'rounded overflow-hidden',
         'image_class' => 'rounded',
         'wrapper_image_class' => 'rounded',
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_hero_18',
         'image_demo' => '<figure class="rounded"><img src="' . get_template_directory_uri() . ' /dist/img/photos/about7.jpg" srcset="' . get_template_directory_uri() . ' /dist/img/photos/about7@2x.jpg 2x" alt="" /></figure>',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/photos/about7.jpg',
         'data_margin' => '30',
         'nav' => 'true',
         'nav_color' => 'nav-light',
         'nav_position' => 'nav-start',
         'dots' => 'true',
         'dots_color' => 'nav-start',
         'dots_position' => 'dots-over',
         'swiper_effect' => 'slide',
         'base_items' => '1',
         'items_xs' => '1',
         'items_sm' => '1',
         'items_md' => '1',
         'items_lg' => '1',
         'items_xl' => '1',
         'items_xxl' => '1',
         'autoplay' => 'true',
         'autoplay_time' => '3000',
         'loop' => 'loop',
         'autoheight' => 'false',
         'image_shape' => 'rounded'
      ),

      'label_demo' => '<div class="card shadow-lg position-absolute zindex-1" style="bottom: 2rem; left: -2rem;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',

      'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',

      'features' => ' <div class="d-flex flex-row mb-6"><div><span class="icon btn btn-circle btn-primary pe-none me-5"><span class="number fs-18">1</span></span></div><div><h4 class="mb-1">Collect Ideas</h4><p class="mb-0">Nulla vitae elit libero pharetra augue dapibus. Praesent commodo cursus.</p></div></div>',

      'features_pattern' => '<div class="d-flex flex-row mb-6 %1$s"><div>%2$s</div><div><h4 class="mb-1">%3$s</h4><p class="mb-0">%4$s</p></div></div>',
      'features_style_icon' => 'me-5',

      'column_class_1' => 'order-lg-2 offset-lg-1',
      'column_class_2' => '',
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
         <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center">
            <div class="col-md-8 col-lg-6 position-relative <?php echo $block->column_class_1; ?>">
               <?php echo $block->shapes; ?>
               <!--/shapes -->
               <?php echo $block->swiper_final; ?>
               <!--/swiper -->
            </div>
            <!--/column -->
            <div class="col-lg-5 col-xl-5  <?php echo $block->column_class_2; ?>">
               <?php echo $block->title; ?>
               <!--/title -->
               <?php echo $block->paragraph; ?>
               <!--/pargraph -->
               <?php echo $block->features; ?>
               <!--/fearures -->
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