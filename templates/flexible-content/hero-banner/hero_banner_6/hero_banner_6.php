<?php
$root_theme = get_template_directory_uri();
$title = 'Get all of your steps, exercise, sleep and meds in one place.';
$paragraph = 'Sandbox is now available to download from both the App Store and Google Play Store.';
$imageurl = $root_theme . '/dist/img/photos/devices.png';
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
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?> wrapper bg-<?php echo $backgroundcolor; ?>">
   <div class="container pt-5 pb-15 py-lg-17 py-xl-19 pb-xl-20 position-relative">
      <img class="position-lg-absolute col-12 col-lg-10 col-xl-11 col-xxl-10 px-lg-5 px-xl-0 ms-n5 ms-sm-n8 ms-md-n10 ms-lg-0 mb-md-4 mb-lg-0" src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" data-cue="fadeIn" alt="" style="top: -1%; left: -21%;" />
      <div class="row gx-0 align-items-center">
         <div class="col-md-10 offset-md-1 col-lg-5 offset-lg-7 offset-xxl-6 ps-xxl-12 mt-md-n9 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <h1 class="display-2 mb-4 mx-sm-n2 mx-md-0 text-<?php echo $textcolor; ?>"><?php echo $title; ?></h1>
            <p class="lead fs-lg mb-7 px-md-10 px-lg-0 text-<?php echo $textcolor; ?>"><?php echo $paragraph; ?></p>

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
                  <span><a class="btn btn-primary btn-icon btn-icon-start rounded me-2"><i class="uil uil-apple"></i> App Store</a></span>
                  <span><a class="btn btn-green btn-icon btn-icon-start rounded"><i class="uil uil-google-play"></i> Google Play</a></span>
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