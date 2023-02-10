<?php

/**
 * Features 9
 */


$block = new CW_Settings(
   $cw_settings = array(

      'title' => 'We have considered our solutions to support every stage of growth.',
      'patternTitle' => '<h2 class="display-4 mb-5">%s</h2>',

      'paragraph' => 'Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.',
      'patternParagraph' => '<p class="mb-5">%s</p>',

      // 'subtitle' => 'We are a digital and branding company that believes in the power of creative strategy and along with great design.',
      // 'patternSubtitle' => '<p class="lead fs-lg">%s</p>',

      'background_class_default' => 'wrapper bg-light',
      // 'background_data_default' => '/dist/img/map.png',
      //'background_video_preview' => '/dist/img/photos/movie2.jpg',
      //'background_video_url' => '/dist/media/movie2.mp4',
      //'background_pattern_url' => '/dist/img/pattern.png',

      'divider' => true,


      'multi_image' => array(
         array('/dist/img/photos/sa5.jpg', 'sandbox_about_4', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="img-fluid rounded shadow-lg mb-5"><img src="' . get_template_directory_uri() . '/dist/img/photos/sa5.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa5@2x.jpg 2x" alt=""></figure>'),

         array('/dist/img/photos/sa6.jpg', 'sandbox_about_4', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="img-fluid rounded shadow-lg d-flex col-10 ms-auto"><img src="' . get_template_directory_uri() . '/dist/img/photos/sa6.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa6@2x.jpg 2x" alt=""></figure>'),

         array('/dist/img/photos/sa7.jpg', 'sandbox_about_4', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="img-fluid rounded shadow-lg my-5"><img src="' . get_template_directory_uri() . '/dist/img/photos/sa7.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa7@2x.jpg 2x" alt=""></figure>'),

         array('/dist/img/photos/sa8.jpg', 'sandbox_about_4', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="img-fluid rounded shadow-lg d-flex col-10"><img src="' . get_template_directory_uri() . '/dist/img/photos/sa8.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa8@2x.jpg 2x" alt=""></figure>'),
      ),

      'features' => '<div class="col-md-6 col-lg-4"><div class="d-flex flex-row"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm text-aqua me-4" alt="" /></div><div><h4 class="mb-1">Fitness Goal</h4><p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem aget elit nullam quis risus eget.</p></div></div></div><!--/column -->',
      'features_pattern' => '<div class="col-md-6 col-lg-4 %1$s"><div class="d-flex flex-row"><div>%2$s</div><div><h4>%3$s</h4><p class="mb-2">%4$s</p>%5$s</div></div></div><!--/column -->',
      'features_style_icon' => 'me-4',

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-0 gy-10 align-items-center">
         <div class="col-lg-6">
            <div class="row g-6 text-center">
               <div class="col-md-6">
                  <div class="row">
                     <div class="col-lg-12">
                        <figure class="rounded mb-6"><img src="./assets/img/photos/se1.jpg" srcset="./assets/img/photos/se1@2x.jpg 2x" alt=""></figure>
                     </div>
                     <!-- /column -->
                     <div class="col-lg-12">
                        <div class="card">
                           <div class="card-body">
                              <div class="icon btn btn-circle btn-lg btn-soft-purple disabled mb-3"> <i class="uil uil-monitor"></i> </div>
                              <h4>Web Design</h4>
                              <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida.</p>
                              <a href="#" class="more hover link-purple">Learn More</a>
                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.card -->
                     </div>
                     <!-- /column -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /column -->
               <div class="col-md-6">
                  <div class="row">
                     <div class="col-lg-12 order-md-2">
                        <figure class="rounded mb-6 mb-md-0"><img src="./assets/img/photos/se2.jpg" srcset="./assets/img/photos/se2@2x.jpg 2x" alt=""></figure>
                     </div>
                     <!-- /column -->
                     <div class="col-lg-12">
                        <div class="card mb-md-6 mt-lg-6">
                           <div class="card-body">
                              <div class="icon btn btn-circle btn-lg btn-soft-purple disabled mb-3"> <i class="uil uil-mobile-android"></i> </div>
                              <h4>Mobile Design</h4>
                              <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida.</p>
                              <a href="#" class="more hover link-purple">Learn More</a>
                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.card -->
                     </div>
                     <!-- /column -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /column -->
         <div class="col-lg-5 offset-lg-1">
            <h2 class="display-4 mb-3">What We Do?</h2>
            <p class="lead fs-lg">The full service we are offering is specifically designed to meet your business needs.</p>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas faucibus mollis elit interdum. Duis mollis, est non commodo luctus, nisi erat ligula. </p>
            <a href="#" class="btn btn-purple rounded-pill mt-3">More Details</a>
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