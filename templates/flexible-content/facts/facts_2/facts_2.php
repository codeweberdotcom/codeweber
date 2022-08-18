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


/* Facts */
$facts = new Faq;
$facts->text_color = $settings->textcolor;
$facts->icon_classes = 'icon btn btn-circle btn-lg disabled mb-3';
$facts->icon_svg_classes = 'svg-inject icon-svg icon-svg-lg  mb-3';
$facts->pattern = '<div class="col-md-4">
                  %3$s
                  <h3 class="counter">%1$s</h3>
                  <p class="mb-0">%2$s</p>
                  </div>
                  <!--/column -->';
$facts->default_template = '<div class="col-md-4">
                  <img src="' . $settings->root_theme . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                  <h3 class="counter">7518</h3>
                  <p class="mb-0">Completed Projects</p>
               </div>
               <!--/column -->
               <div class="col-md-4">
                  <img src="' . $settings->root_theme . '/dist/img/icons/lineal/user.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                  <h3 class="counter">3472</h3>
                  <p class="mb-0">Happy Customers</p>
               </div>
               <!--/column -->
               <div class="col-md-4">
                  <img src="' . $settings->root_theme . '/dist/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                  <h3 class="counter">2184</h3>
                  <p class="mb-0">Expert Employees</p>
               </div>
               <!--/column -->';
?>

<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-lg-4">
            <h2 class="fs-15 text-uppercase text-primary mb-3"><?php echo $settings->subtitle; ?></h2>
            <h3 class="display-4 pe-xl-15"><?php echo $settings->title; ?></h3>
         </div>
         <!-- /column -->
         <div class="col-lg-8">
            <div class="row align-items-center counter-wrapper gy-6 text-center">
               <?php echo $facts->Facts_3(); ?>
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