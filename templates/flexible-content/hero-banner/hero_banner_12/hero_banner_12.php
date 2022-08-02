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

$features_icon_1 = $root_theme . '/dist/img/icons/lineal/browser.svg';
$features_icon_2 = $root_theme . '/dist/img/icons/lineal/chat-2.svg';
$features_icon_3 = $root_theme . '/dist/img/icons/lineal/id-card.svg';
$features_icon_4 = $root_theme . '/dist/img/icons/lineal/gift.svg';
$features_title_1 = 'Content Marketing';
$features_title_2 = 'Social Engagement';
$features_title_3 = 'Identity & Branding';
$features_title_4 = 'Product Design';
$features_text_1 = 'Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.';
$features_text_2 = 'Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.';
$features_text_3 = 'Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.';
$features_text_4 = 'Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.';
$features_link_1 = '#';
$features_link_2 = '#';
$features_link_3 = '#';
$features_link_4 = '#';
$features_text_link_1 = 'Learn More';
$features_text_link_2 = 'Learn More';
$features_text_link_3 = 'Learn More';
$features_text_link_4 = 'Learn More';
$icon_color_1 = 'yellow';
$icon_color_2 = 'green';
$icon_color_3 = 'orange';
$icon_color_4 = 'blue';
$color_link_1 = 'yellow';
$color_link_2 = 'yellow';
$color_link_3 = 'yellow';
$color_link_4 = 'yellow';


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


// --- Features ---

if (have_rows('features_1_features')) : ?>
   <?php while (have_rows('features_1_features')) : the_row(); ?>
      <?php if (get_sub_field('icon_icon_lineal_svg')) { ?>
         <?php $features_icon_1 = get_stylesheet_directory_uri() . '/dist/img/icons/lineal/' . get_sub_field('icon_icon_lineal_svg') . '.svg'; ?>
      <?php } ?>
      <?php if (get_sub_field('color_icon')) { ?>
         <?php $icon_color_1 = the_sub_field('color_icon'); ?>
      <?php }; ?>
      <?php if (get_sub_field('title')) { ?>
         <?php $features_title_1 = get_sub_field('title'); ?>
      <?php } ?>
      <?php if (get_sub_field('text')) { ?>
         <?php $features_text_1 = get_sub_field('text'); ?>
      <?php } ?>
      <?php if (have_rows('link_text')) : ?>
         <?php while (have_rows('link_text')) : the_row(); ?>
            <?php if (get_sub_field('text_link')) { ?>
               <?php $features_text_link_1 = get_sub_field('text_link'); ?>
            <?php } ?>
            <?php if (get_sub_field('color_link')) { ?>
               <?php $color_link_1 = get_sub_field('color_link'); ?>
            <?php }; ?>
            <?php $link = get_sub_field('link'); ?>
            <?php if ($link) : ?>
               <?php $features_link_1 = esc_url($link); ?>
            <?php endif; ?>
         <?php endwhile; ?>
      <?php endif; ?>
   <?php endwhile; ?>
<?php endif; ?>
<?php if (have_rows('features_2_features')) : ?>
   <?php while (have_rows('features_2_features')) : the_row(); ?>
      <?php if (get_sub_field('icon_icon_lineal_svg')) { ?>
         <?php $features_icon_2 = get_stylesheet_directory_uri() . '/dist/img/icons/lineal/' . get_sub_field('icon_icon_lineal_svg') . '.svg'; ?>
      <?php } ?>
      <?php if (get_sub_field('color_icon')) { ?>
         <?php $icon_color_2 = the_sub_field('color_icon'); ?>
      <?php }; ?>
      <?php if (get_sub_field('title')) { ?>
         <?php $features_title_2 = get_sub_field('title'); ?>
      <?php } ?>
      <?php if (get_sub_field('text')) { ?>
         <?php $features_text_2 = get_sub_field('text'); ?>
      <?php } ?>
      <?php if (have_rows('link_text')) : ?>
         <?php while (have_rows('link_text')) : the_row(); ?>
            <?php if (get_sub_field('text_link')) { ?>
               <?php $features_text_link_2 = get_sub_field('text_link'); ?>
            <?php } ?>
            <?php if (get_sub_field('color_link')) { ?>
               <?php $color_link_2 = get_sub_field('color_link'); ?>
            <?php }; ?>
            <?php $link = get_sub_field('link'); ?>
            <?php if ($link) : ?>
               <?php $features_link_2 = esc_url($link); ?>
            <?php endif; ?>
         <?php endwhile; ?>
      <?php endif; ?>
   <?php endwhile; ?>
