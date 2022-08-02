<?php
$root_theme = get_template_directory_uri();
$title = 'Staying on top of your bills never been this easy';
$paragraph = 'Easily achieve your saving goals. Have all your recurring and one time expenses and incomes in one place.';
$imageurl = $root_theme . '/dist/img/photos/sa1.jpg';

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

/* Unicum field */
$imageurl_1 = $root_theme . '/dist/img/photos/sa2.jpg';
$imageurl_2 = $root_theme . '/dist/img/photos/sa3.jpg';
$imageurl_3 = $root_theme . '/dist/img/photos/sa4.jpg';

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
$image = get_sub_field('image_2_image');
if ($image) :
   $imageurl_1 = esc_url($image['url']);
endif;
$image = get_sub_field('image_3_image');
if ($image) :
   $imageurl_2 = esc_url($image['url']);
endif;
$image = get_sub_field('image_4_image');
if ($image) :
   $imageurl_3 = esc_url($image['url']);
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
   <div class="container pt-10 pb-15 pt-md-14 pb-md-20 text-center">
      <div class="row">
         <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-6 mx-auto mb-13" data-cues="slideInDown" data-group="page-title">
            <h1 class="display-1 mb-4  text-<?php echo $textcolor; ?>"><?php echo $title; ?></h1>
            <p class="lead fs-lg px-xl-12 px-xxl-6 mb-7  text-<?php echo $textcolor; ?>"><?php echo $paragraph; ?></p>
            <!--  buttons group -->
            <?php buttons(
               $form_button = 'rounded mx-1',
               $button_size = NULL,
               $class_button_wraper = 'd-flex justify-content-center',
               $gradient = NULL,
               $data_cues = 'slideInDown',
               $data_group = 'page-title-buttons',
               $data_delay = '600',
               $default_button = '<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="600">
          <span><a class="btn btn-primary rounded mx-1">Get Started</a></span>
          <span><a class="btn btn-green rounded mx-1">Free Trial</a></span>
        </div>'
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
<section class="wrapper bg-light">
   <div class="container pb-14 pb-md-16 mb-lg-22 mb-xl-24">
      <div class="row gx-0 mb-16 mb-mb-20">
         <div class="col-9 col-sm-10 col-lg-9 mx-auto mt-n15 mt-md-n20" data-cues data-group="images" data-delay="1500">
            <img class="img-fluid mx-auto rounded shadow-lg" data-cue="slideInUp" src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" alt="" />
            <img class="position-absolute rounded shadow-lg" data-cue="slideInRight" src="<?php echo $imageurl_1; ?>" srcset="<?php echo $imageurl_1; ?>" style="top: 20%; right:-10%; max-width:30%; height: auto;" alt="" />
            <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft" src="<?php echo $imageurl_2; ?>" srcset="<?php echo $imageurl_2; ?>" style="top: 10%; left:-10%; max-width:30%; height: auto;" alt="" />
            <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft" src="<?php echo $imageurl_3; ?>" srcset="<?php echo $imageurl_3; ?>" style=" bottom: 10%; left:-13%; max-width:30%; height: auto;" alt="" />
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->