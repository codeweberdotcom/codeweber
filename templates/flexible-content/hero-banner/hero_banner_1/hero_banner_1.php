<?php
$root_theme = get_template_directory_uri();
$title = 'Grow Your Business with Our Solutions.';
$paragraph = 'We help our clients to increase their website traffic, rankings and visibility in search results.';
$imageurl = $root_theme . '/dist/img/illustrations/i2.png';
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
  <div class="container pt-10 pt-md-14 pb-8 text-center">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-7">

        <?php swiper_gallery(
          $image_size = 'sandbox_hero_18',
          $class_swiper = 'swiper-container dots-over shadow-lg',
          $data_nav = "true",
          $data_dots = "true",
          $data_margin = "5",
          $data_autoplay = "false",
          $data_autoplaytime = "3000",
          $data_items_lg = "1",
          $data_items_md = "1",
          $data_items_xs = "1",
          $default_img = ' <figure><img class="w-auto" src= "' . get_template_directory_uri() . '/dist/img/illustrations/i2.png" srcset= "' . get_template_directory_uri() . '/dist/img/illustrations/i2@2x.png 2x" alt="" /></figure>',
        );
        ?>

      </div>
      <!-- /column -->
      <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
        <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0 text-<?php echo $textcolor; ?>"><?php echo $title; ?></h1>
        <p class="lead fs-lg mb-7 text-<?php echo $textcolor; ?>"><?php echo $paragraph; ?></p>

        <!--  buttons group -->
        <?php buttons(
          $form_button = 'rounded-pill',
          $button_size = NULL,
          $class_button_wraper = 'd-flex justify-content-center flex-wrap justify-content-lg-start',
          $gradient = NULL,
          $data_cues = 'slideInDown',
          $data_group = 'page-title-buttons',
          $data_delay = '900',
          $default_button = '<span><a class="btn btn-primary rounded-pill me-2">Try It For Free</a></span>'
        ); ?>
        <!--/buttons group -->

      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->