<?php endif; ?>
<?php if (have_rows('features_3_features')) : ?>
   <?php while (have_rows('features_3_features')) : the_row(); ?>
      <?php if (get_sub_field('icon_icon_lineal_svg')) { ?>
         <?php $features_icon_3 = get_stylesheet_directory_uri() . '/dist/img/icons/lineal/' . get_sub_field('icon_icon_lineal_svg') . '.svg'; ?>
      <?php } ?>
      <?php if (get_sub_field('color_icon')) { ?>
         <?php $icon_color_3 = the_sub_field('color_icon'); ?>
      <?php }; ?>
      <?php if (get_sub_field('title')) { ?>
         <?php $features_title_3 = get_sub_field('title'); ?>
      <?php } ?>
      <?php if (get_sub_field('text')) { ?>
         <?php $features_text_3 = get_sub_field('text'); ?>
      <?php } ?>
      <?php if (have_rows('link_text')) : ?>
         <?php while (have_rows('link_text')) : the_row(); ?>
            <?php if (get_sub_field('text_link')) { ?>
               <?php $features_text_link_3 = get_sub_field('text_link'); ?>
            <?php } ?>
            <?php if (get_sub_field('color_link')) { ?>
               <?php $color_link_3 = get_sub_field('color_link'); ?>
            <?php }; ?>
            <?php $link = get_sub_field('link'); ?>
            <?php if ($link) : ?>
               <?php $features_link_3 = esc_url($link); ?>
            <?php endif; ?>
         <?php endwhile; ?>
      <?php endif; ?>
   <?php endwhile; ?>
<?php endif; ?>
<?php if (have_rows('features_4_features')) : ?>
   <?php while (have_rows('features_4_features')) : the_row(); ?>
      <?php if (get_sub_field('icon_icon_lineal_svg')) { ?>
         <?php $features_icon_4 = get_stylesheet_directory_uri() . '/dist/img/icons/lineal/' . get_sub_field('icon_icon_lineal_svg') . '.svg'; ?>
      <?php } ?>
      <?php if (get_sub_field('color_icon')) { ?>
         <?php $icon_color_4 = the_sub_field('color_icon'); ?>
      <?php }; ?>
      <?php if (get_sub_field('title')) { ?>
         <?php $features_title_4 = get_sub_field('title'); ?>
      <?php } ?>
      <?php if (get_sub_field('text')) { ?>
         <?php $features_text_4 = get_sub_field('text'); ?>
      <?php } ?>
      <?php if (have_rows('link_text')) : ?>
         <?php while (have_rows('link_text')) : the_row(); ?>
            <?php if (get_sub_field('text_link')) { ?>
               <?php $features_text_link_4 = get_sub_field('text_link'); ?>
            <?php } ?>
            <?php if (get_sub_field('color_link')) { ?>
               <?php $color_link_4 = get_sub_field('color_link'); ?>
            <?php }; ?>
            <?php $link = get_sub_field('link'); ?>
            <?php if ($link) : ?>
               <?php $features_link_4 = esc_url($link); ?>
            <?php endif; ?>
         <?php endwhile; ?>
      <?php endif; ?>
   <?php endwhile; ?>
