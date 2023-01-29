<?php

/**
 * About 2
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'We are a creative company that focuses on establishing long-term relationships with customers.',
      'patternTitle' => '<h3 class="display-5 mb-5">%s</h3>',

      'paragraph' => 'Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula.',
      'patternParagraph' => '<p class="mb-7">%s</p>',

      // 'subtitle' => 'We are a digital and branding company that believes in the power of creative strategy and along with great design.',
      // 'patternSubtitle' => '<p class="lead fs-lg">%s</p>',

      // 'buttons' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
      //  <span><a class="btn btn-primary rounded me-2">See Projects</a></span><span><a class="btn btn-yellow rounded">Learn More</a></span></div>',
      //'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',
      //'background_data_default' => '/dist/img/photos/bg16.png',
      //'background_video_preview' => '/dist/img/photos/movie2.jpg',
      //'background_video_url' => '/dist/media/movie2.mp4',
      //'background_pattern_url' => '/dist/img/pattern.png',

      //'divider' => 'true',
      //'divider_angles' => 'upper-start',
      //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

      // 'shapes' => array('<div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>'),

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',

      'features' => '<div class="col-md-4"><h3 class="counter text-primary">7518</h3><p>Completed Projects</p></div><!--/column -->',

      'features_pattern' => '<div class="col-md-4 %1$s"><h3 class="counter text-primary">%3$s</h3><p>%4$s</p></div><!--/column -->',

      // 'features_style_icon' => 'me-4'
   )
);

$final_icon = '<img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/handshake.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />';
$icon = new CW_Icon(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $final_icon, NULL);

$btn_title = 'Year Experience';
$btn_color = 'primary';
$btn_number = '20+';

if (have_rows('icon_text_count')) {
   while (have_rows('icon_text_count')) {
      the_row();
      if (get_sub_field('cw_number')) {
         $btn_number = get_sub_field('cw_number');
      }
      if (get_sub_field('cw_title')) {
         $btn_title = get_sub_field('cw_title');
      }
      $btn_color_object = new CW_Color(NULL, NULL);
      $btn_color = $btn_color_object->color;
   }
}
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center">
         <div class="col-lg-6 position-relative <?php echo $block->column_class_1; ?>">
            <div class="btn btn-circle btn-<?php echo $btn_color; ?> pe-none position-absolute counter-wrapper flex-column d-none d-md-flex" style="top: 50%; left: 50%; transform: translate(-50%, -50%); width: 170px; height: 170px;">
               <div class="mb-1 mt-n2"><span class="counter counter-lg"><?php echo $btn_number; ?></span></div>
               <p><?php echo $btn_title; ?></p>
            </div>
            <div class="row gx-md-5 gy-5 align-items-center">
               <div class="col-md-6">
                  <div class="row gx-md-5 gy-5">
                     <div class="col-md-10 offset-md-2">
                        <?php if (have_rows('cw_multi_image')) {
                           while (have_rows('cw_multi_image')) {
                              the_row();
                              $cw_image_1 = get_sub_field('cw_image_1');
                              if ($cw_image_1) { ?>
                                 <figure class="rounded"><img src="<?php echo esc_url($cw_image_1['url']); ?>" srcset="<?php echo esc_url($cw_image_1['url']); ?>" alt="<?php echo esc_attr($cw_image_1['alt']); ?>"></figure>
                              <?php } else { ?>
                                 <figure class="rounded"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/ab1.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/photos/ab1@2x.jpg 2x" alt=""></figure>
                        <?php }
                           }
                        } ?>
                     </div>
                     <!--/column -->
                     <div class="col-md-12">
                        <?php if (have_rows('cw_multi_image')) {
                           while (have_rows('cw_multi_image')) {
                              the_row();
                              $cw_image_2 = get_sub_field('cw_image_2');
                              if ($cw_image_2) { ?>
                                 <figure class="rounded"><img src="<?php echo esc_url($cw_image_2['url']); ?>" srcset="<?php echo esc_url($cw_image_2['url']); ?>" alt="<?php echo esc_attr($cw_image_2['alt']); ?>"></figure>
                              <?php } else { ?>
                                 <figure class="rounded"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/ab2.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/photos/ab2@2x.jpg 2x" alt=""></figure>
                        <?php }
                           }
                        } ?>
                     </div>
                     <!--/column -->
                  </div>
                  <!--/.row -->
               </div>
               <!--/column -->
               <div class="col-md-6">
                  <?php if (have_rows('cw_multi_image')) {
                     while (have_rows('cw_multi_image')) {
                        the_row();
                        $cw_image_3 = get_sub_field('cw_image_3');
                        if ($cw_image_3) { ?>
                           <figure class="rounded"><img src="<?php echo esc_url($cw_image_3['url']); ?>" srcset="<?php echo esc_url($cw_image_3['url']); ?>" alt="<?php echo esc_attr($cw_image_3['alt']); ?>"></figure>
                        <?php } else { ?>
                           <figure class="rounded"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/ab3.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/photos/ab3@2x.jpg 2x" alt=""></figure>
                  <?php }
                     }
                  } ?>
               </div>
               <!--/column -->
            </div>
            <!--/.row -->
         </div>
         <!--/column -->
         <div class="col-lg-6 <?php echo $block->column_class_2; ?>">
            <?php echo $icon->final_icon; ?>
            <!--/final_icon -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->paragraph; ?>
            <!--/pargraph -->
            <div class="row counter-wrapper gy-6">
               <?php echo $block->features; ?>
               <!--/features -->
            </div>
            <!--/.row -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->