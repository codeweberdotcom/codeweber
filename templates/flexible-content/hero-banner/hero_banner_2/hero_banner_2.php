<?php
/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri();

$settings->title = "Grow Your Business with Our Solutions.";
$settings->paragraph = 'We help our clients to increase their website traffic, rankings and visibility in search results.';
$settings->imageurl = get_template_directory_uri() . '/dist/img/photos/about7.jpg';
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
//$settings->backgroundcolor_light = 'soft-primary';
$settings->textcolor = 'white';

$settings->GetDataACF();

/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded-pill";
$button->button_size = 'btn-lg';
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap justify-content-lg-start";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<div class="d-flex justify-content-center flex-wrap justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
          <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
          <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Free Trial</a></span>
        </div>';

/* Add swiper */
$swiper = new SwiperSlider();
$swiper->root_theme = get_template_directory_uri();
$swiper->class_swiper = 'swiper-container dots-over shadow-lg';
$swiper->data_nav = 'data-nav="true"';
$swiper->data_dots = 'data-dots="true"';
$swiper->data_margin = 'data-margin="5"';
$swiper->image_size = 'sandbox_hero_18';
$swiper->data_items_lg = 'data-items-lg=1';
$swiper->data_items_md = 'data-items-md=1';
$swiper->data_items_xs = 'data-items-xs=1';
$swiper->data_autoplay = 'data-autoplay="true"';
$swiper->data_autoplaytime = 'data-autoplaytime="3000"';
$swiper->default_media = '<figure class="rounded"><img src="' . get_template_directory_uri() . '/dist/img/photos/about7.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about7@2x.jpg 2x" alt="" /></figure>';
?>

<section id="section-<?php echo get_the_ID(); ?>-<?php echo get_row_index(); ?>" class="wrapper bg-<?php echo $settings->backgroundcolor; ?>">
  <div class="container pt-8 pt-md-14">
    <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
      <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
        <div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;"></div>
        <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
        <!--  swiper -->
        <?php echo $swiper->GetSwiper(); ?>
        <!--/swiper -->
      </div>
      <!--/column -->
      <div class="col-lg-5 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-1 mb-5 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->title; ?></h1>
        <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->paragraph; ?></p>
        <!--  buttons group -->
        <?php $button->showbuttons(); ?>
        <!--/buttons group -->
      </div>
      <!--/column -->
    </div>
    <!-- /.row -->
</section>
<!-- /section -->