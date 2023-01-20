<?php

/**
 * Hero 7
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Creative. Smart. Awesome.',
      'patternTitle' => '<h1 class="h2 display-1 mb-4">%s</h1>',

      'paragraph' => 'We are an award winning web & mobile design agency that strongly believes in the power of creative ideas.',
      'patternParagraph' => '<p class="lead fs-24 lh-sm px-md-5 px-xl-15 px-xxl-10 mb-7">%s</p>',

      // 'subtitle' => 'Grow Your Business with Our Solutions.',
      // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

      'buttons' => '<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="join" data-delay="900">
         <span><a class="btn btn-lg btn-primary rounded-pill mx-1">See Projects</a></span>
         <span><a class="btn btn-lg btn-outline-primary rounded-pill mx-1">Contact Us</a></span>
      </div>',
      'buttons_pattern' => '<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="join" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-gradient-primary',
      'background_data_default' => '/dist/img/photos/bg16.png',
      'background_video_preview' => '/dist/img/photos/movie2.jpg',
      'background_video_url' => '/dist/media/movie2.mp4',
      'background_pattern_url' => '/dist/img/pattern.png',

      'divider' => true,
      //'divider_angles' => 'upper-start',
      //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

      'image_pattern' => '<figure %5s><img class="img-fluid" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
      'image_link' => '/dist/img/illustrations/i12.png',
      'image_thumb_size' => 'sandbox_hero_1',
      'image_big_size' => 'project_1',

      'swiper' => array('swiper' => true, 'xs' => '1'),

      //'column_class_1' => '',
      //'column_class_2' => 'order-lg-2',
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 pt-md-15 pb-md-18">
      <div class="row text-center">
         <div class="col-lg-9 col-xxl-7 mx-auto" data-cues="zoomIn" data-group="welcome" data-interval="-200">
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->paragraph; ?>
            <!--/pargraph -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <?php echo $block->buttons; ?>
      <!--/buttons group -->
      <div class="row mt-12" data-cue="fadeIn" data-delay="1600">
         <div class="col-lg-8 mx-auto">
            <?php echo $block->swiper_final; ?>
            <!--/swiper -->
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