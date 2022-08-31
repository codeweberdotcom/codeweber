<?php
/* Add settings */
$settings = new Settings();
$settings->title = "Package Design";
$settings->paragraph = 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Maecenas sed diam eget risus varius.';
$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/i2.png';
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'light';
$settings->textcolor = 'white';
$settings->GetDataACF();

/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded-pill mt-6";
$button->button_size = NULL;
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap justify-content-lg-start";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<span><a href="#" class="btn btn-soft-leaf rounded-pill mt-6 mb-0">More Details</a></span>';


/** Add list icon */
$listicon = new ListUnicon;
$listicon->default_list = '<div class="row gy-3">
          <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
              <li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare curabitur blandit consectetur.</span></li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare aenean leo.</span></li>
            </ul>
          </div>
          <!--/column -->
          <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
              <li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada mollis nisl ornare sem.</span></li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus sagittis lacus augue rutrum maecenas.</span></li>
            </ul>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->';

/** Image */
$image = new ImageCustomizable;
$image->root_theme = get_template_directory_uri();
$image->imagefull = get_template_directory_uri() . '/dist/img/photos/se3.jpg';
$image->imagesmall = get_template_directory_uri() . '/dist/img/photos/se3.jpg';
$image->imagebigsize = 'brk_big';
$image->imagethumbsize = 'sandbox_features_1';
?>

<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <?php if (have_rows('features_repeater')) : ?>
         <?php $a = 0;
         while (have_rows('features_repeater')) : the_row();
            $count = $a++;
         endwhile;
         $i = 0;
         while (have_rows('features_repeater')) : the_row();
            if ($i == $count) {
               $class_features_row = 'row gx-lg-8 gx-xl-12 gy-10 align-items-center';
            } else {
               $class_features_row = 'row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-18 align-items-center';
            }
            if (($i % 2) == 0) {
               $class_features_col = 'col-lg-6 position-relative';
            } else {
               $class_features_col = 'col-lg-6 order-lg-2 position-relative';
            }
            if (get_sub_field('title')) {
               $settings->title = get_sub_field('title');
            }
            if (get_sub_field('paragraph')) {
               $settings->paragraph = get_sub_field('paragraph');
            }
         ?>
            <div class="<?php echo $class_features_row; ?>">
               <div class="<?php echo $class_features_col; ?>">
                  <div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>
                  <div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>
                  <figure class="rounded mb-0">
                     <?php $image->image(); ?>
                  </figure>
               </div>
               <!--/column -->
               <div class="col-lg-6">
                  <h3 class="display-4 mb-4"><?php echo $settings->title; ?></h3>
                  <p class="mb-5"><?php echo $settings->paragraph; ?></p>
                  <?php $listicon->listunicons(); ?>
                  <!--  buttons group -->
                  <?php $button->showbuttons(); ?>
                  <!--/buttons group -->
               </div>
               <!--/column -->
            </div>
            <!--/.row -->
            <?php $i++; ?>
         <?php endwhile; ?>
      <?php else : ?>
         <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
               <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-18 align-items-center">
                  <div class="col-lg-6 position-relative">
                     <div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>
                     <div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>
                     <figure class="rounded mb-0"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/se3.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist//img/photos/se3@2x.jpg 2x" alt=""></figure>
                  </div>
                  <!--/column -->
                  <div class="col-lg-6">
                     <h3 class="display-4 mb-4">Package Design</h3>
                     <p class="mb-5">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Maecenas sed diam eget risus varius.</p>
                     <div class="row gy-3">
                        <div class="col-xl-6">
                           <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                              <li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare curabitur blandit consectetur.</span></li>
                              <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare aenean leo.</span></li>
                           </ul>
                        </div>
                        <!--/column -->
                        <div class="col-xl-6">
                           <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                              <li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada mollis nisl ornare sem.</span></li>
                              <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus sagittis lacus augue rutrum maecenas.</span></li>
                           </ul>
                        </div>
                        <!--/column -->
                     </div>
                     <!--/.row -->
                     <a href="#" class="btn btn-soft-leaf rounded-pill mt-6 mb-0">More Details</a>
                  </div>
                  <!--/column -->
               </div>
               <!--/.row -->
               <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                  <div class="col-lg-6 order-lg-2 position-relative">
                     <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
                     <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
                     <figure class="rounded mb-0"><img src="<?php echo get_template_directory_uri(); ?>/dist//img/photos/se4.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist//img/photos/se4@2x.jpg 2x" alt=""></figure>
                  </div>
                  <!--/column -->
                  <div class="col-lg-6">
                     <h3 class="display-4 mb-4">Corporate Design</h3>
                     <p class="mb-5">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                     <div class="row gy-3">
                        <div class="col-xl-6">
                           <ul class="icon-list bullet-bg bullet-soft-aqua mb-0">
                              <li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare curabitur blandit consectetur.</span></li>
                              <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare aenean leo.</span></li>
                           </ul>
                        </div>
                        <!--/column -->
                        <div class="col-xl-6">
                           <ul class="icon-list bullet-bg bullet-soft-aqua mb-0">
                              <li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada mollis nisl ornare sem.</span></li>
                              <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus sagittis lacus augue rutrum maecenas.</span></li>
                           </ul>
                        </div>
                        <!--/column -->
                     </div>
                     <!--/.row -->
                     <a href="#" class="btn btn-soft-aqua rounded-pill mt-6 mb-0">More Details</a>
                  </div>
                  <!--/column -->
               </div>
               <!--/.row -->
            </div>
            <!-- /.container -->
         </section>
         <!-- /section -->
      <?php endif; ?>
   </div>
   <!-- /.container -->
</section>
<!-- /section -->