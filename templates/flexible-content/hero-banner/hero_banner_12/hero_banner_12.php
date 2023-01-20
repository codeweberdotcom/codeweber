<?php

/**
 * Hero 12
 */
$block = new CW_Settings(
  $cw_settings = array(
    'title' => 'Creative. Smart. Awesome.',
    'patternTitle' => '<h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">%s</h1>',

    'paragraph' => 'We specialize in web, mobile and identity design. We love to turn ideas into beautiful things.',
    'patternParagraph' => '<p class="lead fs-lg mb-7">%s</p>',

    // 'subtitle' => 'Grow Your Business with Our Solutions.',
    // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

    'buttons' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
    <span><a class="btn btn-primary rounded me-2">See Projects</a></span><span><a class="btn btn-yellow rounded">Learn More</a></span></div>',
    'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

    'background_class_default' => 'wrapper bg-soft-primary',
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

    'swiper' => array(
      'swiper_container_class' => 'mt-md-n21 mt-lg-n23 mb-14',
      'image_class' => 'mt-md-n21 mt-lg-n23 mb-14',
      'image_pattern' => '<figure %5s><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
      'image_thumb_size' => 'sandbox_hero_10',
      'image_big_size' => 'project_1',
      'img_url' => '/dist/img/illustrations/i6.png',
      'data_margin' => '30',
      'nav' => true,
      'nav_color' => '',
      'nav_position' => '',
      'dots' => true,
      'dots_color' => '',
      'dots_position' => '',
      'swiper_effect' => '',
      'base_items' => '1',
      'items_xs' => '1',
      'items_sm' => '1',
      'items_md' => '1',
      'items_lg' => '1',
      'items_xl' => '1',
      'items_xxl' => '1',
      'autoplay' => true,
      'autoplay_time' => '500',
      'loop' => true,
      'autoheight' => false
    ),

    'column_class_1' => 'order-2 order-lg-0',
    'column_class_2' => '',

    'features' => '<div class="col-md-6 col-xl-3"><div class="card shadow-lg card-border-bottom border-soft-yellow"><div class="card-body"><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/search-2.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" /><h4>SEO Services</h4><p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p><a href="#" class="more hover link-yellow">Learn More</a></div><!--/.card-body --></div><!--/.card --></div><!--/column -->',

    'features_pattern' => '<div class="col-md-6 col-xl-3 %1$s"><div class="card shadow-lg %6$s"><div class="card-body">%2$s<h4>%3$s</h4><p class="mb-5">%4$s</p>%5$s</div><!--/.card-body --></div><!--/.card --></div><!--/column -->',
  )
);
?>



<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
  <div class="container pt-10 pb-15 pt-md-14 pb-md-20">
    <div class="row gx-lg-8 gx-xl-12 gy-10 mb-5 align-items-center">
      <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start <?php echo $block->column_class_1; ?>" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <?php echo $block->title; ?>
        <!--/title -->
        <?php echo $block->paragraph; ?>
        <!--/pargraph -->

        <?php echo $block->buttons; ?>
        <!--/buttons group -->
      </div>
      <!-- /column -->
      <div class="col-lg-7 <?php echo $block->column_class_2; ?>" data-cue="slideInDown">
        <?php echo $block->swiper_final; ?>
        <!--/swiper -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
  <div class="container pt-14 pt-md-16 pb-9 pb-md-11 pb-md-17">
    <div class="row gx-md-5 gy-5 mt-n18 mt-md-n21 mb-14 mb-md-17">
      <?php echo $block->features; ?>
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->