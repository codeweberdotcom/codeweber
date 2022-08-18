<?php
$root_theme = get_template_directory_uri();
$title = 'Networking <span class="text-gradient gradient-1">solutions</span> for worldwide communication';
$paragraph = 'We\'re a company that focuses on establishing long-term relationships with customers.';
$imageurl = $root_theme . '/dist/img/illustrations/3d6.png';
$videourl = $root_theme . '/dist/media/movie.mp4';
$backgroundurl = $root_theme . '/dist/img/photos/bg22.png';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$glightbox = '';
$button_link = "#";
$backgroundcolor = 'dark';
$textcolor = 'white';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$forms = array();

$image_block = '<img class="img-fluid mb-n18" src="/img/illustrations/3d6.png" srcset="./assets/img/illustrations/3d6@2x.png 2x" data-cue="fadeIn" data-delay="300" alt="" />';

/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri(); // адрес корня темы , обязательная переменная для демо
$settings->title = 'Networking <span class="text-gradient gradient-1">solutions</span> for worldwide communication'; // демо заголовок
$settings->paragraph = 'We\'re a company that focuses on establishing long-term relationships with customers.'; // демо параграф
$settings->subtitle = 'Hello! This is Sandbox'; // демо подзаголовок
$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/3d6.png'; // демо фото
$settings->backgroundurl = get_template_directory_uri() . '/dist/img/photos/bg22.png'; // демо бэкграунд
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4'; // демо видео
$settings->typewriter = 'customer satisfaction,business needs,creative ideas'; // демо данные эффекта печатной машинки
$settings->backgroundcolor = 'dark'; // цвет бэкгрануда темной темы
//$settings->backgroundcolor_light = 'gray'; // если есть другой цвет бэкграунда, например soft-primary или gray
$settings->textcolor = 'light'; // цвет текста темной темы
$settings->section_id = esc_html($args['block_id']);
$settings->GetDataACF(); // получаем занчения полей ACF

/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded";
$button->button_size = 'btn-lg';
$button->class_button_wrapper = "d-flex justify-content-start flex-wrap ";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<a href="#" class="btn btn-lg btn-gradient gradient-1 rounded">Explore Now</a>';


/* Add swiper */
$swiper = new SwiperSlider();
$swiper->root_theme = get_template_directory_uri();
$swiper->class_swiper = 'swiper-container dots-over shadow-lg mb-n18';
$swiper->data_nav = 'data-nav="false"';
$swiper->data_dots = 'data-dots="true"';
$swiper->data_margin = 'data-margin="5"';
$swiper->image_size = 'sandbox_hero_18';
$swiper->data_items_lg = 'data-items-lg=1';
$swiper->data_items_md = 'data-items-md=1';
$swiper->data_items_xs = 'data-items-xs=1';
$swiper->data_autoplay = 'data-autoplay="true"';
$swiper->data_autoplaytime = 'data-autoplaytime="3000"';
$swiper->data_effect = 'data-effect="fade"';
$swiper->default_media = '<img class="img-fluid mb-n18" src="' . $swiper->root_theme . '/dist/img/illustrations/3d6.png" srcset="' . $swiper->root_theme . '/dist/img/illustrations/3d6.png" data-cue="fadeIn" data-delay="300" alt="" />';
?>


<section id="<?php echo $settings->section_id; ?>" class="wrapper bg-<?php echo $settings->backgroundcolor; ?>">
  <div class="container-card">
    <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-light-500 mt-2 mb-5" data-image-src="<?php echo $settings->backgroundurl; ?>">
      <div class="card-body py-14 px-0">
        <div class="container">
          <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center text-center text-lg-start">
            <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="900">
              <h1 class="display-2 mb-4 me-xl-5 me-xxl-0 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->title; ?></h1>
              <p class="lead fs-23 lh-sm mb-7 pe-xxl-15 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->paragraph; ?></p>
              <!--  buttons group -->
              <?php $button->showbuttons(); ?>
              <!--/buttons group -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
              <!--  swiper -->
              <?php echo $swiper->GetSwiper(); ?>
              <!--/swiper -->
            </div>
            <!--/column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!--/.card-body -->
    </div>
    <!--/.card -->
  </div>
  <!-- /.container-card -->
</section>
<!-- /section -->