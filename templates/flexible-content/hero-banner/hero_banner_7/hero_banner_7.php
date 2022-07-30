<?php
$root_theme = get_template_directory_uri();
$title = 'Creative. Smart. Awesome.';
$paragraph = 'We are an award winning web & mobile design agency that strongly believes in the power of creative ideas.';
$imageurl = $root_theme . '/dist/img/illustrations/i12.png';
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
   $backgroundcolor = 'gradient-primary';
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

   <div class="container py-14 pt-md-15 pb-md-18">
      <div class="row text-center">
         <div class="col-lg-9 col-xxl-7 mx-auto" data-cues="zoomIn" data-group="welcome" data-interval="-200">
            <h2 class="display-1 mb-4 text-<?php echo $textcolor; ?>"><?php echo $title; ?></h2>
            <p class="lead fs-24 lh-sm px-md-5 px-xl-15 px-xxl-10 mb-7 text-<?php echo $textcolor; ?>"><?php echo $paragraph; ?></p>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->

      <!--  buttons group -->
      <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="join" data-group="page-title-buttons" data-delay="900">
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
                           <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill mx-1"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                           <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                     <?php elseif ($select_type == 'Taxonomy') : ?>
                        <?php $taxonomy = get_sub_field('taxonomy'); ?>
                        <?php if ($taxonomy) : ?>
                           <?php $button_link = get_term_link($taxonomy->term_id); ?>
                           <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill mx-1"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                        <?php endif; ?>
                     <?php elseif ($select_type == 'URL') : ?>
                        <?php $url = get_sub_field('url'); ?>
                        <?php $button_link = $url; ?>
                        <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill mx-1"><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                     <?php elseif ($select_type == 'Video URL') : ?>
                        <?php $video_url = get_sub_field('video_url'); ?>
                        <?php if ($video_url) : ?>
                           <?php $glightbox = 'data-glightbox=""'; ?>
                        <?php endif; ?>
                        <?php $button_link = $video_url; ?>
                        <span><a href="<?php echo $button_link; ?>" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill mx-1" <?php echo $glightbox; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
                     <?php elseif ($select_type == 'Contact Form') : ?>
                        <?php $contact_form = get_sub_field('contact_form'); ?>
                        <?php if ($contact_form) : ?>
                           <?php $data_modal = 'data-bs-toggle="modal"'; ?>
                           <?php $data_modal_id = 'data-bs-target="#modal-form-' . $contact_form . '-' . $section_id . '-' . $i . '"'; ?>
                           <span><a href="#" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill mx-1" <?php echo $data_modal; ?> <?php echo $data_modal_id; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
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
                        <span><a href="#" class="btn btn-lg btn<?php echo $button_class; ?> btn-icon btn-icon-start rounded-pill mx-1" <?php echo $data_modal; ?> <?php echo $data_modal_id; ?>><?php echo $select_icon; ?><?php echo $text_on_button; ?></a></span>
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
            <span><a class="btn btn-lg btn-primary rounded-pill mx-1">See Projects</a></span>
            <span><a class="btn btn-lg btn-outline-primary rounded-pill mx-1">Contact Us</a></span>
         <?php endif; ?>
         <!--  buttons end -->
      </div>
      <!--  buttons group -->

      <!-- /div -->
      <div class="row mt-12" data-cue="fadeIn" data-delay="1600">
         <div class="col-lg-8 mx-auto">
            <figure><img class="img-fluid" src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" alt=""></figure>
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
   </div>
   <!-- /.container -->
</section>
<!-- /section -->