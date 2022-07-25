<?php
$root_theme = get_template_directory_uri();

$title = 'Crafting project specific solutions with expertise.';
$paragraph = 'We\'re a company that focuses on establishing long-term relationships with customers.';


$backgroundurl = $root_theme . '/dist/img/photos/bg4.jpg';
$backgroundcolor = 'dark';
$textcolor = 'white';

$image_array = '<div class="swiper-slide"><img src="' . $root_theme . '/dist/img/photos/about21.jpg" srcset="' . $root_theme . '/dist/img/photos/about21@2x.jpg 2x" class="rounded" alt="" /></div>
<div class="swiper-slide"><a href="' . $root_theme . '/dist/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox data-gallery="hero"><i class="icn-caret-right"></i></a><img src="' . $root_theme . '/dist/img/photos/about22.jpg" srcset="' . $root_theme . '/dist/img/photos/about22@2x.jpg 2x" class="rounded" alt="" /></div>
<div class="swiper-slide"><img src="' . $root_theme . '/dist/img/photos/about23.jpg" srcset="' . $root_theme . '/dist/img/photos/about23@2x.jpg 2x" class="rounded" alt="" /></div>';

$video_poster_url = $root_theme . '/dist/img/photos/about12.jpg';
$video_poster_alt = '';
$videourl = $root_theme . '/dist/media/photos/movie2.mp4';


$buttontext = 'Explore Now';
$buttontext2 = 'Contact Us';
$buttonlink = '#';
$buttonlink2 = '#';
$icon = '';
$icon2 = '';

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

    // icon
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

    // icon
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


<section id="<?php echo $section_id; ?>" class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 bg-content text-<?php echo $textcolor; ?>" data-image-src="<?php echo $backgroundurl; ?>">
  <div class="container pt-18 pb-16" style="z-index: 5; position:relative">
    <div class="row gx-0 gy-12 align-items-center">
      <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 content text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-2 mb-5 text-<?php echo $textcolor; ?>"><?php echo $title; ?></h1>
        <p class="lead fs-lg lh-sm mb-7 pe-xl-10"><?php echo $paragraph; ?></p>
        <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
          <span><a href="#" class="btn btn-lg btn-<?php echo $textcolor; ?> rounded-pill me-2"><?php echo $icon; ?><?php echo $buttontext; ?></a></span>
          <span><a href="#" class="btn btn-lg btn-outline-<?php echo $textcolor; ?> rounded-pill"><?php echo $icon2; ?><?php echo $buttontext2; ?></a></span>
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
                    <div class="swiper-slide"><a href="<?php echo $videourl; ?>" class="btn btn-circle btn-light btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox data-gallery="hero"><i class="icn-caret-right text-dark"></i></a><img src="<?php echo $video_poster_url; ?>" srcset="<?php echo $video_poster_url; ?>" class="rounded" alt="<?php echo $video_poster_alt; ?>" /></div>
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