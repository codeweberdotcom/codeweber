<?php
/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri();
$settings->title = 'We bring rapid solutions for your business.';
$settings->paragraph = 'We are an award winning branding design agency that strongly believes in the power of creative ideas.';
$settings->imageurl = $settings->root_theme . '/dist/img/photos/about18.jpg';
$settings->videourl =  $settings->root_theme . '/dist/media/movie.mp4';
$settings->backgroundurl =  $settings->root_theme . '/dist/img/photos/bg4.jpg';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'soft-primary';
$settings->textcolor = 'light';
$settings->GetDataACF();

/* Add swiper */
$swiper = new SwiperSlider();
$swiper->root_theme = get_template_directory_uri();
$swiper->class_swiper = 'swiper-container dots-over rounded mb-md-n20';
$swiper->data_nav = 'data-nav="true"';
$swiper->data_dots = 'data-dots="true"';
$swiper->data_margin = 'data-margin="5"';
$swiper->image_size = 'sandbox_hero_14';
$swiper->data_items_lg = 'data-items-lg=1';
$swiper->data_items_md = 'data-items-md=1';
$swiper->data_items_xs = 'data-items-xs=1';
$swiper->data_autoplay = 'data-autoplay="false"';
$swiper->data_autoplaytime = 'data-autoplaytime="5000"';
$swiper->default_media = '<figure class="rounded mb-md-n20"><img src="' . $swiper->root_theme . '/dist/img/photos/about18.jpg" srcset="' . $swiper->root_theme . '/dist/img/photos/about18@2x.jpg 2x" alt="" /></figure>';


// Add Link
$link = new Links();
?>

<section id="section-<?php echo get_the_ID(); ?>-<?php echo get_row_index(); ?>" class="wrapper bg-<?php echo $settings->backgroundcolor; ?>">
   <div class="container pt-10 pt-md-14 pb-14 pb-md-0">
      <div class="row gx-md-8 gx-lg-12 gy-3 gy-lg-0 mb-13">
         <div class="col-lg-6">
            <h1 class="display-1 fs-66 lh-xxs mb-0 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->title; ?></h1>
         </div>
         <!-- /column -->
         <div class="col-lg-6">
            <p class="lead fs-25 my-3 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->paragraph; ?></p>
            <?php $link->Link(); ?>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="position-relative">
         <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2.5rem; right: -2.7rem;"></div>

         <!--  swiper -->
         <?php echo $swiper->GetSwiper(); ?>
         <!--/swiper -->

      </div>
   </div>
   <!-- /.container -->
</section>
<!-- /section -->