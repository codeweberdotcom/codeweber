<?php

/**
 * CW
 */
$features = new CW_Settings(
   $cw_settings = array(
      'title' => 'The service we offer is specifically designed to meet your needs.',
      'patternTitle' => '<h2 class="h3 display-4 mb-10 px-xl-10 %2$s">%1$s</h2>',
      // 'paragraph' => 'We help our clients to increase their website traffic, rankings and visibility in search results.',
      // 'patternParagraph' => '<p class="lead fs-lg mb-7 %2$s">%1$s</p>',
      'subtitle' => 'What We Do?',
      'patternSubtitle' => '<div class="h2 fs-16 text-uppercase text-muted mb-3 %2$s">%1$s</div>',
      // 'buttons' => '<span><a class="btn btn-primary rounded-pill me-2">Try It For Free</a></span>',
      // 'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',
      'background_class_default' => 'wrapper bg-light',
      'background_data_default' => '/dist/img/photos/bg16.png',
      'background_video_preview' => '/dist/img/photos/movie2.jpg',
      'background_video_url' => '/dist/media/movie2.mp4',
      'background_pattern_url' => '/dist/img/pattern.png',
      // 'image_pattern' => '<figure %5s title="dsdsds"><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
      // 'image_link' => '/dist/img/illustrations/i2.png',
      // 'image_thumb_size' => 'sandbox_hero_1',
      // 'image_big_size' => 'project_1',
      // 'swiper' => array('swiper' => true, 'xs' => '1'),
      'shapes' => array('<div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>', '<div class="shape bg-dot yellow rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>'),

      'features' => '<div class="col-md-6 col-xl-3"><div class="card shadow-lg"><div class="card-body"><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/search-2.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" /><h4>SEO Services</h4><p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p><a href="#" class="more hover link-yellow">Learn More</a></div><!--/.card-body --></div><!--/.card --></div><!--/column -->',

      'features_pattern' => '<div class="col-md-6 col-xl-3 %1$s"><div class="card shadow-lg"><div class="card-body">%2$s<h4>%3$s</h4><p class="mb-5">%4$s</p>%5$s</div><!--/.card-body --></div><!--/.card --></div><!--/column -->',
      //'list' => true,
      //'list_class' => ''
   )
);
?>



<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $features->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $features->background_data; ?>>
   <?php if ($features->background_video_bool == true) { ?>
      <video poster="<?php echo $features->background_video_preview; ?>" src="<?php echo $features->background_video_url; ?>" autoplay loop playsinline muted></video>
      <div class="video-content">
      <?php } ?>
      <!-- /video background -->
      <div class="container py-14 py-md-16 text-center">
         <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
               <?php echo $features->subtitle; ?>
               <?php echo $features->title; ?>
            </div>
            <!-- /column -->
         </div>
         <!-- /.row -->
         <div class="position-relative">
            <?php
            echo $features->shapes;
            ?>
            <div class="row gx-md-5 gy-5 text-center">
               <?php echo $features->features;
               ?>
            </div>
            <!--/.row -->
         </div>
         <!-- /.position-relative -->
      </div>
      <!-- /.container -->
      <?php if ($features->background_video_bool == true) { ?>
      </div>
      </video>
   <?php } ?>
   <!-- /video background -->
</section>
<!-- /section -->