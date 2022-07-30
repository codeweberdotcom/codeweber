<?php
$root_theme = get_template_directory_uri();
$title = 'Staying on top of your bills never been this easy';
$paragraph = 'Easily achieve your saving goals. Have all your recurring and one time expenses and incomes in one place.';
$imageurl = $root_theme . '/dist/img/photos/sa1.jpg';

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

/* Unicum field */
$imageurl_1 = $root_theme . '/dist/img/photos/sa2.jpg';
$imageurl_2 = $root_theme . '/dist/img/photos/sa3.jpg';
$imageurl_3 = $root_theme . '/dist/img/photos/sa4.jpg';

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
$image = get_sub_field('image_2_image');
if ($image) :
   $imageurl_1 = esc_url($image['url']);
endif;
$image = get_sub_field('image_3_image');
if ($image) :
   $imageurl_2 = esc_url($image['url']);
endif;
$image = get_sub_field('image_4_image');
if ($image) :
   $imageurl_3 = esc_url($image['url']);
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
   <div class="container pt-10 pb-15 pt-md-14 pb-md-20 text-center">
      <div class="row">
         <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-6 mx-auto mb-13" data-cues="slideInDown" data-group="page-title">
            <h1 class="display-1 mb-4  text-<?php echo $textcolor; ?>"><?php echo $title; ?></h1>
            <p class="lead fs-lg px-xl-12 px-xxl-6 mb-7  text-<?php echo $textcolor; ?>"><?php echo $paragraph; ?></p>


            <!--  buttons group -->
            <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="600">
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
                                 <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded mx-1"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                                 <?php wp_reset_postdata(); ?>
                              <?php endif; ?>
                           <?php elseif ($select_type == 'Taxonomy') : ?>
                              <?php $taxonomy = get_sub_field('taxonomy'); ?>
                              <?php if ($taxonomy) : ?>
                                 <?php $button_link = get_term_link($taxonomy->term_id); ?>
                                 <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded mx-1"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                              <?php endif; ?>
                           <?php elseif ($select_type == 'URL') : ?>
                              <?php $url = get_sub_field('url'); ?>
                              <?php $button_link = $url; ?>
                              <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded mx-1"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                           <?php elseif ($select_type == 'Video URL') : ?>
                              <?php $video_url = get_sub_field('video_url'); ?>
                              <?php if ($video_url) : ?>
                                 <?php $glightbox = 'data-glightbox=""'; ?>
                              <?php endif; ?>
                              <?php $button_link = $video_url; ?>
                              <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded mx-1" <?php echo $glightbox; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                           <?php elseif ($select_type == 'Contact Form') : ?>
                              <?php $contact_form = get_sub_field('contact_form'); ?>
                              <?php if ($contact_form) : ?>
                                 <?php $data_modal = 'data-bs-toggle="modal"'; ?>
                                 <?php $data_modal_id = 'data-bs-target="#modal-form-' . $contact_form . '-' . $section_id . '-' . $i . '"'; ?>
                                 <span><a href="#" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded mx-1" <?php echo $data_modal; ?> <?php echo $data_modal_id; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
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
                              <span><a href="#" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded mx-1" <?php echo $data_modal; ?> <?php echo $data_modal_id; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
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
                  <span><a class="btn btn-primary rounded mx-1">Get Started</a></span>
                  <span><a class="btn btn-green rounded mx-1">Free Trial</a></span>
               <?php endif; ?>
               <!--  buttons end -->
            </div>
            <!--  buttons group -->

         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
   <div class="container pb-14 pb-md-16 mb-lg-22 mb-xl-24">
      <div class="row gx-0 mb-16 mb-mb-20">
         <div class="col-9 col-sm-10 col-lg-9 mx-auto mt-n15 mt-md-n20" data-cues data-group="images" data-delay="1500">
            <img class="img-fluid mx-auto rounded shadow-lg" data-cue="slideInUp" src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" alt="" />
            <img class="position-absolute rounded shadow-lg" data-cue="slideInRight" src="<?php echo $imageurl_1; ?>" srcset="<?php echo $imageurl_1; ?>" style="top: 20%; right:-10%; max-width:30%; height: auto;" alt="" />
            <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft" src="<?php echo $imageurl_2; ?>" srcset="<?php echo $imageurl_2; ?>" style="top: 10%; left:-10%; max-width:30%; height: auto;" alt="" />
            <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft" src="<?php echo $imageurl_3; ?>" srcset="<?php echo $imageurl_3; ?>" style=" bottom: 10%; left:-13%; max-width:30%; height: auto;" alt="" />
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