<?php endif;

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

   <div class="container pt-10 pb-15 pt-md-14 pb-md-20">
      <div class="row gx-lg-8 gx-xl-12 gy-10 mb-5 align-items-center">
         <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start order-2 order-lg-0" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0 text-<?php echo $textcolor; ?>"><?php echo $title; ?></h1>
            <p class="lead fs-lg mb-7  text-<?php echo $textcolor; ?>"><?php echo $paragraph; ?></p>

            <!--  buttons group -->
            <?php buttons(
               $form_button = 'rounded',
               $button_size = NULL,
               $class_button_wraper = 'd-flex justify-content-center justify-content-lg-start',
               $gradient = NULL,
               $data_cues = 'slideInDown',
               $data_group = 'page-title-buttons',
               $data_delay = '900',
               $default_button = '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
          <span><a class="btn btn-primary rounded me-2">See Projects</a></span>
          <span><a class="btn btn-yellow rounded">Learn More</a></span>
        </div>'
            ); ?>
            <!--/buttons group -->

         </div>
         <!-- /column -->
         <div class="col-lg-7" data-cue="slideInDown">

            <!-- swiper gallery -->
            <?php swiper_gallery(
               $image_size = 'brk_single',
               $class_swiper = 'swiper-container dots-over',
               $data_nav = "true",
               $data_dots = "true",
               $data_margin = "5",
               $data_autoplay = "false",
               $data_autoplaytime = "3000",
               $data_items_lg = "1",
               $data_items_md = "1",
               $data_items_xs = "1",
               $default_img = '<figure><img class="w-auto" src="' . get_template_directory_uri() . '/dist/img/illustrations/i6.png" srcset="' . get_template_directory_uri() . '/dist/img/illustrations/i6@2x.png 2x" alt="" /></figure>'
            );
            ?>
            <!--/swiper gallery -->

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
                  <img src="<?php echo $features_icon_1; ?>" class="svg-inject icon-svg icon-svg-md text-<?php echo $icon_color_1; ?> mb-3" alt="" />
                  <h4><?php echo $features_title_1; ?></h4>
                  <p class="mb-2"><?php echo $features_text_1; ?></p>
                  <a href="<?php echo $features_link_1; ?>" class="more hover link-<?php echo $color_link_1; ?>"><?php echo $features_text_link_1; ?></a>
               </div>
               <!--/.card-body -->
            </div>
            <!--/.card -->
         </div>
         <!--/column -->
         <div class="col-md-6 col-xl-3">
            <div class="card shadow-lg">
               <div class="card-body">
                  <img src="<?php echo $features_icon_2; ?>" class="svg-inject icon-svg icon-svg-md text-<?php echo $icon_color_2; ?> mb-3" alt="" />
                  <h4><?php echo $features_title_2; ?></h4>
                  <p class="mb-2"><?php echo $features_text_2; ?></p>
                  <a href="<?php echo $features_link_2; ?>" class="more hover link-<?php echo $color_link_2; ?>"><?php echo $features_text_link_2; ?></a>
               </div>
               <!--/.card-body -->
            </div>
            <!--/.card -->
         </div>
         <!--/column -->
         <div class="col-md-6 col-xl-3">
            <div class="card shadow-lg">
               <div class="card-body">
                  <img src="<?php echo $features_icon_3; ?>" class="svg-inject icon-svg icon-svg-md text-<?php echo $icon_color_3; ?> mb-3" alt="" />
                  <h4><?php echo $features_title_3; ?></h4>
                  <p class="mb-2"><?php echo $features_text_3; ?></p>
                  <a href="<?php echo $features_link_3; ?>" class="more hover link-<?php echo $color_link_3; ?>"><?php echo $features_text_link_3; ?></a>
               </div>
               <!--/.card-body -->
            </div>
            <!--/.card -->
         </div>
         <!--/column -->
         <div class="col-md-6 col-xl-3">
            <div class="card shadow-lg">
               <div class="card-body">
                  <img src="<?php echo $features_icon_4; ?>" class="svg-inject icon-svg icon-svg-md text-<?php echo $icon_color_4; ?> mb-3" alt="" />
                  <h4><?php echo $features_title_4; ?></h4>
                  <p class="mb-2"><?php echo $features_text_4; ?></p>
                  <a href="<?php echo $features_link_4; ?>" class="more hover link-<?php echo $color_link_4; ?>"><?php echo $features_text_link_4; ?></a>
               </div>
               <!--/.card-body -->
            </div>
            <!--/.card -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!--  generate forms start -->
   <?php foreach ($forms as $item) {
      echo $item;
   } ?>
   <!--  generate forms end -->
   <!-- /.container -->
</section>
<!-- /section -->