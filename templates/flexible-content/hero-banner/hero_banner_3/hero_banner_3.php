<?php
$root_theme = get_template_directory_uri();
$title = 'Grow Your Business with Our Solutions.';
$paragraph = 'We help our clients to increase their website traffic, rankings and visibility in search results.';
$imageurl = $root_theme . '/dist/img/photos/about13.jpg';
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


<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?> wrapper bg-<?php echo $backgroundcolor; ?> angled lower-start">
  <div class="container pt-7 pt-md-11 pb-8">
    <div class="row gx-0 gy-10 align-items-center">
      <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-1 text-<?php echo $textcolor; ?> mb-4"><?php echo $title; ?><br />
          <span class="typer text-primary text-nowrap" data-delay="100" data-words="<?php echo $typewriter; ?>">
          </span><span class="cursor text-primary" data-owner="typer"></span>
        </h1>
        <p class="lead fs-24 lh-sm text-<?php echo $textcolor; ?> mb-7 pe-md-18 pe-lg-0 pe-xxl-15"><?php echo $paragraph; ?></p>
        <div>
          <!--  buttons group -->
          <?php buttons(
            $form_button = 'rounded',
            $button_size = 'btn-lg',
            $class_button_wraper = 'd-flex justify-content-center flex-wrap justify-content-lg-start',
            $gradient = NULL,
            $data_cues = 'slideInDown',
            $data_group = 'page-title-buttons',
            $data_delay = '900',
            $default_button = '<a class="btn btn-lg btn-primary rounded">Get Started</a>'
          ); ?>
          <!--/buttons group -->
        </div>
      </div>
      <!-- /column -->
      <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">
        <div class="position-relative">
          <!-- swiper gallery -->
          <?php swiper_gallery(
            $image_size = 'sandbox_hero_3',
            $class_swiper = 'swiper-container dots-over shadow-lg',
            $data_nav = "true",
            $data_dots = "true",
            $data_margin = "5",
            $data_autoplay = "false",
            $data_autoplaytime = "3000",
            $data_items_lg = "1",
            $data_items_md = "1",
            $data_items_xs = "1",
            $default_img = '<a href="' . get_template_directory_uri() . '/dist/media/movie.mp4" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-6 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox><i class="icn-caret-right"></i></a>
          <figure class="rounded shadow-lg"><img src="' . get_template_directory_uri() . '/dist/img/photos/about13.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about13@2x.jpg 2x" alt=""></figure>'
          );
          ?>
          <!--/swiper gallery -->
        </div>
        <!-- /div -->
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