<?php

/* Add settings */
$settings = new Settings();
$settings->title = 'Creative. Smart. Awesome.';
$settings->paragraph = 'We specialize in web, mobile and identity design. We love to turn ideas into beautiful things.';
$settings->imageurl = '/dist/img/illustrations/i6.png';
$settings->videourl = '/dist/media/movie.mp4';
// $settings->backgroundurl = '/dist/img/photos/bg4.jpg';
$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'soft-primary';
$settings->textcolor = 'light';

$settings->GetDataACF();

/* Add swiper */
$swiper = new SwiperSlider();
$swiper->root_theme = get_template_directory_uri();
$swiper->class_swiper = 'swiper-container dots-over shadow-lg';
$swiper->data_nav = 'data-nav="true"';
$swiper->data_dots = 'data-dots="true"';
$swiper->data_margin = 'data-margin="5"';
$swiper->image_size = 'brk_single';
$swiper->data_items_lg = 'data-items-lg=1';
$swiper->data_items_md = 'data-items-md=1';
$swiper->data_items_xs = 'data-items-xs=1';
$swiper->data_autoplay = 'data-autoplay="false"';
$swiper->data_autoplaytime = 'data-autoplaytime="5000"';
$swiper->default_media = '<figure><img class="w-auto" src="' . $swiper->root_theme . '/dist/img/illustrations/i6.png" srcset="' . $swiper->root_theme . '/dist/img/illustrations/i6@2x.png 2x" alt="" /></figure>';

/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded";
$button->button_size = NULL;
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap justify-content-lg-start";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<div class="d-flex justify-content-center flex-wrap justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900"><span><a class="btn btn-primary rounded me-2">See Projects</a></span><span><a class="btn btn-yellow rounded">Learn More</a></span></div>';
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo esc_html($args['block_class']); ?> wrapper bg-<?php echo $settings->backgroundcolor; ?>">
  <div class="container pt-10 pb-15 pt-md-14 pb-md-20">
    <div class="row gx-lg-8 gx-xl-12 gy-10 mb-5 align-items-center">
      <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start order-2 order-lg-0" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->title; ?></h1>
        <p class="lead fs-lg mb-7  text-<?php echo $settings->textcolor; ?>"><?php echo $settings->paragraph; ?></p>
        <!--  buttons group -->
        <?php $button->showbuttons(); ?>
        <!--/buttons group -->
      </div>
      <!-- /column -->
      <div class="col-lg-7" data-cue="slideInDown">
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

<?php
/* Add Features */
$features = new Features();
$features->root_theme = get_template_directory_uri();
$features->title = '24/7 Support';
$features->paragraph = 'Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo.';
$features->link_url = "#";
$features->link_text = "Learn more";
$features->iconpaddingclass = "mb-3";
$features->pattern = '<div class="col-md-6 col-xl-3">
         <div class="card shadow-lg card-border-bottom border-%5$s">
          <div class="card-body">
             %3$s
            <h4>%1$s</h4>
            <p class="mb-2">%2$s</p>
           %4$s
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->';
$features->default_features = '<div class="col-md-6 col-xl-3">
        <div class="card shadow-lg card-border-bottom border-soft-yellow">
          <div class="card-body">
            <img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/browser.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
            <h4>Content Marketing</h4>
            <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
            <a href="#" class="more hover link-yellow">Learn More</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col-md-6 col-xl-3">
        <div class="card shadow-lg card-border-bottom border-soft-green">
          <div class="card-body">
            <img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/chat-2.svg" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
            <h4>Social Engagement</h4>
            <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
            <a href="#" class="more hover link-green">Learn More</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col-md-6 col-xl-3">
        <div class="card shadow-lg card-border-bottom border-soft-orange">
          <div class="card-body">
            <img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/id-card.svg" class="svg-inject icon-svg icon-svg-md text-orange mb-3" alt="" />
            <h4>Identity & Branding</h4>
            <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
            <a href="#" class="more hover link-orange">Learn More</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col-md-6 col-xl-3">
        <div class="card shadow-lg card-border-bottom border-soft-blue">
          <div class="card-body">
            <img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/gift.svg" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
            <h4>Product Design</h4>
            <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
            <a href="#" class="more hover link-blue">Learn More</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>';
?>
<section class="wrapper bg-light">
  <div class="container pt-14 pt-md-16 pb-9 pb-md-11 pb-md-17">
    <div class="row gx-md-5 gy-5 mt-n18 mt-md-n21 mb-14 mb-md-17">
      <?php echo $features->Feutures(); ?>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->