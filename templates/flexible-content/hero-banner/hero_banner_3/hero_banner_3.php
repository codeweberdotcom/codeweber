<?php
/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri();

$settings->title = "Grow Your Business with Our Solutions.";
$settings->paragraph = 'We help our clients to increase their website traffic, rankings and visibility in search results.';
$settings->imageurl = get_template_directory_uri() . '/dist/img/photos/about13.jpg';
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = NULL;
$settings->textcolor = 'white';

$settings->GetDataACF();

/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded";
$button->button_size = 'btn-lg';
$button->class_button_wrapper = "d-flex justify-content-start flex-wrap";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<div><a class="btn btn-lg btn-primary rounded">Get Started</a></div>';

/* Add swiper */
$swiper = new SwiperSlider();
$swiper->root_theme = get_template_directory_uri();
$swiper->class_swiper = 'swiper-container dots-over shadow-lg';
$swiper->data_nav = 'data-nav="true"';
$swiper->data_dots = 'data-dots="true"';
$swiper->data_margin = 'data-margin="5"';
$swiper->image_size = 'sandbox_hero_3';
$swiper->data_items_lg = 'data-items-lg=1';
$swiper->data_items_md = 'data-items-md=1';
$swiper->data_items_xs = 'data-items-xs=1';
$swiper->data_autoplay = 'data-autoplay="true"';
$swiper->data_autoplaytime = 'data-autoplaytime="5000"';
$swiper->default_media = '<a href="' . $settings->videourl . '" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-6 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox><i class="icn-caret-right"></i></a>
          <figure class="rounded shadow-lg"><img src="' . $settings->imageurl . '" srcset="' . $settings->imageurl . '" alt=""></figure>';
?>


<section id="section-<?php echo get_the_ID(); ?>-<?php echo get_row_index(); ?>" class="wrapper bg-<?php echo $settings->backgroundcolor; ?> angled lower-start">
  <div class="container pt-7 pt-md-11 pb-8">
    <div class="row gx-0 gy-10 align-items-center">
      <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-1 text-<?php echo $settings->textcolor; ?> mb-4"><?php echo $settings->title; ?><br />
          <span class="typer text-primary text-nowrap" data-delay="100" data-words="<?php echo $settings->typewriter; ?>">
          </span><span class="cursor text-primary" data-owner="typer"></span>
        </h1>
        <p class="lead fs-24 lh-sm text-<?php echo $settings->textcolor; ?> mb-7 pe-md-18 pe-lg-0 pe-xxl-15"><?php echo $settings->paragraph; ?></p>
        <div>
          <!--  buttons group -->
          <?php $button->showbuttons(); ?>
          <!--/buttons group -->
        </div>
      </div>
      <!-- /column -->
      <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">
        <div class="position-relative">
          <!--  swiper -->
          <?php echo $swiper->GetSwiper(); ?>
          <!--/swiper -->
        </div>
        <!-- /div -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->