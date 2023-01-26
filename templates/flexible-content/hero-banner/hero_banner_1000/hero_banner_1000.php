<?php
$block = new CW_Settings(
  $cw_settings = array(
    'title' => 'Networking <span class="text-gradient gradient-1">solutions</span> for worldwide communication',
    'patternTitle' => '<h1 class="display-2 mb-4 me-xl-5 me-xxl-0">%s</h1>',

    'paragraph' => 'We\'re a company that focuses on establishing long-term relationships with customers.',
    'patternParagraph' => '<p class="lead fs-23 lh-sm mb-7 pe-xxl-15">%s</p>',

    // 'subtitle' => 'Grow Your Business with Our Solutions.',
    // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

    'buttons' => '<a href="#" class="btn btn-lg btn-gradient gradient-1 rounded">Explore Now</a>',
    'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

  )
);
?>

<div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="5000" data-nav="true" data-dots="true" data-items="1">
  <div class="swiper">
    <div class="swiper-wrapper">
      <?php if (have_rows('cw_slider_full')) : ?>
        <?php while (have_rows('cw_slider_full')) : the_row();
          $block = new CW_Settings(
            $cw_settings = array(
              'title' => 'We bring solutions to make life easier.',
              'patternTitle' => '<h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">%s</h2>',

              'paragraph' => 'We are a creative company that focuses on long term relationships with customers.',
              'patternParagraph' => '<p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">%s</p>',

              'buttons' => '<div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Read More</a></div>',
              'buttons_pattern' => '<div class="animate__animated animate__slideInUp animate__delay-3s">%s</div>',
            )
          );
          if (have_rows('cw_image1')) {
            while (have_rows('cw_image1')) {
              the_row();
              $cw_image = get_sub_field('cw_image');
              if ($cw_image) {
                $image_link = esc_url($cw_image['url']);
                $image_alt = esc_url($cw_image['alt']);
              }
            }
          } ?>
          <div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(<?php echo $image_link; ?>">
            <div class="container h-100">
              <div class="row h-100">
                <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
                  <?php echo $block->title; ?>
                  <!-- title -->
                  <?php echo $block->paragraph; ?>
                  <!--/pargraph -->
                  <?php echo $block->buttons; ?>
                  <!--/buttons group -->
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!--/.container -->
          </div>
          <!--/.swiper-slide -->


        <?php endwhile; ?>
      <?php else : ?>
        <?php // no rows found 
        ?>
      <?php endif; ?>


    </div>
    <!--/.swiper-wrapper -->
  </div>
  <!-- /.swiper -->
</div>
<!-- /.swiper-container -->