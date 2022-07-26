<?php
$root_theme = get_template_directory_uri();
$title = 'Sandbox focuses on';
$paragraph = 'We carefully consider our solutions to support each and every stage of your growth.';
$imageurl = $root_theme . '/dist/img/photos/about7.jpg';
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


<section id="<?php echo $section_id; ?>" class="wrapper bg-<?php echo $backgroundcolor; ?> position-relative min-vh-70 d-lg-flex align-items-center">

  <?php $image = get_sub_field('image'); ?>
  <?php if ($image) : ?>
    <div class="rounded-4-lg-start col-lg-6 order-lg-2 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100 min-vh-50" data-image-src="<?php echo esc_url($image['url']); ?>"></div>
  <?php else : ?>
    <div class="rounded-4-lg-start col-lg-6 order-lg-2 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100 min-vh-50" data-image-src="<?php echo $imageurl; ?>"></div>
  <?php endif; ?>

  <!--/column -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="mt-10 mt-md-11 mt-lg-n10 px-10 px-md-11 ps-lg-0 pe-lg-13 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
          <h1 class="display-1 mb-5"><?php echo $title; ?></h1>
          <p class="lead fs-25 lh-sm mb-7 pe-md-10"><?php echo $paragraph; ?></p>

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
                        <span><a href="#" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill-pill me-2" <?php echo $data_modal; ?> <?php echo $data_modal_id; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
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
                      <span><a href="#" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill-pill me-2" <?php echo $data_modal; ?> <?php echo $data_modal_id; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
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
              <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
              <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Us</a></span>
            <?php endif; ?>
            <!--  buttons end -->
          </div>
          <!--  buttons group -->

        </div>
        <!--/div -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->

    <!--  generate forms start -->
    <?php foreach ($forms as $item) {
      echo $item;
    } ?>
    <!--  generate forms end -->


  </div>
  <!-- /.container -->
</section>
<!-- /section -->