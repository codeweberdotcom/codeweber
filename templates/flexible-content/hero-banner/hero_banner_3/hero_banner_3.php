<?php

/**
 * Hero 3
 */
$block = new CW_Settings(
  $cw_settings = array(
    'title' => 'Sandbox focuses on',
    'patternTitle' => '<h1 class="display-1 text-white mb-4">%s</h1>',

    'paragraph' => 'We carefully consider our solutions to support each and every stage of your growth.',
    'patternParagraph' => '<p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15">%s</p>',

    // 'subtitle' => 'Grow Your Business with Our Solutions.',
    // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

    'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',
    'buttons' => '<div><a class="btn btn-lg btn-primary rounded">Get Started</a></div>',

    'background_class_default' => 'wrapper bg-dark',
    'background_data_default' => '/dist/img/photos/bg16.png',
    'background_video_preview' => '/dist/img/photos/movie2.jpg',
    'background_video_url' => '/dist/media/movie2.mp4',
    'background_pattern_url' => '/dist/img/pattern.png',

    'divider' => true,
    'divider_angles' => 'angled lower-start',
    //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

    'shapes' => array(
      '<div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;"></div>',
      '<div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>'
    ),

    'typewriter' => 'scustomer satisfaction,business needs,creative ideas',

    'image_pattern' => '<figure class="rounded shadow-lg"><img src="%1$s" srcset="%2$s" alt="%3$s""></figure>',
    'image_link' => '/dist/img/photos/about13.jpg',
    'image_thumb_size' => 'sandbox_hero_3',
    'image_big_size' => 'project_1',

    'swiper' => array('swiper' => true, 'data' => ''),

    'column_class_1' => '',
    'column_class_2' => 'offset-lg-1  order-lg-2',
  )
);

?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
  <?php if ($block->background_video_bool == true) { ?>
    <video poster="<?php echo $block->background_video_preview; ?>" src="<?php echo $block->background_video_url; ?>" autoplay loop playsinline muted></video>
    <div class="video-content">
    <?php } ?>
    <!-- /video background -->
    <div class="container pt-7 pt-md-11 pb-8">
      <div class="row gx-0 gy-10 align-items-center">
        <div class="col-lg-6 <?php echo $block->column_class_1; ?>" data-cues="slideInDown" data-group="page-title" data-delay="600">
          <?php echo $block->title; ?>
          <!--/title -->
          <?php echo $block->paragraph; ?>
          <!--/pargraph -->
          <?php echo $block->buttons; ?>
          <!--/buttons group -->
        </div>
        <!-- /column -->
        <div class="col-lg-5  mb-n18 <?php echo $block->column_class_2; ?>" data-cues="slideInDown">
          <div class="position-relative">
            <?php echo $block->swiper_final; ?>
            <!--/swiper -->
          </div>
          <!-- /div -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
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