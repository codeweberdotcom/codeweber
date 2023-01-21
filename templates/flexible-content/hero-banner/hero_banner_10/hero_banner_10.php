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

      // 'image_pattern' => '<figure class="rounded" data-cue="slideInDown" data-delay="900" ><img src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
      // 'image_link' => '/dist/img/photos/about15.jpg',
      // 'image_thumb_size' => 'sandbox_hero_10',
      // 'image_big_size' => 'project_1',
      'swiper' => array(
         'swiper_container_class' => 'mt-md-n21 mt-lg-n23 mb-14 ss',
         'image_class' => NULL,
         'wrapper_image_class' => 'mt-md-n21 mt-lg-n23 mb-14',
         'image_pattern' => '<figure %5s><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
         'image_thumb_size' => 'sandbox_hero_10',
         'image_demo' => '<figure class="rounded mt-md-n21 mt-lg-n23 mb-14" data-cue="slideInDown" data-delay="900"><img src="' . get_template_directory_uri() . '/dist/img/photos/about15.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about15@2x.jpg 2x" alt="" /></figure>',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/photos/about15.jpg',
         'image_shape' => 'rounded',
         'data_margin' => '30',
         'nav' => 'true',
         'nav_color' => 'nav-dark',
         'nav_position' => 'nav-bottom',
         'dots' => 'true',
         'dots_color' => 'dots-dark',
         'dots_position' => 'dots-closer',
         'swiper_effect' => 'fade',
         'base_items' => '1',
         'items_xs' => '1',
         'items_sm' => '1',
         'items_md' => '1',
         'items_lg' => '1',
         'items_xl' => '1',
         'items_xxl' => '1',
         'autoplay' => 'false',
         'autoplay_time' => '500',
         'loop' => 'false',
         'autoheight' => 'false',
      ),

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