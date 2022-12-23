<?php


/**
 * CW
 */
$hero = new CW_Settings(
  $cw_settings = array(
    'title' => 'We bring solutions to make life easier for our customers.',
    'patternTitle' => '<h1 class="display-1 mb-5">%s</h1>',
    'paragraph' => 'We have considered our solutions to support every stage of your growth.',
    'patternParagraph' => ' <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0">%s</p>',
    'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',
    'buttons' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900"><span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span><span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Free Trial</a></span></div>',
    'background_class_default' => 'wrapper bg-image',
    'background_data_default' => '/dist/img/photos/bg16.png',
    'background_video_preview' => '/dist/img/photos/movie2.jpg',
    'background_video_url' => '/dist/media/movie2.mp4',
    'background_pattern_url' => '/dist/img/pattern.png',

    'image_pattern' => '<figure class="rounded"><img src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
    'image_link' => '/dist/img/photos/about7.jpg',
    'image_thumb_size' => 'sandbox_hero_18',
    'image_big_size' => 'project_1',

    'swiper' => array('swiper' => true, 'data' => ''),
  )
);
?>



<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $hero->background_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $hero->background_data; ?>>

  <?php if ($hero->background_video_bool == true) { ?>
    <video poster="<?php echo $hero->background_video_preview; ?>" src="<?php echo $hero->background_video_url; ?>" autoplay loop playsinline muted></video>
    <div class="video-content">
    <?php } ?>
    <!-- /video background -->

    <div class="container pt-8 pt-md-14">
      <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
        <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
          <div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;"></div>
          <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
          <?php echo $hero->swiper_final; ?>
          <!--/swiper -->
        </div>
        <!--/column -->
        <div class="col-lg-5 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
          <?php echo $hero->title; ?>
          <!--/title -->

          <?php echo $hero->paragraph; ?>
          <!--/pargraph -->

          <?php echo $hero->buttons; ?>
          <!--/buttons group -->

        </div>
        <!--/column -->
      </div>
      <!-- /.row -->

      <?php if ($hero->background_video_bool == true) { ?>
    </div>
    </video>
  <?php } ?>
  <!-- /video background -->

</section>
<!-- /section -->