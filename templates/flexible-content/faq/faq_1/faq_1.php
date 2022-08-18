<?php
/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri(); // адрес корня темы , обязательная переменная для демо
$settings->title = 'Common Questions'; // демо заголовок
$settings->paragraph = 'We are a creative company that focuses on long term relationships with customers.'; // демо параграф
$settings->subtitle = 'If you don\'t see an answer to your question, you can send us an email from our contact form.'; // демо подзаголовок
$settings->imageurl = get_template_directory_uri() . '/dist/img/photos/bg11.jpg'; // демо фото
$settings->backgroundurl = $settings->root_theme . '/dist/img/photos/bg37.jpg';
$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4'; // демо видео
$settings->typewriter = 'customer satisfaction,business needs,creative ideas'; // демо данные эффекта печатной машинки
$settings->backgroundcolor = 'dark'; // цвет бэкгрануда темной темы
//$settings->backgroundcolor_light = 'gray'; // если есть другой цвет бэкграунда, например soft-primary или gray
$settings->textcolor = 'light'; // цвет текста темной темы
$settings->section_id = esc_html($args['block_id']); // присваиваем секции уникальный id
$settings->GetDataACF(); // получаем занчения полей ACF


/* Add Image*/
$image = new Images;
$image->root_theme = get_template_directory_uri();
$image->image_1 = get_template_directory_uri() . '/dist/img/illustrations/i5.png';
$image->image_size = 'sandbox_faq_1';
$image->GetImage();


/* Add FAQ */
$faq_accordeon = new AccordeonS;
$faq_accordeon->section_id = esc_html($args['block_id']); // присваиваем секции уникальный id
$faq_accordeon->default_accordeon = '<div class="card plain accordion-item">
                  <div class="card-header" id="headingOne-2">
                     <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2"> Can I cancel my subscription? </button>
                  </div>
                  <!--/.card-header -->
                  <div id="collapseOne-2" class="accordion-collapse collapse show" aria-labelledby="headingOne-2" data-bs-parent="#accordionExample-2">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.accordion-collapse -->
               </div>
               <!--/.accordion-item -->
               <div class="card plain accordion-item">
                  <div class="card-header" id="headingTwo-2">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2"> Which payment methods do you accept? </button>
                  </div>
                  <!--/.card-header -->
                  <div id="collapseTwo-2" class="accordion-collapse collapse" aria-labelledby="headingTwo-2" data-bs-parent="#accordionExample-2">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.accordion-collapse -->
               </div>
               <!--/.accordion-item -->
               <div class="card plain accordion-item">
                  <div class="card-header" id="headingThree-2">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree-2" aria-expanded="false" aria-controls="collapseThree-2"> How can I manage my Account? </button>
                  </div>
                  <!--/.card-header -->
                  <div id="collapseThree-2" class="accordion-collapse collapse" aria-labelledby="headingThree-2" data-bs-parent="#accordionExample-2">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.accordion-collapse -->
               </div>
               <!--/.accordion-item -->'
?>

<section id="<?php echo $settings->section_id; ?>" class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10">
         <div class="col-lg-6">
            <figure><img class="w-auto" src="<?php echo $image->image_1; ?>" srcset="<?php echo $image->image_1; ?>" alt="" /></figure>
         </div>
         <!--/column -->
         <div class="col-lg-6">
            <h2 class="display-4 mb-3"><?php echo $settings->title; ?></h2>
            <p class="lead fs-lg mb-6 pe-xxl-10"><?php echo $settings->subtitle; ?></p>
            <div class="accordion accordion-wrapper" id="<?php echo $faq_accordeon->section_id; ?>">
               <?php $faq_accordeon->accordeon(); ?>
            </div>
            <!--/.accordion -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->