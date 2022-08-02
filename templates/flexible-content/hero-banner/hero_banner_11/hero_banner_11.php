<?php
$root_theme = get_template_directory_uri();
$title = 'Crafting project specific solutions with expertise.';
$paragraph = 'We\’re a creative company that focuses on establishing long-term relationships with customers.';
$imageurl = $root_theme . '/dist/img/photos/about21.jpg';
$backgroundurl = $root_theme . '/dist/img/photos/bg4.jpg';
$videourl = $root_theme . '/dist/media/movie.mp4';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$glightbox = '';
$button_link = "#";
$backgroundcolor = 'dark';
$textcolor = 'light';
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

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?> image-wrapper bg-image bg-overlay bg-overlay-400 bg-content text-<?php echo $textcolor; ?>" data-image-src="<?php echo $backgroundurl; ?>">
  <div class="container pt-18 pb-16" style="z-index: 5; position:relative">
    <div class="row gx-0 gy-12 align-items-center">
      <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 content text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-2 mb-5 text-<?php echo $textcolor; ?>"><?php echo $title; ?></h1>
        <p class="lead fs-lg lh-sm mb-7 pe-xl-10 text-<?php echo $textcolor; ?>"><?php echo $paragraph; ?></p>

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
          <span><a href="#" class="btn btn-lg btn-white rounded-pill me-2">Explore Now</a></span>
          <span><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></span>
        </div>'
        ); ?>
        <!--/buttons group -->

      </div>
      <!--/column -->
      <div class="col-lg-5 offset-lg-1">

        <!-- swiper gallery -->
        <?php swiper_gallery(
          $image_size = 'sandbox_hero_11',
          $class_swiper = 'swiper-container dots-over shadow-lg',
          $data_nav = "true",
          $data_dots = "true",
          $data_margin = "5",
          $data_autoplay = "false",
          $data_autoplaytime = "3000",
          $data_items_lg = "1",
          $data_items_md = "1",
          $data_items_xs = "1",
          $default_img = '<div class="swiper-container dots-over shadow-lg" data-margin="5" data-nav="true" data-dots="true">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="' . get_template_directory_uri() . '/dist/img/photos/about21.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about21@2x.jpg 2x" class="rounded" alt="" /></div>
              <div class="swiper-slide"><a href="' . get_template_directory_uri() . '/dist/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox data-gallery="hero"><i class="icn-caret-right"></i></a><img src="' . get_template_directory_uri() . '/dist/img/photos/about22.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about22@2x.jpg 2x" class="rounded" alt="" /></div>
              <div class="swiper-slide"><img src="' . get_template_directory_uri() . '/dist/img/photos/about23.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about23@2x.jpg 2x" class="rounded" alt="" /></div>
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!--/.swiper -->
        </div>
        <!-- /.swiper-container -->'
        );
        ?>
        <!--/swiper gallery -->

      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->