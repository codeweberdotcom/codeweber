<?php

/**
 * Hero 9
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Sandbox is effortless and powerful with',
      'patternTitle' => '<h1 class="display-1 mb-5 mx-md-10 mx-lg-0">%s</h1>',

      'paragraph' => 'Achieve your saving goals. Have all your recurring and one time expenses and incomes in one place.',
      'patternParagraph' => '<p class="lead fs-lg mb-7">%s</p>',

      // 'subtitle' => 'Grow Your Business with Our Solutions.',
      // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',
      'buttons' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
      <span><a class="btn btn-lg btn-primary rounded me-2">Get Started</a></span>
      <span><a class="btn btn-lg btn-green rounded">Free Trial</a></span></div>',

      'background_class_default' => 'wrapper bg-soft-primary',
      'background_data_default' => '/dist/img/photos/bg16.png',
      'background_video_preview' => '/dist/img/photos/movie2.jpg',
      'background_video_url' => '/dist/media/movie2.mp4',
      'background_pattern_url' => '/dist/img/pattern.png',

      'divider' => true,
      // 'divider_angles' => 'angled lower-start',
      //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

      // 'shapes' => array(
      //    '<div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;"></div>',
      //    '<div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>'
      // ),

      'typewriter' => 'easy usage,fast transactions,secure payments',

      'image_pattern' => '<figure class="rounded shadow-lg"><img src="%1$s" srcset="%2$s" alt="%3$s""></figure>',
      'image_link' => '/dist/img/photos/about13.jpg',
      'image_thumb_size' => 'sandbox_hero_3',
      'image_big_size' => 'project_1',

      'swiper' => array('swiper' => true, 'data' => ''),

      // 'column_class_1' => '',
      // 'column_class_2' => 'offset-lg-1  order-lg-2',
   )
);

?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container pt-10 pb-12 pt-md-14 pb-md-17">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 mt-lg-n2 text-center text-lg-start order-2 order-lg-0" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <?php echo $block->title; ?>
            <!--/title -->

            <?php echo $block->paragraph; ?>
            <!--/pargraph -->

            <?php echo $block->buttons; ?>
            <!--/buttons group -->
         </div>
         <!-- /column -->
         <div class="col-lg-7">
            <div class="row">
               <div class="col-3 offset-1 offset-lg-0 col-lg-4 d-flex flex-column" data-cues="zoomIn" data-group="col-start" data-delay="300">
                  <div class="ms-auto mt-auto"><img class="img-fluid rounded shadow-lg" src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/sa20.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/photos/sa20@2x.jpg 2x" alt="" /></div>
                  <div class="ms-auto mt-5 mb-10"><img class="img-fluid rounded shadow-lg" src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/sa18.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/photos/sa18@2x.jpg 2x" alt="" /></div>
               </div>
               <!-- /column -->
               <div class="col-4 col-lg-5" data-cue="zoomIn">
                  <div><img class="w-100 img-fluid rounded shadow-lg" src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/sa16.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/photos/sa16@2x.jpg 2x" alt="" /></div>
               </div>
               <!-- /column -->
               <div class="col-3 d-flex flex-column" data-cues="zoomIn" data-group="col-end" data-delay="300">
                  <div class="mt-auto"><img class="img-fluid rounded shadow-lg" src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/sa21.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/photos/sa21@2x.jpg 2x" alt="" /></div>
                  <div class="mt-5"><img class="img-fluid rounded shadow-lg" src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/sa19.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/photos/sa19@2x.jpg 2x" alt="" /></div>
                  <div class="mt-5 mb-10"><img class="img-fluid rounded shadow-lg" src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/sa17.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/photos/sa17@2x.jpg 2x" alt="" /></div>
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
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
</section>
<!-- /section -->