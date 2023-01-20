<?php

/**
 * Hero 8
 */
$block = new CW_Settings(
  $cw_settings = array(
    'title' => 'Crafting project specific solutions with expertise.',
    'patternTitle' => '<h1 class="display-2 mb-5">%s</h1>',

    'paragraph' => 'We re a company that focuses on establishing long-term relationships with customers.',
    'patternParagraph' => '<p class="lead fs-lg lh-sm mb-7 pe-xl-10">%s</p>',

    // 'subtitle' => 'Grow Your Business with Our Solutions.',
    // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

    'buttons' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
              <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
              <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Us</a></span>
            </div>',
    'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

    'background_class_default' => 'wrapper bg-light',
    'background_data_default' => '/dist/img/photos/bg16.png',
    'background_video_preview' => '/dist/img/photos/movie2.jpg',
    'background_video_url' => '/dist/media/movie2.mp4',
    'background_pattern_url' => '/dist/img/pattern.png',

    //'divider' => true,
    //'divider_angles' => 'upper-start',
    //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

    'image_pattern' => '<img class="img-fluid ms-auto mx-auto me-lg-8" src="%1$s" srcset="%2$s" alt="%3$s" data-cue="fadeIn" />',
    'image_link' => '/dist/img/photos/co3.png',
    'image_thumb_size' => 'sandbox_hero_8',
    'image_big_size' => 'project_1',

    'swiper' => array('swiper' => true, 'xs' => '1'),

    //'column_class_1' => '',
    //'column_class_2' => 'order-lg-2',
  )
);

$color = new CW_Color(NULL, 'bg-soft-primary');
?>



<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
  <div class="container">
    <div class="card <?php echo $color->bg_color; ?> rounded-4 mt-2 mb-13 mb-md-17">
      <div class="card-body p-md-10 py-xl-11 px-xl-15">
        <div class="row gx-lg-8 gx-xl-0 gy-10 align-items-center">
          <div class="col-lg-6 order-lg-2 d-flex position-relative">
            <?php echo $block->swiper_final; ?>
            <!--/swiper -->
            <div data-cue="slideInRight" data-delay="300">
              <div class="card shadow-lg position-absolute" style="bottom: 10%; right: -3%;">
                <div class="card-body py-4 px-5">
                  <div class="d-flex flex-row align-items-center">
                    <div>
                      <div class="icon btn btn-circle btn-md btn-soft-primary pe-none mx-auto me-3"> <i class="uil uil-users-alt"></i> </div>
                    </div>
                    <div>
                      <h3 class="counter mb-0 text-nowrap">25000+</h3>
                      <p class="fs-14 lh-sm mb-0 text-nowrap">Happy Clients</p>
                    </div>
                  </div>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/div -->
          </div>
          <!--/column -->
          <div class="col-lg-6 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->paragraph; ?>
            <!--/pargraph -->
            <?php echo $block->buttons; ?>
            <!--/buttons group -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!--/.card-body -->
    </div>
    <!--/.card -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->