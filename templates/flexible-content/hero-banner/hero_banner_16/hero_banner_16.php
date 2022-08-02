<?php
$root_theme = get_template_directory_uri();
$title = 'I\'m User Interface Designer & Developer.';
$paragraph = 'Hello! I\'m Julia, a freelance user interface designer & developer based in London. I’m very passionate about the work that I do.';
$imageurl = $root_theme . '/dist/img/photos/about17.jpg';
$videourl = $root_theme . '/dist/media/movie.mp4';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$glightbox = '';
$button_link = "#";
$backgroundcolor = 'dark';
$textcolor = 'white';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$forms = array();

$label_class = '<i class="uil uil-users-alt"></i>';
$label_url = $root_theme . '/dist/img/icons/lineal/check.svg';
$labelnumber = '250+';
$labeltext = 'Projects Done';
$icon_color = 'primary';

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
  $backgroundcolor = 'gray';
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


// --- Label Banner L ---

if (have_rows('label_on_banner_l')) :
  while (have_rows('label_on_banner_l')) : the_row();
    if (get_sub_field('icon_icon_lineal_svg')) {
      $label_url = get_stylesheet_directory_uri() . '/dist/img/icons/lineal/' . get_sub_field('icon_icon_lineal_svg') . '.svg';
    }
    $labelnum = get_sub_field('number');
    if ($labelnum) :
      $labelnumber = get_sub_field('number');
    endif;
    $labeltxt = get_sub_field('text');
    if ($labeltxt) :
      $labeltext = get_sub_field('text');
    endif;
    if (get_sub_field('color')) {
      $icon_color = get_sub_field('color');
    };
  endwhile;
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




<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?> wrapper bg-gray">

  <section class="wrapper bg-<?php echo $backgroundcolor; ?>">
    <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
      <div class="row gy-10 gy-md-13 gy-lg-0 align-items-center">
        <div class="col-md-8 col-lg-5 d-flex position-relative mx-auto" data-cues="slideInDown" data-group="header">
          <div class="img-mask mask-1"><img src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" alt="" /></div>
          <div class="card shadow-lg position-absolute" style="bottom: 10%; right: 2%;">
            <div class="card-body py-4 px-5">
              <div class="d-flex flex-row align-items-center">
                <div>
                  <img src="<?php echo $label_url; ?>" class="svg-inject icon-svg icon-svg-sm text-<?php echo $icon_color; ?> mx-auto me-3" alt="" />
                </div>
                <div>
                  <h3 class="counter mb-0 text-nowrap"><?php echo $labelnumber; ?></h3>
                  <p class="fs-14 lh-sm mb-0 text-nowrap"><?php echo $labeltext; ?></p>
                </div>
              </div>
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
        <!--/column -->
        <div class="col-lg-6 offset-lg-1 col-xxl-5 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
          <h1 class="display-1 mb-5 text-<?php echo $textcolor; ?>"><?php echo $title; ?></h1>
          <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0 text-<?php echo $textcolor; ?>"><?php echo $paragraph; ?></p>
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
          <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">See My Works</a></span>
          <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Me</a></span>
        </div>'
          ); ?>
          <!--/buttons group -->
        </div>
        <!--/column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->