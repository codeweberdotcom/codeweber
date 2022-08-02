<?php
$root_theme = get_template_directory_uri();
$title = 'Networking <span class="text-gradient gradient-1">solutions</span> for worldwide communication';
$paragraph = 'We\'re a company that focuses on establishing long-term relationships with customers.';
$imageurl = $root_theme . '/dist/img/illustrations/3d6.png';
$videourl = $root_theme . '/dist/media/movie.mp4';
$backgroundurl = $root_theme . '/dist/img/photos/bg22.png';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$glightbox = '';
$button_link = "#";
$backgroundcolor = 'dark';
$textcolor = 'white';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$forms = array();

$image_block = '<img class="img-fluid mb-n18" src="/img/illustrations/3d6.png" srcset="./assets/img/illustrations/3d6@2x.png 2x" data-cue="fadeIn" data-delay="300" alt="" />';

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


// --- Background ---
if (get_sub_field('background')) {
  $backgroundurl = get_sub_field('background')['url'];
}





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

<?php
// $swiper_slider = new Buttons();
// $swiper_slider->accountNumber = 1;
// $swiper_slider->form_button = 'rounded';
// $swiper_slider->data_cues = 'slideInDown';
// $swiper_slider->data_group = 'page-title-buttons';
// $swiper_slider->data_delay = '900';
// $swiper_slider->button_size = 'btn-lg';
// $swiper_slider->class_button_wraper = 'd-flex justify-content-start';
// $swiper_slider->gradient = 'btn-gradient gradient-1';
// $swiper_slider->default_button = '<a href="#" class="btn btn-lg btn-gradient gradient-1 rounded">Explore Now</a>';
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?> wrapper bg-<?php echo $backgroundcolor; ?>">
  <div class="container-card">
    <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-light-500 mt-2 mb-5" data-image-src="<?php echo $backgroundurl; ?>">
      <div class="card-body py-14 px-0">
        <div class="container">
          <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center text-center text-lg-start">
            <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="900">
              <h1 class="display-2 mb-4 me-xl-5 me-xxl-0 text-<?php echo $textcolor; ?>"><?php echo $title; ?></h1>
              <p class="lead fs-23 lh-sm mb-7 pe-xxl-15 text-<?php echo $textcolor; ?>"><?php echo $paragraph; ?></p>

              <!--  buttons group -->
              <?php buttons(
                $form_button = 'rounded',
                $button_size = 'btn-lg',
                $class_button_wraper = 'd-flex justify-content-start',
                $gradient = '1',
                $data_cues = 'slideInDown',
                $data_group = 'page-title-buttons',
                $data_delay = '900',
                $default_button = '<a href="#" class="btn btn-lg btn-gradient gradient-1 rounded">Explore Now</a>'
              ) ?>
              <!--/buttons group -->

            </div>
            <!--/column -->
            <div class="col-lg-6">
              <!-- swiper gallery -->
              <?php swiper_gallery(
                $image_size = 'sandbox_hero_18',
                $class_swiper = 'swiper-container dots-over shadow-lg mb-n18',
                $data_nav = "false",
                $data_dots = "true",
                $data_margin = "5",
                $data_autoplay = "false",
                $data_autoplaytime = "3000",
                $data_items_lg = "1",
                $data_items_md = "1",
                $data_items_xs = "1",
                $default_img = '<img class="img-fluid mb-n18" src="' . get_template_directory_uri() . '/dist/img/illustrations/3d6.png" srcset="' . get_template_directory_uri() . '/dist/img/illustrations/3d6.png" data-cue="fadeIn" data-delay="300" alt="" />',
              );
              ?>
              <!--/swiper gallery -->
            </div>
            <!--/column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!--/.card-body -->
    </div>
    <!--/.card -->
  </div>
  <!-- /.container-card -->
</section>
<!-- /section -->