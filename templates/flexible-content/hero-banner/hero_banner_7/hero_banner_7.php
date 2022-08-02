<?php
$root_theme = get_template_directory_uri();
$title = 'Creative. Smart. Awesome.';
$paragraph = 'We are an award winning web & mobile design agency that strongly believes in the power of creative ideas.';
$imageurl = $root_theme . '/dist/img/illustrations/i12.png';
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

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?> wrapper bg-<?php echo $backgroundcolor; ?>">
   <div class="container py-14 pt-md-15 pb-md-18">
      <div class="row text-center">
         <div class="col-lg-9 col-xxl-7 mx-auto" data-cues="zoomIn" data-group="welcome" data-interval="-200">
            <h2 class="display-1 mb-4 text-<?php echo $textcolor; ?>"><?php echo $title; ?></h2>
            <p class="lead fs-24 lh-sm px-md-5 px-xl-15 px-xxl-10 mb-7 text-<?php echo $textcolor; ?>"><?php echo $paragraph; ?></p>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <!--  buttons group -->
      <?php buttons(
         $form_button = 'rounded-pill mx-1',
         $button_size = 'btn-lg',
         $class_button_wraper = 'd-flex justify-content-center',
         $gradient = NULL,
         $data_cues = 'slideInDown',
         $data_group = 'join',
         $data_delay = '900',
         $default_button = '<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="join" data-delay="900">
      <span><a class="btn btn-lg btn-primary rounded mx-1">See Projects</a></span>
      <span><a class="btn btn-lg btn-outline-primary rounded mx-1">Contact Us</a></span>
    </div>'
      ); ?>
      <!--/buttons group -->
      <!-- /div -->
      <div class="row mt-12" data-cue="fadeIn" data-delay="1600">
         <div class="col-lg-8 mx-auto">
            <figure><img class="img-fluid" src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" alt=""></figure>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   </div>
   <!-- /.container -->
</section>
<!-- /section -->