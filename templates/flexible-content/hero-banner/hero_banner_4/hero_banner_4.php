<?php
$root_theme = get_template_directory_uri();
$title = 'Grow Your Business with Our Solutions.';
$paragraph = 'We help our clients to increase their website traffic, rankings and visibility in search results.';
$imageurl = $root_theme . '/dist/img/photos/about16.jpg';
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


<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?> wrapper bg-<?php echo $backgroundcolor; ?> position-relative min-vh-70 d-lg-flex align-items-center">
  <?php $image = get_sub_field('image'); ?>
  <?php if ($image) : ?>
    <div class="rounded-4-lg-start col-lg-6 order-lg-2 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100 min-vh-50" data-cues="slideInDown" data-image-src="<?php echo esc_url($image['url']); ?>"></div>
  <?php else : ?>
    <div class="rounded-4-lg-start col-lg-6 order-lg-2 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100 min-vh-50" data-cues="slideInDown" data-image-src="<?php echo $imageurl; ?>"></div>
  <?php endif; ?>
  <!--/column -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="mt-10 mt-md-11 mt-lg-n10 px-10 px-md-11 ps-lg-0 pe-lg-13 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
          <h1 class="display-1 mb-5"><?php echo $title; ?></h1>
          <p class="lead fs-25 lh-sm mb-7 pe-md-10"><?php echo $paragraph; ?></p>
          <!--  buttons group -->
          <?php buttons(
            $form_button = 'rounded-pill',
            $button_size = 'btn-lg',
            $class_button_wraper = 'd-flex justify-content-center justify-content-lg-start',
            $gradient = NULL,
            $data_cues = 'slideInDown',
            $data_group = 'page-title-buttons',
            $data_delay = '900',
            $default_button = '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
            <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
            <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Us</a></span>
          </div>'
          ); ?>
          <!--/buttons group -->
        </div>
        <!--/div -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->