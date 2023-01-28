<?php

/**
 * Process 2
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'How We Do It?',
      'patternTitle' => '<h2 class="display-4 mb-3">%s</h2>',

      'paragraph' => 'We make your spending <span class="underline">stress-free</span> for you to have the perfect control.',
      'patternParagraph' => '<p class="lead fs-lg mb-8">%s</p>',

      // 'subtitle' => 'Grow Your Business with Our Solutions.',
      // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',
      'buttons' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900"><span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span><span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Free Trial</a></span></div>',

      'background_class_default' => 'wrapper bg-light',
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

      'label_demo' => '<div class="card shadow-lg position-absolute zindex-1" style="bottom: 2rem; left: -2rem;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',

      'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',

      'features' => '<div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">02</span></span><h4 class="mb-1">Prepare</h4><p class="mb-0">Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.</p></div><!--/column -->',

      'features_pattern' => '<div class="col-md-6 col-lg-3 %1$s">%2$s<h4 class="mb-1">%3$s</h4><p class="mb-0">%4$s</p></div><!--/column -->',
      'features_style_icon' => 'mb-4',

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
         <?php echo $block->title; ?>
         <!--/title -->
         <?php echo $block->paragraph; ?>
         <!--/pargraph -->
         <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line">
            <?php echo $block->features; ?>
            <!--/fearures -->
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