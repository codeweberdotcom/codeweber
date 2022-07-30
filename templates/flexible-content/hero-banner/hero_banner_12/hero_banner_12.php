<?php
$root_theme = get_template_directory_uri();
$title = 'Creative. Smart. Awesome.';
$paragraph = 'We specialize in web, mobile and identity design. We love to turn ideas into beautiful things.';
$imageurl = $root_theme . '/dist/img/illustrations/i6.png';
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

   <section class="wrapper bg-soft-primary">
      <div class="container pt-10 pb-15 pt-md-14 pb-md-20">
         <div class="row gx-lg-8 gx-xl-12 gy-10 mb-5 align-items-center">
            <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start order-2 order-lg-0" data-cues="slideInDown" data-group="page-title" data-delay="600">
               <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0 text-<?php echo $textcolor; ?>"><?php esc_html_e($title, 'codeweber'); ?></h1>
               <p class="lead fs-lg mb-7  text-<?php echo $textcolor; ?>"><?php esc_html_e($paragraph, 'codeweber'); ?></p>

               <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                  <span><a class="btn btn-primary rounded me-2">See Projects</a></span>
                  <span><a class="btn btn-yellow rounded">Learn More</a></span>
               </div>

            </div>
            <!-- /column -->
            <div class="col-lg-7" data-cue="slideInDown">
               <figure><img class="w-auto" src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" alt="" /></figure>
            </div>
            <!-- /column -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
   </section>
   <!-- /section -->
   <section class="wrapper bg-light">
      <div class="container pt-14 pt-md-16 pb-9 pb-md-11 pb-md-17">
         <div class="row gx-md-5 gy-5 mt-n18 mt-md-n21 mb-14 mb-md-17">
            <div class="col-md-6 col-xl-3">
               <div class="card shadow-lg">
                  <div class="card-body">
                     <img src="./assets/img/icons/lineal/browser.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                     <h4>Content Marketing</h4>
                     <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                     <a href="#" class="more hover link-yellow">Learn More</a>
                  </div>
                  <!--/.card-body -->
               </div>
               <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
               <div class="card shadow-lg">
                  <div class="card-body">
                     <img src="./assets/img/icons/lineal/chat-2.svg" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                     <h4>Social Engagement</h4>
                     <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                     <a href="#" class="more hover link-green">Learn More</a>
                  </div>
                  <!--/.card-body -->
               </div>
               <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
               <div class="card shadow-lg">
                  <div class="card-body">
                     <img src="./assets/img/icons/lineal/id-card.svg" class="svg-inject icon-svg icon-svg-md text-orange mb-3" alt="" />
                     <h4>Identity & Branding</h4>
                     <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                     <a href="#" class="more hover link-orange">Learn More</a>
                  </div>
                  <!--/.card-body -->
               </div>
               <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
               <div class="card shadow-lg">
                  <div class="card-body">
                     <img src="./assets/img/icons/lineal/gift.svg" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
                     <h4>Product Design</h4>
                     <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                     <a href="#" class="more hover link-blue">Learn More</a>
                  </div>
                  <!--/.card-body -->
               </div>
               <!--/.card -->
            </div>
            <!--/column -->
         </div>
         <!--/.row -->
      </div>
      <!-- /.container -->
   </section>
   <!-- /section -->