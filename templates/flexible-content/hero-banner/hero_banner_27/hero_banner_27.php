<?php
/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri(); // адрес корня темы , обязательная переменная для демо
$settings->title = 'We bring solutions to make life <span class="underline-3 style-3 yellow">easier'; // демо заголовок
$settings->paragraph = 'We are a creative company that focuses on long term relationships with customers.'; // демо параграф
$settings->subtitle = 'Hello! This is Sandbox'; // демо подзаголовок
$settings->imageurl = get_template_directory_uri() . '/dist/img/photos/bg11.jpg'; // демо фото
$settings->backgroundurl = $settings->root_theme . '/dist/img/photos/bg37.jpg';
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
$button->class_button_wrapper = "d-flex justify-content-center justify-content-lg-start flex-wrap ";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<div><a href="#" class="btn btn-lg btn-primary rounded">Read More</a></div>';

?>

<section id="<?php echo $settings->section_id; ?>" class="wrapper image-wrapper bg-cover bg-image bg-xs-none bg-gray" data-image-src="<?php echo $settings->backgroundurl; ?>">
  <div class="container pt-17 pb-15 py-sm-17 py-xxl-20">
    <div class="row">
      <div class="col-sm-6 col-xxl-5 text-center text-sm-start" data-cues="slideInDown" data-group="page-title" data-interval="-200" data-delay="500">
        <h2 class="display-1 fs-56 mb-4 mt-0 mt-lg-5 ls-xs pe-xl-5 pe-xxl-0"><?php echo $settings->title; ?></span></h2>
        <p class="lead fs-23 lh-sm mb-7 pe-lg-5 pe-xl-5 pe-xxl-0"><?php echo $settings->paragraph; ?></p>
        <!--  buttons group -->
        <?php $button->showbuttons(); ?>
        <!--/buttons group -->
      </div>
      <!--/column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->