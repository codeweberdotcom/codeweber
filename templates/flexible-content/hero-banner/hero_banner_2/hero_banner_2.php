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

        <!-- swiper gallery -->
        <?php swiper_gallery(
          $image_size = 'sandbox_hero_2',
          $class_swiper = 'swiper-container dots-over shadow-lg',
          $data_nav = "true",
          $data_dots = "true",
          $data_margin = "5",
          $data_autoplay = "false",
          $data_autoplaytime = "3000",
          $data_items_lg = "1",
          $data_items_md = "1",
          $data_items_xs = "1",
          $default_img = '<figure class="rounded"><img src="' . get_template_directory_uri() . '/dist/img/photos/about7.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about7@2x.jpg 2x" alt="" /></figure>'
        );
        ?>
        <!--/swiper gallery -->

      </div>
      <!--/column -->
      <div class="col-lg-5 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-1 mb-5 text-<?php echo $textcolor; ?>"><?php echo $title; ?></h1>
        <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0 text-<?php echo $textcolor; ?>"><?php echo $paragraph; ?></p>

        <!-- buttons group -->
        <?php buttons(
          $form_button = 'rounded-pill',
          $button_size = 'btn-lg',
          $class_button_wraper = 'd-flex justify-content-center justify-content-lg-start',
          $gradient = NULL,
          $data_cues = 'slideInDown',
          $data_group = 'page-title-buttons',
          $data_delay = '900',
          $default_button = '<span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
          <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Free Trial</a></span>'
        ); ?>
        <!--/buttons group -->


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