<?php
/* Add settings */
$settings = new Settings();
// адрес корня темы , обязательная переменная для демо
$settings->title = 'Frequently Asked Questions'; // демо заголовок
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
$faq_accordeon->section_id = esc_html($args['block_id']); // присваиваем секции уникальный id
$faq_accordeon->default_accordeon = '<div class="card plain accordion-item">
                        <div class="card-header" id="headingOne">
                           <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How do I get my subscription receipt?</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                           <div class="card-body">
                              <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                     </div>
                     <!--/.accordion-item -->
                     <div class="card plain accordion-item">
                        <div class="card-header" id="headingTwo">
                           <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Are there any discounts for people in need?</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                           <div class="card-body">
                              <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                     </div>
                     <!--/.accordion-item -->
                     <div class="card plain accordion-item">
                        <div class="card-header" id="headingThree">
                           <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Do you offer a free trial edit?</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                           <div class="card-body">
                              <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                     </div>
                     <!--/.accordion-item -->
                     <div class="card plain accordion-item">
                        <div class="card-header" id="headingFour">
                           <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How do I reset my Account password?</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                           <div class="card-body">
                              <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                     </div>
                     <!--/.accordion-item -->';

?>


<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="card bg-soft-primary rounded-4">
         <div class="card-body p-md-10 p-xl-11">
            <div class="row gx-lg-8 gx-xl-12 gy-10">
               <div class="col-lg-6">
                  <h3 class="display-4 mb-4"><?php echo $settings->title; ?></h3>
                  <p class="lead fs-lg mb-0"><?php echo $settings->paragraph; ?></p>
               </div>
               <!--/column -->
               <div class="col-lg-6">
                  <div class="accordion accordion-wrapper" id="<?php echo $faq_accordeon->section_id; ?>">
                     <?php $faq_accordeon->accordeon(); ?>
                  </div>
                  <!--/.accordion -->
               </div>
               <!--/column -->
            </div>
            <!--/.row -->
         </div>
         <!--/.card-body -->
      </div>
      <!--/.card -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->