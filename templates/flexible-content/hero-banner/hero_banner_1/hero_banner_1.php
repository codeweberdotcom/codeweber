<?php

/**
 * Hero 1
 */
$block = new CW_Settings(
  $cw_settings = array(
    'title' => 'Grow Your Business with Our Solutions.',
    'patternTitle' => '<h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">%s</h1>',

    'paragraph' => 'We help our clients to increase their website traffic, rankings and visibility in search results.',
    'patternParagraph' => '<p class="lead fs-lg mb-7">%s</p>',

    // 'subtitle' => 'Grow Your Business with Our Solutions.',
    // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

    'buttons' => '<span><a class="btn btn-primary rounded-pill me-2">Try It For Free</a></span>',
    'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

    'background_class_default' => 'wrapper bg-gradient-primary angled upper-start lower-end',
    'background_data_default' => '/dist/img/photos/bg16.png',
    'background_video_preview' => '/dist/img/photos/movie2.jpg',
    'background_video_url' => '/dist/media/movie2.mp4',
    'background_pattern_url' => '/dist/img/pattern.png',

    //'divider' => true,
    //'divider_angles' => 'upper-start',
    //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

    'image_pattern' => '<figure %5s><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
    'image_link' => '/dist/img/illustrations/i2.png',
    'image_thumb_size' => 'sandbox_hero_1',
    'image_big_size' => 'project_1',

    'swiper' => array('swiper' => true, 'xs' => '1'),

    'column_class_1' => '',
    'column_class_2' => 'order-lg-2',
  )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
  <?php if ($block->background_video_bool == true) { ?>
    <video poster="<?php echo $block->background_video_preview; ?>" src="<?php echo $block->background_video_url; ?>" autoplay loop playsinline muted></video>
    <div class="video-content">
    <?php } ?>
    <!-- /video background -->
    <div class="container pt-10 pt-md-14 pb-8 text-center">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-lg-7 <?php echo $block->column_class_1; ?>">
          <?php echo $block->swiper_final; ?>
          <!--/swiper -->
        </div>
        <!-- /column -->
        <div class="col-md-10 col-lg-5 offset-md-1 offset-lg-0 text-center text-lg-start <?php echo $block->column_class_2; ?>">
          <?php echo $block->title; ?>
          <!--/title -->
          <?php echo $block->paragraph; ?>
          <!--/pargraph -->
          <?php echo $block->buttons; ?>
          <!--/buttons group -->
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