<?php
/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri(); // адрес корня темы , обязательная переменная для демо
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

/* FAQ */
$faq = new Faq;
$faq->col_faq = 'col-lg-6';
$faq->text_color = $settings->textcolor;
$faq->default_template = '<div class="col-lg-6">
        <div class="d-flex flex-row">
          <div>
            <span class="icon btn btn-sm btn-circle btn-primary disabled me-5"><i class="uil uil-comment-exclamation"></i></span>
          </div>
          <div>
            <h4>Can I cancel my subscription?</h4>
            <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod maecenas.</p>
          </div>
        </div>
      </div>
      <!-- /column -->
      <div class="col-lg-6">
        <div class="d-flex flex-row">
          <div>
            <span class="icon btn btn-sm btn-circle btn-primary disabled me-5"><i class="uil uil-comment-exclamation"></i></span>
          </div>
          <div>
            <h4>Which payment methods do you accept?</h4>
            <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod maecenas.</p>
          </div>
        </div>
      </div>
      <!-- /column -->
      <div class="col-lg-6">
        <div class="d-flex flex-row">
          <div>
            <span class="icon btn btn-sm btn-circle btn-primary disabled me-5"><i class="uil uil-comment-exclamation"></i></span>
          </div>
          <div>
            <h4>How can I manage my Account?</h4>
            <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod maecenas.</p>
          </div>
        </div>
      </div>
      <!-- /column -->
      <div class="col-lg-6">
        <div class="d-flex flex-row">
          <div>
            <span class="icon btn btn-sm btn-circle btn-primary disabled me-5"><i class="uil uil-comment-exclamation"></i></span>
          </div>
          <div>
            <h4>Is my credit card information secure?</h4>
            <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod maecenas.</p>
          </div>
        </div>
      </div>
      <!-- /column -->';
?>

<section class="wrapper bg-<?php echo $settings->backgroundcolor; ?>">
  <div class="container py-14 py-md-16">
    <div class="row gx-md-8 gx-xl-12 gy-10">
      <?php echo $faq->Faq5(); ?>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->