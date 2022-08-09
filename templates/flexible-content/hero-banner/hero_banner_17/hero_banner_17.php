<?php
/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri(); // адрес корня темы , обязательная переменная для демо
$settings->title = "We bring rapid solutions for your business."; // демо заголовок
// $settings->paragraph = 'Hello! This is Sandbox'; // демо параграф
$settings->subtitle = 'Hello! This is Sandbox'; // демо подзаголовок
$settings->imageurl = get_template_directory_uri() . '/dist/img/photos/bg11.jpg'; // демо фото
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4'; // демо видео
$settings->typewriter = 'customer satisfaction,business needs,creative ideas'; // демо данные эффекта печатной машинки
$settings->backgroundcolor = 'dark'; // цвет бэкгрануда темной темы
//$settings->backgroundcolor_light = 'gray'; // если есть другой цвет бэкграунда, например soft-primary или gray
$settings->textcolor = 'light'; // цвет текста темной темы
$settings->GetDataACF(); // получаем занчения полей ACF

/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded-pill";
$button->button_size = 'btn-lg';
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap ";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<div class="d-flex justify-content-center flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
               <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
               <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Us</a></span>
            </div>';

/* Add Image*/
$image = new Images;
$image->root_theme = get_template_directory_uri();
$image->image_1 = get_template_directory_uri() . '/dist/img/photos/bg11.jpg';
$image->image_size = 'sandbox_hero_11';
$image->GetImage();
?>

<section class="wrapper bg-gray">
   <div class="container pt-12 pt-md-16 text-center">
      <div class="row">
         <div class="col-lg-8 col-xxl-7 mx-auto text-center" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <div class="fs-16 text-uppercase ls-xl text-dark mb-4"><?php echo $settings->subtitle; ?></div>
            <h1 class="display-1 fs-58 mb-7"><?php echo $settings->title; ?></h1>
            <!--  buttons group -->
            <?php $button->showbuttons(); ?>
            <!--/buttons group -->
         </div>
         <!--/column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
   <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="<?php echo $image->image_1; ?>" alt="" /></figure>
</section>
<!-- /section -->