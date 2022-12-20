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
    'buttons' => '<span><a class="btn btn-primary rounded-pill me-2">Try It For Free</a></span>',
    'background_class_default' => 'wrapper bg-image',
    'background_data_default' => '/dist/img/photos/bg16.png',
    'background_video_preview' => '/dist/img/photos/movie2.jpg',
    'background_video_url' => '/dist/media/movie2.mp4',
    'background_pattern_url' => '/dist/img/pattern.png',

    'image_pattern' => '<figure %5s title="dsdsds"><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
    'image_link' => '/dist/img/illustrations/i2.png',
    'image_thumb_size' => 'sandbox_hero_1',
    'image_big_size' => 'project_1',
  )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $hero->background_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $hero->background_data; ?>>
  <?php if ($hero->background_video_bool == true) { ?>
    <video poster="<?php echo $hero->background_video_preview; ?>" src="<?php echo $hero->background_video_url; ?>" autoplay loop playsinline muted></video>
    <div class="video-content">
    <?php } ?>
    <div class="container pt-10 pt-md-14 pb-8 text-center">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-lg-7">
          <?php echo $hero->images; ?>
          <!--/images -->
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
    <?php if ($hero->background_video_bool == true) { ?>
    </div>
    </video>
  <?php } ?>
</section>
<!-- /section -->