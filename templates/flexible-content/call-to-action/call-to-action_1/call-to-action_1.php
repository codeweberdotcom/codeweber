<?php

/**
 *  Call to Action 1
 */


$block = new CW_Settings(
   $cw_settings = array(

      'title' => 'Join Our Community',
      'patternTitle' => '<h2 class="display-4 mb-3 text-center">%s</h2>',

      'paragraph' => 'We are trusted by over 5000+ clients. Join them by using our services and grow your business.',
      'patternParagraph' => '<p class="lead mb-5 px-md-16 px-lg-3">%s</p>',

      'buttons' => '<a href="#" class="btn btn-primary rounded-pill">Join Us</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper image-wrapper bg-auto no-overlay bg-image text-center py-14 py-md-16 bg-map',
      'background_data_default' => '/dist/img/map.png',

      'divider' => true,

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-0 py-md-18">
      <div class="row">
         <div class="col-lg-6 col-xl-5 mx-auto">
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->paragraph; ?>
            <!--/paragraph -->
            <?php echo $block->buttons; ?>
            <!--/buttons group -->
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