<?php
/* Add settings */
$settings = new Settings();

$settings->title = 'We bring rapid solutions for your business';
$settings->subtitle = 'Hello! This is Sandbox';
$settings->imageurl = '/dist/img/photos/about5.jpg';
$settings->videourl = '/dist/media/movie.mp4';
$settings->backgroundurl = '/dist/img/photos/bg2.jpg';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = $settings->root_theme . '/dist/img/photos/bg2.jpg';
// $settings->backgroundcolor_light = 'soft-primary';
$settings->textcolor = 'light';

$settings->GetDataACF();


/* Add swiper */
$swiper = new SwiperSlider();
$swiper->root_theme = get_template_directory_uri();
$swiper->class_swiper = 'swiper-container dots-over shadow-lg rounded';
$swiper->data_nav = 'data-nav="true"';
$swiper->data_dots = 'data-dots="true"';
$swiper->data_margin = 'data-margin="5"';
$swiper->image_size = 'sandbox_hero_10';
$swiper->data_items_lg = 'data-items-lg=1';
$swiper->data_items_md = 'data-items-md=1';
$swiper->data_items_xs = 'data-items-xs=1';
$swiper->data_autoplay = 'data-autoplay="true"';
//$swiper->data_effect = 'data-effect="slide"';
$swiper->data_autoplaytime = 'data-autoplaytime="3000"';
$swiper->default_media = '<figure class="rounded"><img src="' . $swiper->root_theme . '/dist/img/photos/about5.jpg" srcset="' . $swiper->root_theme . '/dist/img/photos/about5@2x.jpg 2x" alt="" /></figure>';

/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded-pill mb-5";
$button->button_size = NULL;
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<a href="' . $settings->videourl . '/dist/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a>';

/* Add Counters */
$counters = new Counter;
$counters->textcolor = 'light';
$counters->counters_default = '<div class="col-6 col-lg-3"><h3 class="counter counter-lg text-white">7518</h3><p>Completed Projects</p></div><!--/column --><div class="col-6 col-lg-3"><h3 class="counter counter-lg text-white">3472</h3><p>Satisfied Customers</p></div><!--/column --><div class="col-6 col-lg-3"><h3 class="counter counter-lg text-white">2184</h3><p>Expert Employees</p></div><!--/column --><div class="col-6 col-lg-3"><h3 class="counter counter-lg text-white">4523</h3><p>Awards Won</p></div>';
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo esc_html($args['block_class']); ?> wrapper image-wrapper bg-image bg-overlay bg-overlay-300 text-<?php echo $settings->textcolor; ?>" data-image-src="<?php echo $settings->backgroundurl; ?>">
   <div class="container pt-17 pb-19 pt-md-19 pb-md-20 text-center">
      <div class="row mb-11">
         <div class="col-md-9 col-lg-7 col-xxl-6 mx-auto" data-cues="zoomIn" data-group="page-title" data-interval="-200">
            <div class="h6 text-uppercase ls-xl mb-5 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->subtitle; ?></div>
            <h1 class="display-1 mb-7 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->title; ?></h1>
            <!--  buttons group -->
            <?php $button->showbuttons(); ?>
            <!--/buttons group -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light angled upper-end lower-end">
   <div class="container pb-14 pb-md-16">
      <div class="row">
         <div class="col-12 mt-n20">
            <!--  swiper -->
            <?php echo $swiper->GetSwiper(); ?>
            <!--/swiper -->
            <div class="row" data-cue="slideInUp">
               <div class="col-xl-10 mx-auto">
                  <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-300 text-white mt-n5 mt-lg-0 mt-lg-n50p mb-lg-n50p border-radius-lg-top" data-image-src="<?php echo $settings->backgroundurl; ?>">
                     <div class="card-body p-9 p-xl-10">
                        <div class="row align-items-center counter-wrapper gy-4 text-center">
                           <!--  counters -->
                           <?php $counters->Counters(); ?>
                           <!--/counters -->
                           <!--/column -->
                        </div>
                        <!--/.row -->
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
   <!-- /.container -->
</section>
<!-- /section -->