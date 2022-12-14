<?php

/* Add swiper */
$swiper = new SwiperSlider();
$swiper->root_theme = get_template_directory_uri();
$swiper->class_swiper = 'swiper-container dots-over shadow-lg';
$swiper->data_nav = 'data-nav="true"';
$swiper->data_dots = 'data-dots="true"';
$swiper->data_margin = 'data-margin="5"';
$swiper->image_size = 'sandbox_faq_1';
$swiper->data_items_lg = 'data-items-lg="1"';
$swiper->data_items_md = 'data-items-md="1"';
$swiper->data_items_xs = 'data-items-xs="1"';
$swiper->data_autoplay = 'data-autoplay="true"';
$swiper->data_autoplaytime = 'data-autoplaytime="5000"';
$swiper->default_media = '<figure><img class="w-auto" src="' . get_template_directory_uri() . '/dist/img/illustrations/i2.png" srcset="' . get_template_directory_uri() . '/dist/img/illustrations/i2@2x.png 2x" alt="" /></figure>';
?>


<?php
/**
 * CW
 */
$hero = new CW_Settings(
  $cw_settings = array(
    'title' => 'Grow Your Business with Our Solutions.',
    'paragraph' => 'We help our clients to increase their website traffic, rankings and visibility in search results.',
    'patternTitle' => '<h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">%s</h1>',
    'patternParagraph' => '<p class="lead fs-lg mb-7">%s</p>',
    'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',
    'buttons' => '<span><a class="btn btn-primary rounded-pill me-2">Try It For Free</a></span>'
  )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo esc_html($args['block_class']); ?> wrapper bg-gradient-primary">

  <div class="container pt-10 pt-md-14 pb-8 text-center">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-7">
        <!--  swiper -->
        <?php echo $swiper->GetSwiper(); ?>
        <!--/swiper -->
      </div>
      <!-- /column -->
      <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
        <?php echo $hero->title; ?>
        <!--/title -->
        <?php echo $hero->paragraph; ?>
        <!--/pargraph -->
        <?php echo $hero->buttons; ?>
        <!--/buttons group -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->


</section>
<!-- /section -->