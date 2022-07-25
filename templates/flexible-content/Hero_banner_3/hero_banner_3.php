<?php
$root_theme = get_template_directory_uri();
$title = 'Sandbox focuses on';
$paragraph = 'We carefully consider our solutions to support each and every stage of your growth.';
$imageurl = $root_theme . '/dist/img/photos/about13.jpg';
$glightbox = '';
$button_link = "#";
$backgroundcolor = 'dark';
$textcolor = 'white';
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
  $backgroundcolor = 'light';
  $textcolor = 'dark';
endif;

// --- Typewriter ---
if (have_rows('typewriter_effect_text_typewriter_effect_text')) :
  $typewriterarray = array();
  while (have_rows('typewriter_effect_text_typewriter_effect_text')) : the_row();
    array_push($typewriterarray, get_sub_field('text'));
  endwhile;
  $typewriter = implode(", ", $typewriterarray);
else :
  $typewriter = 'customer satisfaction,business needs,creative ideas';
endif; ?>


<section id="<?php echo $section_id; ?>" class="wrapper bg-<?php echo $backgroundcolor; ?> angled lower-start">
  <div class="container pt-7 pt-md-11 pb-8">
    <div class="row gx-0 gy-10 align-items-center">
      <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-1 text-<?php echo $textcolor; ?> mb-4"><?php echo $title; ?><br />
          <span class="typer text-primary text-nowrap" data-delay="100" data-words="<?php echo $typewriter; ?>">
          </span><span class="cursor text-primary" data-owner="typer"></span>
        </h1>
        <p class="lead fs-24 lh-sm text-<?php echo $textcolor; ?> mb-7 pe-md-18 pe-lg-0 pe-xxl-15"><?php echo $paragraph; ?></p>
        <div>

          <!--  buttons group -->
          <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
            <!--  buttons start -->
            <?php if (have_rows('button_repeater')) : ?>
              <?php $i = 0; ?>
              <?php while (have_rows('button_repeater')) : the_row(); ?>
                <?php if (have_rows('button_button')) : ?>
                  <?php while (have_rows('button_button')) : the_row(); ?>
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
                        <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded me-2"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                        <?php wp_reset_postdata(); ?>
                      <?php endif; ?>
                    <?php elseif ($select_type == 'Taxonomy') : ?>
                      <?php $taxonomy = get_sub_field('taxonomy'); ?>
                      <?php if ($taxonomy) : ?>
                        <?php $button_link = get_term_link($taxonomy->term_id); ?>
                        <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded me-2"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                      <?php endif; ?>
                    <?php elseif ($select_type == 'URL') : ?>
                      <?php $url = get_sub_field('url'); ?>
                      <?php $button_link = $url; ?>
                      <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded me-2"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                    <?php elseif ($select_type == 'Video URL') : ?>
                      <?php $video_url = get_sub_field('video_url'); ?>
                      <?php if ($video_url) : ?>
                        <?php $glightbox = 'data-glightbox=""'; ?>
                      <?php endif; ?>
                      <?php $button_link = $video_url; ?>
                      <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded me-2" <?php echo $glightbox; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                    <?php elseif ($select_type == 'Contact Form') : ?>
                      <?php $contact_form = get_sub_field('contact_form'); ?>
                      <?php if ($contact_form) : ?>
                        <?php $data_modal = 'data-bs-toggle="modal"'; ?>
                        <?php $data_modal_id = 'data-bs-target="#modal-form-' . $contact_form . '-' . $section_id . '-' . $i . '"'; ?>
                        <span><a href="#" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded me-2" <?php echo $data_modal; ?> <?php echo $data_modal_id; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
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
                      <?php $data_modal = 'data-bs-toggle="modal"'; ?>
                      <?php $data_modal_id = 'data-bs-target="#test386'; ?>
                      <span><a href="#" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded me-2" <?php echo $data_modal; ?> <?php echo $data_modal_id; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                      <?php $form = '<div class="modal fade" id="test386" tabindex="-1">
                       <div class="modal-dialog modal-dialog-centered modal-sm">
                       <div class="modal-content text-center">
                      <div class="modal-body">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>'; ?>
                      <?php $form .= $html; ?>
                      <?php $form .= '</div></div></div></div>'; ?>
                      <?php $forms[$i] = $form; ?>
                    <?php endif; ?>
                  <?php endwhile; ?>
                  <?php $i++; ?>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php else : ?>
              <span><a class="btn btn-lg btn-primary rounded">Get Started</a></span>
            <?php endif; ?>
            <!--  buttons end -->
          </div>
          <!--  buttons group -->


        </div>
      </div>
      <!-- /column -->
      <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">
        <div class="position-relative">

          <div class="swiper-container dots-over shadow-lg" data-margin="5" data-nav="true" data-dots="true">
            <div class="swiper">
              <div class="swiper-wrapper">

                <!-- swiper-items -->
                <?php if (have_rows('gallery')) :
                  while (have_rows('gallery')) : the_row();
                    $video_or_photo = get_sub_field('photo_or_video');
                    if ($video_or_photo === 'Photo') :
                      $image = get_sub_field('photo');
                      $size = 'sandbox_hero_3';
                      if ($image) :
                        $imageurl = esc_url($image['sizes'][$size]);
                        $imagealt = esc_attr($image['alt']); ?>
                        <div class="swiper-slide"><img src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" class="rounded" alt="<?php echo $imagealt; ?>" /></div>
                      <?php endif;
                    elseif ($video_or_photo === 'Video') :
                      $videourl =  get_sub_field('video');
                      $poster_for_video = get_sub_field('poster_for_video');
                      if ($poster_for_video) :
                        $size = 'sandbox_hero_3';
                        $video_poster_url = esc_url($poster_for_video['sizes'][$size]);
                        $video_poster_alt = esc_attr($poster_for_video['alt']);
                      endif; ?>
                      <div class="swiper-slide"><a href="<?php echo $videourl; ?>" class="btn btn-circle btn-light btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox data-gallery="hero"><i class="icn-caret-right text-dark"></i></a><img src="<?php echo $video_poster_url; ?>" srcset="<?php echo $video_poster_url; ?>" class="rounded" alt="<?php echo $video_poster_alt; ?>" /></div>
                  <?php endif;
                  endwhile;
                else : ?>
                  <figure class="rounded shadow-lg"><img src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" alt="<?php echo $imagealt; ?>"></figure>
                <?php endif; ?>
                <!--/.swiper-items -->

              </div>
              <!--/.swiper-wrapper -->
            </div>
            <!--/.swiper -->
          </div>
          <!-- /.swiper-container -->

        </div>
        <!-- /div -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->

    <!--  generate forms start -->
    <?php foreach ($forms as $item) {
      echo $item;
    } ?>
    <!--  generate forms end -->

  </div>
  <!-- /.container -->
</section>
<!-- /section -->