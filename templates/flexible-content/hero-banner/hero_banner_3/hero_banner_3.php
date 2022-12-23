<?php
/* Add settings */
$settings = new Settings();


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


<?php


/**
 * CW
 */
$hero = new CW_Settings(
  $cw_settings = array(
    'title' => 'Sandbox focuses on <br /><span class="typer text-primary text-nowrap" data-delay="100" data-words="customer satisfaction,business needs,creative ideas"></span><span class="cursor text-primary" data-owner="typer"></span>',
    'patternTitle' => ' <h1 class="display-1 text-white mb-4">%1s<br>%2s</h1>',
    'paragraph' => 'We carefully consider our solutions to support each and every stage of your growth.',
    'patternParagraph' => '<p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15">%s</p>',
    'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',
    'buttons' => '<div><a class="btn btn-lg btn-primary rounded">Get Started</a></div>',
    'background_class_default' => 'wrapper bg-dark angled lower-start',
    'background_data_default' => '/dist/img/photos/bg16.png',
    'background_video_preview' => '/dist/img/photos/movie2.jpg',
    'background_video_url' => '/dist/media/movie2.mp4',
    'background_pattern_url' => '/dist/img/pattern.png',

    'image_pattern' => '<figure class="rounded shadow-lg"><img src="%1$s" srcset="%2$s" alt="%3$s"/></figure>',
    'image_link' => '/dist/img/photos/about13.jpg',
    'image_thumb_size' => 'sandbox_hero_3',
    'image_big_size' => 'project_1',

    'swiper' => array('swiper' => true, 'data' => ''),
    'typewriter' => array(),
  )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $hero->background_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $hero->background_data; ?>>

  <?php if ($hero->background_video_bool == true) { ?>
    <video poster="<?php echo $hero->background_video_preview; ?>" src="<?php echo $hero->background_video_url; ?>" autoplay loop playsinline muted></video>
    <div class="video-content">
    <?php } ?>
    <!-- /video background -->

    <div class="container pt-7 pt-md-11 pb-8">
      <div class="row gx-0 gy-10 align-items-center">
        <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">

          <?php echo $hero->title; ?>
          <!--/title -->

          <?php echo $hero->paragraph; ?>
          <!--/pargraph -->

          <?php echo $hero->buttons; ?>
          <!--/buttons group -->
        </div>
        <!-- /column -->
        <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">
          <div class="position-relative">

            <?php echo $hero->swiper_final; ?>

            <!-- <a href="./assets/media/movie.mp4" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-6 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox><i class="icn-caret-right"></i></a>
            <figure class="rounded shadow-lg"><img src="./assets/img/photos/about13.jpg" srcset="./assets/img/photos/about13@2x.jpg 2x" alt=""></figure> -->


          </div>
          <!-- /div -->
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
  <!-- /video background -->


</section>
<!-- /section -->