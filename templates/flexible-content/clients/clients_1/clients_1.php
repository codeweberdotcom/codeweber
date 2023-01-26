<?php

/**
 * Clients 1
 */
$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'Trusted by Over 5000 Clients',
      'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted text-center mb-8">%s</h2>',


      'background_class_default' => 'wrapper wrapper-border bg-light',
      // 'background_data_default' => '/dist/img/photos/bg16.png',
      // 'background_video_preview' => '/dist/img/photos/movie2.jpg',
      // 'background_video_url' => '/dist/media/movie2.mp4',
      // 'background_pattern_url' => '/dist/img/pattern.png',

      'swiper' => array(
         'swiper_container_class' => '',
         'image_class' => 'img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5 ',
         'wrapper_image_class' => '',
         'image_pattern' => '<img class="img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5" src="%1$s" srcset="%1$s" %3$s />',
         'image_thumb_size' => 'sandbox_clients_logo_1-1',
         'image_demo' => '<img class="img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5" src="' . get_template_directory_uri() . '/dist/img/brands/c3.png" srcset="' . get_template_directory_uri() . '/dist/img/brands/c3.png" alt="" data-cue="fadeIn" data-delay="300" />',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/brands/c3.png',
         'data_margin' => '40',
         'nav' => 'false',
         'nav_color' => '',
         'nav_position' => '',
         'dots' => 'false',
         'dots_color' => '',
         'dots_position' => 'dots-over',
         'swiper_effect' => 'slide',
         'base_items' => '2',
         'items_xs' => '2',
         'items_sm' => '2',
         'items_md' => '3',
         'items_lg' => '7',
         'items_xl' => '7',
         'items_xxl' => '7',
         'autoplay' => 'false',
         'autoplay_time' => '3000',
         'loop' => 'loop',
         'autoheight' => 'false',
         'image_shape' => NULL,
      ),
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <?php echo $block->subtitle; ?>
      <!--/title -->
      <?php echo $block->swiper_final; ?>
      <!--/swiper -->
      <!--/swiper -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->