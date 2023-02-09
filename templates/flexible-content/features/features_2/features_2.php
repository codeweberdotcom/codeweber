<?php

/**
 * Features 2
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'The service we offer is specifically designed to meet your needs.',
      'patternTitle' => '<h3 class="display-4 mb-9 %2$s">%1$s</h3>',
      // 'paragraph' => 'We help our clients to increase their website traffic, rankings and visibility in search results.',
      // 'patternParagraph' => '<p class="lead fs-lg mb-7 %2$s">%1$s</p>',
      'subtitle' => 'What We Do?',
      'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3 %2$s">%1$s</h2>',
      // 'buttons' => '<span><a class="btn btn-primary rounded-pill me-2">Try It For Free</a></span>',
      // 'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,
      // 'image_pattern' => '<figure %5$s title="dsdsds"><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
      // 'image_link' => '/dist/img/illustrations/i2.png',
      // 'image_thumb_size' => 'sandbox_hero_1',
      // 'image_big_size' => 'project_1',
      // 'swiper' => array('swiper' => true, 'xs' => '1'),
      //'shapes' => array('<div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>', '<div class="shape bg-dot yellow rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>'),

      'features' => '<div class="col-md-6 col-lg-3"><div class="icon btn btn-block btn-lg btn-soft-yellow pe-none mb-5"> <i class="uil uil-phone-volume"></i> </div><h4>24/7 Support</h4><p class="mb-3">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo.</p><a href="#" class="more hover link-yellow">Learn More</a></div><!--/column -->',
      'features_pattern' => '<div class="col-md-6 col-lg-3 %1$s">%2$s<h4>%3$s</h4><p class="mb-3">%4$s</p>%5$s</div><!--/column -->'
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-lg-8 col-xl-7 col-xxl-6">
            <?php echo $block->subtitle; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
         </div>
         <!-- /column -->
      </div>
      <!-- /row -->
      <div class="row gx-md-8 gy-8">
         <?php echo $block->features; ?>
         <!--/features -->
      </div>
      <!--/row -->
   </div>
   <!-- /container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->