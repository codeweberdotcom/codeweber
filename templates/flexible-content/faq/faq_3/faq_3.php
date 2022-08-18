<?php
/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri(); // адрес корня темы , обязательная переменная для демо
$settings->title = 'Pricing FAQ'; // демо заголовок
$settings->paragraph = 'If you don\'t see an answer to your question, you can send us an email from our contact form.'; // демо параграф
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


/* Add FAQ */
$faq_accordeon = new AccordeonS;
$faq_accordeon->section_id = esc_html($args['block_id']) . '-1'; // присваиваем секции уникальный id
$faq_accordeon->default_accordeon = '<div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-1-1">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="false" aria-controls="accordion-collapse-1-1">Can I cancel my subscription?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-1-2">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="false" aria-controls="accordion-collapse-1-2">Which payment methods do you accept?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-1-3">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="false" aria-controls="accordion-collapse-1-3">How can I manage my Account?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-1-4">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-4" aria-expanded="false" aria-controls="accordion-collapse-1-4">Is my credit card information secure?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-1-4" class="collapse" aria-labelledby="accordion-heading-1-4" data-bs-target="#accordion-1">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->';


/* Add FAQ */
$faq_accordeon1 = new AccordeonS;
$faq_accordeon1->section_id_2 = esc_html($args['block_id']) . '-2'; // присваиваем секции уникальный id
$faq_accordeon1->default_accordeon = '<div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-1-1">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="false" aria-controls="accordion-collapse-1-1">Can I cancel my subscription?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-1-2">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="false" aria-controls="accordion-collapse-1-2">Which payment methods do you accept?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-1-3">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="false" aria-controls="accordion-collapse-1-3">How can I manage my Account?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-1-4">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-4" aria-expanded="false" aria-controls="accordion-collapse-1-4">Is my credit card information secure?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-1-4" class="collapse" aria-labelledby="accordion-heading-1-4" data-bs-target="#accordion-1">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->';

?>

<section id="<?php echo $settings->section_id; ?>" class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <h2 class="display-4 mb-3 text-center"><?php echo $settings->title; ?></h2>
      <p class="lead text-center mb-10 px-md-16 px-lg-0"><?php echo $settings->paragraph; ?></p>
      <div class="row">
         <div class="col-lg-6 mb-0">
            <div id="<?php echo $faq_accordeon->section_id; ?>" class="accordion-wrapper">
               <?php $faq_accordeon->accordeon(); ?>
            </div>
            <!-- /.accordion-wrapper -->
         </div>
         <!--/column -->
         <div class=" col-lg-6">
            <div id="<?php echo $faq_accordeon1->section_id_2; ?>" class="accordion-wrapper">
               <?php $faq_accordeon1->accordeon1(); ?>
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