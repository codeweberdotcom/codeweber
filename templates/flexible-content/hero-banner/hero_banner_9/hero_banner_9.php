<?php
$root_theme = get_template_directory_uri();
$title = 'Sandbox is effortless and powerful with';
$paragraph = 'Achieve your saving goals. Have all your recurring and one time expenses and incomes in one place.';
$imageurl = $root_theme . '/dist/img/photos/sa16.jpg';
$videourl = $root_theme . '/dist/media/movie.mp4';
$typewriter = 'easy usage,fast transactions,secure payments';
$glightbox = '';
$button_link = "#";
$backgroundcolor = 'dark';
$textcolor = 'white';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$forms = array();

$label_class = '<i class="uil uil-users-alt"></i>';

$post_id = get_the_ID();
$section_id = $post_id . '_' . get_row_index();

/* Unicum field */
$imageurl_1 = $root_theme . '/dist/img/photos/sa20.jpg';
$imageurl_2 = $root_theme . '/dist/img/photos/sa18.jpg';
$imageurl_3 = $root_theme . '/dist/img/photos/sa21.jpg';
$imageurl_4 = $root_theme . '/dist/img/photos/sa19.jpg';
$imageurl_5 = $root_theme . '/dist/img/photos/sa17.jpg';

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


// --- Images ---
$image = get_sub_field('image_image');
if ($image) :
   $imageurl = esc_url($image['url']);
endif;

$image1 = get_sub_field('image_2_image');
if ($image1) :
   $imageurl_1 = esc_url($image['url']);
endif;

$image2 = get_sub_field('image_3_image');
if ($image2) :
   $imageurl_2 = esc_url($image['url']);
endif;

$image3 = get_sub_field('image_4_image');
if ($image3) :
   $imageurl_3 = esc_url($image['url']);
endif;

$image4 = get_sub_field('image_5_image');
if ($image4) :
   $imageurl_4 = esc_url($image['url']);
endif;

$image5 = get_sub_field('image_6_image');
if ($image5) :
   $imageurl_5 = esc_url($image['url']);
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
   <div class="container pt-10 pb-12 pt-md-14 pb-md-17">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 mt-lg-n2 text-center text-lg-start order-2 order-lg-0" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <h1 class="display-1 mb-5 mx-md-10 mx-lg-0 text-<?php echo $textcolor; ?>"><?php echo $title; ?> <br /><span class="typer text-primary text-nowrap" data-delay="100" data-words="<?php echo $typewriter; ?>"></span><span class="cursor text-primary" data-owner="typer"></span></h1>
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
                  <span><a class="btn btn-lg btn-primary rounded me-2">Get Started</a></span>
                  <span><a class="btn btn-lg btn-green rounded">Free Trial</a></span>
               <?php endif; ?>
               <!--  buttons end -->
            </div>
            <!--  buttons group -->


         </div>
         <!-- /column -->
         <div class="col-lg-7">
            <div class="row">
               <div class="col-3 offset-1 offset-lg-0 col-lg-4 d-flex flex-column" data-cues="zoomIn" data-group="col-start" data-delay="300">
                  <div class="ms-auto mt-auto"><img class="img-fluid rounded shadow-lg" src="<?php echo $imageurl_1; ?>" srcset="<?php echo $imageurl_1; ?>" alt="" /></div>
                  <div class="ms-auto mt-5 mb-10"><img class="img-fluid rounded shadow-lg" src="<?php echo $imageurl_2; ?>" srcset="<?php echo $imageurl_2; ?>" alt="" /></div>
               </div>
               <!-- /column -->
               <div class="col-4 col-lg-5" data-cue="zoomIn">
                  <div><img class="w-100 img-fluid rounded shadow-lg" src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" alt="" /></div>
               </div>
               <!-- /column -->
               <div class="col-3 d-flex flex-column" data-cues="zoomIn" data-group="col-end" data-delay="300">
                  <div class="mt-auto"><img class="img-fluid rounded shadow-lg" src="<?php echo $imageurl_3; ?>" srcset="<?php echo $imageurl_3; ?>" alt="" /></div>
                  <div class="mt-5"><img class="img-fluid rounded shadow-lg" src="<?php echo $imageurl_4; ?>" srcset="<?php echo $imageurl_4; ?>" alt="" /></div>
                  <div class="mt-5 mb-10"><img class="img-fluid rounded shadow-lg" src="<?php echo $imageurl_5; ?>" srcset="<?php echo $imageurl_5; ?>" alt="" /></div>
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
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