<?php

/**
 * Hero 10
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'We bring solutions to make life easier.',
      'patternTitle' => '<h1 class="display-1 fs-60 mb-4 px-md-15 px-lg-0">%s</h1>',

      'paragraph' => 'We are a creative company that focuses on long term relationships with customers.',
      'patternParagraph' => '<p class="lead fs-24 lh-sm mb-7 mx-md-13 mx-lg-10">%s</p>',

      // 'subtitle' => 'Grow Your Business with Our Solutions.',
      // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

      'buttons' => '<span><a class="btn btn-lg btn-primary rounded mb-5">Read More</a></span>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',
      'background_data_default' => '/dist/img/photos/bg16.png',
      'background_video_preview' => '/dist/img/photos/movie2.jpg',
      'background_video_url' => '/dist/media/movie2.mp4',
      'background_pattern_url' => '/dist/img/pattern.png',

      //'divider' => true,
      //'divider_angles' => 'upper-start',
      //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

      'image_pattern' => '<figure class="rounded" data-cue="slideInDown" data-delay="900" ><img src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
      'image_link' => '/dist/img/photos/about15.jpg',
      'image_thumb_size' => 'sandbox_hero_10',
      'image_big_size' => 'project_1',

      'swiper' => array('swiper' => true, 'xs' => '1', 'default_class' => 'mt-md-n21 mt-lg-n23 mb-14'),

      //'column_class_1' => '',
      //'column_class_2' => 'order-lg-2',
   )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container pt-11 pt-md-13 pb-11 pb-md-19 pb-lg-22 text-center">
      <div class="row">
         <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="slideInDown" data-group="page-title">
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
</section>
<!-- /section -->
<section class="wrapper bg-dark">
   <div class="container pt-14 pt-md-16 pb-9 pb-md-11">
      <?php echo $block->swiper_final; ?>
   </div>
   <!-- /.container -->
</section>
<!-- /section -->