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
            <a href="<?php echo $link_url; ?>" class="more hover"><?php echo $text_link; ?></a>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="position-relative">
         <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2.5rem; right: -2.7rem;"></div>

         <?php if (have_rows('gallery')) : ?>
            <div class="swiper-container dots-over shadow-lg rounded mb-md-n20" data-margin="5" data-nav="true" data-dots="true">
               <div class="swiper">
                  <div class="swiper-wrapper">

                     <!-- swiper-items -->

                     <?php while (have_rows('gallery')) : the_row();
                        $video_or_photo = get_sub_field('photo_or_video');
                        if ($video_or_photo === 'Photo') :
                           $image = get_sub_field('photo');
                           $size = 'sandbox_hero_14';
                           if ($image) :
                              $imageurl = esc_url($image['sizes'][$size]);
                              $imagealt = esc_attr($image['alt']); ?>
                              <div class="swiper-slide"><img src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" class="rounded" alt="<?php echo $imagealt; ?>" /></div>
                           <?php endif;
                        elseif ($video_or_photo === 'Video') :
                           $videourl =  get_sub_field('video');
                           $poster_for_video = get_sub_field('poster_for_video');
                           if ($poster_for_video) :
                              $size = 'sandbox_hero_14';
                              $video_poster_url = esc_url($poster_for_video['sizes'][$size]);
                              $video_poster_alt = esc_attr($poster_for_video['alt']);
                           endif; ?>
                           <div class="swiper-slide"><a href="<?php echo $videourl; ?>" class="btn btn-circle btn-light btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox data-gallery="hero"><i class="icn-caret-right text-dark"></i></a><img src="<?php echo $video_poster_url; ?>" srcset="<?php echo $video_poster_url; ?>" class="rounded" alt="<?php echo $video_poster_alt; ?>" /></div>
                     <?php endif;
                     endwhile;
                  else : ?>
                     <figure class="rounded mb-md-n20"><img src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" alt="" /></figure>

                     <!--/.swiper-items -->

                  </div>
                  <!--/.swiper-wrapper -->
               </div>
               <!--/.swiper -->
            </div>
            <!-- /.swiper-container -->
         <?php endif; ?>
      </div>
   </div>
   <!-- /.container -->

   <!--  generate forms start -->
   <?php foreach ($forms as $item) {
      echo $item;
   } ?>
   <!--  generate forms end -->


</section>
<!-- /section -->