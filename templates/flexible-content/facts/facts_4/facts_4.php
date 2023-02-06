<?php

/**
 * Facts 4
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'We are trusted by over 5000+ clients. Join them now and grow your business.',
      'patternTitle' => '<h2 class="display-4 mb-8 px-lg-12">%s</h2>',

      // 'paragraph' => 'Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur.',
      // 'patternParagraph' => '<p class="mb-0">%s</p>',

      'subtitle' => 'Join Our Community',
      'patternSubtitle' => '<div class="fs-15 text-uppercase text-muted mb-3">%s</div>',

      'background_class_default' => 'wrapper image-wrapper bg-auto no-overlay bg-image text-center bg-map',
      'background_data_default' => '/dist/img/map.png',

      'divider' => true,

      'features' => '<div class="col-md-4 text-center"><h3 class="counter counter-lg text-primary">7518</h3><p>Completed Projects</p></div><!--/column -->',
      'features_pattern' => '<div class="col-md-4 text-center %1$s"><div class="h3 counter counter-lg text-primary">%3$s</div><p>%4$s</p></div><!--/column -->',
   )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 pt-md-16 pb-md-18">
      <div class="row pt-md-12">
         <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto">
            <?php echo $block->subtitle; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /column -->
      <div class="row pb-md-12">
         <div class="col-md-10 col-lg-9 col-xl-7 mx-auto">
            <div class="row align-items-center counter-wrapper gy-4 gy-md-0">
               <?php echo $block->features; ?>
               <!--/features -->
            </div>
            <!--/.row -->
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