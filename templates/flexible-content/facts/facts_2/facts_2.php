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

      'divider' => true,

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',

      'features' => '<div class="col-md-4"><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" /><h3 class="counter">7518</h3><p class="mb-0">Completed Projects</p></div><!--/column -->',
      'features_pattern' => '<div class="col-md-4 %1$s">%2$s<div class="h3 counter">%3$s</div><p class="mb-0">%4$s</p></div><!--/column -->',
      'features_style_icon' => 'mb-3'
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-lg-4 <?php echo $block->column_class_1; ?>">
            <?php echo $block->subtitle; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
         </div>
         <!-- /column -->
         <div class="col-lg-8 <?php echo $block->column_class_2; ?>">
            <div class="row align-items-center counter-wrapper gy-6 text-center">
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