<?php

/**
 *  Call to Action 4
 */


$block = new CW_Settings(
   $cw_settings = array(
      // 'subtitle' => 'FAQ',
      // 'patternSubtitle' => '<div class="fs-15 text-uppercase text-primary mb-3">%s</div>',

      'title' => 'Join Our Community',
      'patternTitle' => '<h2 class="fs-16 text-uppercase text-white mb-3">%s</h2>',

      'paragraph' => 'We are <span class="underline-3 style-2 yellow">trusted</span> by over 5000+ clients. Join them now and grow your business.',
      'patternParagraph' => '<p class="display-3 mb-8 px-lg-8 text-white">%s</p>',

      'buttons' => '<div class="d-flex justify-content-center"><span><a class="btn btn-white rounded">Get Started</a></span></div>',
      'buttons_pattern' => '<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'card image-wrapper bg-full bg-image bg-overlay bg-overlay-300 mb-14',
      'background_data_default' => '/dist/img/photos/bg16.png',
      //'background_video_preview' => '/dist/img/photos/movie2.jpg',
      //'background_video_url' => '/dist/media/movie2.mp4',
      //'background_pattern_url' => '/dist/img/pattern.png',

      // 'divider' => true,

   )
);
?>

<section class="wrapper bg-light">
   <div class="container pb-13 pb-md-15">
      <div id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
         <div class="card-body p-10 p-xl-12">
            <div class="row text-center">
               <div class="col-xl-11 col-xxl-9 mx-auto">
                  <?php echo $block->title; ?>
                  <!--/title -->
                  <?php echo $block->paragraph; ?>
                  <!--/paragraph -->
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
            <?php echo $block->buttons; ?>
            <!--/buttons group -->
         </div>
         <!--/.card-body -->
      </div>
      <!--/.card -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->