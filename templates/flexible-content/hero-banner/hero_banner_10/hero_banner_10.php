<?php
/* Add settings */
$settings = new Settings();

$settings->title = 'We bring solutions to make life <span class="underline-3 style-3 primary">easier.</span>';
$settings->paragraph = 'We help our clients to increase their website traffic, rankings and visibility in search results.';
$settings->imageurl = get_template_directory_uri() . '/dist/img/photos/about15.jpg';
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
// $settings->backgroundcolor_light = 'soft-primary';
$settings->textcolor = 'light';


$settings->GetDataACF();

/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded";
$button->button_size = 'btn-lg';
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<div><a class="btn btn-lg btn-primary rounded mb-5">Read More</a></div>';

/* Add Image*/
$image = new Images;
$image->root_theme = get_template_directory_uri();
$image->image_1 = get_template_directory_uri() . '/dist/img/photos/about15.jpg';
$image->image_size = 'sandbox_hero_10';
$image->GetImage();


/* Add swiper */
$swiper = new SwiperSlider();
$swiper->root_theme = get_template_directory_uri();
$swiper->class_swiper = 'swiper-container dots-over shadow-lg rounded mt-md-n21 mt-lg-n23 mb-14';
$swiper->data_nav = 'data-nav="true"';
$swiper->data_dots = 'data-dots="true"';
$swiper->data_margin = 'data-margin="5"';
$swiper->image_size = 'sandbox_hero_10';
$swiper->data_items_lg = 'data-items-lg=1';
$swiper->data_items_md = 'data-items-md=1';
$swiper->data_items_xs = 'data-items-xs=1';
$swiper->data_autoplay = 'data-autoplay="false"';
$swiper->data_autoplaytime = 'data-autoplaytime="5000"';
$swiper->default_media = '<figure class="rounded mt-md-n21 mt-lg-n23 mb-14" data-cue="slideInDown" data-delay="900"><img src="' . get_template_directory_uri() . '/dist/img/photos/about15.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about15@2x.jpg 2x" alt="" /></figure>';

?>



<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo esc_html($args['block_class']); ?> wrapper bg-<?php echo $settings->backgroundcolor; ?>">
   <section class="wrapper bg-<?php echo $settings->backgroundcolor; ?>">
      <div class="container pt-11 pt-md-13 pb-11 pb-md-19 pb-lg-22 text-center">
         <div class="row">
            <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="slideInDown" data-group="page-title">
               <h1 class="display-1 fs-60 mb-4 px-md-15 px-lg-0 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->title; ?></h1>
               <p class="lead fs-24 lh-sm mb-7 mx-md-13 mx-lg-10 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->paragraph; ?></p>
               <div>
                  <!--  buttons group -->
                  <?php $button->showbuttons(); ?>
                  <!--/buttons group -->

               </div>
            </div>
            <!-- /column -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
   </section>
   <!-- /section -->
   <section class="wrapper bg-<?php echo $settings->textcolor; ?>">
      <div class="container pt-14 pt-md-16 pb-9 pb-md-11">

         <!--  swiper -->
         <?php echo $swiper->GetSwiper(); ?>
         <!--/swiper -->

      </div>
      <!-- /.container -->
   </section>
   <!-- /section -->