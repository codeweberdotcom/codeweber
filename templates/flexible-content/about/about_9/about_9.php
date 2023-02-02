<?php

/**
 * About 9
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'We make spending stress free so you have the perfect control.',
      'patternTitle' => '<h2 class="display-4 mb-4 me-lg-n5">%s</h2>',

      'paragraph' => 'Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus. Integer posuere erat a ante venenatis dapibus posuere velit.',
      'patternParagraph' => '<p class="mb-6">%s</p>',

      'subtitle' => 'What Makes Us Different?',
      'patternSubtitle' => '<p class="fs-16 text-uppercase text-gradient gradient-1 mb-3">%s</p>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'swiper' => array(
         'swiper_container_class' => 'overflow-hidden',
         'image_class' => '',
         'data_thumbs' => NULL,
         'wrapper_image_class' => '',
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_hero_2',
         'image_demo' => '<figure class="rounded"><img class="img-fluid" src="' . get_template_directory_uri() . '/dist/img/photos/about27.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about27@2x.jpg 2x" alt="" /></figure>',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/photos/about27.jpg',
         'image_shape' => 'rounded',
         'data_margin' => '30',
         'nav' => 'true',
         'nav_color' => 'nav-light',
         'nav_position' => 'nav-start',
         'dots' => 'true',
         'dots_color' => 'dots-light',
         'dots_position' => 'dots-over',
         'swiper_effect' => 'slide',
         'base_items' => '1',
         'items_xs' => '1',
         'items_sm' => '1',
         'items_md' => '1',
         'items_lg' => '1',
         'items_xl' => '1',
         'items_xxl' => '1',
         'autoplay' => 'false',
         'autoplay_time' => '1500',
         'loop' => 'false',
         'autoheight' => 'false',
      ),

      'label_demo' => '<div class="card shadow-lg position-absolute d-none d-md-block" style="top: 15%%; left: -7%%;"> <div class="card-body py-4 px-5">
      <div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/solid/cloud-group.svg" class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-3" alt="" /></div><div><h3 class="fs-25 counter mb-0 text-nowrap">25000+</h3><p class="fs-16 lh-sm mb-0 text-nowrap">Happy Clients</p></div></div></div><!--/.card-body --></div><!--/.card -->',

      'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',


      // 'shapes' => array('<div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>'),

      'list' => 'true',
      'list_demo' => '<ul class="icon-list bullet-bg bullet-soft-primary"><li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li>
      <li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li><li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li>
      </ul>',

      'column_class_1' => 'order-lg-2',
      'column_class_2' => '',

      // 'features' => '<div class="col-md-6"><div class="d-flex flex-row"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm me-4" alt="" /></div><div><h4 class="mb-1">Our Mission</h4><p class="mb-0">Dapibus eu leo quam ornare curabitur blandit tempus.</p></div></div></div><!--/column -->',

      // 'features_pattern' => '<div class="col-md-6"><div class="d-flex flex-row %6$s"><div>%2$s</div><div><h4 class="mb-1">%3$s</h4><p class="mb-0">%4$s</p></div></div></div><!--/column -->',

      // 'features_style_icon' => 'me-4'
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-md-8 gy-10 align-items-center">
         <div class="col-lg-6 offset-lg-1 order-lg-2 position-relative">
            <?php echo $block->swiper_final; ?>
            <!--/swiper -->
            <div class="card shadow-lg position-absolute text-center d-none d-md-block" style="bottom: 10%; left: -10%;">
               <div class="card-body p-6">
                  <div class="progressbar semi-circle fuchsia mb-3" data-value="80"></div>
                  <h4 class="mb-0">Time Saved</h4>
               </div>
               <!--/.card-body -->
            </div>
            <!--/.card -->
         </div>
         <!--/column -->
         <div class="col-lg-5">
            <?php echo $block->subtitle; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <p class="mb-6"></p>
            <?php echo $block->paragraph; ?>
            <!--/pargraph -->
            <?php echo $block->list; ?>
            <!--/list -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->