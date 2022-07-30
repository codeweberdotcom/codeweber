<?php
$root_theme = get_template_directory_uri();
$title = 'Crafting project specific solutions with expertise.';
$paragraph = 'We\'re a company that focuses on establishing long-term relationships with customers.';
$imageurl = $root_theme . '/dist/img/photos/co3.png';
$videourl = $root_theme . '/dist/media/movie.mp4';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$glightbox = '';
$button_link = "#";
$backgroundcolor = 'dark';
$textcolor = 'white';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$forms = array();

$label_class = '<i class="uil uil-users-alt"></i>';

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
$image = get_sub_field('image_image');
if ($image) :
  $imageurl = esc_url($image['url']);
endif;


// --- Label on Photo ---

if (have_rows('label_on_banner_label_on_banner')) :
  while (have_rows('label_on_banner_label_on_banner')) : the_row();
    if (get_sub_field('icon_icon')) :
      $label_class = get_sub_field('icon_icon');
    endif;
    if (get_sub_field('number')) :
      $labeltitle = get_sub_field('number');
    endif;
    if (get_sub_field('text')) :
      $labeltext = get_sub_field('text');
    endif;
  endwhile;
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

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?> wrapper bg-light">
  <div class="container">
    <div class="card  bg-<?php echo $backgroundcolor; ?> rounded-4 mt-2 mb-13 mb-md-17">
      <div class="card-body p-md-10 py-xl-11 px-xl-15">
        <div class="row gx-lg-8 gx-xl-0 gy-10 align-items-center">
          <div class="col-lg-6 order-lg-2 d-flex position-relative">
            <img class="img-fluid ms-auto mx-auto me-lg-8" src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" alt="<?php echo $imagealt; ?>" data-cue="fadeIn">
            <div data-cue="slideInRight" data-delay="300">
              <div class="card shadow-lg position-absolute" style="bottom: 10%; right: -3%;">
                <div class="card-body py-4 px-5">
                  <div class="d-flex flex-row align-items-center">
                    <div>
                      <div class="icon btn btn-circle btn-md btn-soft-primary disabled mx-auto me-3"> <?php echo $label_class; ?> </div>
                    </div>
                    <div>
                      <h3 class="counter mb-0 text-nowrap"><?php echo $labeltitle; ?></h3>
                      <p class="fs-14 lh-sm mb-0 text-nowrap"><?php echo $labeltext; ?></p>
                    </div>
                  </div>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/div -->
          </div>
          <!--/column -->
          <div class="col-lg-6 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <h1 class="display-2 mb-5 text-<?php echo $textcolor; ?>"><?php echo $title; ?></h1>
            <p class="lead fs-lg lh-sm mb-7 pe-xl-10 text-<?php echo $textcolor; ?>"><?php echo $paragraph; ?></p>

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
                        <?php $data_modal_id = 'data-bs-target="#test386'; ?>
                        <span><a href="#" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill me-2" <?php echo $data_modal; ?> <?php echo $data_modal_id; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
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
                <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
                <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Us</a></span> <?php endif; ?>
              <!--  buttons end -->
            </div>
            <!--  buttons group -->

          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!--/.card-body -->
    </div>
    <!--/.card -->
    <!--  generate forms start -->
    <?php foreach ($forms as $item) {
      echo $item;
    } ?>
    <!--  generate forms end -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->