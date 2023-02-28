<?php

/**
 * Contact 11
 */

$cf_form = '';
$contact_form = get_sub_field('contact_form');
if ($contact_form) {
   foreach ($contact_form as $post_ids) {
      $contact_link =  do_shortcode('[contact-form-7 id="' . $post_ids . '"]');
   }
   $cf_form = $contact_link;
}

$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Request Photography Pricing',
      'patternTitle' => '<h2 class="display-5 mb-3 text-center">%s</h2>',

      'paragraph' => 'For more information please get in touch using the form below:',
      'patternParagraph' => '<p class="lead fs-lg text-center mb-10">%s</p>',

      'background_class_default' => 'wrapper image-wrapper bg-image bg-overlay',
      'background_data_default' => '/dist/img/photos/bg36.jpg',

   )
);
?>

<section>
   <div id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
      <div class="container py-15 py-md-17">
         <div class="row">
            <div class="col-xl-9 mx-auto">
               <div class="card border-0 bg-white-900">
                  <div class="card-body py-lg-13 px-lg-16">
                     <?php echo $block->title; ?>
                     <!--/title -->
                     <?php echo $block->paragraph; ?>
                     <!--/paragraph -->
                     <?php echo $cf_form; ?>
                     <!-- /form -->
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
   </div>
   <!-- /.wrapper -->
</section>
<!-- /section -->