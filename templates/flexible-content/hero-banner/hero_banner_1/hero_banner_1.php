<?php
/* Add settings */
$settings = new Settings();

$settings->root_theme = get_template_directory_uri();
$settings->title = "Grow Your Business with Our Solutions.";
$settings->paragraph = 'We help our clients to increase their website traffic, rankings and visibility in search results.';
$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/i2.png';
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'light';
$settings->textcolor = 'white';

$settings->section_id = esc_html($args['block_id']);
$settings->section_classes = esc_html($args['block_class']);
$settings->GetDataACF();

/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded-pill";
$button->button_size = NULL;
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap justify-content-lg-start";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<span><a class="btn btn-primary rounded-pill me-2">Try It For Free</a></span>';

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
$swiper->data_autoplaytime = 'data-autoplaytime="5000"';
$swiper->default_media = '<figure><img class="w-auto" src="' . get_template_directory_uri() . '/dist/img/illustrations/i2.png" srcset="' . get_template_directory_uri() . '/dist/img/illustrations/i2@2x.png 2x" alt="" /></figure>';
?>


<section id="<?php echo $settings->section_id; ?>" class="<?php echo $settings->section_classes; ?> wrapper bg-<?php echo $settings->backgroundcolor; ?>">
  <div class="container pt-10 pt-md-14 pb-8 text-center">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-7">
        <!--  swiper -->
        <?php echo $swiper->GetSwiper(); ?>
        <!--/swiper -->
      </div>
      <!-- /column -->
      <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
        <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->title; ?></h1>
        <p class="lead fs-lg mb-7 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->paragraph; ?></p>
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