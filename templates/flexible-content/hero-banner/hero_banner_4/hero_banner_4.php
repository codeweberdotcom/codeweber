<?php

/**
 * Hero 4
 */
$block = new CW_Settings(
  $cw_settings = array(
    'title' => 'Just sit & relax while we take care of your business needs.',
    'patternTitle' => '<h1 class="display-1 mb-5">%s</h1>',

    'paragraph' => 'We make your spending stress-free for you to have the perfect control.',
    'patternParagraph' => '<p class="lead fs-25 lh-sm mb-7 pe-md-10">%s</p>',

    // 'subtitle' => 'Grow Your Business with Our Solutions.',
    // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

    'buttons' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900"><span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span><span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Us</a></span></div>',
    'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

    'background_class_default' => 'wrapper bg-light position-relative min-vh-70 d-lg-flex align-items-center',
    'background_data_default' => '/dist/img/photos/bg16.png',
    'background_video_preview' => '/dist/img/photos/movie2.jpg',
    'background_video_url' => '/dist/media/movie2.mp4',
    'background_pattern_url' => '/dist/img/pattern.png',

    //'divider' => true,
    //'divider_angles' => 'upper-start',
    //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

    'image_pattern' => '
    <div class="rounded-4-lg-start col-lg-6 order-lg-2 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100 min-vh-50" data-image-src="%1$s"></div>',
    'image_link' => '/dist/img/photos/about16.jpg',
    'image_thumb_size' => 'sandbox_hero_4',
    'image_big_size' => 'project_1',

    'swiper' => array('swiper' => true, 'xs' => '1'),

    //'column_class_1' => '',
    //'column_class_2' => 'order-lg-2',
  )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>



  <?php echo $block->swiper_final; ?>
  <!--/swiper -->

  <!--/column -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="mt-10 mt-md-11 mt-lg-n10 px-10 px-md-11 ps-lg-0 pe-lg-13 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
          <?php echo $block->title; ?>
          <!--/title -->
          <?php echo $block->paragraph; ?>
          <!--/pargraph -->
          <?php echo $block->buttons; ?>
          <!--/buttons group -->
        </div>
        <!--/div -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->