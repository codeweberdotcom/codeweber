<?php

/**
 * Facts 2
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'We are proud of our works',
      'patternTitle' => '<h2 class="display-4 pe-xl-15">%s</h2>',

      // 'paragraph' => 'Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur.',
      // 'patternParagraph' => '<p class="mb-0">%s</p>',

      'subtitle' => 'Company Facts',
      'patternSubtitle' => '<p class="fs-15 text-uppercase text-primary mb-3">%s</p>',

      'background_class_default' => 'wrapper bg-light',
      'background_data_default' => '/dist/img/photos/bg2.jpg',

      'divider' => true,

      'features' => '<div class="col-6 col-lg-3"><h3 class="counter counter-lg text-white">7518</h3><p>Completed Projects</p></div><!--/column -->',
      'features_pattern' => '<div class="col-6 col-lg-3 %1$s"><h3 class="counter counter-lg text-white">%3$s</h3><p>%4$s</p></div><!--/column -->',
      // 'features_style_icon' => 'mb-3'
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>">
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-xl-10 mx-auto">
            <div class="card image-wrapper bg-full bg-image bg-overlay" <?php echo $block->background_data; ?>>
               <div class="card-body p-9 p-xl-10">
                  <div class="row align-items-center counter-wrapper gy-4 text-center text-white">
                     <?php echo $block->features; ?>
                     <!--/features -->
                  </div>
                  <!--/.row -->
               </div>
               <!--/.card-body -->
            </div>
            <!--/.card -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->