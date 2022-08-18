<?php
/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri(); // адрес корня темы , обязательная переменная для демо
$settings->title = 'We are proud of our works'; // демо заголовок
$settings->paragraph = 'Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur.'; // демо параграф
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


$counter = new Counter;
$counter->counters_default = '<div class="col-6 col-lg-3">
                        <h3 class="counter counter-lg text-white">7518</h3>
                        <p>Completed Projects</p>
                     </div>
                     <!--/column -->
                     <div class="col-6 col-lg-3">
                        <h3 class="counter counter-lg text-white">3472</h3>
                        <p>Happy Customers</p>
                     </div>
                     <!--/column -->
                     <div class="col-6 col-lg-3">
                        <h3 class="counter counter-lg text-white">2184</h3>
                        <p>Expert Employees</p>
                     </div>
                     <!--/column -->
                     <div class="col-6 col-lg-3">
                        <h3 class="counter counter-lg text-white">4523</h3>
                        <p>Awards Won</p>
                     </div>
                     <!--/column -->';


?>

<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-xl-10 mx-auto">
            <div class="card image-wrapper bg-full bg-image bg-overlay" data-image-src="<?php echo $settings->root_theme; ?>/dist/img/photos/bg2.jpg">
               <div class="card-body p-9 p-xl-10">
                  <div class="row align-items-center counter-wrapper gy-4 text-center text-white">
                     <?php echo $counter->Counters(); ?>
                  </div>
                  <!--/.row -->
               </div>
               <!--/.card-body -->
            </div>
            <!--/.card -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->