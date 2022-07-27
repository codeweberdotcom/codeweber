<?php
$root_theme = get_template_directory_uri();
$title = 'Grow Your Business with Our Solutions.';
$paragraph = 'We help our clients to increase their website traffic, rankings and visibility in search results.';
$imageurl = $root_theme . '/dist/img/photos/about7.jpg';
$videourl = $root_theme . '/dist/media/movie.mp4';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$glightbox = '';
$button_link = "#";
$backgroundcolor = 'dark';
$textcolor = 'white';
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
  $backgroundcolor = 'light';
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

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?> wrapper bg-<?php echo $backgroundcolor; ?>">
  <div class="container pt-8 pt-md-14">
    <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
      <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
        <div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;"></div>
        <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
        <div class="swiper-container dots-over shadow-lg" data-margin="5" data-nav="true" data-dots="true">
          <div class="swiper">
            <div class="swiper-wrapper">

              <!-- swiper-items -->
              <?php if (have_rows('gallery')) :
                while (have_rows('gallery')) : the_row();
                  $video_or_photo = get_sub_field('photo_or_video');
                  if ($video_or_photo === 'Photo') :
                    $image = get_sub_field('photo');
                    $size = 'sandbox_hero_2';
                    if ($image) :
                      $imageurl = esc_url($image['sizes'][$size]);
                      $imagealt = esc_attr($image['alt']); ?>
                      <div class="swiper-slide"><img src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" class="rounded" alt="<?php echo $imagealt; ?>" /></div>
                    <?php endif;
                  elseif ($video_or_photo === 'Video') :
                    $videourl =  get_sub_field('video');
                    $poster_for_video = get_sub_field('poster_for_video');
                    if ($poster_for_video) :
                      $size = 'sandbox_hero_2';
                      $video_poster_url = esc_url($poster_for_video['sizes'][$size]);
                      $video_poster_alt = esc_attr($poster_for_video['alt']);
                    endif; ?>
                    <div class="swiper-slide"><a href="<?php echo $videourl; ?>" class="btn btn-circle btn-light btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox data-gallery="hero"><i class="icn-caret-right text-dark"></i></a><img src="<?php echo $video_poster_url; ?>" srcset="<?php echo $video_poster_url; ?>" class="rounded" alt="<?php echo $video_poster_alt; ?>" /></div>
                <?php endif;
                endwhile;
              else : ?>
                <div class="swiper-slide"><img src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" class="rounded" alt="" /></div>
              <?php endif; ?>
              <!--/.swiper-items -->

            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!--/.swiper -->
        </div>
        <!-- /.swiper-container -->
      </div>
      <!--/column -->
      <div class="col-lg-5 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-1 mb-5 text-<?php echo $textcolor; ?>"><?php esc_html_e($title, 'codeweber'); ?></h1>
        <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0 text-<?php echo $textcolor; ?>"><?php echo $paragraph; ?></p>

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
                    <?php $data_modal = 'data-bs-toggle="modal"'; ?>
                    <?php $data_modal_id = 'data-bs-target="#modal-html-' . $section_id . '-' . $i . '"'; ?>
                    <span><a href="#" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill me-2" <?php echo $data_modal; ?> <?php echo $data_modal_id; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                    <?php $form = '<div class="modal fade" id="modal-html-' . $section_id . '-' . $i . '" tabindex="-1">
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
            <span><a href="#" class="btn btn-lg btn-primary btn-icon btn-icon-start rounded-pill me-2">Explore Now</a></span>
            <span><a href="#" class="btn btn-lg btn-outline-primary btn-icon btn-icon-start rounded-pill">Free Trial</a></span>
          <?php endif; ?>
          <!--  buttons end -->
        </div>
        <!--  buttons group -->

      </div>
      <!--  generate forms start -->
      <?php foreach ($forms as $item) {
        echo $item;
      } ?>
      <!--  generate forms end -->

      <!--/column -->
    </div>
    <!-- /.row -->
</section>
<!-- /section -->