<?php
/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri(); // адрес корня темы , обязательная переменная для демо
$settings->title = 'We are trusted by over 5000+ clients. Join them now and grow your business.'; // демо заголовок
// $settings->paragraph = ''; // демо параграф
$settings->subtitle = 'Join Our Community'; // демо подзаголовок
// $settings->imageurl = get_template_directory_uri() . '/dist/img/photos/bg11.jpg'; // демо фото
// $settings->backgroundurl = $settings->root_theme . '/dist/img/photos/bg37.jpg';
// $settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4'; // демо видео
// $settings->typewriter = 'customer satisfaction,business needs,creative ideas'; // демо данные эффекта печатной машинки
$settings->backgroundcolor = 'light'; // цвет бэкгрануда темной темы
//$settings->backgroundcolor_light = 'gray'; // если есть другой цвет бэкграунда, например soft-primary или gray
$settings->textcolor = 'light'; // цвет текста темной темы
$settings->section_id = esc_html($args['block_id']); // присваиваем секции уникальный id
$settings->GetDataACF(); // получаем занчения полей ACF


$counter = new Counter;
$counter->textcolor = 'primary';
$counter->counters_default = '<div class="col-md-4 text-center">
                  <h3 class="counter counter-lg text-primary">7518</h3>
                  <p>Completed Projects</p>
               </div>
               <!--/column -->
               <div class="col-md-4 text-center">
                  <h3 class="counter counter-lg text-primary">5472</h3>
                  <p>Happy Customers</p>
               </div>
               <!--/column -->
               <div class="col-md-4 text-center">
                  <h3 class="counter counter-lg text-primary">2184</h3>
                  <p>Expert Employees</p>
               </div>
               <!--/column -->';
?>

<section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center bg-<?php echo $settings->backgroundcolor; ?>" data-image-src="<?php echo $settings->root_theme; ?>/dist/img/map.png">
   <div class="container py-14 pt-md-16 pb-md-18">
      <div class="row pt-md-12">
         <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto">
            <h2 class="fs-15 text-uppercase text-muted mb-3"><?php echo $settings->subtitle; ?></h2>
            <h3 class="display-4 mb-8 px-lg-12"><?php echo $settings->title; ?></h3>
         </div>
         <!-- /.row -->
      </div>
      <!-- /column -->
      <div class="row pb-md-12">
         <div class="col-md-10 col-lg-9 col-xl-7 mx-auto">
            <div class="row align-items-center counter-wrapper gy-4 gy-md-0">
               <?php echo $counter->Counters_1(); ?>
            </div>
            <!--/.row -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->