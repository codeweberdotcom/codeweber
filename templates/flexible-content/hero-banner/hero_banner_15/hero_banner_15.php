<?php
$root_theme = get_template_directory_uri();
$title = 'Creative. Smart. Awesome.';
$paragraph = 'We specialize in web, mobile and identity design. We love to turn ideas into beautiful things.';
$imageurl = $root_theme . '/dist/img/illustrations/i6.png';
$videourl = $root_theme . '/dist/media/movie.mp4';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$glightbox = '';
$button_link = "#";
$backgroundcolor = 'dark';
$textcolor = 'light';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$forms = array();

$post_id = get_the_ID();
$section_id = $post_id . '_' . get_row_index();


// --- Title ---
if (get_sub_field('title_title')) :
  $title = get_sub_field('title_title');
endif;

// --- Paragraph ---
if (get_sub_field('paragraph_paragraph')) :
  $paragraph = get_sub_field('paragraph_paragraph');
endif;

// --- Theme ---
if (get_sub_field('dark_or_white_light_or_dark') == 1) :
  $backgroundcolor = 'soft-primary';
  $textcolor = 'dark';
endif;

// --- Typewriter ---
if (have_rows('typewriter_effect_text')) :
  $typewriterarray = array();
  while (have_rows('typewriter_effect_text')) : the_row();
    array_push($typewriterarray, get_sub_field('text'));
  endwhile;
  $typewriter = implode(", ", $typewriterarray);
endif;

// --- Image ---
$image = get_sub_field('image');
if ($image) :
  $imageurl = esc_url($image['url']);
endif;

// Create id attribute allowing for custom "anchor" value.
$id = 'fexible-block-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
};

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-fexible-block';
if (!empty($block['className'])) {
  $classes .= ' ' . $block['className'];
};

if (!empty($block['align'])) {
  $classes .= ' align' . $block['align'];
};

?>



