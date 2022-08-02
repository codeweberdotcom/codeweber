<?php
$root_theme = get_template_directory_uri();
$title = 'We bring rapid solutions for your business.';
$paragraph = 'We are an award winning branding design agency that strongly believes in the power of creative ideas.';
$imageurl = $root_theme . '/dist/img/photos/about18.jpg';
$backgroundurl = $root_theme . '/dist/img/photos/bg4.jpg';
$videourl = $root_theme . '/dist/media/movie.mp4';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$glightbox = '';
$button_link = "#";
$backgroundcolor = 'dark';
$textcolor = 'light';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$forms = array();
$text_link = 'Learn More';
$link_url = '#';
$color_link = 'text-primary';
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
$image = get_sub_field('image');
if ($image) :
   $imageurl = esc_url($image['url']);
endif;

// --- Link text ---

if (have_rows('link_text')) :
   while (have_rows('link_text')) : the_row();
      if (get_sub_field('text_link')) :
         $text_link = get_sub_field('text_link');
      endif;
      $link = get_sub_field('link');
      if ($link) :
         $post = $link;
         setup_postdata($post);
         $link_url = get_permalink();
         wp_reset_postdata();
      endif;
      if (get_sub_field('color_link')) {
         $color_link = 'text-' . get_sub_field('color_link');
      }
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


<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?> wrapper bg-<?php echo $backgroundcolor; ?>">
   <div class="container pt-10 pt-md-14 pb-14 pb-md-0">
      <div class="row gx-md-8 gx-lg-12 gy-3 gy-lg-0 mb-13">
         <div class="col-lg-6">
            <h1 class="display-1 fs-66 lh-xxs mb-0 text-<?php echo $textcolor; ?>"><?php echo $title; ?></h1>
         </div>
         <!-- /column -->
         <div class="col-lg-6">
            <p class="lead fs-25 my-3 text-<?php echo $textcolor; ?>"><?php echo $paragraph; ?></p>
            <a href="<?php echo $link_url; ?>" class="more hover <?php echo $color_link; ?>"><?php echo $text_link; ?></a>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="position-relative">
         <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2.5rem; right: -2.7rem;"></div>

         <!-- swiper gallery -->
         <?php swiper_gallery(
            $image_size = 'sandbox_hero_14',
            $class_swiper = 'swiper-container dots-over rounded mb-md-n20',
            $data_nav = "true",
            $data_dots = "true",
            $data_margin = "5",
            $data_autoplay = "false",
            $data_autoplaytime = "3000",
            $data_items_lg = "1",
            $data_items_md = "1",
            $data_items_xs = "1",
            $default_img = '<figure class="rounded mb-md-n20"><img src="' . get_template_directory_uri() . '/dist/img/photos/about18.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about18@2x.jpg 2x" alt="" /></figure>'
         );
         ?>
         <!--/swiper gallery -->

      </div>
   </div>
   <!-- /.container -->
</section>
<!-- /section -->