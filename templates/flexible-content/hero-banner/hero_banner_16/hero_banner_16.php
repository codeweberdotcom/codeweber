<?php


/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri(); // адрес корня темы , обязательная переменная для демо
$settings->title = "I\'m User Interface Designer & Developer."; // демо заголовок
$settings->paragraph = 'Hello! I\'m Julia, a freelance user interface designer & developer based in London. I’m very passionate about the work that I do.'; // демо параграф
$settings->imageurl = get_template_directory_uri() . '/dist/img/photos/about17.jpg'; // демо фото
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4'; // демо видео
$settings->typewriter = 'customer satisfaction,business needs,creative ideas'; // демо данные эффекта печатной машинки
$settings->backgroundcolor = 'dark'; // цвет бэкгрануда темной темы
$settings->backgroundcolor_light = 'gray'; // если есть другой цвет бэкграунда, например soft-primary или gray
$settings->textcolor = 'light'; // цвет текста темной темы
$settings->section_id = esc_html($args['block_id']);
$settings->GetDataACF(); // получаем занчения полей ACF

/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded-pill";
$button->button_size = 'btn-lg';
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap justify-content-lg-start";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<div class="d-flex justify-content-center flex-wrap justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
          <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">See My Works</a></span>
          <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Me</a></span>
        </div>';

/* Add LabelIcons */
$label_icons = new LabelIcons;
$label_icons->root_theme = get_template_directory_uri();
$label_icons->title = '250+';
$label_icons->paragraph = 'Projects Done';

/* Add Image*/
$image = new Images;
$image->root_theme = get_template_directory_uri();
$image->image_1 = get_template_directory_uri() . '/dist/img/photos/about17.jpg';
$image->image_size = 'sandbox_hero_11';
$image->GetImage();
?>

<section id="<?php echo $settings->section_id; ?>" class="wrapper bg-<?php echo $settings->backgroundcolor; ?>">
  <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
    <div class="row gy-10 gy-md-13 gy-lg-0 align-items-center">
      <div class="col-md-8 col-lg-5 d-flex position-relative mx-auto" data-cues="slideInDown" data-group="header">
        <div class="img-mask mask-1"><img src="<?php echo $image->image_1; ?>" srcset="<?php echo $image->image_1; ?>" alt="" /></div>
        <div class="card shadow-lg position-absolute" style="bottom: 10%; right: 2%;">

          <!-- card-body -->
          <?php echo $label_icons->GetLabel(); ?>
          <!--/.card-body -->

        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col-lg-6 offset-lg-1 col-xxl-5 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-1 mb-5 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->title; ?></h1>
        <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0 text-<?php echo $settings->textcolor; ?>"><?php echo $settings->paragraph; ?></p>

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