<div id="<?php echo esc_attr($id); ?>" class="swiper-container swiper-hero dots-over <?php echo esc_attr($classes); ?> " data-margin=" 0" data-autoplay="true" data-autoplaytime="5000" data-nav="true" data-dots="true" data-items="1">
  <div class="swiper">
    <div class="swiper-wrapper">

      <?php
      if (have_rows('hero_slider_hero_slider')) : ?>



        <?php while (have_rows('hero_slider_hero_slider')) : the_row();

          $title = get_sub_field('title');
          $paragraph = get_sub_field('paragraph');
          $position_text = get_sub_field('position_text');
          if ($position_text == 'Left') :
            $position_text = 'col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start';
            $button_wrapper_class = 'justify-content-start';
          elseif ($position_text == 'Right') :
            $position_text = 'col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start justify-content-center align-self-center align-items-start';
            $button_wrapper_class = 'justify-content-start';
          elseif ($position_text == 'Center') :
            $position_text = 'col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center';
            $button_wrapper_class = 'justify-content-center';
          endif;


          $photo_or_video = get_sub_field('photo_or_video');
          if ($photo_or_video == 'Photo') :
            $photo = get_sub_field('photo');
            if ($photo) :
              $size = 'sandbox_hero_14';
              $image_url = esc_url($photo['sizes'][$size]); ?>


              <div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(<?php echo $image_url; ?>);">
                <div class="container h-100">
                  <div class="row h-100">
                    <div class="<?php echo $position_text; ?>">
                      <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s"><?php echo $title; ?></h2>
                      <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s"><?php echo $paragraph; ?></p>

                      <!--  buttons group -->
                      <div class="d-flex <?php echo $button_wrapper_class; ?> flex-wrap animate__animated animate__slideInUp animate__delay-3s" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                        <!--  buttons start -->
                        <?php if (have_rows('button_hero')) : ?>
                          <?php while (have_rows('button_hero')) : the_row(); ?>
                            <?php $style_button = get_sub_field('outline') ?>
                            <!--  buttons style -->
                            <?php if (get_sub_field('outline') == 1) : ?>
                              <?php $class_style = '-outline' ?>
                            <?php else : ?>
                              <?php $class_style = ''; ?>
                            <?php endif; ?>
                            <?php $color_button = get_sub_field('dark_white_primary'); ?>
                            <?php if ($color_button == 'dark') : ?>
                              <?php $color_button = '-dark'; ?>
                            <?php elseif ($color_button == 'white') : ?>
                              <?php $color_button = '-white'; ?>
                            <?php elseif ($color_button == 'primary') : ?>
                              <?php $color_button = '-primary'; ?>
                            <?php endif; ?>
                            <?php $button_class = $class_style . $color_button; ?>
                            <?php $select_icon = get_sub_field('icon'); ?>
                            <!--  buttons style end-->
                            <?php $text_on_button = get_sub_field('text_on_button'); ?>
                            <?php $select_type = get_sub_field('select_type'); ?>
                            <?php if ($select_type == 'Page or Post') : ?>
                              <?php $button_link = get_sub_field('button_link'); ?>
                              <?php if ($button_link) : ?>
                                <?php $post = $button_link; ?>
                                <?php setup_postdata($post); ?>
                                <?php $button_link = get_permalink(); ?>
                                <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill mb-5 me-2"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                                <?php wp_reset_postdata(); ?>
                              <?php endif; ?>
                            <?php elseif ($select_type == 'Taxonomy') : ?>
                              <?php $taxonomy = get_sub_field('taxonomy'); ?>
                              <?php if ($taxonomy) : ?>
                                <?php $button_link = get_term_link($taxonomy->term_id); ?>
                                <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill mb-5 me-2"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                              <?php endif; ?>
                            <?php elseif ($select_type == 'URL') : ?>
                              <?php $url = get_sub_field('url'); ?>
                              <?php $button_link = $url; ?>
                              <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill mb-5 me-2"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                            <?php elseif ($select_type == 'Video URL') : ?>
                              <?php $video_url = get_sub_field('video_url'); ?>
                              <?php if ($video_url) : ?>
                                <?php $glightbox = 'data-glightbox=""'; ?>
                              <?php endif; ?>
                              <?php $button_link = $video_url; ?>
                              <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill mb-5 me-2" <?php echo $glightbox; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                            <?php elseif ($select_type == 'Contact Form') : ?>
                              <?php $contact_form = get_sub_field('contact_form'); ?>
                              <?php if ($contact_form) : ?>
                                <?php $data_modal = 'data-bs-toggle="modal"'; ?>
                                <?php $data_modal_id = 'data-bs-target="#modal-form-' . $contact_form . '-' . $section_id . '-' . $i . '"'; ?>
                                <span><a href="#" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill mb-5 me-2" <?php echo $data_modal; ?> <?php echo $data_modal_id; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                                <?php $form = '<div class="modal fade" id="modal-form-' . $contact_form . '-' . $section_id . '-' . $i . '" tabindex="-1">
                       <div class="modal-dialog modal-dialog-centered modal-sm">
                       <div class="modal-content text-center">
                      <div class="modal-body">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>'; ?>
                                <?php $id = $contact_form; ?>
                                <?php $form .= do_shortcode("[contact-form-7 id='{$id}']"); ?>
                                <?php $form .= '</div></div></div></div>'; ?>
                                <?php $forms[$i] = $form; ?>
                              <?php endif; ?>
                            <?php elseif ($select_type == 'Html') : ?>
                              <?php $html = get_sub_field('html'); ?>
                              <?php $data_modal_id = 'data-bs-target="#modal-form-' . $contact_form . '-' . $section_id . '-' . $i . '"'; ?>
                              <span><a href="#" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill mb-5 me-2" <?php echo $data_modal; ?> <?php echo $data_modal_id; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                              <?php $form = '<div class="modal fade" id="modal-form-' . $contact_form . '-' . $section_id . '-' . $i . '" tabindex="-1">
                       <div class="modal-dialog modal-dialog-centered modal-sm">
                       <div class="modal-content text-center">
                      <div class="modal-body">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>'; ?>
                              <?php $form .= $html; ?>
                              <?php $form .= '</div></div></div></div>'; ?>
                              <?php $forms[$i] = $form; ?>
                            <?php endif; ?>
                          <?php endwhile; ?>
                        <?php else : ?>
                          <span> <a href="#" class="btn btn-lg btn-outline-white rounded-pill">Read More</a></span>
                        <?php endif; ?>
                        <!--  buttons end -->
                      </div>
                      <!--  buttons group -->

                    </div>
                    <!--/column -->
                  </div>
                  <!--/.row -->
                </div>
                <!--/.container -->
              </div>
              <!--/.swiper-slide -->


            <?php endif;
          elseif ($photo_or_video == 'Video') :
            $size = 'sandbox_hero_14';
            $poster_for_video = get_sub_field('poster_for_video');
            $image_url = esc_url($poster_for_video['sizes'][$size]);
            $video_url = get_sub_field('video'); ?>


            <div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(<?php echo $image_url; ?>);">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                    <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s"><?php echo $title; ?></h2>
                    <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s"><?php echo $paragraph; ?></p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="<?php echo $video_url; ?>" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/.container -->
            </div>
            <!--/.swiper-slide -->

          <?php endif; ?>


        <?php endwhile; ?>
      <?php else : ?>


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
                <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="./assets/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div>
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
      <?php endif; ?>


    </div>
    <!--/.swiper-wrapper -->
  </div>
  <!-- /.swiper -->
</div>
<!-- /.swiper-container -->