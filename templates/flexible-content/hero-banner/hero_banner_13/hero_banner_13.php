<?php
$root_theme = get_template_directory_uri();
$title = 'We bring rapid solutions for your business';
$paragraph = 'Hello! This is Sandbox';
$imageurl = $root_theme . '/dist/img/photos/about5.jpg';
$videourl = $root_theme . '/dist/media/movie.mp4';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$glightbox = '';
$button_link = "#";
$backgroundcolor = 'dark';
$background_image = $root_theme . '/dist/img/photos/bg2.jpg';
$textcolor = 'light';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$forms = array();

$post_id = get_the_ID();
$section_id = $post_id . '_' . get_row_index();

$counter_1 = '3526';
$counter_2 = '2126';
$counter_3 = '1226';
$counter_4 = '1772';

$counter_text_1 = 'Completed Projects';
$counter_text_2 = 'Satisfied Customers';
$counter_text_3 = 'Expert Employees';
$counter_text_4 = 'Awards Won';


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
   $background_image = get_sub_field('background')['url'];
}

// --- Counters ---
if (have_rows('counter_1_counter')) :
   while (have_rows('counter_1_counter')) : the_row();

      if (get_sub_field('number')) {
         $counter_1 = get_sub_field('number');
      }
      if (get_sub_field('title')) {
         $counter_text_1 = get_sub_field('title');
      }
   endwhile;
endif;
if (have_rows('counter_2_counter')) :
   while (have_rows('counter_2_counter')) : the_row();
      if (get_sub_field('number')) {
         $counter_2 = get_sub_field('number');
      }
      if (get_sub_field('title')) {
         $counter_text_2 = get_sub_field('title');
      }
   endwhile;
endif;
if (have_rows('counter_3_counter')) :
   while (have_rows('counter_3_counter')) : the_row();
      if (get_sub_field('number')) {
         $counter_3 = get_sub_field('number');
      }
      if (get_sub_field('title')) {
         $counter_text_3 = get_sub_field('title');
      }
   endwhile;
endif;
if (have_rows('counter_4_counter')) :
   while (have_rows('counter_4_counter')) : the_row();
      if (get_sub_field('number')) {
         $counter_4 = get_sub_field('number');
      }
      if (get_sub_field('title')) {
         $counter_text_4 = get_sub_field('title');
      }
   endwhile;
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

// --- Video ---
if (get_sub_field('video_url')) {
   $videourl = get_sub_field('video_url');
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
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?> wrapper image-wrapper bg-image bg-overlay bg-overlay-300 text-<?php echo $textcolor; ?>" data-image-src="<?php echo $background_image; ?>">

   <div class="container pt-17 pb-19 pt-md-19 pb-md-20 text-center">
      <div class="row mb-11">
         <div class="col-md-9 col-lg-7 col-xxl-6 mx-auto" data-cues="zoomIn" data-group="page-title" data-interval="-200">
            <div class="h6 text-uppercase ls-xl mb-5 text-<?php echo $textcolor; ?>"><?php echo $paragraph; ?></div>
            <h1 class="display-1 mb-7 text-<?php echo $textcolor; ?>"><?php echo $title; ?></h1>
            <a href="<?php echo $videourl; ?>" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light angled upper-end lower-end">
   <div class="container pb-14 pb-md-16">
      <div class="row">
         <div class="col-12 mt-n20">

            <!-- swiper gallery -->
            <?php swiper_gallery(
               $image_size = 'sandbox_hero_10',
               $class_swiper = 'swiper-container dots-over shadow-lg rounded',
               $data_nav = "true",
               $data_dots = "true",
               $data_margin = "5",
               $data_autoplay = "false",
               $data_autoplaytime = "3000",
               $data_items_lg = "1",
               $data_items_md = "1",
               $data_items_xs = "1",
               $default_img = '<figure class="rounded"><img src="' . get_template_directory_uri() . '/dist/img/photos/about5.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about5@2x.jpg 2x" alt="" /></figure>'
            );
            ?>
            <!--/swiper gallery -->

            <div class="row" data-cue="slideInUp">
               <div class="col-xl-10 mx-auto">
                  <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-300 text-white mt-n5 mt-lg-0 mt-lg-n50p mb-lg-n50p border-radius-lg-top" data-image-src="<?php echo $background_image; ?>">
                     <div class="card-body p-9 p-xl-10">
                        <div class="row align-items-center counter-wrapper gy-4 text-center">
                           <div class="col-6 col-lg-3">
                              <h3 class="counter counter-lg text-<?php echo $textcolor; ?>"><?php echo $counter_1; ?></h3>
                              <p class="text-<?php echo $textcolor; ?>"><?php echo $counter_text_1; ?></p>
                           </div>
                           <!--/column -->
                           <div class="col-6 col-lg-3">
                              <h3 class="counter counter-lg text-<?php echo $textcolor; ?>"><?php echo $counter_2; ?></h3>
                              <p class="text-<?php echo $textcolor; ?>"><?php echo $counter_text_2; ?></p>
                           </div>
                           <!--/column -->
                           <div class="col-6 col-lg-3">
                              <h3 class="counter counter-lg text-<?php echo $textcolor; ?>"><?php echo $counter_3; ?></h3>
                              <p class="text-<?php echo $textcolor; ?>"><?php echo $counter_text_3; ?></p>
                           </div>
                           <!--/column -->
                           <div class="col-6 col-lg-3">
                              <h3 class="counter counter-lg text-<?php echo $textcolor; ?>"><?php echo $counter_4; ?></h3>
                              <p class="text-<?php echo $textcolor; ?>"><?php echo $counter_text_4; ?></p>
                           </div>
                           <!--/column -->
                        </div>
                        <!--/.row -->
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->