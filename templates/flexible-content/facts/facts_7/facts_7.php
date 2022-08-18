<?php
/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri(); // адрес корня темы , обязательная переменная для демо
$settings->title = 'Save Time and Money'; // демо заголовок
$settings->paragraph = 'Save your time and money by choosing our <span class="underline-3 style-2 yellow">professional</span> team.'; // демо параграф
$settings->subtitle = 'Company Facts'; // демо подзаголовок
// $settings->imageurl = get_template_directory_uri() . '/dist/img/photos/bg11.jpg'; // демо фото
// $settings->backgroundurl = $settings->root_theme . '/dist/img/photos/bg37.jpg';
// $settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4'; // демо видео
// $settings->typewriter = 'customer satisfaction,business needs,creative ideas'; // демо данные эффекта печатной машинки
$settings->backgroundcolor = 'dark'; // цвет бэкгрануда темной темы
//$settings->backgroundcolor_light = 'gray'; // если есть другой цвет бэкграунда, например soft-primary или gray
$settings->textcolor = 'light'; // цвет текста темной темы
$settings->section_id = esc_html($args['block_id']); // присваиваем секции уникальный id
$settings->GetDataACF(); // получаем занчения полей ACF


/* Counters */
$counter = new Counter;
$counter->textcolor = 'primary';
$counter->counters_default = '<div class="col-md-6">
                  <div class="progressbar semi-circle fuchsia" data-value="95"></div>
                  <h4 class="mb-0">Customer Satisfaction</h4>
               </div>
               <!-- /column -->
               <div class="col-md-6">
                  <div class="progressbar semi-circle orange" data-value="80"></div>
                  <h4 class="mb-0">Increased Revenue</h4>
               </div>
               <!-- /column -->';
?>

<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row align-items-center gy-8">
         <div class="col-lg-7 text-center text-lg-start">
            <h2 class="fs-16 text-uppercase text-muted mb-3"><?php echo $settings->subtitle; ?></h2>
            <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15"><?php echo $settings->title; ?></h3>
         </div>
         <!-- /column -->
         <div class="col-lg-5">
            <div class="row gy-6 text-center">
               <?php echo $counter->Counters_2(); ?>
            </div>
            <!-- /.row -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->