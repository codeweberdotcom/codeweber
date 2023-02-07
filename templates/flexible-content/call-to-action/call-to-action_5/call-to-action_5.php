<?php

/**
 *  Call to Action 5
 */


$block = new CW_Settings(
   $cw_settings = array(
      // 'subtitle' => 'FAQ',
      // 'patternSubtitle' => '<div class="fs-15 text-uppercase text-primary mb-3">%s</div>',

      'title' => 'Analyze Now',
      'patternTitle' => '<h2 class="fs-16 text-uppercase text-primary mb-3">%s</h2>',

      'paragraph' => 'Wonder how much faster your website can go? Easily check your SEO Score now.',
      'patternParagraph' => '<p class="display-4 mb-0">%s</p>',

      // 'buttons' => '<a href="#" class="btn btn-primary rounded-pill">Join Us</a>',
      // 'buttons_pattern' => '<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-soft-primary',
      // 'background_data_default' => '/dist/img/map.png',
      //'background_video_preview' => '/dist/img/photos/movie2.jpg',
      //'background_video_url' => '/dist/media/movie2.mp4',
      //'background_pattern_url' => '/dist/img/pattern.png',

      'divider' => true,

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row mb-8">
         <div class="col-lg-8 mx-auto text-center">
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->paragraph; ?>
            <!--/paragraph -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="row">
         <div class="col-lg-5 mx-auto">
            <form action="#">
               <div class="form-floating input-group">
                  <input type="url" class="form-control border-0" placeholder="Enter Website URL" id="analyze">
                  <label for="analyze">Enter Website URL</label>
                  <button class="btn btn-primary" type="button">Analyze</button>
               </div>
            </form>
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