<?php
/* Add settings */
$settings = new Settings();
// адрес корня темы , обязательная переменная для демо
$settings->title = 'If you don\'t see an answer to your question, you can send us an email from our contact form.'; // демо заголовок
$settings->paragraph = 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare.'; // демо параграф
$settings->subtitle = 'FAQ'; // демо подзаголовок
// $settings->imageurl = get_template_directory_uri() . '/dist/img/photos/bg11.jpg'; // демо фото
// $settings->backgroundurl = $settings->root_theme . '/dist/img/photos/bg37.jpg';
// $settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4'; // демо видео
// $settings->typewriter = 'customer satisfaction,business needs,creative ideas'; // демо данные эффекта печатной машинки
$settings->backgroundcolor = 'dark'; // цвет бэкгрануда темной темы
//$settings->backgroundcolor_light = 'gray'; // если есть другой цвет бэкграунда, например soft-primary или gray
$settings->textcolor = 'light'; // цвет текста темной темы
$settings->section_id = esc_html($args['block_id']); // присваиваем секции уникальный id
$settings->GetDataACF(); // получаем занчения полей ACF


/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded-pill";
$button->button_size = NULL;
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap justify-content-lg-start";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<a href="#" class="btn btn-primary rounded-pill">All FAQ</a>';


/* Add FAQ */
$faq_accordeon = new AccordeonS;
$faq_accordeon->section_id = esc_html($args['block_id']); // присваиваем секции уникальный id
$faq_accordeon->default_accordeon = '<div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-3-1">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-1" aria-expanded="false" aria-controls="accordion-collapse-3-1">How do I get my subscription receipt?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-3-1" class="collapse" aria-labelledby="accordion-heading-3-1" data-bs-target="#accordion-3">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-3-2">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-2" aria-expanded="false" aria-controls="accordion-collapse-3-2">Are there any discounts for people in need?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-3-2" class="collapse" aria-labelledby="accordion-heading-3-2" data-bs-target="#accordion-3">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-3-3">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-3" aria-expanded="false" aria-controls="accordion-collapse-3-3">Do you offer a free trial edit?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-3-3" class="collapse" aria-labelledby="accordion-heading-3-3" data-bs-target="#accordion-3">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-3-4">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-4" aria-expanded="false" aria-controls="accordion-collapse-3-4">How do I reset my Account password?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-3-4" class="collapse" aria-labelledby="accordion-heading-3-4" data-bs-target="#accordion-3">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->';

?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="wrapper bg-light <?php echo esc_html($args['block_class']); ?> ">
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10">
         <div class="col-lg-6 mb-0">
            <h2 class="fs-15 text-uppercase text-muted mb-3"><?php echo $settings->subtitle; ?></h2>
            <h3 class="display-5 mb-4"><?php echo $settings->title; ?></h3>
            <p class="lead mb-6"><?php echo $settings->paragraph; ?></p>
            <!--  buttons group -->
            <?php $button->showbuttons(); ?>
            <!--/buttons group -->
         </div>
         <!--/column -->
         <div class="col-lg-6">
            <div id="<?php echo esc_html($args['block_id']); ?>" class="accordion-wrapper">
               <?php $faq_accordeon->accordeon(); ?>
               <!-- /.card -->
            </div>
            <!-- /.accordion-wrapper -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->