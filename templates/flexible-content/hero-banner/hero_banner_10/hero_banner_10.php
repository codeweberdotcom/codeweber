<?php
$root_theme = get_template_directory_uri();
$title = 'We bring solutions to make life <span class="underline-3 style-3 primary">easier.</span>';
$paragraph = 'We help our clients to increase their website traffic, rankings and visibility in search results.';
$imageurl = $root_theme . '/dist/img/photos/about15.jpg';
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


<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?> wrapper bg-<?php echo $textcolor; ?>">
   <section class="wrapper bg-<?php echo $backgroundcolor; ?>">
      <div class="container pt-11 pt-md-13 pb-11 pb-md-19 pb-lg-22 text-center">
         <div class="row">
            <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="slideInDown" data-group="page-title">
               <h1 class="display-1 fs-60 mb-4 px-md-15 px-lg-0 text-<?php echo $textcolor; ?>"><?php echo $title; ?></h1>
               <p class="lead fs-24 lh-sm mb-7 mx-md-13 mx-lg-10 text-<?php echo $textcolor; ?>"><?php echo $paragraph; ?></p>
               <div>
                  <!--  buttons group -->
                  <?php buttons(
                     $form_button = 'rounded',
                     $button_size = 'btn-lg',
                     $class_button_wraper = 'd-flex justify-content-center',
                     $gradient = NULL,
                     $data_cues = 'slideInDown',
                     $data_group = 'page-title-buttons',
                     $data_delay = '900',
                     $default_button = '<div><a class="btn btn-lg btn-primary rounded mb-5">Read More</a></div>'
                  ); ?>
                  <!--/buttons group -->
               </div>
            </div>
            <!-- /column -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
   </section>
   <!-- /section -->
   <section class="wrapper bg-<?php echo $textcolor; ?>">
      <div class="container pt-14 pt-md-16 pb-9 pb-md-11">

         <!-- swiper gallery -->
         <?php swiper_gallery(
            $image_size = 'sandbox_hero_10',
            $class_swiper = 'swiper-container dots-over shadow-lg rounded mt-md-n21 mt-lg-n23 mb-14',
            $data_nav = "true",
            $data_dots = "true",
            $data_margin = "5",
            $data_autoplay = "false",
            $data_autoplaytime = "3000",
            $data_items_lg = "1",
            $data_items_md = "1",
            $data_items_xs = "1",
            $default_img = '<figure class="rounded mt-md-n21 mt-lg-n23 mb-14" data-cue="slideInDown" data-delay="900"><img src="' . get_template_directory_uri() . '/dist/img/photos/about15.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about15@2x.jpg 2x" alt="" /></figure>
          '
         );
         ?>
         <!--/swiper gallery -->

      </div>
      <!-- /.container -->
   </section>
   <!-- /section -->