<?php

/**
 * Pricing 4_1
 */

$tables = new CW_Tables(NULL, NULL, NULL);
$block = new CW_Settings(
   $cw_settings = array(

      'title' => 'Our Pricing',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',

      'subtitle' => 'We offer <span class="underline">great prices</span>, premium and quality products for your business.',
      'patternSubtitle' => '<p class="lead fs-lg %2$s">%1$s</p>',

      'paragraph' => 'Enjoy a <a href="#" class="hover">free 30-day trial</a> and experience the full service. No credit card required!',
      'patternParagraph' => '<p class="%2$s">%1$s</p>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'tabs' => true,
      'tabs_id' => esc_html($args['block_id']),
      // 'tabs_type' => 'type 3',
      //'tabs_col-1' => 'col-md-6',
      //'tabs_col-2' => 'col-md-6',
      'tab_demo' => '<div class="row"><div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-center"><h2 class="fs-15 text-uppercase text-muted mb-3">Why Choose Sandbox?</h2><h3 class="display-4 mb-10 px-xl-10 px-xxl-15">Here are a few reasons why our customers choose Sandbox.</h3></div></div><ul class="nav nav-tabs nav-tabs-bg d-flex justify-content-between nav-justified flex-lg-row flex-column"><li class="nav-item"><a class="nav-link d-flex flex-row active" data-bs-toggle="tab" href="#tab2-1"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/rocket.svg" class="svg-inject icon-svg icon-svg-md text-yellow me-4" alt=""></div><div><h4>Easy Usage</h4><p>Duis mollis commodo luctus cursus commodo tortor mauris.</p></div></a></li><li class="nav-item"><a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-2"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/savings.svg" class="svg-inject icon-svg icon-svg-md text-green me-4" alt=""></div><div><h4>Fast Transactions</h4><p>Vivamus sagittis lacus augue fusce dapibus tellus nibh.</p></div></a></li><li class="nav-item"><a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-3"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/shield.svg" class="svg-inject icon-svg icon-svg-md text-red me-4" alt=""></div><div><h4>Secure Payments</h4><p>Vestibulum ligula porta felis maecenas faucibus mollis.</p></div></a></li></ul><div class="tab-content mt-6 mt-lg-8"><div class="tab-pane fade show active" id="tab2-1"><div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center"><div class="col-lg-6"><div class="row gx-md-5 gy-5 align-items-center"><div class="col-6"><img class="img-fluid rounded shadow-lg d-flex ms-auto" src="' . get_template_directory_uri() . '/dist/img/photos/sa13.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa13@2x.jpg 2x" alt=""></div><div class="col-6"><img class="img-fluid rounded shadow-lg mb-5" src="' . get_template_directory_uri() . '/dist/img/photos/sa14.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa14@2x.jpg 2x" alt=""> <img class="img-fluid rounded shadow-lg d-flex col-10" src="' . get_template_directory_uri() . '/dist/img/photos/sa15.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa15@2x.jpg 2x" alt=""></div></div></div><div class="col-lg-6"><h2 class="mb-3">Easy Usage</h2><p>Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna.</p><ul class="icon-list bullet-bg bullet-soft-yellow"><li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li><li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li><li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li></ul><a href="#" class="btn btn-yellow mt-2">Learn More</a></div></div></div><div class="tab-pane fade" id="tab2-2"><div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center"><div class="col-lg-6 order-lg-2"><div class="row gx-md-5 gy-5"><div class="col-5"><img class="img-fluid rounded shadow-lg my-5 d-flex ms-auto" src="' . get_template_directory_uri() . '/dist/img/photos/sa9.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa9@2x.jpg 2x" alt=""> <img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" src="' . get_template_directory_uri() . '/dist/img/photos/sa10.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa10@2x.jpg 2x" alt=""></div><div class="col-7"><img class="img-fluid rounded shadow-lg mb-5" src="' . get_template_directory_uri() . '/dist/img/photos/sa11.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa11@2x.jpg 2x" alt=""> <img class="img-fluid rounded shadow-lg d-flex col-11" src="' . get_template_directory_uri() . '/dist/img/photos/sa12.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa12@2x.jpg 2x" alt=""></div></div></div><div class="col-lg-6"><h2 class="mb-3">Fast Transactions</h2><p>Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna.</p><ul class="icon-list bullet-bg bullet-soft-green"><li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li><li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li><li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li></ul><a href="#" class="btn btn-green mt-2">Learn More</a></div></div></div><div class="tab-pane fade" id="tab2-3"><div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center"><div class="col-lg-6"><div class="row gx-md-5 gy-5"><div class="col-6"><img class="img-fluid rounded shadow-lg mb-5" src="' . get_template_directory_uri() . '/dist/img/photos/sa5.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa5@2x.jpg 2x" alt=""> <img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" src="' . get_template_directory_uri() . '/dist/img/photos/sa6.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa6@2x.jpg 2x" alt=""></div><div class="col-6"><img class="img-fluid rounded shadow-lg my-5" src="' . get_template_directory_uri() . '/dist/img/photos/sa7.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa7@2x.jpg 2x" alt=""> <img class="img-fluid rounded shadow-lg d-flex col-10" src="' . get_template_directory_uri() . '/dist/img/photos/sa8.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa8@2x.jpg 2x" alt=""></div></div></div><div class="col-lg-6"><h2 class="mb-3">Secure Payments</h2><p>Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna.</p><ul class="icon-list bullet-bg bullet-soft-red"><li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li><li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li><li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li></ul><a href="#" class="btn btn-red mt-2">Learn More</a></div></div></div></div>'
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <?php echo $block->subtitle_first; ?>
      <?php echo $block->title; ?>
      <?php echo $block->subtitle_second; ?>
      <div class="row">
         <div class="col-lg-4">
            <?php echo $block->paragraph; ?>
            <!--/paragraph -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
      <?php echo $block->tabs; ?>
   </div>
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->