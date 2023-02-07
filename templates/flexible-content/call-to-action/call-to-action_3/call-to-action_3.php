<?php

/**
 *  Call to Action 3
 */

//Icon
$final_icon = '<img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/puzzle-2.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />';
$icon = new CW_Icon(NULL, NULL, 'mb-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $final_icon);

$block = new CW_Settings(
   $cw_settings = array(
      // 'subtitle' => 'FAQ',
      // 'patternSubtitle' => '<div class="fs-15 text-uppercase text-primary mb-3">%s</div>',

      'title' => 'Join Our Community',
      'patternTitle' => '<h2 class="display-4 mb-3">%s</h2>',

      'paragraph' => 'We are trusted by over 5000+ clients. Join them by using our services and grow your business.',
      'patternParagraph' => '<p class="lead fs-lg mb-6 px-xl-10 px-xxl-15">%s</p>',

      'buttons' => '<a href="#" class="btn btn-primary rounded">Join Us</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',
      // 'background_data_default' => '/dist/img/photos/bg3.jpg',
      //'background_video_preview' => '/dist/img/photos/movie2.jpg',
      //'background_video_url' => '/dist/media/movie2.mp4',
      //'background_pattern_url' => '/dist/img/pattern.png',

      'divider' => true,

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16 text-center">
      <div class="row">
         <div class="col-md-9 col-lg-7 col-xl-7 mx-auto text-center">
            <?php echo $icon->final_icon; ?>
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