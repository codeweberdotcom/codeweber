<?php
$root_theme = get_template_directory_uri();

$title = 'Crafting project specific solutions with expertise.';
$paragraph = 'We\'re a company that focuses on establishing long-term relationships with customers.';

$backgroundurl = $root_theme . '/dist/img/photos/bg4.jpg';
$backgroundcolor = 'dark';
$textcolor = 'white';

$icon = '';

$slider_array = '<div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="5000" data-nav="true" data-dots="true" data-items="1">
<div class="swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(' . $root_theme . '/dist/img/photos/bg7.jpg);">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
            <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">We bring solutions to make life easier.</h2>
            <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">We are a creative company that focuses on long term relationships with customers.</p>
            <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Read More</a></div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!--/.container -->
    </div>
    <!--/.swiper-slide -->
    <div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(' . $root_theme . '/dist/img/photos/bg8.jpg);">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
            <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">We are trusted by over a million customers.</h2>
            <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">Here a few reasons why our customers choose us.</p>
            <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="' . $root_theme . '/dist/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!--/.container -->
    </div>
    <!--/.swiper-slide -->
    <div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(' . $root_theme . '/dist/img/photos/bg9.jpg);">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
            <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Just sit and relax.</h2>
            <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">We make sure your spending is stress free so that you can have the perfect control.</p>
            <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!--/.container -->
    </div>
    <!--/.swiper-slide -->
  </div>
  <!--/.swiper-wrapper -->
</div>
<!-- /.swiper -->
</div>
<!-- /.swiper-container -->';

$post_id = get_the_ID();
$section_id = $post_id . '_' . get_row_index();


// --- Background ---
$background = get_sub_field('background');
if ($background) :
  $size = 'sandbox_hero_11';
  $backgroundurl = esc_url($background['sizes'][$size]);

endif;

// --- Button settings ---
if (have_rows('button_button')) :
  while (have_rows('button_button')) : the_row();
    $buttontext = get_sub_field('text_on_button');
    $type_button = get_sub_field('select_type');
    $button_link = get_sub_field('button_link');
    if ($button_link) :
      $post = $button_link;
      setup_postdata($post);
      if ($type_button == 'Page or Post') :
        $buttonlink = get_permalink();
      endif;
      wp_reset_postdata();
    endif;
    $taxonomy = get_sub_field('taxonomy');
    if ($taxonomy && $type_button == 'Taxonomy') :
      $buttonlink = esc_url(get_term_link($taxonomy));
    endif;
    if (get_sub_field('url') && $type_button == 'URL') :
      $buttonlink = get_sub_field('url');
    endif;

    if (get_sub_field('select_icon')['icon']) :
      $icon = get_sub_field('select_icon')['icon'];
    endif;


  endwhile;
endif;

// --- Button 2 settings ---
if (have_rows('button_2_button')) :
  while (have_rows('button_2_button')) : the_row();
    $buttontext2 = get_sub_field('text_on_button');
    $type_button2 = get_sub_field('select_type');
    $button_link2 = get_sub_field('button_link');
    if ($button_link2) :
      $post2 = $button_link2;
      setup_postdata($post2);
      if ($type_button2 == 'Page or Post') :
        $buttonlink2 = get_permalink();
      endif;
      wp_reset_postdata();
    endif;
    $taxonomy2 = get_sub_field('taxonomy');
    if ($taxonomy2 && $type_button2 == 'Taxonomy') :
      $buttonlink2 = esc_url(get_term_link($taxonomy2));
    endif;
    if (get_sub_field('url') && $type_button == 'URL') :
      $buttonlink2 = get_sub_field('url');
    endif;

    if (get_sub_field('select_icon')['icon']) :
      $icon2 = get_sub_field('select_icon')['icon'];
    endif;

  endwhile;
endif;

// --- Title ---
if (get_sub_field('title_title')) :
  $title = get_sub_field('title_title');
endif;

// --- Paragraph ---
if (get_sub_field('paragraph_paragraph')) :
  $paragraph = get_sub_field('paragraph_paragraph');
endif;

// --- Image ---
$image = get_sub_field('image_image');
if ($image) :
  $size = 'sandbox_hero_11';
  $imageurl = esc_url($image['sizes'][$size]);
  $imagealt = esc_attr($image['alt']);
endif;

// --- Theme ---
if (get_sub_field('dark_or_white_light_or_dark') == 0) :
  $backgroundcolor = 'light';
  $textcolor = 'dark';
endif;
?>

