<?php
$root_theme = get_template_directory_uri();
$title = 'We bring rapid solutions for your business.';
$paragraph = 'Hello! This is Sandbox';
$imageurl = $root_theme . '/dist/img/photos/bg11.jpg';
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

<section class="wrapper bg-gray">
   <div class="container pt-12 pt-md-16 text-center">
      <div class="row">
         <div class="col-lg-8 col-xxl-7 mx-auto text-center" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <div class="fs-16 text-uppercase ls-xl text-dark mb-4"><?php echo $paragraph; ?></div>
            <h1 class="display-1 fs-58 mb-7"><?php echo $title; ?></h1>
            <!--  buttons group -->
            <?php buttons(
               $form_button = 'rounded-pill',
               $button_size = 'btn-lg',
               $class_button_wraper = 'd-flex justify-content-center',
               $gradient = NULL,
               $data_cues = 'slideInDown',
               $data_group = 'page-title-buttons',
               $data_delay = '900',
               $default_button = '<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
               <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
               <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Us</a></span>
            </div>'
            ) ?>
            <!--/buttons group -->
         </div>
         <!--/column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
   <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="<?php echo $imageurl; ?>" alt="" /></figure>
</section>
<!-- /section -->