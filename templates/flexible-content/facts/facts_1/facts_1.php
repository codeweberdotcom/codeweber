<?php
/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri(); // адрес корня темы , обязательная переменная для демо
$settings->title = 'Join Our Community'; // демо заголовок
$settings->paragraph = 'Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur.'; // демо параграф
$settings->subtitle = 'We have considered our business solutions to support you on every stage of your growth.'; // демо подзаголовок
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
$facts->icon_classes = 'icon btn btn-circle btn-lg disabled mx-auto me-4 mb-lg-3 mb-xl-0';
$facts->icon_svg_classes = 'svg-inject icon-svg icon-svg-lg mx-auto me-4 mb-lg-3 mb-xl-0';
$facts->pattern = '<div class="item col-md-6">
                  <div class="card shadow-lg">
                     <div class="card-body">
                        <div class="d-flex d-lg-block d-xl-flex flex-row">
                           <div>
                              %3$s                          
                             </div>
                           <div>
                              <h3 class="counter mb-1">%1$s</h3>
                              <p class="mb-0">%2$s</p>
                           </div>
                        </div>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->';
$facts->default_template = '<div class="item col-md-6">
                  <div class="card shadow-lg">
                     <div class="card-body">
                        <div class="d-flex d-lg-block d-xl-flex flex-row">
                           <div>
                              <div class="icon btn btn-circle btn-lg btn-soft-purple disabled mx-auto me-4 mb-lg-3 mb-xl-0"> <i class="uil uil-presentation-check"></i> </div>
                           </div>
                           <div>
                              <h3 class="counter mb-1">7518</h3>
                              <p class="mb-0">Projects Done</p>
                           </div>
                        </div>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>

               <!--/column -->
               <div class="item col-md-6">
                  <div class="card shadow-lg">
                     <div class="card-body">
                        <div class="d-flex d-lg-block d-xl-flex flex-row">
                           <div>
                              <div class="icon btn btn-circle btn-lg btn-soft-red disabled mx-auto me-4 mb-lg-3 mb-xl-0"> <i class="uil uil-users-alt"></i> </div>
                           </div>
                           <div>
                              <h3 class="counter mb-1">3472</h3>
                              <p class="mb-0">Happy Customers</p>
                           </div>
                        </div>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->

               <div class="item col-md-6">
                  <div class="card shadow-lg">
                     <div class="card-body">
                        <div class="d-flex d-lg-block d-xl-flex flex-row">
                           <div>
                              <div class="icon btn btn-circle btn-lg btn-soft-yellow disabled mx-auto me-4 mb-lg-3 mb-xl-0"> <i class="uil uil-user-check"></i> </div>
                           </div>
                           <div>
                              <h3 class="counter mb-1">4537</h3>
                              <p class="mb-0">Expert Employees</p>
                           </div>
                        </div>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->

               <div class="item col-md-6">
                  <div class="card shadow-lg">
                     <div class="card-body">
                        <div class="d-flex d-lg-block d-xl-flex flex-row">
                           <div>
                              <div class="icon btn btn-circle btn-lg btn-soft-aqua disabled mx-auto me-4 mb-lg-3 mb-xl-0"> <i class="uil uil-trophy"></i> </div>
                           </div>
                           <div>
                              <h3 class="counter mb-1">2184</h3>
                              <p class="mb-0">Awards Won</p>
                           </div>
                        </div>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->';


?>


<section id="<?php echo $settings->section_id; ?>" class="<?php echo $settings->section_classes; ?> wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-0 gy-10 align-items-center">
         <div class="col-lg-6 order-lg-2 offset-lg-1 grid">
            <div class="row gx-md-5 gy-5 align-items-center counter-wrapper isotope">
               <?php echo $facts->Facts_3(); ?>
            </div>
            <!--/.row -->
         </div>
         <!--/column -->
         <div class="col-lg-5">
            <h2 class="display-4 mb-3 text-dark"><?php echo $settings->title; ?></h2>
            <p class="lead fs-lg text-dark"><?php echo $settings->subtitle; ?></p>
            <p class="mb-0 text-dark"><?php echo $settings->paragraph; ?></p>
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->