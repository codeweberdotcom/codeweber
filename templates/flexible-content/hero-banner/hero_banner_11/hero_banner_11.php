<?php
/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri();
$settings->title = 'Crafting project specific solutions with expertise.';
$settings->paragraph = 'We\’re a creative company that focuses on establishing long-term relationships with customers.';
$settings->imageurl = '/dist/img/photos/about21.jpg';
$settings->videourl = '/dist/media/movie.mp4';
$settings->backgroundurl = '/dist/img/photos/bg4.jpg';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
// $settings->backgroundcolor_light = 'soft-primary';
$settings->textcolor = 'light';
$settings->section_id = esc_html($args['block_id']);
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
          <span><a href="#" class="btn btn-lg btn-white rounded-pill me-2">Explore Now</a></span>
          <span><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></span>
        </div>';

/* Add swiper */
$swiper = new SwiperSlider();
$swiper->root_theme = get_template_directory_uri();
$swiper->class_swiper = 'swiper-container dots-over shadow-lg';
$swiper->data_nav = 'data-nav="true"';
$swiper->data_dots = 'data-dots="true"';
$swiper->data_margin = 'data-margin="5"';
$swiper->image_size = 'sandbox_hero_11';
$swiper->data_items_lg = 'data-items-lg=1';
$swiper->data_items_md = 'data-items-md=1';
$swiper->data_items_xs = 'data-items-xs=1';
$swiper->data_autoplay = 'data-autoplay="false"';
$swiper->data_autoplaytime = 'data-autoplaytime="5000"';
$swiper->default_media = '<div class="swiper-container dots-over shadow-lg" data-margin="5" data-nav="true" data-dots="true">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="' . $swiper->root_theme . '/dist/img/photos/about21.jpg" srcset="' . $swiper->root_theme . '/dist/img/photos/about21@2x.jpg 2x" class="rounded" alt="" /></div>
              <div class="swiper-slide"><a href="' . $swiper->root_theme . '/dist/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox data-gallery="hero"><i class="icn-caret-right"></i></a><img src="' . $swiper->root_theme . '/dist/img/photos/about22.jpg" srcset="' . $swiper->root_theme . '/dist/img/photos/about22@2x.jpg 2x" class="rounded" alt="" /></div>
              <div class="swiper-slide"><img src="' . $swiper->root_theme . '/dist/img/photos/about23.jpg" srcset="' . $swiper->root_theme . '/dist/img/photos/about23@2x.jpg 2x" class="rounded" alt="" /></div>
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!--/.swiper -->
        </div>
        <!-- /.swiper-container -->';
?>


<section id="<?php echo $settings->section_id; ?>" class="image-wrapper bg-image bg-overlay bg-overlay-400 bg-content text-<?php echo $settings->textcolor; ?>" data-image-src="<?php echo $settings->backgroundurl; ?>">
  <div class="container pt-18 pb-16" style="z-index: 5; position:relative">
    <div class="row gx-0 gy-12 align-items-center">
      <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 content text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-2 mb-5 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->title; ?></h1>
        <p class="lead fs-lg lh-sm mb-7 pe-xl-10 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->paragraph; ?></p>
        <!--  buttons group -->
        <?php $button->showbuttons(); ?>
        <!--/buttons group -->
      </div>
      <!--/column -->
      <div class="col-lg-5 offset-lg-1">
        <!--  swiper -->
        <?php echo $swiper->GetSwiper(); ?>
        <!--/swiper -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->