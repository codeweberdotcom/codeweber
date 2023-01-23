<?php
$block = new CW_Settings(
  $cw_settings = array(
    'title' => 'Networking <span class="text-gradient gradient-1">solutions</span> for worldwide communication',
    'patternTitle' => '<h1 class="display-2 mb-4 me-xl-5 me-xxl-0">%s</h1>',

    'paragraph' => 'We\'re a company that focuses on establishing long-term relationships with customers.',
    'patternParagraph' => '<p class="lead fs-23 lh-sm mb-7 pe-xxl-15">%s</p>',

    // 'subtitle' => 'Grow Your Business with Our Solutions.',
    // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

    'buttons' => '<a href="#" class="btn btn-lg btn-gradient gradient-1 rounded">Explore Now</a>',
    'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

    'background_class_default' => 'wrapper bg-light',
    'background_data_default' => '/dist/img/photos/bg16.png',
    'background_video_preview' => '/dist/img/photos/movie2.jpg',
    'background_video_url' => '/dist/media/movie2.mp4',
    'background_pattern_url' => '/dist/img/pattern.png',

    //'divider' => true,
    //'divider_angles' => 'upper-start',
    //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

    // 'image_pattern' => '<figure %5s><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
    // 'image_link' => '/dist/img/illustrations/i6.png',
    // 'image_thumb_size' => 'sandbox_hero_1',
    // 'image_big_size' => 'project_1',
    //'shapes' => array('<div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2.5rem; right: -2.7rem;"></div>'),

    'swiper' => array(
      'swiper_container_class' => 'img-fluid position-relative',
      'image_class' => 'img-fluid position-relative',
      'wrapper_image_class' => 'img-fluid position-relative',
      'image_pattern' => '<figure %5s><img %4$s src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
      'image_thumb_size' => 'sandbox_hero_18',
      'image_demo' => '<figure><img class="img-fluid " src="' . get_template_directory_uri() . '/dist/img/illustrations/3d6.png" srcset="' . get_template_directory_uri() . '/dist/img/illustrations/3d6@2x.png 2x" alt="" data-cue="fadeIn" data-delay="300" /></figure>',
      'image_big_size' => 'project_1',
      'img_link' => '/dist/img/illustrations/3d6.png',
      'data_margin' => '30',
      'nav' => 'false',
      'nav_color' => NULL,
      'nav_position' => NULL,
      'dots' => 'false',
      'dots_color' => NULL,
      'dots_position' => NULL,
      'swiper_effect' => 'fade',
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
      'image_shape' => '',
      'label_demo' => '<div class="card shadow-lg" style="bottom: 5rem; right: 5rem;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',

      'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',
    ),

    'column_class_1' => 'order-lg-2 offset-lg-1',
    'column_class_2' => '',

  )
);
?>



<div class="container position-relative">
  <div class="row">
    <div class="col-6">
      <?php echo $block->swiper_final; ?>

      <?php
      // $labels = new CW_Labels($pattern, $demo, NULL);
      // echo $labels->final_labels;
      ?>

    </div>
  </div>
</div>