<div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="5000" data-nav="true" data-dots="true" data-items="1">
  <div class="swiper">
    <div class="swiper-wrapper">
      <?php if (have_rows('hero_slider')) : ?>
        <?php while (have_rows('hero_slider')) : the_row(); ?>
          <?php the_sub_field('title'); ?>
          <?php the_sub_field('paragraph'); ?>
          <?php the_sub_field('photo_or_video'); ?>
          <?php $photo = get_sub_field('photo'); ?>
          <?php if ($photo) : ?>
            <img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" />
          <?php endif; ?>
          <?php the_sub_field('video'); ?>
          <?php $poster_for_video = get_sub_field('poster_for_video'); ?>
          <?php if ($poster_for_video) : ?>
            <img src="<?php echo esc_url($poster_for_video['url']); ?>" alt="<?php echo esc_attr($poster_for_video['alt']); ?>" />
          <?php endif; ?>
          <?php if (have_rows('button_button')) : ?>
            <?php while (have_rows('button_button')) : the_row(); ?>
              <?php if (get_sub_field('show_button') == 1) : ?>
                <?php // echo 'true'; 
                ?>
              <?php else : ?>
                <?php // echo 'false'; 
                ?>
              <?php endif; ?>
              <?php the_sub_field('text_on_button'); ?>
              <?php the_sub_field('select_type'); ?>
              <?php $button_link = get_sub_field('button_link'); ?>
              <?php if ($button_link) : ?>
                <?php $post = $button_link; ?>
                <?php setup_postdata($post); ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php wp_reset_postdata(); ?>
              <?php endif; ?>
              <?php $taxonomy = get_sub_field('taxonomy'); ?>
              <?php if ($taxonomy) : ?>
                <a href="<?php echo esc_url(get_term_link($taxonomy)); ?>"><?php echo esc_html($taxonomy->name); ?></a>
              <?php endif; ?>
              <?php the_sub_field('url'); ?>
            <?php endwhile; ?>
          <?php endif; ?>
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


<div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="5000" data-nav="true" data-dots="true" data-items="1">
  <div class="swiper">
    <div class="swiper-wrapper">


      <div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(<?php echo $root_theme; ?>/dist/img/photos/bg7.jpg);">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
              <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">We bring solutions to make life easier.</h2>
              <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">We are a creative company that focuses on long term relationships with customers.</p>
              <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Read More</a></div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/.container -->
      </div>



      <!--/.swiper-slide -->
      <div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(<?php echo $root_theme; ?>/dist/img/photos/bg8.jpg);">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
              <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">We are trusted by over a million customers.</h2>
              <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">Here a few reasons why our customers choose us.</p>
              <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="<?php echo $root_theme; ?>/dist/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/.container -->
      </div>



      <!--/.swiper-slide -->
      <div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(<?php echo $root_theme; ?>/dist/img/photos/bg9.jpg);">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
              <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Just sit and relax.</h2>
              <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">We make sure your spending is stress free so that you can have the perfect control.</p>
              <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/.container -->
      </div>
      <!--/.swiper-slide -->


    </div>
    <!--/.swiper-wrapper -->
  </div>
  <!-- /.swiper -->
</div>
<!-- /.swiper-container -->


<section id="<?php echo $section_id; ?>" class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 bg-content text-<?php echo $textcolor; ?>" data-image-src="<?php echo $backgroundurl; ?>">
  <div class="container pt-18 pb-16" style="z-index: 5; position:relative">
    <div class="row gx-0 gy-12 align-items-center">
      <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 content text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-2 mb-5 text-<?php echo $textcolor; ?>"><?php echo $title; ?></h1>
        <p class="lead fs-lg lh-sm mb-7 pe-xl-10"><?php echo $paragraph; ?></p>
        <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
          <span><a href="#" class="btn btn-lg btn-<?php echo $textcolor; ?> rounded-pill me-2"><?php echo $buttontext; ?></a></span>
          <span><a href="#" class="btn btn-lg btn-outline-<?php echo $textcolor; ?> rounded-pill"><?php echo $buttontext2; ?></a></span>
        </div>
      </div>
      <!--/column -->
      <div class="col-lg-5 offset-lg-1">
        <div class="swiper-container dots-over shadow-lg" data-margin="5" data-nav="true" data-dots="true">
          <div class="swiper">
            <div class="swiper-wrapper">

              <?php if (have_rows('gallery')) :
                while (have_rows('gallery')) : the_row();
                  $video_or_photo = get_sub_field('photo_or_video');
                  if ($video_or_photo === 'Photo') :
                    $image = get_sub_field('photo');
                    $size = 'sandbox_hero_11';
                    if ($image) :
                      $imageurl = esc_url($image['sizes'][$size]);
                      $imagealt = esc_attr($image['alt']); ?>

                      <div class="swiper-slide"><img src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" class="rounded" alt="<?php echo $imagealt; ?>" /></div>
                    <?php endif;
                  elseif ($video_or_photo === 'Video') :
                    $videourl =  get_sub_field('video');
                    $poster_for_video = get_sub_field('poster_for_video');
                    if ($poster_for_video) :
                      $size = 'sandbox_hero_11';
                      $video_poster_url = esc_url($poster_for_video['sizes'][$size]);
                      $video_poster_alt = esc_attr($poster_for_video['alt']);
                    endif; ?>
                    <div class="swiper-slide"><a href="<?php echo $videourl; ?>" class="btn btn-circle btn-<?php echo $textcolor; ?> btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox data-gallery="hero"><i class="icn-caret-right"></i></a><img src="<?php echo $video_poster_url; ?>" srcset="<?php echo $video_poster_url; ?>" class="rounded" alt="<?php echo $video_poster_alt; ?>" /></div>
              <?php endif;
                endwhile;
              else :
                echo $image_array;
              endif; ?>

            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!--/.swiper -->
        </div>
        <!-- /.swiper-container -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->