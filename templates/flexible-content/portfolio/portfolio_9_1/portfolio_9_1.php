<?php

/**
 * Portfolio 9_1
 */

$type_view = get_sub_field('select_type');
if ($type_view == 'category') {
   $categories = get_sub_field('categories');
   $category_array = array();
   $term_ids = array();

   if ($categories) :
      $get_terms_args = array(
         'taxonomy' => 'projects_category',
         'hide_empty' => 0,
         'include' => $categories,
      );

   endif;
} else {
   $category_array = '';
   $terms = get_terms([
      'taxonomy' => 'projects_category',
      'hide_empty' => true,
   ]);
}

$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'My Selected Shots',
      'patternTitle' => '<h2 class="display-5 mb-3 %2$s">%1$s</h2>',
      'subtitle' => 'Photography is my passion and I love to turn ideas into beautiful things.',
      'patternSubtitle' => '<p class="lead fs-lg %2$s">%1$s</p>',
      'background_class_default' => 'wrapper bg-light',
      'divider' => true,
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16 text-center portfolio_tab">
      <div class="row">
         <div class="col-lg-10 col-xl-8 col-xxl-8 mx-auto mb-8">
            <?php echo $block->subtitle_first; ?>
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->

      <ul class="nav nav-tabs nav-tabs-basic justify-content-center">
         <?php
         $counter = 0;
         $term_array = array();
         if (is_array($category_array)) {
            foreach ($categories as $terms) {
               $terms = get_term($terms);
               $term_array[] = $terms->term_id;
               if ($counter == 0) {
                  $active_tab = ' active';
               } else {
                  $active_tab = NULL;
               }
               $counter++;
         ?>
               <li class="nav-item text-uppercase mb-0"><a class="fs-14 nav-link<?php echo $active_tab; ?>" data-bs-toggle="tab" href="#tab3-<?php echo $terms->term_id; ?>"><?php echo $terms->name; ?></a></li>
            <?php
            }
         } else {
            foreach ($terms as $term) {
               $terms = get_term($term);
               $term_array[] = $terms->term_id;

               if ($counter == 0) {
                  $active_tab = ' active';
               } else {
                  $active_tab = NULL;
               }
            ?>
               <li class="nav-item text-uppercase mb-0"><a class="fs-14 nav-link<?php echo $active_tab; ?>" data-bs-toggle="tab" href="#tab3-<?php echo $term->term_id; ?>"><?php echo $term->name; ?></a></li>
         <?php $counter++;
            }
         }
         ?>

      </ul>
      <!-- /.nav-tabs -->
      <div class="tab-content mt-0 mt-md-5">


         <?php $counter = 0;
         foreach ($term_array as $term_tab) {
            if ($counter == 0) {
               $active_tab = ' show active';
            } else {
               $active_tab = NULL;
            }
         ?>
            <div class="tab-pane fade <?php echo $active_tab; ?>" id="tab3-<?php echo $term_tab; ?>">
               <div class="container text-center ">
                  <div class="row row-cols-2 row-cols-md-4 gx-4 gy-4 py-6">
                     <?php
                     $query = new WP_Query([
                        'post_type' => 'projects',
                        'hide_empty' => true,
                        'posts_per_page' => 8,
                        'tax_query' => array(
                           array(
                              'taxonomy' => 'projects_category',
                              'field'    => 'id',
                              'terms'    => $term_tab
                           )
                        )
                     ]);

                     while ($query->have_posts()) {
                        $query->the_post();
                        $size_finish = 'archive_4';
                     ?>
                        <div class="project item col-md-6 col-xl-3">
                           <figure class="overlay overlay-1 <?php echo get_theme_mod('codeweber_image'); ?>"><a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'sandbox_hero_6'); ?>" data-glightbox data-gallery="shots-group"> <?php echo get_the_post_thumbnail($post->ID, $size_finish); ?></a>
                              <figcaption>
                                 <h3 class="h5 from-top mb-0"><?php echo esc_html($post->post_title); ?></h3>
                              </figcaption>
                           </figure>
                        </div>
                        <!-- /.project -->
                     <?php } ?>
                     <?php wp_reset_postdata(); ?>

                  </div>
               </div>
            </div>
         <?php $counter++;
         } ?>

      </div>

   </div>






   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->