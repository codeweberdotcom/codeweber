<?php

/**
 * Page Header 02
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Get in Touch',
      'patternTitle' => '<h1 class="display-1 text-white mb-3">%s</h1>',

      'paragraph' => 'Have any questions? Reach out to us from our contact form and we will get back to you shortly.',
      'patternParagraph' => '<p class="lead px-xl-10 px-xxl-10">%s</p>',

      'background_class_default' => 'wrapper bg-dark text-white',

      'divider' => true,

      // 'column_class_1' => 'order-lg-2',
      // 'column_class_2' => '',
   )
);

?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
      <div class="row">
         <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->paragraph; ?>
            <!--/paragraph -->
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