<?php

/* Add settings */
$settings = new Settings();
$settings->root_theme = get_template_directory_uri();
$settings->title = 'Rapid Solutions,Innovative Thinking,Top-Notch Support';
$settings->paragraph = 'We are a digital agency specializing in web design, mobile development and seo optimization.';
$settings->imageurl = $settings->root_theme . '/dist/img/illustrations/i6.png';
$settings->video_url = $settings->root_theme . '/dist/media/movie.mp4';
$settings->backgroundurl = $settings->root_theme . '/dist/img/photos/movie2.jpg';
$settings->typewriter = 'Rapid Solutions,Innovative Thinking,Top-Notch Support';
// $settings->backgroundcolor = 'dark';
// $settings->backgroundcolor_light = 'soft-primary';
$settings->textcolor = 'light';
$settings->section_id = esc_html($args['block_id']);
$settings->GetDataACF();
?>

<section class="video-wrapper bg-overlay bg-overlay-gradient px-0 mt-0 min-vh-80">
  <video poster="<?php echo $settings->backgroundurl; ?>" src="<?php echo $settings->video_url; ?>" autoplay loop playsinline muted></video>
  <div class="video-content">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-8 col-xl-6 text-center text-<?php echo $settings->textcolor; ?> mx-auto">
          <h1 class="display-1 fs-54 text-<?php echo $settings->textcolor; ?> mb-5"><span class="rotator-zoom"><?php echo $settings->typewriter; ?></span></h1>
          <p class="lead fs-24 mb-0 mx-xxl-8"><?php echo $settings->paragraph; ?></p>
        </div>
        <!-- /column -->
      </div>
    </div>
    <!-- /.video-content -->
  </div>
  <!-- /.content-overlay -->
</section>
<!-- /section -->