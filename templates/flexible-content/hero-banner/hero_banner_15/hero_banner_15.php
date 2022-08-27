<?php
/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri();
//$settings->title = 'We bring rapid solutions for your business.';
//$settings->paragraph = 'We are an award winning branding design agency that strongly believes in the power of creative ideas.';
//$settings->imageurl = $settings->root_theme . '/dist/img/photos/about18.jpg';
//$settings->videourl =  $settings->root_theme . '/dist/media/movie.mp4';
//$settings->backgroundurl =  $settings->root_theme . '/dist/img/photos/bg4.jpg';
//$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
//$settings->backgroundcolor = 'dark';
//$settings->backgroundcolor_light = 'soft-primary';
//$settings->textcolor = 'light';
$settings->section_id = esc_html($args['block_id']);
$settings->section_classes = esc_html($args['block_class']);
$settings->GetDataACF();

/** Hero banner class */
$hero_banner = new HeroSlider;
$hero_banner->root_theme = get_template_directory_uri();
?>

<section id="<?php echo $settings->section_id; ?>" class="<?php echo $settings->section_classes; ?> swiper-container swiper-hero dots-over  p-0 rounded-5 overflow-hidden" data-margin=" 0" data-autoplay="true" data-autoplaytime="5000" data-nav="true" data-dots="true" data-items="1">
  <div class="swiper">
    <div class="swiper-wrapper">
      <!-- swiper items -->
      <?php $hero_banner->heroslideritems() ?>
      <!-- /.swiper items -->
    </div>
    <!--/.swiper-wrapper -->
  </div>
  <!-- /.swiper -->
</section>
<!-- /.swiper-container -->