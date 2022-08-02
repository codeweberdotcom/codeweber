<?php
$root_theme = get_template_directory_uri();
$title = 'Crafting project specific solutions with expertise.';
$paragraph = 'We\'re a company that focuses on establishing long-term relationships with customers.';
$imageurl = $root_theme . '/dist/img/photos/co3.png';
$videourl = $root_theme . '/dist/media/movie.mp4';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$glightbox = '';
$button_link = "#";
$backgroundcolor = 'dark';
$textcolor = 'white';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$forms = array();

$label_class = '<i class="uil uil-users-alt"></i>';
$labelnumber = '25000+';
$labeltext = 'Happy Clients';

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


// --- Label on Photo U---

if (have_rows('label_on_banner_label_on_banner')) :
  while (have_rows('label_on_banner_label_on_banner')) : the_row();
    if (get_sub_field('icon_icon')) :
      $label_class = get_sub_field('icon_icon');
    endif;
    if (get_sub_field('number')) :
      $labelnumber = get_sub_field('number');
    endif;
    if (get_sub_field('text')) :
      $labeltext = get_sub_field('text');
    endif;
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

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?> wrapper bg-light">
  <div class="container">
    <div class="card  bg-<?php echo $backgroundcolor; ?> rounded-4 mt-2 mb-13 mb-md-17">
      <div class="card-body p-md-10 py-xl-11 px-xl-15">
        <div class="row gx-lg-8 gx-xl-0 gy-10 align-items-center">
          <div class="col-lg-6 order-lg-2 d-flex position-relative">
            <img class="img-fluid ms-auto mx-auto me-lg-8" src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" alt="<?php echo $imagealt; ?>" data-cue="fadeIn">
            <div data-cue="slideInRight" data-delay="300">
              <div class="card shadow-lg position-absolute" style="bottom: 10%; right: -3%;">
                <div class="card-body py-4 px-5">
                  <div class="d-flex flex-row align-items-center">
                    <div>
                      <div class="icon btn btn-circle btn-md btn-soft-primary disabled mx-auto me-3"> <?php echo $label_class; ?> </div>
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
            <!--/div -->
          </div>
          <!--/column -->
          <div class="col-lg-6 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
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
              <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
              <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Us</a></span>
            </div>'
            ); ?>
            <!--/buttons group -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!--/.card-body -->
    </div>
    <!--/.card -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->