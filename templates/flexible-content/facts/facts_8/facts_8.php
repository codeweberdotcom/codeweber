<?php

/**
 * Facts 7
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Save your time and money by choosing our professional team.',
      'patternTitle' => '<h2 class="display-4 mb-10 px-lg-20 px-xl-20">%s</h2>',

      'subtitle' => 'Company Facts',
      'patternSubtitle' => '<p class="fs-16 text-uppercase text-muted mb-3">%s</p>',

      'background_class_default' => 'wrapper bg-soft-primary',

      'divider' => true,


      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',

      'progress' => '<div class="col-md-6 col-lg-3">
              <div class="progressbar semi-circle purple" data-value="75"></div>
              <h4>New Visitors</h4>
              <p class="mb-0">Maecenas faucibus mollis interdum. Aenean eu leo.</p>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-3">
              <div class="progressbar semi-circle leaf" data-value="80"></div>
              <h4>Social Media</h4>
              <p class="mb-0">Maecenas faucibus mollis interdum. Aenean eu leo.</p>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-3">
              <div class="progressbar semi-circle pink" data-value="60"></div>
              <h4>Referrals</h4>
              <p class="mb-0">Maecenas faucibus mollis interdum. Aenean eu leo.</p>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-3">
              <div class="progressbar semi-circle yellow" data-value="90"></div>
              <h4>Search Engines</h4>
              <p class="mb-0">Maecenas faucibus mollis interdum. Aenean eu leo.</p>
            </div>
            <!-- /column -->',

      'progress_item_wrappers' => array('<div class="row gy-6 text-center">', '</div>', '<div class="col-md-6 col-lg-3">', '</div>'),
   )
);
?>



<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-17">
      <div class="row text-center">
         <div class="col-xl-11 col-xxl-10 mx-auto">
            <?php echo $block->subtitle; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->progress; ?>
            <!-- /.progress-list -->
            <!-- /.row -->
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