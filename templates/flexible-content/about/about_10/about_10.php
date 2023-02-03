<?php

/**
 * About 10
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Hi, I\'m Julia, a documentary wedding and couples photographer currently working from and based in London.',
      'patternTitle' => '<h2 class="display-5 mb-5">%s</h2>',

      'paragraph' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio. Sed posuere consectetur est at lobortis facilisis in.',
      'patternParagraph' => '<p class="mb-6">%s</p>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'swiper' => array(
         'swiper_container_class' => 'w-100',
         'image_class' => '',
         'data_thumbs' => NULL,
         'wrapper_image_class' => '',
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_hero_18',
         'image_demo' => '<div class="img-mask mask-1"><img src="' . get_template_directory_uri() . '/dist/img/photos/about29.jpg" alt="" /></div>',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/photos/about29.jpg',
         'image_shape' => 'img-mask mask-1',
         'data_margin' => '30',
         'nav' => 'true',
         'nav_color' => 'nav-light',
         'nav_position' => 'nav-start',
         'dots' => 'true',
         'dots_color' => 'dots-light',
         'dots_position' => 'dots-over',
         'swiper_effect' => 'slide',
         'base_items' => '1',
         'items_xs' => '1',
         'items_sm' => '1',
         'items_md' => '1',
         'items_lg' => '1',
         'items_xl' => '1',
         'items_xxl' => '1',
         'autoplay' => 'false',
         'autoplay_time' => '3000',
         'loop' => 'false',
         'autoheight' => 'false'
      ),

      'label_demo' => '<div class="card shadow-lg" style="bottom: 5rem; right: 5rem;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',
      'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',

      'shapes' => array('<div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>'),

      'column_class_1' => 'order-lg-2',
      'column_class_2' => '',

      'features' => '<div class="col-md-4"><h3 class="counter">500K+</h3><p>Shots Taken</p></div> <!--/column -->',
      'features_pattern' => '<div class="col-md-6"><div class="d-flex flex-row %6$s"><div>%2$s</div><div><h4 class="mb-1">%3$s</h4><p class="mb-0">%4$s</p></div></div></div><!--/column -->',

      'list' => 'true',
      'list_demo' => '<div class="row gy-3 gx-xl-8"><div class="col-xl-6"><ul class="icon-list bullet-bg bullet-soft-primary mb-0"><li><span><i class="uil uil-check"></i></span><span>Aenean eu leo quam ornare curabitur blandit tempus.</span></li><li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare donec elit.</span></li></ul></div><!--/column --><div class="col-xl-6"><ul class="icon-list bullet-bg bullet-soft-primary mb-0"><li><span><i class="uil uil-check"></i></span><span>Etiam porta sem malesuada magna mollis euismod.</span></li><li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fermentum massa vivamus faucibus amet euismod.</span></li></ul></div><!--/column --></div><!--/.row -->',

   )
);

$column1 = new CW_Settings(
   $cw_settings = array(
      'title' => 'My Skills',
      'patternTitle' => '<h3>%s</h3>',

      'paragraph' => 'Etiam porta sem malesuada magna mollis euismod. Praesent commodo cursus magna vel consectetur purus sit amet fermentum.',
      'patternParagraph' => '<p>%s</p>',

      'progress' => '<ul class="progress-list"><li><p>Photoshop</p><div class="progressbar line soft-primary" data-value="100"></div></li><li><p>Final Cut</p><div class="progressbar line soft-primary" data-value="80"></div></li><li><p>Motion Video</p><div class="progressbar line soft-primary" data-value="85"></div></li><li><p>Manupilation</p><div class="progressbar line soft-primary" data-value="75"></div></li></ul><!-- /.progress-list -->',
      'progress_item_wrappers' => array('<div class="row gy-6 text-center">', '</div>', '<div class="col-6">', '</div>'),

   )
);

$column2 = new CW_Settings(
   $cw_settings = array(
      'title' => 'Why Choose Me?',
      'patternTitle' => '<h3>%s</h3>',

      'paragraph' => 'Vestibulum id ligula porta felis euismod semper. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Nullam id dolor id nibh ultricies. Cras mattis consectetur purus amet fermentum.',
      'patternParagraph' => '<p>%s</p>',

      'list' => 'true',
      'list_demo' => '<ul class="icon-list bullet-bg bullet-soft-primary"><li><i class="uil uil-check"></i>Aenean eu leo quam pellentesque.</li><li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis.</li><li><i class="uil uil-check"></i>Donec id elit non mi porta gravida.</li><li><i class="uil uil-check"></i>Fusce dapibus tellus ac commodo.</li><li><i class="uil uil-check"></i>Cras justo odio dapibus ac facilisis in.</li></ul>',

   )
);

$column3 = new CW_Settings(
   $cw_settings = array(
      'title' => 'My Process',
      'patternTitle' => '<h3>%s</h3>',

      'features' => '<div class="d-flex flex-row mb-5"><div><span class="icon btn btn-circle btn-soft-primary disabled mt-1 me-5"><span class="number fs-18">1</span></span></div><div><h5 class="mb-1">Collect Ideas</h5><p class="mb-0">Nulla vitae elit libero pharetra augue dapibus. Praesent commodo cursus.</p></div></div>',
      'features_pattern' => '<div class="d-flex flex-row mb-5 %1$s"><div>%2$s</div><div><h4 class="mb-1">%3$s</h4><p class="mb-0">%4$s</p></div></div>',
      'features_style_icon' => 'me-5',

   )
);
?>


<section class="wrapper bg-light">
   <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
      <div class="row gx-md-8 gx-xl-12 gy-6 align-items-center">
         <div class="col-md-8 col-lg-6 mx-auto">
            <?php echo $block->swiper_final; ?>
            <!--/swiper -->
         </div>
         <!--/column -->
         <div class="col-lg-6">
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->paragraph; ?>
            <!--/pargraph -->
            <div class="row counter-wrapper gy-6">
               <?php echo $block->features; ?>
               <!--/features -->
            </div>
            <!--/.row -->
         </div>
         <!--/column -->
      </div>
      <!-- /.row -->
      <div class="row gx-md-8 gx-xl-12 gy-6 mt-8">
         <div class="col-lg-4">
            <?php echo $column1->title; ?>
            <!--/title -->
            <?php echo $column1->paragraph; ?>
            <!--/pargraph -->
            <?php echo $column1->progress; ?>
            <!-- /.progress-list -->
         </div>
         <!-- /column -->
         <div class="col-lg-4">
            <?php echo $column2->title; ?>
            <!--/title -->
            <?php echo $column2->paragraph; ?>
            <!--/pargraph -->
            <?php echo $column1->list; ?>
            <!-- /list -->
         </div>
         <!-- /column -->
         <div class="col-lg-4">
            <?php echo $column3->title; ?>
            <!--/title -->
            <?php echo $column3->features; ?>
            <!--/features -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->