<?php
/* Add settings */
$settings = new Settings();
// адрес корня темы , обязательная переменная для демо
$settings->title = 'Save your time and money by choosing our professional team.'; // демо заголовок
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
$counter->counters_default = ' <div class="col-md-6 col-lg-3">
              <div class="progressbar semi-circle purple" data-value="75"></div>
              <h4>New Visitors</h4>
              <p class="mb-0">Maecenas faucibus mollis interdum. Aenean eu leo.</p>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-3">
              <div class="progressbar semi-circle leaf" data-value="80"></div>
              <h4>Social Media</h4>
              <p class="mb-0">Maecenas faucibus mollis interdum. Aenean eu leo.</p>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-3">
              <div class="progressbar semi-circle pink" data-value="60"></div>
              <h4>Referrals</h4>
              <p class="mb-0">Maecenas faucibus mollis interdum. Aenean eu leo.</p>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-3">
              <div class="progressbar semi-circle yellow" data-value="90"></div>
              <h4>Search Engines</h4>
              <p class="mb-0">Maecenas faucibus mollis interdum. Aenean eu leo.</p>
            </div>
            <!-- /column -->';
?>

<section class="section-frame overflow-hidden">
   <div class="wrapper bg-soft-primary" style="border-radius: 1rem;">
      <div class="container py-17">
         <div class="row text-center">
            <div class="col-xl-11 col-xxl-10 mx-auto">
               <h2 class="fs-16 text-uppercase text-muted mb-3"><?php echo $settings->subtitle; ?></h2>
               <h3 class="display-4 mb-10 px-lg-20 px-xl-20"><?php echo $settings->title; ?></h3>
               <div class="row gy-6 text-center">
                  <?php echo $counter->Counters_3(); ?>
               </div>
               <!-- /.row -->
            </div>
            <!-- /column -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
   </div>
   <!-- /.wrapper -->
</section>
<!-- /section -->