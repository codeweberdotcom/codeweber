<?php

/**
 * Hero 2
 */
$block = new CW_Settings(
  $cw_settings = array(
    'title' => 'We bring solutions to make life easier for our customers.',
    'patternTitle' => '<h1 class="display-1 mb-5">%s</h1>',

    'paragraph' => 'We have considered our solutions to support every stage of your growth.',
    'patternParagraph' => ' <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0">%s</p>',

    // 'subtitle' => 'Grow Your Business with Our Solutions.',
    // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

    'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',
    'buttons' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900"><span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span><span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Free Trial</a></span></div>',

    'background_class_default' => 'wrapper bg-image',
    'background_data_default' => '/dist/img/photos/bg16.png',
    'background_video_preview' => '/dist/img/photos/movie2.jpg',
    'background_video_url' => '/dist/media/movie2.mp4',
    'background_pattern_url' => '/dist/img/pattern.png',

    'divider' => true,
    //'divider_angles' => 'upper-start',
    //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

    'shapes' => array(
      '<div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;"></div>',
      '<div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>'
    ),

    'image_pattern' => '<figure class="rounded"><img src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
    'image_link' => '/dist/img/photos/about7.jpg',
    'image_thumb_size' => 'sandbox_hero_18',
    'image_big_size' => 'project_1',

    'swiper' => array('swiper' => true, 'data' => ''),

    'column_class_1' => 'order-lg-2 offset-md-2 offset-lg-1',
    'column_class_2' => '',
  )
);
?>



<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->background_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>

  <?php if ($block->background_video_bool == true) { ?>
    <video poster="<?php echo $block->background_video_preview; ?>" src="<?php echo $block->background_video_url; ?>" autoplay loop playsinline muted></video>
    <div class="video-content">
    <?php } ?>
    <!-- /video background -->
    <div class="container pt-8 pt-md-14">
      <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
        <div class="col-md-8 col-lg-6  position-relative <?php echo $block->column_class_1; ?>" data-cue="zoomIn">
          <?php
          echo $block->shapes;
          ?>
          <!--/shapes -->
          <?php echo $block->swiper_final; ?>
          <!--/swiper -->
        </div>
        <!--/column -->
        <div class="col-lg-5 mt-lg-n10 text-center text-lg-start <?php echo $block->column_class_2; ?>" data-cues="slideInDown" data-group="page-title" data-delay="600">
          <?php echo $block->title; ?>
          <!--/title -->
          <?php echo $block->paragraph; ?>
          <!--/pargraph -->
          <?php echo $block->buttons; ?>
          <!--/buttons group -->
        </div>
        <!--/column -->
      </div>
      <!-- /.row -->
      <?php if ($block->background_video_bool == true) { ?>
    </div>
    </video>
  <?php } ?>
  <!-- /video background -->

</section>
<!-- /section -->