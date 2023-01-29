<?php

/**
 * About 4
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Who Are We?',
      'patternTitle' => '<h2 class="display-4 mb-3">%s</h2>',

      'paragraph' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.',
      'patternParagraph' => '<p class="mb-6">%s</p>',

      'subtitle' => 'We are a digital and branding company that believes in the power of creative strategy and along with great design.',
      'patternSubtitle' => '<p class="lead fs-lg">%s</p>',

      'list' => true,
      'list_demo' => '<div class="row gy-3 gx-xl-8">
                  <div class="col-xl-6">
                     <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                        <li><span><i class="uil uil-check"></i></span><span>Aenean eu leo quam ornare curabitur blandit tempus.</span></li>
                        <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare donec elit.</span></li>
                     </ul>
                  </div>
                  <!--/column -->
                  <div class="col-xl-6">
                     <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                        <li><span><i class="uil uil-check"></i></span><span>Etiam porta sem malesuada magna mollis euismod.</span></li>
                        <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fermentum massa vivamus faucibus amet euismod.</span></li>
                     </ul>
                  </div>
                  <!--/column -->
               </div>
               <!--/.row -->',

      // 'buttons' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
      //  <span><a class="btn btn-primary rounded me-2">See Projects</a></span><span><a class="btn btn-yellow rounded">Learn More</a></span></div>',
      //'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',
      //'background_data_default' => '/dist/img/photos/bg16.png',
      //'background_video_preview' => '/dist/img/photos/movie2.jpg',
      //'background_video_url' => '/dist/media/movie2.mp4',
      //'background_pattern_url' => '/dist/img/pattern.png',

      // 'divider' => true,
      //'divider_angles' => 'upper-start',
      //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

      // 'image_pattern' => '<figure %5$s><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
      // 'image_link' => '/dist/img/illustrations/i6.png',
      // 'image_thumb_size' => 'sandbox_hero_1',
      // 'image_big_size' => 'project_1',

      'shapes' => array('<div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>'),

      'column_class_1' => 'order-lg-2',
      'column_class_2' => '',

   )
);

$final_icon = '<img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />';
$icon = new CW_Icon(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $final_icon, NULL);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>

   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-lg-6 position-relative <?php echo $block->column_class_1; ?>">
            <?php echo $block->shapes; ?>
            <!--/shapes -->
            <div class="overlap-grid overlap-grid-2">
               <div class="item">
                  <?php if (have_rows('cw_multi_image')) {
                     while (have_rows('cw_multi_image')) {
                        the_row();
                        $cw_image_1 = get_sub_field('cw_image_1');
                        if ($cw_image_1) { ?>
                           <figure class="rounded shadow"><img src="<?php echo esc_url($cw_image_1['url']); ?>" srcset="<?php echo esc_url($cw_image_1['url']); ?>" alt="<?php echo esc_attr($cw_image_1['alt']); ?>"></figure>
                        <?php } else { ?>
                           <figure class="rounded shadow"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/about2.jpg" srcset="./assets/img/photos/about2@2x.jpg 2x" alt=""></figure>
                  <?php }
                     }
                  } ?>
               </div>
               <div class="item">
                  <?php if (have_rows('cw_multi_image')) {
                     while (have_rows('cw_multi_image')) {
                        the_row();
                        $cw_image_2 = get_sub_field('cw_image_2');
                        if ($cw_image_2) { ?>
                           <figure class="rounded shadow"><img src="<?php echo esc_url($cw_image_2['url']); ?>" srcset="<?php echo esc_url($cw_image_2['url']); ?>" alt="<?php echo esc_attr($cw_image_2['alt']); ?>"></figure>
                        <?php } else { ?>
                           <figure class="rounded shadow"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/about3.jpg" srcset="./assets/img/photos/about3@2x.jpg 2x" alt=""></figure>
                  <?php }
                     }
                  } ?>
               </div>
            </div>
         </div>
         <!--/column -->
         <div class="col-lg-6 <?php echo $block->column_class_2; ?>">
            <?php echo $icon->final_icon; ?>
            <!--/final_icon -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle; ?>
            <!--/subtitle -->
            <?php echo $block->paragraph; ?>
            <!--/pargraph -->
            <?php echo $block->list; ?>
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->

</section>
<!-- /section -->