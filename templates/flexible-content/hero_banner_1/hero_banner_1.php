<?php
$root_theme = get_template_directory_uri();
$title = 'Grow Your Business with Our Solutions.';
$paragraph = 'We help our clients to increase their website traffic, rankings and visibility in search results.';
$imageurl = $root_theme . '/dist/img/illustrations/i2.png';
$typewriter = 'customer satisfaction,business needs,creative ideas';
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
?>

<section id="<?php echo $section_id; ?>" class="wrapper bg-<?php echo $backgroundcolor; ?>">
  <div class="container pt-10 pt-md-14 pb-8 text-center">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-7">

        <div class="swiper-container dots-over shadow-lg" data-margin="5" data-nav="true" data-dots="true">
          <div class="swiper">
            <div class="swiper-wrapper">

              <!-- swiper-items -->
              <?php if (have_rows('gallery')) :
                while (have_rows('gallery')) : the_row();
                  $video_or_photo = get_sub_field('photo_or_video');
                  if ($video_or_photo === 'Photo') :
                    $image = get_sub_field('photo');
                    $size = 'sandbox_hero_1';
                    if ($image) :
                      $imageurl = esc_url($image['sizes'][$size]);
                      $imagealt = esc_attr($image['alt']); ?>
                      <div class="swiper-slide"><img src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" class="rounded" alt="<?php echo $imagealt; ?>" /></div>
                    <?php endif;
                  elseif ($video_or_photo === 'Video') :
                    $videourl =  get_sub_field('video');
                    $poster_for_video = get_sub_field('poster_for_video');
                    if ($poster_for_video) :
                      $size = 'sandbox_hero_1';
                      $video_poster_url = esc_url($poster_for_video['sizes'][$size]);
                      $video_poster_alt = esc_attr($poster_for_video['alt']);
                    endif; ?>
                    <div class="swiper-slide"><a href="<?php echo $videourl; ?>" class="btn btn-circle btn-light btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox data-gallery="hero"><i class="icn-caret-right text-dark"></i></a><img src="<?php echo $video_poster_url; ?>" srcset="<?php echo $video_poster_url; ?>" class="rounded" alt="<?php echo $video_poster_alt; ?>" /></div>
                <?php endif;
                endwhile;
              else : ?>
                <figure><img class="w-auto" src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" alt="" /></figure>
              <?php endif; ?>
              <!--/.swiper-items -->

            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!--/.swiper -->
        </div>
        <!-- /.swiper-container -->


      </div>
      <!-- /column -->
      <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
        <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0 text-<?php echo $textcolor; ?>"><?php esc_html_e($title, 'codeweber'); ?></h1>
        <p class="lead fs-lg mb-7 text-<?php echo $textcolor; ?>"><?php echo $paragraph; ?></p>

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
                      <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill me-2"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                      <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                  <?php elseif ($select_type == 'Taxonomy') : ?>
                    <?php $taxonomy = get_sub_field('taxonomy'); ?>
                    <?php if ($taxonomy) : ?>
                      <?php $button_link = get_term_link($taxonomy->term_id); ?>
                      <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill me-2"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                    <?php endif; ?>
                  <?php elseif ($select_type == 'URL') : ?>
                    <?php $url = get_sub_field('url'); ?>
                    <?php $button_link = $url; ?>
                    <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill me-2"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                  <?php elseif ($select_type == 'Video URL') : ?>
                    <?php $video_url = get_sub_field('video_url'); ?>
                    <?php if ($video_url) : ?>
                      <?php $glightbox = 'data-glightbox=""'; ?>
                    <?php endif; ?>
                    <?php $button_link = $video_url; ?>
                    <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill me-2" <?php echo $glightbox; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                  <?php elseif ($select_type == 'Contact Form') : ?>
                    <?php $contact_form = get_sub_field('contact_form'); ?>
                    <?php if ($contact_form) : ?>
                      <?php $data_modal = 'data-bs-toggle="modal"'; ?>
                      <?php $data_modal_id = 'data-bs-target="#modal-form-' . $contact_form . '-' . $section_id . '-' . $i . '"'; ?>
                      <span><a href="#" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill me-2" <?php echo $data_modal; ?> <?php echo $data_modal_id; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
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
                    <span><a href="#" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill me-2" <?php echo $data_modal; ?> <?php echo $data_modal_id; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
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
                <?php $i++; ?>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php else : ?>
            <span><a class="btn btn-primary rounded-pill me-2">Try It For Free</a></span>
          <?php endif; ?>
          <!--  buttons end -->
        </div>
        <!--  buttons group -->


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